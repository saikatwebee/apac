<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Director;
use App\Models\Overview;
use App\Models\Foundersdesk;
use App\Models\Team;
use App\Models\TeamDescritption;
use App\Models\Overviewmultipleimage;



class AboutController extends Controller
{
    public function overview(Request $request){
        $data['overview'] = Overview::find(1);
        return view('admin.about.overview',$data);
    }
    
    public function ovr_update(Request $request){
        $about= Overview::find(1);
        $about->ovr_desc = $request->ovr_desc;
        $about->aum = $request->aum;
        $about->branches = $request->branches;
        $about->average_ticket = $request->average_ticket;
        $about->employees = $request->employees;
        $about->customers = $request->customers;
        $about->stable = $request->stable;

        $about->save();
        
        return redirect()->route('about.overview')->with(['msg'=>'Updated Successfully']);
        
    }
    
    public function overviewmultiples(){
        $data['overviewmultiples'] = Overviewmultipleimage::all();
        return view('admin.about.overview_multipleimgelist',$data);
    }

    public function overviewmultiples_create(){
        return view('admin.about.overview_multipleimgecreate');
    }
    public function overviewmultiples_store(Request $request){

          $validation = $request->validate([

            'overview_image'=>'required|Mimes:jpeg,jpg,gif,png| dimensions:width=200,height=120'


        ]);

        $file = $request->file('overview_image');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "overview_icons";
         $file->move($des,$filename);
        $insert = Overviewmultipleimage::insert([

            'overview_image'=>$filename
        ]);

        return redirect()->route('overviewmultiples')->with(['msg'=>'Created Successfully']);
    }

    public function overviewmultiples_edit($id){


        $data['overviewmultiples'] = Overviewmultipleimage::find($id);
        return view('admin.about.overview_multipleimgeedit',$data);
    }

    public function overviewmultiples_update(Request $request,$id){

        $validation = $request->validate([

            'overview_image'=>'required|Mimes:jpeg,jpg,gif,png| dimensions:width=200,height=120'


        ]);

        $file =$request->file('overview_image');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "overview_icons";
            $file->move($des,$filename);
        }else{
            $filename = $request->overview_image_img_old;
        }

        $overviewmultiples= Overviewmultipleimage::find($id);

        $overviewmultiples->overview_image= $filename;
        $overviewmultiples->save();
        return redirect()->route('overviewmultiples')->with(['msg'=>'Updated Successfully']);
    }

    public function overviewmultiples_delete(Request $request){
        $data['overviewmultiples_delete'] = Overviewmultipleimage::find($request->id)->delete();
        return 1;
    }

    
    public function team_description(Request $request){
        $data['team_description'] = TeamDescritption::find(1);
        return view('admin.about.teamdescriptionedit',$data);

    }
    public function team_descriptionupdate(Request $request){
        $team_description= TeamDescritption::find(1);
        $file =$request->file('team_img');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "Team_groupicons";
            $file->move($des,$filename);
        }else{
            $filename = $request->team_img_img_old;
        }
        $team_description= TeamDescritption::find(1);
        $team_description->team_img= $filename;
        $team_description->save();
        $team_description-> team_description= $request->team_description;
        $team_description->save();
        return redirect()->route('team_description')->with(['msg'=>'Updated Successfully']);
    }
    
    public function foundersdesk(Request $request){
        $data['foundersdesk'] = Foundersdesk::find(1);
        return view('admin.about.foundersdesk',$data);
    }

     public function foundersdesk_update(Request $request){
        $about= Foundersdesk::find(1);
        $about->descr = $request->descr;
        $about->descr1 = $request->descr1;
        $about->save();
        return redirect()->route('foundersdesk')->with(['msg'=>'Updated Successfully']);
    }

    // director_list 
    public function director_list(){
        $data['director'] = Director::all();
        return view('admin.about.director_list',$data);
    }
    public function director_create(){
        return view('admin.about.director_create');
    }
    public function director_store(Request $request){
        // $validation = $request->validate([
        //     'dir_img'=>'requried|image',
        //     'dir_nme'=>'requried',
        //     'dir_pos'=>'requried'
        // ]);
        $file = $request->file('dir_img');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "about";
        $file->move($des,$filename);
        $insert = Director::insert([
            'dir_img'=>$filename,
            'dir_nme'=>$request->dir_nme,
            'dir_rol'=>$request->dir_rol,
            'dir_descr'=>$request->dir_descr
        ]);

        return redirect()->route('director_list')->with(['msg'=>'Created Successfully']);
    }

    public function director_edit($id){
        $data['director'] = Director::find($id);
        return view('admin.about.director_edit',$data);
    }

    public function director_update(Request $request,$id){
        $about= Director::find($id);
        $file =$request->file('dir_img');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "about";
            $file->move($des,$filename);
        }else{
            $filename = $request->dir_img_old; 
        }
        $about->dir_img = $filename;
        $about->dir_nme = $request->dir_nme;
        $about->dir_rol = $request->dir_rol;
        $about->dir_descr = $request->dir_descr;
        $about->save();
        return redirect()->route('director_list')->with(['msg'=>'Updated Successfully']);
    }

    public function director_delete(Request $request){
        // dd($request->id);
        $data['director'] = Director::find($request->id)->delete();
        return 1;
    }
    
    // team_list 
    public function team_list(){
        $data['team'] = Team::all();
        return view('admin.about.team_list',$data);
    }
    
    public function team_create(){
        return view('admin.about.team_create');
    }
    public function team_store(Request $request){
        // $validation = $request->validate([
        //     'dir_img'=>'requried|image',
        //     'dir_nme'=>'requried',
        //     'dir_pos'=>'requried'
        // ]);
        $file = $request->file('team_img');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "about";
         $file->move($des,$filename);
        $insert = Team::insert([
            'tem_nme'=>$request->tem_nme,
            'tem_rol'=>$request->tem_rol,
            'team_img'=>$filename,
            'tem_descr'=>$request->tem_descr
        ]);

        return redirect()->route('team_list')->with(['msg'=>'Created Successfully']);
    }

    public function team_edit($id){
        $data['team'] = Team::find($id);
        return view('admin.about.team_edit',$data);
    }

    public function team_update(Request $request,$id){
        
        $file =$request->file('team_img');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "about";
            $file->move($des,$filename);
        }else{
            $filename = $request->team_img_old; 
        }
        
        $about= Team::find($id);
        $about->tem_nme = $request->tem_nme;
        $about->tem_rol = $request->tem_rol;
        $about->tem_descr = $request->tem_descr;
        $about->team_img= $filename;
        $about->save();
        return redirect()->route('team_list')->with(['msg'=>'Updated Successfully']);
    }

    public function team_delete(Request $request){
        $data['director'] = Team::find($request->id)->delete();
        return 1;
    }

    // END 




    // public function index(){
    //     $data['about'] = About::find(1);
    //     return view('admin.about.edit',$data);
    // }
    // public function update(Request $request){
    //     $about= About::find(1);
    //     $file =$request->file('fud_img');
    //     if($file){
    //         $filename = date("YmdHi").$file->getClientOriginalName();
    //         $des = "about";
    //         $file->move($des,$filename);
    //     }else{
    //         $filename = $request->fud_img_old; 
    //     }
    //     $about->abt_apac = $request->abt_apac;
    //     $about->our_vis_til = $request->our_vis_til;
    //     $about->our_vis_desc = $request->our_vis_desc;
    //     $about->fud_til = $request->fud_til;
    //     $about->fud_img = $filename;
    //     $about->fud_dtl = $request->fud_dtl;
    //     $about->save();

    //     return redirect()->route('about')->with(['msg'=>'Updated Successfully']);
    // }
    
    

    
}
