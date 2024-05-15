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
                    <h1>About Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Founder’s Desk</li>
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
                      <form action="{{route('foundersdesk_update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form"  onsubmit="return validateForm();" name="about_form">
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
                              <label for="descr">{{__('Founder’s Desk Descrpition')}}</label>
                              <textarea class="summernote" name="descr" id="summernote">{{$foundersdesk->descr}}</textarea>
                              <div class="error" id="descrErr"></div>

                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="descr1">{{__('Founder’s Desk Descrpition')}}</label>
                              <textarea class="summernote" name="descr1" id="summernote">{{$foundersdesk->descr1}}</textarea>
                              <div class="error" id="descr1Err"></div>

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
<script>
    function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
  }

  </script>

  <script>
    function validateForm() {
    // let aum = document.forms["footer_form"]["aum"].value;
    var summernote = $('.card-block').text();

    if(summernote == ""){
      var descr = document.forms["about_form"]["descr"].value;
      descr = "empty";
    }else{
      var descr = document.forms["about_form"]["descr"].value;
    }

    var descrErr = true;

    if(descr == "empty") {
      printError("descrErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('descrErr').style.color = "red";
    } else {
      printError("descrErr", "");
      descrErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('descrErr').style.color = "";
    }
    var summernote = $('.card-block').text();

    if(summernote == ""){
      var descr1 = document.forms["about_form"]["descr1"].value;
      descr = "empty";
    }else{
      var descr1 = document.forms["about_form"]["descr1"].value;
    }

    var descr1Err = true;

    if(descr == "empty") {
      printError("descr1Err", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('descr1Err').style.color = "red";
    } else {
      printError("descr1Err", "");
      descr1Err = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('descr1Err').style.color = "";
    }


    if((descrErr||descr1Err)  == true) {
      return false;
    } else{
      //alert(email + " = " + password)
    }
   }
   </script>

@endsection
