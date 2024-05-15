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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Credit Rating - Create</li>
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
                      <form action="{{route('ourpart_credit_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="credit_form" 
                      onsubmit="return validateForm();" name="credit_form">
                        @csrf
                        @if (Session::has('msg')) 
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;" >
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
                                    <label class="control-label" for="title">Credit File<span class="text-danger"> *</span> ( PDF only )</label>
                                    <input type="file" name="cred_file" class="form-control" id="cred_file"  accept=".pdf"/>
                                    <div class="error" id="cred_fileErr"></div>

                                  </div>

                              <label class="control-label" for="title">Credit Name<span class="text-danger"> *</span></label>
                              <input type="text" name="cred_name" class="form-control" id="cred_name" />
                              <div class="error" id="cred_nameeErr"></div>

                            </div>
                           
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100">create</button>
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

    var cred_file = document.credit_form.cred_file.value;
    var cred_name = document.credit_form.cred_name.value;

    var cred_nameeErr = cred_fileErr = true;

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

    if(cred_file == "") {
        printError("cred_fileErr", "Please Upload PDF File Only");
        document.getElementById("cred_file").style.borderColor = "red";
        document.getElementById('cred_fileErr').style.color = "red";
    } else {
      printError("cred_fileErr", "");
      cred_fileErr = false;
      document.getElementById("cred_file").style.borderColor = "";
      document.getElementById('cred_fileErr').style.color = "";
    }

   
    if((cred_nameeErr || cred_fileErr) == true) {
      return false;
    } 
}
</script>