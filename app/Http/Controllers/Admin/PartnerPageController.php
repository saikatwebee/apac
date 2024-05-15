<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Partnerpage;
use Illuminate\Http\Request;

class PartnerPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["partner_page_title"]="Manage Partner Page";
        $data["partner_page_update_title"]="Our Partners Page";
        $data["partner_page_info"]=Partnerpage::where("id",1)->first();
        return view("admin.footer.partnerpage_edit",$data);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $partner_page_update=Partnerpage::find(1);
        $partner_page_update->partnerpage_section1=$request->partnerpage_section1;
        $partner_page_update->partnerpage_section2=$request->partnerpage_section2;
        $partner_page_update->save();
        return redirect()
        ->route("partnerpage")
        ->with("success","Our Partners Page Updated Successfully!!");

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
}
