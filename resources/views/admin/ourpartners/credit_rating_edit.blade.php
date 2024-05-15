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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Credit Rating - Edit</li>
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
                      <form action="{{route('ourpartners_credit_update',$ourpartnercredit->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="credit_form">
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
                                    <label class="control-label" for="title">Credit File<span class="text-danger"> *</span>  ( PDF only )</label>
                                    <input type="file" name="cred_file" class="form-control" id="cred_file" accept=".pdf" />
                                    <div class="pre" style="margin: 15px 0px;
                                    ">
                                    <label for="">Check Here Your Old File  - </label>
                                    <a href="https://cogereonline.com/apac/public/creditrating/{{$ourpartnercredit->cred_file}}" target="_blank" id="cert_show">
                                    <i class="fa fa-file" aria-hidden="true" style="font-size: 20px;
                                                    margin-top: 0px;" id="file_icn"></i>
                                                    </a>
                                                    <input type="hidden" name="cred_file_old" id="cred_file_old" value="{{$ourpartnercredit->cred_file}}">
                                  </div>

                              <label class="control-label" for="title">Credit Name<span class="text-danger"> *</span></label>
                              <input type="text" name="cred_name" class="form-control" id="cred_name" value="{{$ourpartnercredit->cred_name}}"/>
                              <div class="error" id="cred_nameeErr"></div>
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

    var cred_name = document.credit_form.cred_name.value;

    var cred_nameeErr = true;

    if(cred_name == "") {
        printError("cred_nameeErr", "Please Enter File Name");
        document.getElementById("cred_name").style.borderColor = "red";
        document.getElementById('cred_nameeErr').style.color = "red";
    } else {
            printError("cred_nameeErr", "");
            cred_nameeErr = false;
            document.getElementById("cred_name").style.borderColor = "";
            document.getElementById('cred_nameeErr').style.color = "";
    }

    

   
    if(cred_nameeErr == true) {
      return false;
    } 
}
</script>