<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Image;
use DB;

class PageManagementController extends Controller
{
    public function pagemanagement()
    {
        $pages = Page::orderBy('id', 'Desc')->get();
        return view('admin.pagemanagement.listing', compact('pages'));
    }

    public function addpages()
    {
        return view('admin.pagemanagement.create');
    }

    public function editpages($id)
    {
        $page = Page::where('id',$id)->first();
        return view('admin.pagemanagement.edit', compact('page'));
    }

    public function storepage(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'url' => 'required|alpha_dash|max:500|unique:pages,slug|unique:pages,url',
            'meta_title' => 'required|max:450',
            'meta_description' => 'required|max:1500',
            'meta_keywords' => 'required|max:1500',
            'blade' => 'required|max:250|unique:pages'
        ]);

        $page = Page::create([
            'title' => $request->title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'url' => $request->url,
            'meta_title' => $request->meta_title,
            'blade' => $request->blade
        ]);

        return redirect()->route('admin-pagemanagement')->with('success', 'Page has been added successfully');
    }

    public function updatepage(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'url' => 'required|alpha_dash|max:500|unique:pages,url,'.$id,
            'meta_title' => 'required|max:450',
            'meta_description' => 'required|max:1500',
            'meta_keywords' => 'required|max:1500',
            'blade' => 'required|max:500|unique:pages,blade,'.$id,

            // 'popular' => 'required'
        ]);

        $page = Page::where('id',$id)->first();
        $page->update([
            'title' => $request->title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'url' => $request->url,
            'meta_title' => $request->meta_title,
            'blade' => $request->blade
        ]);

        return redirect()->route('admin-pagemanagement')->with('success', 'Page has been edited successfully');
    }

    public function deletepage($id)
    {
        $page = Page::findOrfail($id);
        $page->delete();
        return redirect()->back()->with('success', 'Page has been deleted successfully');
    }
}
