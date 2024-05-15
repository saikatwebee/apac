<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Director;
use App\Models\Overview;
use App\Models\Nachcancellation;
use App\Models\Privacypolicy;
use App\Models\Interestratepolicy;
use App\Models\Fairpracticecode;
use App\Models\Compl_subtile;
use App\Models\Compliance;
use App\Models\Grievance;
use App\Models\Integrated;
use App\Models\Newsletter;
use App\Models\Termscondition;
use DB;
use App\Models\Newsroom;
use Carbon\Carbon;

class FooterController extends Controller
{
    public function index(){
        $data['nachcancellation']=Nachcancellation::find(1);
        return view('admin.footer.nachcancellation',$data);
    }
    public function nachcancellation_update(Request $request){
        $nachcancellation= Nachcancellation::find(1);
        $nachcancellation->nac_desc = $request->nac_desc;
        $nachcancellation->save();
        return redirect()->route('footer/nachcancellation')->with(['message'=>'Updated Successfully']);
    }
    public function privacypolicy(){
        $data['privacypolicy']=Privacypolicy::find(1);
        return view('admin.footer.privacypolicy',$data);
    }
    public function privacypolicy_update(Request $request){
        $privacypolicy= Privacypolicy::find(1);
        $privacypolicy->descr = $request->descr;
        $privacypolicy->cl_use = $request->cl_use;
        $privacypolicy->ty_dt_cl = $request->ty_dt_cl;
        $privacypolicy->lrg_req = $request->lrg_req;
        $privacypolicy->save();
        return redirect()->route('footer/privacypolicy')->with(['message'=>'Updated Successfully']);
    }
    public function interestratepolicy(){
        $data['privacypolicy']=Interestratepolicy::find(1);
        return view('admin.footer.interestratepolicy',$data);
    }
    public function interestratepolicy_update(Request $request){
        $privacypolicy= Interestratepolicy::find(1);
        $privacypolicy->intr = $request->intr;
        $privacypolicy->rte_md = $request->rte_md;
        $privacypolicy->ap_grd_rk = $request->ap_grd_rk;
        $privacypolicy->com_frm = $request->com_frm;
        $privacypolicy->rev_mod = $request->rev_mod;
        $privacypolicy->sch_chr = $request->sch_chr;
        $privacypolicy->save();
        return redirect()->route('footer/interestratepolicy')->with(['message'=>'Updated Successfully']);
    }
    public function fairpracticecode(){
        $data['fairpracticecode']=Fairpracticecode::find(1);
        return view('admin.footer.fairpracticecode',$data);
    }
    
    public function fairpracticecode_update(Request $request){
        $fairpracticecode= Fairpracticecode::find(1);
        $fairpracticecode->fr_prt_cd = $request->fr_prt_cd;
        $fairpracticecode->ob_cd = $request->ob_cd;
        $fairpracticecode->ky_com = $request->ky_com;
        $fairpracticecode->ap_ln_pr = $request->ap_ln_pr;
        $fairpracticecode->ln_ap_cd = $request->ln_ap_cd;
        $fairpracticecode->db_ln_tc = $request->db_ln_tc;
        $fairpracticecode->ap_dl_ie = $request->ap_dl_ie;
        $fairpracticecode->genr = $request->genr;
        $fairpracticecode->rp_br_efrm = $request->rp_br_efrm;
        $fairpracticecode->rv_fr_cd = $request->rv_fr_cd;
        $fairpracticecode->frc_maj = $request->frc_maj;
        $fairpracticecode->outs = $request->outs;
        $fairpracticecode->gr_rd_mc = $request->gr_rd_mc;
        $fairpracticecode->save();
        return redirect()->route('footer/fairpracticecode')->with(['message'=>'Updated Successfully']);
    }

    public function compliance(){
        $data['compliance'] = Compliance::all();

        return view('admin.footer.compliance_list',$data);
    }
    public function compliance_create(){
        $data['agm'] = Compl_subtile::all();
        return view('admin.footer.compliance_create',$data);
    }
    public function compliance_store(Request $request){
        // $request->validate([
        //     "tle"=>"required",
        // ]);
        if($request->tle == "1"){
            $request->validate([
                "tle" => "required", 				   
                "com_fl_nm" => "required", 				   
                "cl_fl" => "required",
                "agm" => "required" 				   
            ]);
        }
        else if($request->tle == "3"){
        $request->validate([
            "tle" => "required", 				   
            "com_fl_nm" => "required", 				   
            "cl_fl" => "required",
            "policy" => "required" 				   
         ]);
        }
        else if($request->tle == "2"){
            $request->validate([
                "tle" => "required",
                "com_fl_nm" => "required",
                "cl_fl" => "required",
             ]);
        }
        else{
            $request->validate([
                "tle" => "required",
                "com_fl_nm" => "required",
             ]);
        }
             

        if($request->tle == "2"){
            $sub_title = 8;
        }
        else if($request->tle == "4"){
            $sub_title = 9;
        }
        else if($request->tle == "1"){
            $sub_title = $request->agm;
        }
        else if($request->tle == "3"){
          
            $sub_title = $request->policy;
        }

        // $file = $request->file('cl_fl');
        // $filename = date("YmdHi").$file->getClientOriginalName();
        // $des = "compliance";
        // $file->move($des,$filename);
        if($request->tle == "4"){
            $filename = "aa";
        }else{
            $file = $request->file('cl_fl');
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "compliance";
            $file->move($des,$filename);
        }

        $compliance = Compliance::insert([
            "tle"=>$request->tle,
            "sub_tle"=>$sub_title,
            "com_fl_nm"=>$request->com_fl_nm,
            "cl_fl"=>$filename
        ]);
        return redirect()->route('footer/compliance')->with(['message'=>'created Successfully']);

    }

    public function compliance_edit(Request $request,$id){
        $compliance = Compliance::find($id);
        $data['compliance'] =  $compliance;
        $data['compliance_sub'] = Compl_subtile::find($compliance->sub_tle);
        $data['agm'] = Compl_subtile::all();
        // dd($compliance);
        return view('admin.footer.compliance_edit',$data);
    }
    public function compliance_update(Request $request,$id){

        if($request->tle == "2"){
            $sub_title = 8;
        }
        else if($request->tle == "4"){
            $sub_title = 9;
        }
        else if($request->tle == "1"){
            $sub_title = $request->agm;
        }
        else if($request->tle == "3"){
            $sub_title = $request->policy;
        }

        $file = $request->file('cl_fl');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "compliance";
            $file->move($des,$filename);
        }else{
            $filename = $request->cl_fl_old;
        }

        $compliance = Compliance::find($id);
        $compliance->tle = $request->tle;
        $compliance->sub_tle =  $sub_title;
        $compliance->com_fl_nm = $request->com_fl_nm;
        $compliance->cl_fl = $filename;
        $compliance->save();
        return redirect()->route('footer/compliance')->with(['message'=>'updated Successfully']);
    }



    public function compliance_delete(Request $request){
        $compliance = Compliance::find($request->id)->delete();
        return 1;
    }





    public function testing(){

        $data['compliance'] = Compliance::all();
        $data['compliance_sub'] = Compl_subtile::all();
        return view('admin.footer.demo',$data);
    }
    
     public function terms_and_condition(){

        $data["footer_title"]="Manage Footer";
        $data["update_title"]="Terms and condition";
        $data["terms_conditon_info"]=Termscondition::where("id",2)->first();
        return view('admin.footer.termscondition_edit',$data);
    }

    public function terms_and_conditionupdate(Request $request){

        $terms_condition_edit=Termscondition::find(2);
          $terms_condition_edit->terms_condition=$request->terms_condition;
          $terms_condition_edit->limited_license=$request->limited_license;
          $terms_condition_edit->contents=$request->contents;
          $terms_condition_edit->use_service=$request->use_service;
          $terms_condition_edit->intellectual_property=$request->intellectual_property;
          $terms_condition_edit->confi_information=$request->confi_information;
          $terms_condition_edit->disclaimer_warranty=$request->disclaimer_warranty;
          $terms_condition_edit->indemnification=$request->indemnification;
          $terms_condition_edit->limit_liablity=$request->limit_liablity;
          $terms_condition_edit->software_license=$request->software_license;
          $terms_condition_edit->disclaimer_rbi=$request->disclaimer_rbi;

          $terms_condition_edit->save();
          return redirect()
          ->route('footer/terms_and_condition')
          ->with("success","Terms and Condition Updated Successfully!!");
    }

    public function grievance_redressal_policy(){
        $data["footer_title"]="Manage Footer";
        $data["update_title"]="Grievance Redressal Policy";
        $data["grievance_info"]=Grievance::where("id",1)->first();
        // dd($grievance_info);
        return view('admin.footer.grievances_edit',$data);

    }
    public function grievance_redressal_policyupdate(Request $request){
        $grievance_edit=Grievance::find(1);
        $grievance_edit->introduction=$request->introduction;
        $grievance_edit->apps_of_policy=$request->apps_of_policy;
        $grievance_edit->process_of_handle=$request->process_of_handle;
        $grievance_edit->branch_require=$request->branch_require;
        $grievance_edit->registration_of_complaint=$request->registration_of_complaint;
        $grievance_edit->interaction_with_customers=$request->interaction_with_customers;
        $grievance_edit->operating_staff=$request->operating_staff;
        $grievance_edit->esclation_of_complaint=$request->esclation_of_complaint;
        $grievance_edit->save();
        return redirect()
        ->route("footer/grievance_redressal_policy")
        ->with("success","Grievance Redressal Policy Updated Successfully!!");

    }
    public function integrated_ombusman_scheme(){
        $results=DB::table('integrateds')->get();
        $data["footer_title"]="Manage Footer";
        $data["list_title"]="Integrated Ombusman Scheme 2021";
        $data["integratedinfo"]= $results;
        return view("admin.footer.integrated_listing",$data);

    }
    public function integrated_ombusman_schemecreate(){
        $data["footer_title"]="Manage Footer";
        return view("admin.footer.integrated_create",$data);
    }

    public function integrated_ombusman_schemestore(Request $request) {
        if ($request->hasFile("integrated_pdf_file")) {
            $filename =
                time() .
                "_integrated_pdf_file." .
                $request
                    ->file("integrated_pdf_file")
                    ->getClientOriginalExtension();
            $request
                ->file("integrated_pdf_file")
                ->move(
                    base_path() . "/public/uploads/integrated/",
                    $filename
                );
        } else {
            $filename = "";
        }
        $request->validate([
            "integrated_year"=>"required",
            "integrated_pdf_name"=>"required",
            // "integrated_pdf_file"=>"mimes:pdf|max:10000",
        ]);
        $integrated=Integrated::insert([
            "integrated_year"=>$request->integrated_year,
            "integrated_pdf_name"=>$request->integrated_pdf_name,
            "integrated_pdf_file"=>$filename,
        ]);
        return redirect()
        ->route('footer/integrated_ombusman_scheme')
        ->with("success","Integrated created successfully!!");
    }
    public function integrated_ombusman_schemeedit($id){
        $data["footer_title"]="Manage Footer";
        $data["integratedinfo"]= Integrated::where("id",$id)->first();
        return view("admin.footer.integrated_edit",$data);
    }
    public function integrated_ombusman_schemeupdate(Request $request , $id){
        $integrated_update=Integrated::find($id);
        $integrated_update->integrated_year=$request->integrated_year;
        $integrated_update->integrated_pdf_name=$request->integrated_pdf_name;
        if ($request->hasFile("integrated_pdf_file"))
        {
            $imageName =
                time() .
                "_integrated_pdf_file." .
                $request
                    ->file("integrated_pdf_file")
                    ->getClientOriginalExtension();
            $request
                ->file("integrated_pdf_file")
                ->move(
                    base_path() . "/public/uploads/integrated/",
                    $imageName
                );
            $integrated_update->integrated_pdf_file = $imageName;
            if ($request->current_ic_img) {
                if(file_exists(base_path() .
                "/public/uploads/integrated/" .
                $request->current_ic_img))

                {
                    unlink(
                        base_path() .
                        "/public/uploads/integrated/" .
                        $request->current_ic_img
                    );
                }
            }
        }
        $integrated_update->save();
        return redirect()
        ->route("footer/integrated_ombusman_scheme")
        ->with("success","Integrated Updated Successfully!!");

    }
    public function integrated_ombusman_schemedestroy($id)
    {
        $integrated_delete=Integrated::where('id',$id)->delete();
        return redirect()->route('footer/integrated_ombusman_scheme');
    }


     public function newsletter()
    {
        $results=DB::table('newsletters')->get();
        $data["footer_title"]="Manage Footer";
        $data["list_title"]="Newsletter";
        $data["newsletterinfo"]= $results;
        return view("admin.footer.newsletter_listing",$data);
    }

    public function newslettercreate()
    {
        $data["footer_title"]="Manage Footer";
        $data["create_newsletter"]="Add Newsletter";
        return view("admin.footer.newsletter_create",$data);
    }
    public function newsletterstore(Request $request)
    {
        if ($request->hasFile("newsletter_pdf_file")) {
            $filename =
                time() .
                "_newsletter_pdf_file." .
                $request
                    ->file("newsletter_pdf_file")
                    ->getClientOriginalExtension();
            $request
                ->file("newsletter_pdf_file")
                ->move(
                    base_path() . "/public/uploads/newsletter/",
                    $filename
                );
        } else {
            $filename = "";
        }
        $request->validate([
            "newsletter_pdf_name"=>"required",
            // "integrated_pdf_file"=>"mimes:pdf|max:10000",
        ]);
        $newsletter=Newsletter::insert([
            "newsletter_pdf_name"=>$request->newsletter_pdf_name,
            "newsletter_pdf_file"=>$filename,
        ]);
        return redirect()
        ->route('footer/newsletter')
        ->with("success","Newsletter created successfully!!");
    }

    public function newsletteredit($id)
    {
        $data["footer_title"]="Manage Footer";
        $data["edit_newsletter"]="Edit Newsletter";
        $data["newsletterinfo"]=Newsletter::where("id",$id)->first();
        return view("admin.footer.newsletter_edit",$data);
    }

    public function newsletterupdate(Request $request,$id)
    {
        $newsletter_update=Newsletter::find($id);
        $newsletter_update->newsletter_pdf_name=$request->newsletter_pdf_name;
        if ($request->hasFile("newsletter_pdf_file"))
        {
            $imageName =
                time() .
                "_newsletter_pdf_file." .
                $request
                    ->file("newsletter_pdf_file")
                    ->getClientOriginalExtension();
            $request
                ->file("newsletter_pdf_file")
                ->move(
                    base_path() . "/public/uploads/newsletter/",
                    $imageName
                );
            $newsletter_update->newsletter_pdf_file = $imageName;
            if ($request->current_ic_img) {
                if(file_exists(base_path() .
                "/public/uploads/newsletter/" .
                $request->current_ic_img))

                {
                    unlink(
                        base_path() .
                        "/public/uploads/newsletter/" .
                        $request->current_ic_img
                    );
                }
            }

    }
    $newsletter_update->save();
        return redirect()
        ->route("footer/newsletter")
        ->with("success","Newsletter Updated Successfully!!");
    }

    public function newsletterdestroy($id)
    {
        $newsletter_delete=Newsletter::where('id',$id)->delete();
        return redirect()->route('footer/newsletter');
    }
    
    
    public function newsroom_list(){
        $data['newsroom'] = Newsroom::orderBy('newsroom_date_org', 'DESC')->get();
        return view('admin.footer.newsroom_list',$data);
    }
    public function newsroom_create(){

        return view('admin.footer.newsroom_create');
    }
    public function newsroom_store(Request $request){
        $newsroom_date_chg_frmt = \Carbon\Carbon::parse($request->newsroom_date)->format('F d, Y') ;

        $compliance = Newsroom::insert([
            "newsroom_date"=>$newsroom_date_chg_frmt,
            "newsroom_date_org"=>$request->newsroom_date,
            "newsroom_title"=>$request->newsroom_title,
            "newsroom_url"=>$request->newsroom_url,
        ]);
        return redirect()->route('newsroom_list')->with(['message'=>'Created Successfully']);

    }
    public function newsroom_delete(Request $request){
        $compliance = Newsroom::find($request->id)->delete();
        return 1;
    }
    public function newsroom_edit($id){
        $data['newsroom'] = Newsroom::find($id);
        return view('admin.footer.newsroom_edit',$data);
    }

    public function newsroom_update(Request $request,$id){

        $newsroom_final = $request->newsroom_date_chg;
        if($newsroom_final){
            $newsroom_final_chg = \Carbon\Carbon::parse($request->newsroom_date_chg)->format('F d, Y') ;
            $newsroom_date_org_final = $request->newsroom_date_chg;
        }else{
            $newsroom_final_chg = $request->newsroom_date_old;
            $newsroom_date_org_final = $request->newsroom_date_org_old;
        }

        $newsroom= Newsroom::find($id);
        $newsroom->newsroom_date = $newsroom_final_chg;
        $newsroom->newsroom_date_org = $newsroom_date_org_final;
        $newsroom->newsroom_title = $request->newsroom_title;
        $newsroom->newsroom_url = $request->newsroom_url;
        $newsroom->save();
        return redirect()->route('newsroom_list')->with(['message'=>'Updated Successfully']);
    }
    
}
