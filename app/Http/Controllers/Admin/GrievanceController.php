// <?php

// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
// use App\Models\Grievance;
// use Illuminate\Http\Request;

// class GrievanceController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $data["footer_title"]="Manage Footer";
//         $data["update_title"]="Grievance Redressal Policy";
//         $data["grievance_info"]=Grievance::where("id",1)->first();
//         // dd($grievance_info);
//         return view('admin.footer.grievances_edit',$data);
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
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request)
//     {
//         $grievance_edit=Grievance::find(1);
//         $grievance_edit->introduction=$request->introduction;
//         $grievance_edit->apps_of_policy=$request->apps_of_policy;
//         $grievance_edit->process_of_handle=$request->process_of_handle;
//         $grievance_edit->branch_require=$request->branch_require;
//         $grievance_edit->registration_of_complaint=$request->registration_of_complaint;
//         $grievance_edit->interaction_with_customers=$request->interaction_with_customers;
//         $grievance_edit->operating_staff=$request->operating_staff;
//         $grievance_edit->esclation_of_complaint=$request->esclation_of_complaint;
//         $grievance_edit->save();
//         return redirect()
//         ->route("footer/grievance_redressal_policy")
//         ->with("success","Grievance Redressal Policy Updated Successfully!!");
//         }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
