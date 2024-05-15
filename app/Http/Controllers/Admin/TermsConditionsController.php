// <?php

// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
// use App\Models\Termscondition;
// use Illuminate\Http\Request;

// class TermsConditionsController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $data["footer_title"]="Manage Footer";
//         $data["update_title"]="Terms and condition";
//         $data["terms_conditon_info"]=Termscondition::where("id",2)->first();
//         return view('admin.footer.termscondition_edit',$data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
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
//     // public function edit()
//     // {
//     //     $data["terms_condtion_title"]="Manage Terms and Condition";
//     //     $data["update_title"]="Edit Terms and Condition";
//     //     $data["terms_conditon_info"]=Termscondition::where("id",1)->first();
//     //     return view('admin.termscondition.edit',$data);
//     // }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request)
//     {
//           $terms_condition_edit=Termscondition::find(2);
//           $terms_condition_edit->terms_condition=$request->terms_condition;
//           $terms_condition_edit->limited_license=$request->limited_license;
//           $terms_condition_edit->contents=$request->contents;
//           $terms_condition_edit->use_service=$request->use_service;
//           $terms_condition_edit->intellectual_property=$request->intellectual_property;
//           $terms_condition_edit->confi_information=$request->confi_information;
//           $terms_condition_edit->disclaimer_warranty=$request->disclaimer_warranty;
//           $terms_condition_edit->indemnification=$request->indemnification;
//           $terms_condition_edit->limit_liablity=$request->limit_liablity;
//           $terms_condition_edit->software_license=$request->software_license;
//           $terms_condition_edit->disclaimer_rbi=$request->disclaimer_rbi;

//           $terms_condition_edit->save();
//           return redirect()
//           ->route('footer/terms_and_condition')
//           ->with("success","Terms and Condition Updated Successfully!!");
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//       //
//     }
// }
