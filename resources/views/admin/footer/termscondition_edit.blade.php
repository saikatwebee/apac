@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>{{$footer_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">{{$update_title}}</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card py-5">
                <div class="col-12">
                    @include('inc.messages')
                </div>

                <form class="validate-form" method="POST" action="{{ route('footer/terms_and_condition.update') }}" enctype="multipart/form-data"
                id="footer_form" onsubmit="return validateForm();" name="footer_form">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="control-label" for="">Terms and Condition<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="terms_condition" id="summernote">{{$terms_conditon_info->terms_condition}}</textarea>
                                  <div class="error" id="terms_conditionErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Limited License<span class="text-danger">*</span></label>
                                    <textarea class="summernote1" name="limited_license" id="summernote1">{{$terms_conditon_info->limited_license}}</textarea>
                                  <div class="error" id="limited_licenseErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Contents<span class="text-danger">*</span></label>
                                    <textarea class="summernote2" name="contents" id="summernote2">{{$terms_conditon_info->contents}}</textarea>
                                  <div class="error" id="contentsErr"></div>

                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="post">Use of Services<span class="text-danger">*</span></label>
                                    <textarea class="summernote3" name="use_service" id="summernote3">{{$terms_conditon_info->use_service}}</textarea>
                                  <div class="error" id="use_serviceErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="intellectual_property">Intellectual Property<span class="text-danger">*</span></label>
                                    <textarea class="summernote4" name="intellectual_property" id="summernote4">{{$terms_conditon_info->intellectual_property}}</textarea>
                                  <div class="error" id="intellectual_propertyErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Confidential Information<span class="text-danger">*</span></label>
                                    <textarea class="summernote5" name="confi_information" id="summernote5">{{$terms_conditon_info->confi_information}}</textarea>
                                  <div class="error" id="confi_informationErr"></div>

                                </div>




                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="post">Disclaimer Of Warranties<span class="text-danger">*</span></label>
                                    <textarea class="summernote6" name="disclaimer_warranty" id="summernote6">{{$terms_conditon_info->disclaimer_warranty}}</textarea>
                                  <div class="error" id="disclaimer_warrantyErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Indemnification<span class="text-danger">*</span></label>
                                    <textarea class="summernote7" name="indemnification" id="summernote7">{{$terms_conditon_info->indemnification}}</textarea>
                                  <div class="error" id="indemnificationErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Limitations Of Liablity<span class="text-danger">*</span></label>
                                    <textarea class="summernote8" name="limit_liablity" id="summernote8">{{$terms_conditon_info->limit_liablity}}</textarea>
                                  <div class="error" id="limit_liablityErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Software Licenses<span class="text-danger">*</span></label>
                                    <textarea class="summernote9" name="software_license" id="summernote9">{{$terms_conditon_info->software_license}}</textarea>
                                  <div class="error" id="software_licenseErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">RBI Disclaimer<span class="text-danger">*</span></label>
                                    <textarea class="summernote10" name="disclaimer_rbi" id="summernote10">{{$terms_conditon_info->disclaimer_rbi}}</textarea>
                                  <div class="error" id="disclaimer_rbiErr"></div>

                                </div>

                            </div>






                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Update') }}</button>
                        {{-- <a href="{{route('dashboard')}}" class="btn btn-secondary" type="reset">{{ __('Cancel') }}</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<script>
    function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
  }
  function validateForm() {



      // 1
      var check0 = $('#chk0').text();
      if(check0 == ''){
          var terms_condition = document.forms["footer_form"]["terms_condition"].value;
          terms_condition = "empty";
      }else{
          var terms_condition = document.forms["footer_form"]["terms_condition"].value;
      }

      // 2
      var check1 = $('#chk1').text();
      if(check1 == ''){
          var limited_license = document.forms["footer_form"]["limited_license"].value;
          limited_license = "empty";
      }else{
          var limited_license = document.forms["footer_form"]["limited_license"].value;

      }

      // 3
      var check2 = $('#chk2').text();
      if(check2 == ''){
          var contents = document.forms["footer_form"]["contents"].value;
          contents = "empty";
      }else{
          var contents = document.forms["footer_form"]["contents"].value;
      }

      // 4
      var check3 = $('#chk3').text();
      if(check3 == ''){
          var use_service = document.forms["footer_form"]["use_service"].value;
          use_service = "empty";
      }else{
          var use_service = document.forms["footer_form"]["use_service"].value;
      }
       // 5
       var check4 = $('#chk4').text();
      if(check4 == ''){
          var intellectual_property = document.forms["footer_form"]["intellectual_property"].value;
          intellectual_property = "empty";
      }else{
          var intellectual_property = document.forms["footer_form"]["intellectual_property"].value;
      }
       // 6
       var check5 = $('#chk5').text();
      if(check5 == ''){
          var confi_information = document.forms["footer_form"]["confi_information"].value;
          confi_information = "empty";
      }else{
          var confi_information = document.forms["footer_form"]["confi_information"].value;
      }

      // 7
      var check6 = $('#chk6').text();
      if(check6 == ''){
          var disclaimer_warranty = document.forms["footer_form"]["disclaimer_warranty"].value;
          disclaimer_warranty = "empty";
      }else{
          var disclaimer_warranty = document.forms["footer_form"]["disclaimer_warranty"].value;
      }
      // 8
      var check7 = $('#chk7').text();
      if(check7 == ''){
          var indemnification = document.forms["footer_form"]["indemnification"].value;
          indemnification = "empty";
      }else{
          var indemnification = document.forms["footer_form"]["indemnification"].value;
      }
      // 9
      var check8 = $('#chk8').text();
      if(check8 == ''){
          var limit_liablity = document.forms["footer_form"]["limit_liablity"].value;
          limit_liablity = "empty";
      }else{
          var limit_liablity = document.forms["footer_form"]["limit_liablity"].value;
      }
      // 10
      var check9 = $('#chk9').text();
      if(check9 == ''){
          var software_license = document.forms["footer_form"]["software_license"].value;
          software_license = "empty";
      }else{
          var software_license = document.forms["footer_form"]["software_license"].value;
      }
      // 11
      var check10 = $('#chk10').text();
      if(check10 == ''){
          var disclaimer_rbi = document.forms["footer_form"]["disclaimer_rbi"].value;
          disclaimer_rbi = "empty";
      }else{
          var disclaimer_rbi = document.forms["footer_form"]["disclaimer_rbi"].value;
      }

      // alert(descr);
      var terms_conditionErr = limited_licenseErr = contentsErr = use_serviceErr = intellectual_propertyErr=confi_informationErr=disclaimer_warrantyErr=indemnificationErr=limit_liablityErr=software_licenseErr=disclaimer_rbiErr=true;

      var seum = $('#chk2').text();

      if(terms_condition == "empty") {
      printError("terms_conditionErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('terms_conditionErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("terms_conditionErr", "");
      terms_conditionErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote").style.borderColor = "";
      // document.getElementById('seumErr').style.color = "";
      }


      // 2
      if(limited_license == "empty") {
      printError("limited_licenseErr", "Please enter the value");
      document.getElementById("summernote1").style.borderColor = "red";
      document.getElementById('limited_licenseErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("limited_licenseErr", "");
      limited_licenseErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote1").style.borderColor = "";
      // document.getElementById('cl_useErr').style.color = "";
      }


      // 3
      if(contents == "empty") {
      printError("contentsErr", "Please enter the value");
      document.getElementById("summernote2").style.borderColor = "red";
      document.getElementById('contentsErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("contentsErr", "");
      contentsErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote2").style.borderColor = "";
      // document.getElementById('ty_dt_clErr').style.color = "";
      }


      // 4
      if(use_service == "empty") {
      printError("use_serviceErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('use_serviceErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("use_serviceErr", "");
      use_serviceErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 5
      if(intellectual_property == "empty") {
      printError("intellectual_propertyErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('intellectual_propertyErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("intellectual_propertyErr", "");
      intellectual_propertyErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }

      // 6
      if(confi_information == "empty") {
      printError("confi_informationErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('confi_informationErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("confi_informationErr", "");
      confi_informationErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 7
      if(disclaimer_warranty == "empty") {
      printError("disclaimer_warrantyErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('disclaimer_warrantyErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("disclaimer_warrantyErr", "");
      disclaimer_warrantyErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 8
      if(indemnification == "empty") {
      printError("indemnificationErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('indemnificationErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("indemnificationErr", "");
      indemnificationErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 9
      if(limit_liablity == "empty") {
      printError("limit_liablityErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('limit_liablityErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("limit_liablityErr", "");
      limit_liablityErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 10
      if(software_license == "empty") {
      printError("software_licenseErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('software_licenseErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("software_licenseErr", "");
      software_licenseErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      //11
      if(disclaimer_rbi == "empty") {
      printError("disclaimer_rbiErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('disclaimer_rbiErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("disclaimer_rbiErr", "");
      disclaimer_rbiErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 12

      // 13



      if((terms_conditionErr || limited_licenseErr|| contentsErr || use_serviceErr||intellectual_propertyErr||confi_informationErr||disclaimer_warrantyErr||indemnificationErr||limit_liablityErr||software_licenseErr||disclaimer_rbiErr )  == true) {
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
