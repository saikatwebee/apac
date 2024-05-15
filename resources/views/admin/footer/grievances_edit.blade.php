@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
    label{
    font-weight: 700;
    color: #2c2e3e;
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

                <form class="validate-form" method="POST" action="{{ route('footer/grievance_redressal_policy.update') }}" enctype="multipart/form-data" id="footer_form" onsubmit="return validateForm();" name="footer_form">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="control-label" for="">Introduction<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="introduction" id="summernote">{{$grievance_info->introduction}}</textarea>
                                  <div class="error" id="introductionErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Applicability Of The Policy<span class="text-danger">*</span></label>
                                    <textarea class="summernote1" name="apps_of_policy" id="summernote1">{{$grievance_info->apps_of_policy}}</textarea>
                                  <div class="error" id="apps_of_policyErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Process To Handle Customer Complaints/Grievances<span class="text-danger">*</span></label>
                                    <textarea class="summernote2" name="process_of_handle" id="summernote2">{{$grievance_info->process_of_handle}}</textarea>
                                  <div class="error" id="process_of_handleErr"></div>

                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="post">Branch Requirements<span class="text-danger">*</span></label>
                                    <textarea class="summernote3" name="branch_require" id="summernote3">{{$grievance_info->branch_require}}</textarea>
                                  <div class="error" id="branch_requireErr"></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="post">Registration Of Complaints And Time Frame<span class="text-danger">*</span></label>
                                    <textarea class="summernote4" name="registration_of_complaint" id="summernote4">{{$grievance_info->registration_of_complaint}}</textarea>
                                  <div class="error" id="registration_of_complaintErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Interaction With Customers<span class="text-danger">*</span></label>
                                    <textarea class="summernote5" name="interaction_with_customers" id="summernote5">{{$grievance_info->interaction_with_customers}}</textarea>
                                  <div class="error" id="interaction_with_customersErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Sensitizing Operating Staff On Handling Complaints<span class="text-danger">*</span></label>
                                    <textarea class="summernote6" name="operating_staff" id="summernote6">{{$grievance_info->operating_staff}}</textarea>
                                  <div class="error" id="operating_staffErr"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="post">Escalation Of Complaint To Reserve Bank Of India<span class="text-danger">*</span></label>
                                    <textarea class="summernote7" name="esclation_of_complaint" id="summernote7">{{$grievance_info->esclation_of_complaint}}</textarea>
                                  <div class="error" id="esclation_of_complaintErr"></div>

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
          var introduction = document.forms["footer_form"]["introduction"].value;
          introduction = "empty";
      }else{
          var introduction = document.forms["footer_form"]["introduction"].value;
      }

      // 2
      var check1 = $('#chk1').text();
      if(check1 == ''){
          var apps_of_policy = document.forms["footer_form"]["apps_of_policy"].value;
          apps_of_policy = "empty";
      }else{
          var apps_of_policy = document.forms["footer_form"]["apps_of_policy"].value;

      }

      // 3
      var check2 = $('#chk2').text();
      if(check2 == ''){
          var process_of_handle = document.forms["footer_form"]["process_of_handle"].value;
          process_of_handle = "empty";
      }else{
          var process_of_handle = document.forms["footer_form"]["process_of_handle"].value;
      }

      // 4
      var check3 = $('#chk3').text();
      if(check3 == ''){
          var branch_require = document.forms["footer_form"]["branch_require"].value;
          branch_require = "empty";
      }else{
          var branch_require = document.forms["footer_form"]["branch_require"].value;
      }
       // 5
       var check4 = $('#chk4').text();
      if(check4 == ''){
          var registration_of_complaint = document.forms["footer_form"]["registration_of_complaint"].value;
          registration_of_complaint = "empty";
      }else{
          var registration_of_complaint = document.forms["footer_form"]["registration_of_complaint"].value;
      }
       // 6
       var check5 = $('#chk5').text();
      if(check5 == ''){
          var interaction_with_customers = document.forms["footer_form"]["interaction_with_customers"].value;
          interaction_with_customers = "empty";
      }else{
          var interaction_with_customers = document.forms["footer_form"]["interaction_with_customers"].value;
      }

      // 7
      var check6 = $('#chk6').text();
      if(check6 == ''){
          var operating_staff = document.forms["footer_form"]["operating_staff"].value;
          operating_staff = "empty";
      }else{
          var operating_staff = document.forms["footer_form"]["operating_staff"].value;
      }
      // 8
      var check7 = $('#chk7').text();
      if(check7 == ''){
          var esclation_of_complaint = document.forms["footer_form"]["esclation_of_complaint"].value;
          esclation_of_complaint = "empty";
      }else{
          var esclation_of_complaint = document.forms["footer_form"]["esclation_of_complaint"].value;
      }


      // alert(descr);
      var introductionErr = apps_of_policyErr = process_of_handleErr = branch_requireErr = registration_of_complaintErr=interaction_with_customersErr=operating_staffErr=esclation_of_complaintErr=true;

      var seum = $('#chk2').text();

      if(introduction == "empty") {
      printError("introductionErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('introductionErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("introductionErr", "");
      introductionErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote").style.borderColor = "";
      // document.getElementById('seumErr').style.color = "";
      }


      // 2
      if(apps_of_policy == "empty") {
      printError("apps_of_policyErr", "Please enter the value");
      document.getElementById("summernote1").style.borderColor = "red";
      document.getElementById('apps_of_policyErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("apps_of_policyErr", "");
      apps_of_policyErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote1").style.borderColor = "";
      // document.getElementById('cl_useErr').style.color = "";
      }


      // 3
      if(process_of_handle == "empty") {
      printError("process_of_handleErr", "Please enter the value");
      document.getElementById("summernote2").style.borderColor = "red";
      document.getElementById('process_of_handleErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("process_of_handleErr", "");
      process_of_handleErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote2").style.borderColor = "";
      // document.getElementById('ty_dt_clErr').style.color = "";
      }


      // 4
      if(branch_require == "empty") {
      printError("branch_requireErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('branch_requireErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("branch_requireErr", "");
      branch_requireErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 5
      if(registration_of_complaint == "empty") {
      printError("registration_of_complaintErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('registration_of_complaintErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("registration_of_complaintErr", "");
      registration_of_complaintErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }

      // 6
      if(interaction_with_customers == "empty") {
      printError("interaction_with_customersErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('interaction_with_customersErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("interaction_with_customersErr", "");
      interaction_with_customersErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 7
      if(operating_staff == "empty") {
      printError("operating_staffErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('operating_staffErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("operating_staffErr", "");
      operating_staffErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 8
      if(esclation_of_complaint == "empty") {
      printError("esclation_of_complaintErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('esclation_of_complaintErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("esclation_of_complaintErr", "");
      esclation_of_complaintErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }




      if((introductionErr || apps_of_policyErr|| process_of_handleErr || branch_requireErr||registration_of_complaintErr||interaction_with_customersErr||operating_staffErr||esclation_of_complaintErr )  == true) {
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
