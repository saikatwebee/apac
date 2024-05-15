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
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Annual Report - Edit</li>
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
                      <form action="{{route('ourpart_annul_update',$ourpartnerannual->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="annual_form">
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
                                <div class="form-group">
                                    <label class="control-label" for="title">Annual File<span class="text-danger"> *</span>  ( PDF only )</label>
                                    <input type="file" name="anual_fle" class="form-control" id="anual_fle"   accept=".pdf" />
                                    <div class="pre" style="margin: 15px 0px;
                                    ">
                                    <label for="">Check Here Your Old File  - </label>
                                    <a href="https://cogereonline.com/apac/public/annaulreport/{{$ourpartnerannual->anual_fle}}" target="_blank" id="cert_show">
                                    <i class="fa fa-file" aria-hidden="true" style="font-size: 20px;
                                                    margin-top: 0px;" id="file_icn"></i>
                                                    </a>
                                {{-- <img   
                                src="{{ asset('annaulreport/'.$ourpartnerannual->anual_fle) }}"  style="margin-left: 2px;
                                margin-top: 3px;"  width="50px" height="50px" id="output"/>
                              </div> --}}
                            <input type="hidden" name="anual_fle_old" id="anual_fle_old" value="{{$ourpartnerannual->anual_fle}}">
                                  </div>

                              <label class="control-label" for="title">Annual Name<span class="text-danger"> *</span></label>
                              <input type="text" name="anual_nme" class="form-control" id="anual_nme" value="{{$ourpartnerannual->anual_nme}}"/>
                              <div class="error" id="anual_nmeErr"></div>
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
<script>
  function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {

    var anual_nme = document.annual_form.anual_nme.value;

    var anual_nmeErr = true;

    if(anual_nme == "") {
      printError("anual_nmeErr", "Please Enter File Name");
      document.getElementById("anual_nme").style.borderColor = "red";
      document.getElementById('anual_nmeErr').style.color = "red";
    } 
    else {
      printError("anual_nmeErr", "");
      anual_nmeErr = false;
      document.getElementById("anual_nme").style.borderColor = "";
      document.getElementById('anual_nmeErr').style.color = "";
    }

   
    if(anual_nmeErr == true) {
      return false;
    } 
}
</script>