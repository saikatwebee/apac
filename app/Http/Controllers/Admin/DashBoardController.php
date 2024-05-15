<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Loanform;
use App\Models\Career;
use App\Models\FrontendContactUs;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('admin.dashboard.listing');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function customer_list()
    {
        $data["customerlist_page_title"]="Manage Customer List";
        $data['customers']=Loanform::all();
        return view('admin.dashboard.customerpage_list',$data);

    }

    public function application_form_list()
    {
        $data["application_form_title"]="Application Form List";
        $data['application_form']=Career::all();
        return view('admin.dashboard.applicationform_list',$data);

    }
    public function contact_form_list()
    {
        $data["contact_form_title"]="Contact Form List";
        $data['contact_form']=FrontendContactUs::all();
        return view('admin.dashboard.contactform_list',$data);

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
    public function update(Request $request, $id)
    {
        //
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
