<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redis;
use App\Models\State;
use App\Models\Branchpincode;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $results=DB::table('contacts')->get();
        // $data['contactinfo']=$results;
        // $data['list_title']="Manage Contact";
        // return view('admin.contact.listing',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()

    // {
    //     $data['list_title']="Manage Contact";
    //     $data['create_title']="Add Contact";
    //     return view('admin.contact.create',$data);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "phone_number"=>"required",
            "message"=>"required",
            "address"=>"required",
            "url"=>"required",
            "state"=>"required",
            "branch"=>"required",
            "pincode"=>"required",
        ]);
        $contact=Contact::insert([
            "name"=>$request->name,
            "phone_number"=>$request->phone_number,
            "message"=>$request->message,
            "address"=>$request->address,
            "url"=>$request->url,
            "state"=>$request->state,
            "branch"=>$request->branch,
            "pincode"=>$request->pincode,
        ]);
        return redirect()
        ->route('contact')
        ->with("success","Contact created successfully!!");
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
    public function edit()
    {
        $data['edit_title']="Edit Contact";
        // $data['contactinfo']="id";
        $data['list_title']="Manage Contact";
        $data["contactinfo"]=Contact::where("id",1)->first();
        // dd($data);
        return view("admin.contact.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_edit=Contact::find($id);
        $contact_edit->name=$request->name;
        $contact_edit->phone_number=$request->phone_number;
        $contact_edit->message=$request->message;
        $contact_edit->address=$request->address;
        $contact_edit->url=$request->url;
        $contact_edit->state=$request->state;
        $contact_edit->branch=$request->branch;
        $contact_edit->pincode=$request->pincode;
        $contact_edit->save();
        return redirect()
        ->route("eidt-contact")
        ->with("success","Contact Updated Successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_delete=Contact::where('id',$id)->delete();
        // $contact_delete->delete();
        // Session::flash("success", "Merchant information deleted successfully.");
        // return 1;
        return redirect()->route('contact');

    }
    
    // BRANCHES
    public function branch_list()
    {

        $data['branchpincode'] =Branchpincode::orderBy('id', 'DESC')->get();
        return view("admin.contact.branche_list",$data);

    }

    public function branch_create()
    {
        return view("admin.contact.branch_create");

    }
    public function branch_store(Request $request)
    {

        $state = State::all();
        foreach ($state as $row) {
            if(str_replace(' ', '',Str::lower($row->state)) == str_replace(' ', '', Str::lower($request->state))){
                $insert = Branchpincode::insert([
                    'branch'=>$request->branch,
                    'pincode'=>$request->pincode,
                    'state_id'=>$row->id,
                    'embedded'=>$request->embedded,

                    // 'latitude'=>$request->latitude,
                    // 'longitude'=>$request->longitude,
                    'branch_address'=>$request->branch_address
                ]);

                return redirect()->route('branch_list')->with(['msg'=>'Created Successfully']);

            }
        }

        $id = DB::table('states')->insertGetId(
            ['state' => $request->state]
        );

        $insert = Branchpincode::insert([
            'branch'=>$request->branch,
            'pincode'=>$request->pincode,
            'state_id'=>$id,
            'embedded'=>$request->embedded,
            // 'latitude'=>$request->latitude,
            // 'longitude'=>$request->longitude,
            'branch_address'=>$request->branch_address
        ]);

        return redirect()->route('branch_list')->with(['msg'=>'Created Successfully']);

    }

    public function branch_delete(Request $request){

        $compliance = Branchpincode::find($request->id);
        $state = Branchpincode::where('state_id', $compliance->state_id)->get();


        if(count($state) < 2){
            // dd(count($state));
            $compliance = Branchpincode::find($request->id);
            $state = State::where('id', $compliance->state_id)->delete();
            $compliancefnl = Branchpincode::find($request->id)->delete();
            return 1;
        }else {
            $compliance = Branchpincode::find($request->id)->delete();
            return 1;
        }
    }

    public function branch_edit($id){
        $data['branchpincode'] = Branchpincode::find($id);
        return view('admin.contact.branch_edit',$data);
    }

    public function branch_update(Request $request,$id){


        $state = State::all();
        foreach ($state as $row) {
            if(str_replace(' ', '',Str::lower($row->state)) == str_replace(' ', '', Str::lower($request->state))){
                $branchpincode= Branchpincode::find($id);
                $branchpincode->state_id = $row->id;
                $branchpincode->branch = $request->branch;
                $branchpincode->pincode = $request->pincode;
                $branchpincode->embedded=$request->embedded;

                // $branchpincode->latitude = $request->latitude;
                // $branchpincode->longitude = $request->longitude;
                $branchpincode->branch_address = $request->branch_address;
                $branchpincode->save();

                $state = State::all();
                foreach ($state as $row_chk) {
                    $branchpincode_chk = Branchpincode::where('state_id', $row_chk->id)->get();
                    if(count($branchpincode_chk) == 0 ){
                        $state = State::where('id', $row_chk->id)->delete();
                    }
                }

                return redirect()->route('branch_list')->with(['msg'=>'Updated Successfully']);
            }
        }

        $new_state_id = DB::table('states')->insertGetId(
            ['state' => $request->state]
        );

        $branchpincode= Branchpincode::find($id);
        $branchpincode->state_id = $new_state_id;
        $branchpincode->branch = $request->branch;
        $branchpincode->pincode = $request->pincode;
        $branchpincode->latitude = $request->latitude;
        $branchpincode->longitude = $request->longitude;
        $branchpincode->branch_address = $request->branch_address;
        $branchpincode->save();

        $state = State::all();
        foreach ($state as $row) {
            $branchpincode = Branchpincode::where('state_id', $row->id)->get();
            if(count($branchpincode) == 0 ){
                $state = State::where('id', $row->id)->delete();
            }
        }

        return redirect()->route('branch_list')->with(['msg'=>'Updated Successfully']);
    }
}
