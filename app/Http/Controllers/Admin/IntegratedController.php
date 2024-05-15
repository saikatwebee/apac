// <?php

// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
// use App\Models\Integrated;
// use DB;

// use Illuminate\Http\Request;

// class IntegratedController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $results=DB::table('integrateds')->get();
//         $data["footer_title"]="Manage Footer";
//         $data["list_title"]="Integrated Ombusman Scheme 2021";
//         $data["integratedinfo"]= $results;
//         return view("admin.footer.integrated_listing",$data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $data["footer_title"]="Manage Footer";
//         // $data["create_integrated"]="Add Integrated Ombusman Scheme";
//         return view("admin.footer.integrated_create",$data);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         if ($request->hasFile("integrated_pdf_file")) {
//             $filename =
//                 time() .
//                 "_integrated_pdf_file." .
//                 $request
//                     ->file("integrated_pdf_file")
//                     ->getClientOriginalExtension();
//             $request
//                 ->file("integrated_pdf_file")
//                 ->move(
//                     base_path() . "/public/uploads/integrated/",
//                     $filename
//                 );
//         } else {
//             $filename = "";
//         }
//         $request->validate([
//             "integrated_year"=>"required",
//             "integrated_pdf_name"=>"required",
//             // "integrated_pdf_file"=>"mimes:pdf|max:10000",
//         ]);
//         $integrated=Integrated::insert([
//             "integrated_year"=>$request->integrated_year,
//             "integrated_pdf_name"=>$request->integrated_pdf_name,
//             "integrated_pdf_file"=>$filename,
//         ]);
//         return redirect()
//         ->route('footer/integrated_ombusman_scheme')
//         ->with("success","Integrated created successfully!!");
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
//         $data["integratedinfo"]= Integrated::where("id",$id)->first();
//         return view("admin.footer.integrated_edit",$data);
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
//         $integrated_update=Integrated::find($id);
//         $integrated_update->integrated_year=$request->integrated_year;
//         $integrated_update->integrated_pdf_name=$request->integrated_pdf_name;
//         if ($request->hasFile("integrated_pdf_file"))
//         {
//             $imageName =
//                 time() .
//                 "_integrated_pdf_file." .
//                 $request
//                     ->file("integrated_pdf_file")
//                     ->getClientOriginalExtension();
//             $request
//                 ->file("integrated_pdf_file")
//                 ->move(
//                     base_path() . "/public/uploads/integrated/",
//                     $imageName
//                 );
//             $integrated_update->integrated_pdf_file = $imageName;
//             if ($request->current_ic_img) {
//                 if(file_exists(base_path() .
//                 "/public/uploads/integrated/" .
//                 $request->current_ic_img))

//                 {
//                     unlink(
//                         base_path() .
//                         "/public/uploads/integrated/" .
//                         $request->current_ic_img
//                     );
//                 }
//             }
//         }
//         $integrated_update->save();
//         return redirect()
//         ->route("footer/integrated_ombusman_scheme")
//         ->with("success","Integrated Updated Successfully!!");

//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         $integrated_delete=Integrated::where('id',$id)->delete();
//         return redirect()->route('footer/integrated_ombusman_scheme');
//     }
// }
