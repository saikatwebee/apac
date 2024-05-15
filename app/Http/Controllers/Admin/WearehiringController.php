<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lifeatapacimge;

use Illuminate\Http\Request;

class WearehiringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function life_apac(){
        $data['life_apac'] = Lifeatapacimge::all();
        return view('admin.wearehiring.life_apaclist',$data);
    }

    public function life_apac_create(){
        return view('admin.wearehiring.life_apaccreate');
    }
    public function life_apac_store(Request $request){

        $file = $request->file('apac_image');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "hiring";
         $file->move($des,$filename);
        $insert = Lifeatapacimge::insert([

            'apac_image'=>$filename

        ]);

        return redirect()->route('life_apac')->with(['msg'=>'Created Successfully']);
    }

    public function life_apac_edit($id){
        $data['life_apac'] = Lifeatapacimge::find($id);
        return view('admin.wearehiring.life_apacedit',$data);
    }

    public function life_apac_update(Request $request,$id){

        $file =$request->file('apac_image');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "hiring";
            $file->move($des,$filename);
        }else{
            $filename = $request->apac_image_img_old;
        }

        $life_apac= Lifeatapacimge::find($id);

        $life_apac->apac_image= $filename;
        $life_apac->save();
        return redirect()->route('life_apac')->with(['msg'=>'Updated Successfully']);
    }

    public function life_apac_delete(Request $request){
        $data['life_apac_delete'] = Lifeatapacimge::find($request->id)->delete();
        return 1;
    }
}
