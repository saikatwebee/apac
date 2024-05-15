<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Offermesme;
use App\Models\Whyjoin;

class ProductController extends Controller
{
    public function testimonial_list(Request $request){
        $data['testimonial'] = Testimonial::all();
        return view('admin.product.testimonial_list',$data);
    }

    public function testimonial_create(Request $request){
        return view('admin.product.testimonial_create');
    }


    public function testimonial_store(Request $request){
        $file = $request->file('tes_img');
        $filename = date("YmdHi").$file->getClientOriginalName();
        $des = "product";
        $file->move($des,$filename);

        $insert = Testimonial::insert([
            'tes_img'=>$filename,
            'tes_nme'=>$request->tes_nme,
            'tes_rol'=>$request->tes_rol,
            'tes_descr'=>$request->tes_descr
        ]);

        return redirect()->route('testimonial_list')->with(['msg'=>'Created Successfully']);
    }

    public function testimonial_delete(Request $request){
        $data['director'] = Testimonial::find($request->id)->delete();
        return 1;
    }

    public function testimonial_edit($id){
        $data['testimonial'] = Testimonial::find($id);
        return view('admin.product.testimonial_edit',$data);
    }

    public function testimonial_update(Request $request,$id){
        $testimonial= Testimonial::find($id);
        $file =$request->file('tes_img');
        if($file){
            $filename = date("YmdHi").$file->getClientOriginalName();
            $des = "product";
            $file->move($des,$filename);
        }else{
            $filename = $request->tes_img_old;
        }
        $testimonial->tes_img = $filename;
        $testimonial->tes_nme = $request->tes_nme;
        $testimonial->tes_rol = $request->tes_rol;
        $testimonial->tes_descr = $request->tes_descr;
        $testimonial->save();
        return redirect()->route('testimonial_list')->with(['msg'=>'Updated Successfully']);
    }
    public function offer_mesme(){
        $data['offermesme'] = Offermesme::find(1);
        return view('admin.product.offermesme',$data);
    }

    public function offermesme_update(Request $request,$id){
        $offermesme= Offermesme::find(1);
        $offermesme->content = $request->content;
        $offermesme->save();
        return redirect()->route('offer_mesme')->with(['msg'=>'Updated Successfully']);
    }

    public function why_join(){
        $data['whyjoins'] = Whyjoin::find(1);
        return view('admin.wearehiring.why_join',$data);
    }

    public function why_join_update(Request $request,$id){
        
        $request->validate([
            "whyjoin_logos1"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "whyjoin_logos2"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "whyjoin_logos3"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "whyjoin_logos4"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "whyjoin_logos5"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "whyjoin_logos6"=>"image|mimes:jpeg,png,jpg,gif,svg",
            

        ]);
        
        $whyjoin= Whyjoin::find(1);
        // 1
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos1');
        if($file){
            $filename1 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename1);
        }else{
            $filename1 = $request->whyjoin_logos1_img_old;
        }
        // 2
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos2');
        if($file){
            $filename2 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename2);
        }else{
            $filename2 = $request->whyjoin_logos2_img_old;
        }
        // 3
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos3');
        if($file){
            $filename3 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename3);
        }else{
            $filename3 = $request->whyjoin_logos3_img_old;
        }
        // 4
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos4');
        if($file){
            $filename4 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename4);
        }else{
            $filename4 = $request->whyjoin_logos4_img_old;
        }
        // 5
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos5');
        if($file){
            $filename5 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename5);
        }else{
            $filename5 = $request->whyjoin_logos5_img_old;
        }
        // 6
        // $whyjoin= Whyjoin::find(1);
        $file =$request->file('whyjoin_logos6');
        if($file){
            $filename6 = date("YmdHi").$file->getClientOriginalName();
            $des = "whyjoin_icons";
            $file->move($des,$filename6);
        }else{
            $filename6 = $request->whyjoin_logos6_img_old;
        }
        // 7
        $whyjoin->whyjoin_logos1= $filename1;
        $whyjoin->whyjoin_logos2= $filename2;
        $whyjoin->whyjoin_logos3= $filename3;
        $whyjoin->whyjoin_logos4= $filename4;
        $whyjoin->whyjoin_logos5= $filename5;
        $whyjoin->whyjoin_logos6= $filename6;
        $whyjoin->point1 = $request->point1;
        $whyjoin->point2 = $request->point2;
        $whyjoin->point3 = $request->point3;
        $whyjoin->point4 = $request->point4;
        $whyjoin->point5 = $request->point5;
        $whyjoin->point6 = $request->point6;
        $whyjoin->hiring_desc = $request->hiring_desc;

        $whyjoin->save();
        return redirect()->route('why_join')->with(['msg'=>'Updated Successfully']);
    }

}
