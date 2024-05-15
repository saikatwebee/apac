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
                    <h1>Footer Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Privacy Policy</li>
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
                    <form  action="{{route('privacypolicy.update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="footer_form" onsubmit="return validateForm();" name="footer_form">
                        @csrf
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                                <strong>{{session::get('message')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                          <div class="col-md-6">
                                <div class="form-group">
                                    <label for="descr">{{__('Description')}}</label>
                                    <textarea class="summernote" name="descr" id="summernote">{{$privacypolicy->descr}}</textarea>
                                  <div class="error" id="seumErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="cl_use">{{__('Information Collection And Use')}}</label>
                                    <textarea class="summernote1" name="cl_use" id="summernote1">{{$privacypolicy->cl_use}}</textarea>
                                   <div class="error" id="cl_useErr"></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ty_dt_cl">{{__('Types Of Data Collected')}}</label>
                                    <textarea class="summernote2" name="ty_dt_cl" id="summernote2">{{$privacypolicy->ty_dt_cl}}</textarea>
                                  <div class="error" id="ty_dt_clErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="lrg_req">{{__('Legal Requirements')}}</label>
                                    <textarea class="summernote3" name="lrg_req" id="summernote3">{{$privacypolicy->lrg_req}}</textarea>
                                  <div class="error" id="lrg_reqErr"></div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                </div>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
      function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
    }
    function validateForm() {
        
        // var descr = document.forms["restaurantRegisterForm"]["descr"].value;
        // var cl_use = document.forms["restaurantRegisterForm"]["cl_use"].value;
        // var ty_dt_cl = document.forms["restaurantRegisterForm"]["ty_dt_cl"].value;
        // var lrg_req = document.forms["restaurantRegisterForm"]["lrg_req"].value;

        // 1
        var check0 = $('#chk0').text();
        if(check0 == ''){
            var descr = document.forms["footer_form"]["descr"].value;
            descr = "empty";
        }else{
            var descr = document.forms["footer_form"]["descr"].value;
        }

        // 2
        var check1 = $('#chk1').text();
        if(check1 == ''){
            var cl_use = document.forms["footer_form"]["cl_use"].value;
            cl_use = "empty";
        }else{
            var cl_use = document.forms["footer_form"]["cl_use"].value;

        }

        // 3
        var check2 = $('#chk2').text();
        if(check2 == ''){
            var ty_dt_cl = document.forms["footer_form"]["ty_dt_cl"].value;
            ty_dt_cl = "empty";
        }else{
            var ty_dt_cl = document.forms["footer_form"]["ty_dt_cl"].value;
        }

        // 4
        var check3 = $('#chk3').text();
        if(check3 == ''){
            var lrg_req = document.forms["footer_form"]["lrg_req"].value;
            lrg_req = "empty";
        }else{
            var lrg_req = document.forms["footer_form"]["lrg_req"].value;
        }

        // alert(descr);
        var seumErr = cl_useErr = ty_dt_clErr = lrg_reqErr = true;
    
        var seum = $('#chk2').text();

        if(descr == "empty") {
        printError("seumErr", "Please enter the value");
        document.getElementById("summernote").style.borderColor = "red";
        document.getElementById('seumErr').style.color = "red";
        // $('.note-editor').css('border-color', 'red');
        
        } else {
        printError("seumErr", "");
        seumErr = false;
        $('.note-editor').css('border-color', '');
        document.getElementById("summernote").style.borderColor = "";
        // document.getElementById('seumErr').style.color = "";
        }
        

        // 2
        if(cl_use == "empty") {
        printError("cl_useErr", "Please enter the value");
        document.getElementById("summernote1").style.borderColor = "red";
        document.getElementById('cl_useErr').style.color = "red";
        // $('.note-editor').css('border-color', 'red');
        
        } else {
        printError("cl_useErr", "");
        cl_useErr = false;
        $('.note-editor').css('border-color', '');
        document.getElementById("summernote1").style.borderColor = "";
        // document.getElementById('cl_useErr').style.color = "";
        }


        // 3
        if(ty_dt_cl == "empty") {
        printError("ty_dt_clErr", "Please enter the value");
        document.getElementById("summernote2").style.borderColor = "red";
        document.getElementById('ty_dt_clErr').style.color = "red";
        // $('.note-editor').css('border-color', 'red');
        
        } else {
        printError("ty_dt_clErr", "");
        ty_dt_clErr = false;
        $('.note-editor').css('border-color', '');
        document.getElementById("summernote2").style.borderColor = "";
        // document.getElementById('ty_dt_clErr').style.color = "";
        }

        
        // 4
        if(lrg_req == "empty") {
        printError("lrg_reqErr", "Please enter the value");
        document.getElementById("summernote3").style.borderColor = "red";
        document.getElementById('lrg_reqErr').style.color = "red";
        // $('.note-editor').css('border-color', 'red');
        
        } else {
        printError("lrg_reqErr", "");
        lrg_reqErr = false;
        $('.note-editor').css('border-color', '');
        document.getElementById("summernote3").style.borderColor = "";
        // document.getElementById('lrg_reqErr').style.color = "";
        }

        
        if((seumErr || cl_useErr|| ty_dt_clErr || lrg_reqErr )  == true) {
        return false;
        } else{
        //alert(email + " = " + password)
        }
   }
   </script>
<script>
    window.onload = function(){  
        $('.card-block').attr("id", function(i){
            return 'chk' + i;
        });
        $('.note-editor').attr("id", function(i){
            return 'dmo' + i;
        });
    }
   </script>
@endsection
