<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Loanform;
use Illuminate\Http\Request;
use App\Models\Emiupdate;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["home_page_title"]="Manage Home";
        $data["update_title"]="Home";
        $data["home_page_info"]=Home::where("id",1)->first();
        return view('admin.home.homepage_edit',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit()
    // {
    //     $data["home_page_title"]="Manage Home Page";
    //     $data["update_title"]="Edit Home Page";
    //     $data["home_page_info"]=Home::where("id",1)->first();
    //     return view('admin.homepage.edit',$data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            "app_img"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos1"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos2"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos3"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos4"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos5"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos6"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "benefit_logos7"=>"image|mimes:jpeg,png,jpg,gif,svg",

        ]);
        $home_page_edit=Home::find(1);
        $home_page_edit->glance_desc=$request->glance_desc;
        $home_page_edit->branches=$request->branches;
        $home_page_edit->states=$request->states;
        $home_page_edit->employees=$request->employees;
        $home_page_edit->customers=$request->customers;
        $home_page_edit->stable=$request->stable;
        $home_page_edit->aum=$request->aum;
        $home_page_edit->points1=$request->points1;
        $home_page_edit->points2=$request->points2;
        $home_page_edit->points3=$request->points3;
        $home_page_edit->points4=$request->points4;
        $home_page_edit->points5=$request->points5;
        $home_page_edit->points6=$request->points6;
        $home_page_edit->points7=$request->points7;

        // 1
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos1');
        if($file){
            $filename1 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename1);
        }else{
            $filename1 = $request->benefit_logos1_img_old;
        }
        // 2
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos2');
        if($file){
            $filename2 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename2);
        }else{
            $filename2 = $request->benefit_logos2_img_old;
        }
        // 3
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos3');
        if($file){
            $filename3 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename3);
        }else{
            $filename3 = $request->benefit_logos3_img_old;
        }
        // 4
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos4');
        if($file){
            $filename4 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename4);
        }else{
            $filename4 = $request->benefit_logos4_img_old;
        }
        // 5
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos5');
        if($file){
            $filename5 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename5);
        }else{
            $filename5 = $request->benefit_logos5_img_old;
        }
        // 6
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos6');
        if($file){
            $filename6 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename6);
        }else{
            $filename6 = $request->benefit_logos6_img_old;
        }
        // 7
        // $home_page_edit= Home::find(1);
        $file =$request->file('benefit_logos7');
        if($file){
            $filename7 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename7);
        }else{
            $filename7 = $request->benefit_logos7_img_old;
        }
        // 8
        // $home_page_edit= Home::find(1);
        $file =$request->file('app_img');
        if($file){
            $filename8 = date("YmdHi").$file->getClientOriginalName();
            $des = "benifits_icons";
            $file->move($des,$filename8);
        }else{
            $filename8 = $request->app_img_img_old;
        }

        $home_page_edit->benefit_logos1= $filename1;
        $home_page_edit->benefit_logos2= $filename2;
        $home_page_edit->benefit_logos3= $filename3;
        $home_page_edit->benefit_logos4= $filename4;
        $home_page_edit->benefit_logos5= $filename5;
        $home_page_edit->benefit_logos6= $filename6;
        $home_page_edit->benefit_logos7= $filename7;
        $home_page_edit->app_img= $filename8;

        $home_page_edit->save();
        return redirect()
        ->route('homepage')
        ->with("success","Home Page Updated Successfully!!");
    }


    public function customer_list()
    {
        $data["customerlist_page_title"]="Manage Customer List";
        $data['customers']=Loanform::all();
        return view('admin.home.homepage_list',$data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function emiupdate(){

        $data['emiupdate'] = Emiupdate::find(1);
        return view('admin.footer.emiupdate',$data);
    }

    public function emi_updated(Request $request){

        $emiupdate= Emiupdate::find(1);
        $emiupdate->min_amount = $request->min_amount;
        $emiupdate->max_amount = $request->max_amount;
        $emiupdate->min_interest = $request->min_interest;
        $emiupdate->max_interest = $request->max_interest;
        $emiupdate->min_tenure = $request->min_tenure;
        $emiupdate->max_tenure = $request->max_tenure;
        $emiupdate->save();
        return redirect()->route('emiupdate')->with(['message'=>'Updated Successfully']);
    }
}
