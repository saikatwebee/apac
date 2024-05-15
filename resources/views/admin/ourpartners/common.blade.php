@extends('layouts.admin')
@section('content')

<style>
  textarea{
    resize: none;
  }
label{
  color: #212529;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Investor Corner</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/dashboard') }}"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">common</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                      <form action="{{route('ourpart_com_upd')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form">
                        @csrf
                        @if (Session::has('msg')) 
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                        <strong>{{session::get('msg')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label" for="title">Box 1 Heading <span class="text-danger"> *</span></label>
                              <input type="text" name="box_1" class="form-control" id="box_1" value="{{$ourpartnercommon->annual}}"/>
                            </div>
                            <div class="form-group">
                              <label class="control-label" for="title">Box 2 Heading <span class="text-danger"> *</span></label>
                              <input type="text" name="box_2" class="form-control" id="box_2"  value="{{$ourpartnercommon->credit}}" />
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
