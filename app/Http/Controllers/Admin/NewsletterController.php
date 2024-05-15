// <?php

// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
// use App\Models\Newsletter;
// use Illuminate\Http\Request;
// use DB;

// class NewsletterController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $results=DB::table('newsletters')->get();
//         $data["footer_title"]="Manage Footer";
//         $data["list_title"]="Newsletter";
//         $data["newsletterinfo"]= $results;
//         return view("admin.footer.newsletter_listing",$data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $data["footer_title"]="Manage Footer";
//         $data["create_newsletter"]="Add Newsletter";
//         return view("admin.footer.newsletter_create",$data);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         if ($request->hasFile("newsletter_pdf_file")) {
//             $filename =
//                 time() .
//                 "_newsletter_pdf_file." .
//                 $request
//                     ->file("newsletter_pdf_file")
//                     ->getClientOriginalExtension();
//             $request
//                 ->file("newsletter_pdf_file")
//                 ->move(
//                     base_path() . "/public/uploads/newsletter/",
//                     $filename
//                 );
//         } else {
//             $filename = "";
//         }
//         $request->validate([
//             "newsletter_title"=>"required",
//             "newsletter_pdf_name"=>"required",
//             // "integrated_pdf_file"=>"mimes:pdf|max:10000",
//         ]);
//         $newsletter=Newsletter::insert([
//             "newsletter_title"=>$request->newsletter_title,
//             "newsletter_pdf_name"=>$request->newsletter_pdf_name,
//             "newsletter_pdf_file"=>$filename,
//         ]);
//         return redirect()
//         ->route('footer/newsletter')
//         ->with("success","Newsletter created successfully!!");
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $data["footer_title"]="Manage Footer";
//         $data["edit_newsletter"]="Edit Newsletter";
//         $data["newsletterinfo"]=Newsletter::where("id",$id)->first();
//         return view("admin.footer.newsletter_edit",$data);
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         $newsletter_update=Newsletter::find($id);
//         $newsletter_update->newsletter_title=$request->newsletter_title;
//         $newsletter_update->newsletter_pdf_name=$request->newsletter_pdf_name;
//         if ($request->hasFile("newsletter_pdf_file"))
//         {
//             $imageName =
//                 time() .
//                 "_newsletter_pdf_file." .
//                 $request
//                     ->file("newsletter_pdf_file")
//                     ->getClientOriginalExtension();
//             $request
//                 ->file("newsletter_pdf_file")
//                 ->move(
//                     base_path() . "/public/uploads/newsletter/",
//                     $imageName
//                 );
//             $newsletter_update->newsletter_pdf_file = $imageName;
//             if ($request->current_ic_img) {
//                 if(file_exists(base_path() .
//                 "/public/uploads/newsletter/" .
//                 $request->current_ic_img))

//                 {
//                     unlink(
//                         base_path() .
//                         "/public/uploads/newsletter/" .
//                         $request->current_ic_img
//                     );
//                 }
//             }

//     }
//     $newsletter_update->save();
//         return redirect()
//         ->route("footer/newsletter")
//         ->with("success","Newsletter Updated Successfully!!");
//     }
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         $newsletter_delete=Newsletter::where('id',$id)->delete();
//         return redirect()->route('footer/newsletter');
//     }
// }
