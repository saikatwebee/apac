<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// use App\Category;
use App\Models\News;
use App\Models\Post;
use Image;
use DB;

class NewsController extends Controller
{
    // News Posts

    public function news()
    {
        $posts = News::orderBy('id', 'DESC')->get();
        return view('admin.news.listing', compact('posts'));
    }

    public function addnews()
    {
        // $categories = Category::where('id', '!=', 0)->orderBy('name', 'ASC')->get();
        // return view('admin.news.create', compact('categories'));
        return view('admin.news.create');
    }

    public function addpost(Request $request)
    {
        $this->validate($request, [
            // 'category' => 'required',
            'title' => 'required|max:250',
            'image' => 'dimensions:min_width:400,min_height=400',
            'source' => 'required|max:255',
            // 'url' => 'required|alpha_dash|max:255|unique:news',
            'post' => 'required',
            'meta_title' => 'required|max:450',
            'meta_description' => 'required|max:1500',
            'meta_keywords' => 'required|max:1500',
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = 'post_' . time() . '.' .$extension;
            $path = public_path('uploads/posts/' . $fileNameToStore);
            if(!file_exists(public_path('uploads/posts/'))) {
                mkdir(public_path('uploads/posts/'), 0777);
            }
            // Image::make($request->file('image')->getRealPath())->resize(737, 471)->save($path);
            Image::make($request->file('image')->getRealPath())->save($path);
        }else {
            $fileNameToStore = NULL;
        }
        $tags = explode(",", $request->tags);

        $news = News::create([
            // 'category' => $request->category,
            'category' => 0,
            'title' => $request->title,
            'image' => $fileNameToStore,
            'image_alt' => $filename,
            'source' => $request->source,
            'url' => strtolower(str_replace(' ', '-', $request->title)),
            // 'post_date' => $request->post_date,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            // 'tags'=> serialize($tags),
        ]);

        if(!empty($request->input('post')))
        {
            $description = $request->input('post');
            $dom = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom->loadHtml(htmlspecialchars_decode(utf8_decode(htmlentities($description, ENT_COMPAT, 'utf-8', false))));
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){
                $data = $img->getAttribute('src');
                if(preg_match('/data:image/', $data)){
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);

                $image_name=  url('/')."/public/uploads/posts/".time().$k.'.png';
                $image_name1= time().$k.'.png';
                $path = public_path('uploads/posts/') . $image_name1;

                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
                }
            }

            $description = $dom->saveHTML( $dom->documentElement );
            $description = $dom->saveHTML();
        }
        else{
           $description=$request->input('post');
        }
        $contents = str_split($description, 25000);
        $i = 1;
        foreach($contents as $key => $item)
        {
            Post::create([
                'post' => $news->id,
                'content' => $item,
                'order' => $i
            ]);
            $i++;
        }

        return redirect()->route('admin-news')->with('success', 'Post has been added successfully');
    }

    public function editnews($id)
    {
        // $categories = Category::where('id', '!=', 0)->orderBy('name', 'ASC')->get();
        $news = News::findOrfail($id);
        $post = Post::where('post', $id)->orderBy('order', 'ASC')->get();

        $content = array();
        foreach($post as $item)
        {
            array_push($content, $item->content);
        }
        $content = join("", $content);

        // return view('admin.news.edit', compact('categories', 'news', 'content'));
        return view('admin.news.edit', compact('news', 'content'));
    }

    public function post(Request $request)
    {
        $arr = str_split($request->post, 200);
        print_r($arr);
        return;
    }

    public function editpost(Request $request, $id)
    {
        $this->validate($request, [
            // 'category' => 'required',
            'title' => 'required|max:250',
            'image' => 'dimensions:min_width:400,min_height=400',
            'source' => 'required|max:255',
            // 'url' => 'required|alpha_dash|max:500',
            'post' => 'required',
            'meta_title' => 'required|max:450',
            'meta_description' => 'required|max:1500',
            'meta_keywords' => 'required|max:1500',
        ]);

        $news = News::findOrfail($id);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = 'post_' . time() . '.' .$extension;
            $path = public_path('uploads/posts/' . $fileNameToStore);
            if(!file_exists(public_path('uploads/posts/'))) {
                mkdir(public_path('uploads/posts/'), 0777);
            }
            // Image::make($request->file('image')->getRealPath())->resize(737, 471)->save($path);
            Image::make($request->file('image')->getRealPath())->save($path);

            if(isset($news->image) && !empty($news->image) && file_exists(public_path('uploads/posts/' . $news->image)))
            {
                unlink(public_path('uploads/posts/' . $news->image));
            }
            $news->image = $fileNameToStore;
            $news->image_alt = $filename;
        }

        $news->title = $request->title;
        $news->category = $request->category;
        $news->category = 0;
        // $news->author_id = auth()->user()->id;
        $news->source = $request->source;
        $news->url = strtolower(str_replace(' ', '-', $request->title));
        // $news->post_date = $request->post_date;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;
        // $news->popular = $request->popular;

        // $tags = explode(',', $request->tags);
        // $news->tags = serialize($tags);

        $news->update();

        $post = Post::where('post', $id)->delete();

        if(!empty($request->input('post')))
        {
            $description = $request->input('post');

            $dom = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom->loadHtml(htmlspecialchars_decode(utf8_decode(htmlentities($description, ENT_COMPAT, 'utf-8', false))));
            $images1 = $dom->getElementsByTagName('img');

            foreach($images1 as $k => $img){
                $data = $img->getAttribute('src');
                // return dd($type);
                if(preg_match('/data:image/', $data)){
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);

                $image_name=  url('/')."/public/uploads/posts/".time().$k.'.png';
                $image_name1= time().$k.'.png';
                $path = public_path('uploads/posts/') . $image_name1;

                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
                }
            }
            $description = $dom->saveHTML( $dom->documentElement );
            $description = $dom->saveHTML();
        }
        else
        {
            $description = $request->input('post');
        }

        // $memory = array();
        // array_push($memory, memory_get_usage());

        $contents = str_split($description, 25000);
        $i = 1;
        foreach($contents as $key => $item)
        {
            Post::create([
                'post' => $news->id,
                'content' => $item,
                'order' => $i
            ]);
            // array_push($memory, memory_get_usage());
            $i++;
        }
        /* array_push($memory, memory_get_usage());
        echo array_sum($memory); */
        // echo memory_get_usage();
        return redirect()->back()->with('success', 'Post has been updated successfully');
    }

    public function newsupdate(){
        $allnews = DB::table('w76w4_content')->get();
        //  return dd($allnews);
        foreach($allnews as $all)
        {
            $news = News::create([
                'title' => $all->title,
                'meta_description' => $all->title,
                'meta_keywords' => $all->title,
                'url' => $all->alias,
                'meta_title' => $all->title,
                'post_date'=>$all->publish_up,
                'view' => $all->hits,
            ]);

            if(!empty($all->introtext))
            {
                $description=$all->introtext.$all->fulltext;
                $dom = new \DomDocument();
                libxml_use_internal_errors(true);
                $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $dom->loadHtml(htmlspecialchars_decode(utf8_decode(htmlentities($description, ENT_COMPAT, 'utf-8', false))));

                $images = $dom->getElementsByTagName('img');

                foreach($images as $k => $img)
                {
                    $data = $img->getAttribute('src');
                    // return dd($data);
                        $image = $data;

                        $info = pathinfo($image);

                        // get the filename without the extension
                        $image_name =  basename($image,'.'.$info['extension']);
                        $result= $info['filename'].'.'.$info['extension'];
                        // return dd($info['filename'].'.'.$info['extension']);
                        // get the extension without the image name
                        // $ext = end(explode('.', $image));
                        // return dd($image_name);
                    //     echo $image_name; // this will display 'imagefile'
                    //     echo $ext; // this will display '.jpg'

                    // $keyword  = "images/news/";
                    // $result = str_replace($keyword, "", $data);
                    // return dd($result);

                    if($result){

                        // list($type, $data) = explode(';', $data);
                        // list(, $data)      = explode(',', $data);

                        // $data = base64_decode($data);
                        $image_name=  $result;
                        // $image_name=  url('/')."/public/uploads/posts/".$result;
                        $news->image = $image_name;
                        $alt = $img->getAttribute('alt');
                        $news->image_alt = $alt;
                        $news->save();

                        // file_put_contents($path, $data);

                        // $img->removeAttribute('src');
                        // $img->setAttribute('src', $image_name);
                    }
                }

                $description = $dom->saveHTML( $dom->documentElement );
                $description = $dom->saveHTML();
            }
            else
            {
                $description=$all->introtext.$all->fulltext;
            }

            $contents = str_split($description, 25000);
            $i = 1;
            foreach($contents as $key => $item)
            {
                Post::create([
                    'post' => $news->id,
                    'content' => $item,
                    'order' => $i
                ]);

                $i++;
            }
        }

        // return dd($allnews);
    }

    public function deleteimage($id)
    {
         $news = News::findOrfail($id);
        if(isset($news->image) && !empty($news->image) && file_exists(public_path('uploads/posts/' . $news->image)))
        {
            unlink(public_path('uploads/posts/' . $news->image));
        }

        return redirect()->back()->with('success', 'Image has been deleted successfully');
    }

    public function deletepost($id)
    {
        $news = News::findOrfail($id);
        if(isset($news->image) && !empty($news->image) && file_exists(public_path('uploads/posts/' . $news->image)))
        {
            unlink(public_path('uploads/posts/' . $news->image));
        }
        $news->delete();
        $posts = Post::where('post', $id)->delete();

        return redirect()->back()->with('success', 'Post has been deleted successfully');
    }

    public function poststatus($type, $id)
    {
        $news = News::findOrfail($id);
        if($type == 'minus')
        {
            $news->status = 0;
        }
        if($type == 'plus')
        {
            $count = News::where('status', 1)->count();
            if($count >= 3)
            {
                return redirect()->back()->with('error', 'You cant display more than three posts on homepage');
            }
            else {
                $news->status = 1;
            }
        }
        $news->update();

        return redirect()->back()->with('success', 'Post has been updated successfully');
    }
}
