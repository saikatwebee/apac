<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourpartnercommon;
use App\Models\Ourpartnerannual;
use App\Models\Ourpartnercredit;
use App\Models\Multiples;



class OurpartnersController extends Controller
{
    public function ourpartners_common(){
        $data['ourpartnercommon'] = Ourpartnercommon::find(1);
        return view('admin.ourpartners.common',$data);
    }

    public function ourpart_com_upd(Request $request){
        $ourpartnercommon= Ourpartnercommon::find(1);
        $ourpartnercommon->annual = $request->box_1;
        $ourpartnercommon->credit = $request->box_2;
        $ourpartnercommon->save();

        return redirect()->route('ourpartners_common')->with(['msg'=>'Updated Successfully']);
    }
    // Annual Report
    public function ourpartners_annual_report(){
        $data['ourpartnerannual'] = Ourpartnerannual::all();
        return view('admin.ourpartners.annual_report_list',$data);
    }

    public function ourpartners_annual_create(){
        return view('admin.ourpartners.annual_report_create');
    }

    public function ourpart_annul_store(Request $request){

        $file = $request->file('anual_fle');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "annaulreport";
        $file->move($des,$filename);
        $insert = Ourpartnerannual::insert([
            'anual_fle'=>$filename,
            'anual_nme'=>$request->	anual_nme,
        ]);

        return redirect()->route('ourpartners_annual_report')->with(['msg'=>'Created Successfully']);
    }
    public function ourpartner_annual_delete(Request $request){
        $data['ourpartner_annual_delete'] = Ourpartnerannual::find($request->id)->delete();
        return 1;
    }
    public function ourpartners_annual_edit($id){
        $data['ourpartnerannual'] = Ourpartnerannual::find($id);
        return view('admin.ourpartners.annual_report_edit',$data);
    }
    public function ourpart_annul_update(Request $request,$id){
        $ourpartnerannual= Ourpartnerannual::find($id);
        $file =$request->file('anual_fle');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "annaulreport";
            $file->move($des,$filename);
        }else{
            $filename = $request->anual_fle_old;
        }
        $ourpartnerannual->anual_fle = $filename;
        $ourpartnerannual->anual_nme = $request->anual_nme;
        $ourpartnerannual->save();
        return redirect()->route('ourpartners_annual_report')->with(['msg'=>'Updated Successfully']);
    }



    // Credit Rating

    public function ourpartners_credit_rating(){
        $data['ourpartnercredit'] = Ourpartnercredit::all();
        return view('admin.ourpartners.credit_rating_list',$data);
    }

    public function ourpartners_credit_create(){
        return view('admin.ourpartners.credit_rating_create');
    }

    public function ourpart_credit_store(Request $request){

        $file = $request->file('cred_file');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "creditrating";
        $file->move($des,$filename);
        $insert = Ourpartnercredit::insert([
            'cred_file'=>$filename,
            'cred_name'=>$request->cred_name,
        ]);

        return redirect()->route('ourpartners_credit_rating')->with(['msg'=>'Created Successfully']);
    }

    public function ourpartner_credit_delete(Request $request){
        $data['ourpartnerannual_delete'] = Ourpartnercredit::find($request->id)->delete();
        return 1;
    }

    public function ourpartners_credit_edit($id){
        $data['ourpartnercredit'] = Ourpartnercredit::find($id);
        return view('admin.ourpartners.credit_rating_edit',$data);
    }

    public function ourpartners_credit_update(Request $request,$id){
        $ourpartnercredit= Ourpartnercredit::find($id);
        $file =$request->file('cred_file');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "creditrating";
            $file->move($des,$filename);
        }else{
            $filename = $request->cred_file_old;
        }
        $ourpartnercredit->cred_file = $filename;
        $ourpartnercredit->cred_name = $request->cred_name;
        $ourpartnercredit->save();
        return redirect()->route('ourpartners_credit_rating')->with(['msg'=>'Updated Successfully']);
    }
     public function multiples(){
        $data['multiples'] = Multiples::all();
        return view('admin.ourpartners.multiples_list',$data);
    }

    public function multiples_create(){
        return view('admin.ourpartners.multiples_create');
    }
    public function multiples_store(Request $request){

        $validation = $request->validate([

            'image'=>'required|Mimes:jpeg,jpg,gif,png| dimensions:width=200,height=120'


        ]);
        $file = $request->file('image');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "investor";
         $file->move($des,$filename);
        $insert = Multiples::insert([

            'image'=>$filename

        ]);

        return redirect()->route('multiples')->with(['msg'=>'Created Successfully']);
    }

    public function multiples_edit($id){
        $data['multiples'] = Multiples::find($id);
        return view('admin.ourpartners.multiples_edit',$data);
    }

    public function multiples_update(Request $request,$id){
        $validation = $request->validate([

            'image'=>'required|Mimes:jpeg,jpg,gif,png| dimensions:width=200,height=120'


        ]);

        $file =$request->file('image');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "investor";
            $file->move($des,$filename);
        }else{
            $filename = $request->image_img_old;
        }

        $multiples= Multiples::find($id);

        $multiples->image= $filename;
        $multiples->save();
        return redirect()->route('multiples')->with(['msg'=>'Updated Successfully']);
    }

    public function multiples_delete(Request $request){
        $data['multiples_delete'] = Multiples::find($request->id)->delete();
        return 1;
    }

}
