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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Fair Practice Code</li>
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
                    <form action="{{route('fairpracticecode.update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="footer_form" onsubmit="return validateForm();" name="footer_form">
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
                                    <label for="fr_prt_cd">{{__('Fair Practices Code')}}</label>
                                    <textarea class="summernote" name="fr_prt_cd" id="summernote">
                                       {{$fairpracticecode->fr_prt_cd}}
                                    </textarea>
                                  <div class="error" id="fr_prt_cdErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ob_cd">{{__('Objectives Of The Code')}}</label>
                                    <textarea class="summernote1" name="ob_cd" id="summernote1">
                                       {{$fairpracticecode->ob_cd}}
                                    </textarea>
                                  <div class="error" id="ob_cdErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ky_com">{{__('Key Commitments')}}</label>
                                    <textarea class="summernote2" name="ky_com" id="summernote2">
                                       {{$fairpracticecode->ky_com}}
                                    </textarea>
                                  <div class="error" id="ky_comErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ap_ln_pr">{{__('Applications For Loans And Their Processing')}}</label>
                                    <textarea class="summernote3" name="ap_ln_pr" id="summernote3">
                                        {{$fairpracticecode->ap_ln_pr}}
                                         </textarea>
                                  <div class="error" id="ap_ln_prErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ln_ap_cd">{{__('Loan Appraisal And Terms/Conditions')}}</label>
                                    <textarea class="summernote4" name="ln_ap_cd" id="summernote4">
                                        {{$fairpracticecode->ln_ap_cd}}
                                    </textarea>
                                  <div class="error" id="ln_ap_cdErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="db_ln_tc">{{__('Disbursement Of Loans Including Changes In Terms And Conditions')}}</label>
                                    <textarea class="summernote12" name="db_ln_tc" id="summernote12">
                                        {{$fairpracticecode->db_ln_tc}}
                                     </textarea>
                                  <div class="error" id="db_ln_tcErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ap_dl_ie">{{__('Applicant With Disability (Ies)')}}</label>
                                    <textarea class="summernote5" name="ap_dl_ie" id="summernote5">
                                        {{$fairpracticecode->ap_dl_ie}}
                                         </textarea>
                                  <div class="error" id="ap_dl_ieErr"></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genr">{{__('General')}}</label>
                                    <textarea class="summernote6" name="genr" id="summernote6">
                                        {{$fairpracticecode->genr}}
                                    </textarea>
                                  <div class="error" id="genrErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="rp_br_efrm">{{__('Responsibility Of Board Of Directors Towards An Effective Grievance Redressal Mechanism')}}</label>
                                    <textarea class="summernote7" name="rp_br_efrm" id="summernote7">
                                         {{$fairpracticecode->rp_br_efrm}}
                                     </textarea>
                                  <div class="error" id="rp_br_efrmErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="rv_fr_cd">{{__('Review Of The Fair Practices Code')}}</label>
                                    <textarea class="summernote8" name="rv_fr_cd" id="summernote8">
                                        {{$fairpracticecode->rv_fr_cd}}
                                    </textarea>
                                  <div class="error" id="rv_fr_cdErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="frc_maj">{{__('Force Majeure')}}</label>
                                    <textarea class="summernote9" name="frc_maj" id="summernote9">
                                        {{$fairpracticecode->frc_maj}}
                                    </textarea>
                                  <div class="error" id="frc_majErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="outs">{{__('Outsourcing')}}</label>
                                    <textarea class="summernote10" name="outs" id="summernote10">
                                        {{$fairpracticecode->outs}}
                                    </textarea>
                                  <div class="error" id="outsErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="gr_rd_mc">{{__('Grievances Redressal Mechanism')}}</label>
                                    <textarea class="summernote11" name="gr_rd_mc" id="summernote11">
                                        {{$fairpracticecode->gr_rd_mc}}
                                    </textarea>
                                  <div class="error" id="gr_rd_mcErr"></div>

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
<script>
    function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
  }
  function validateForm() {



      // 1
      var check0 = $('#chk0').text();
      if(check0 == ''){
          var fr_prt_cd = document.forms["footer_form"]["fr_prt_cd"].value;
          fr_prt_cd = "empty";
      }else{
          var fr_prt_cd = document.forms["footer_form"]["fr_prt_cd"].value;
      }

      // 2
      var check1 = $('#chk1').text();
      if(check1 == ''){
          var ob_cd = document.forms["footer_form"]["ob_cd"].value;
          ob_cd = "empty";
      }else{
          var ob_cd = document.forms["footer_form"]["ob_cd"].value;

      }

      // 3
      var check2 = $('#chk2').text();
      if(check2 == ''){
          var ky_com = document.forms["footer_form"]["ky_com"].value;
          ky_com = "empty";
      }else{
          var ky_com = document.forms["footer_form"]["ky_com"].value;
      }

      // 4
      var check3 = $('#chk3').text();
      if(check3 == ''){
          var ap_ln_pr = document.forms["footer_form"]["ap_ln_pr"].value;
          ap_ln_pr = "empty";
      }else{
          var ap_ln_pr = document.forms["footer_form"]["ap_ln_pr"].value;
      }
       // 5
       var check4 = $('#chk4').text();
      if(check4 == ''){
          var ln_ap_cd = document.forms["footer_form"]["ln_ap_cd"].value;
          ln_ap_cd = "empty";
      }else{
          var ln_ap_cd = document.forms["footer_form"]["ln_ap_cd"].value;
      }
       // 6
       var check5 = $('#chk5').text();
      if(check5 == ''){
          var db_ln_tc = document.forms["footer_form"]["db_ln_tc"].value;
          db_ln_tc = "empty";
      }else{
          var db_ln_tc = document.forms["footer_form"]["db_ln_tc"].value;
      }

      // 7
      var check6 = $('#chk6').text();
      if(check6 == ''){
          var ap_dl_ie = document.forms["footer_form"]["ap_dl_ie"].value;
          ap_dl_ie = "empty";
      }else{
          var ap_dl_ie = document.forms["footer_form"]["ap_dl_ie"].value;
      }
      // 8
      var check7 = $('#chk7').text();
      if(check7 == ''){
          var genr = document.forms["footer_form"]["genr"].value;
          genr = "empty";
      }else{
          var genr = document.forms["footer_form"]["genr"].value;
      }
      // 9
      var check8 = $('#chk8').text();
      if(check8 == ''){
          var rp_br_efrm = document.forms["footer_form"]["rp_br_efrm"].value;
          rp_br_efrm = "empty";
      }else{
          var rp_br_efrm = document.forms["footer_form"]["rp_br_efrm"].value;
      }
      // 10
      var check9 = $('#chk9').text();
      if(check9 == ''){
          var rv_fr_cd = document.forms["footer_form"]["rv_fr_cd"].value;
          rv_fr_cd = "empty";
      }else{
          var rv_fr_cd = document.forms["footer_form"]["rv_fr_cd"].value;
      }
      // 11
      var check10 = $('#chk10').text();
      if(check10 == ''){
          var frc_maj = document.forms["footer_form"]["frc_maj"].value;
          frc_maj = "empty";
      }else{
          var frc_maj = document.forms["footer_form"]["frc_maj"].value;
      }
      // 12
      var check11 = $('#chk11').text();
      if(check11 == ''){
          var outs = document.forms["footer_form"]["outs"].value;
          outs = "empty";
      }else{
          var outs = document.forms["footer_form"]["outs"].value;
      }
      // 13
      var check12 = $('#chk12').text();
      if(check12 == ''){
          var gr_rd_mc = document.forms["footer_form"]["gr_rd_mc"].value;
          gr_rd_mc = "empty";
      }else{
          var gr_rd_mc = document.forms["footer_form"]["gr_rd_mc"].value;
      }

      // alert(descr);
      var fr_prt_cdErr = ob_cdErr = ky_comErr = ap_ln_prErr = ln_ap_cdErr=db_ln_tcErr=ap_dl_ieErr=genrErr=rp_br_efrmErr=rv_fr_cdErr=frc_majErr=outsErr=gr_rd_mcErr=true;

      var seum = $('#chk2').text();

      if(fr_prt_cd == "empty") {
      printError("fr_prt_cdErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('fr_prt_cdErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("fr_prt_cdErr", "");
      fr_prt_cdErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote").style.borderColor = "";
      // document.getElementById('seumErr').style.color = "";
      }


      // 2
      if(ob_cd == "empty") {
      printError("ob_cdErr", "Please enter the value");
      document.getElementById("summernote1").style.borderColor = "red";
      document.getElementById('ob_cdErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ob_cdErr", "");
      ob_cdErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote1").style.borderColor = "";
      // document.getElementById('cl_useErr').style.color = "";
      }


      // 3
      if(ky_com == "empty") {
      printError("ky_comErr", "Please enter the value");
      document.getElementById("summernote2").style.borderColor = "red";
      document.getElementById('ky_comErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ky_comErr", "");
      ky_comErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote2").style.borderColor = "";
      // document.getElementById('ty_dt_clErr').style.color = "";
      }


      // 4
      if(ap_ln_pr == "empty") {
      printError("ap_ln_prErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('ap_ln_prErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ap_ln_prErr", "");
      ap_ln_prErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 5
      if(ln_ap_cd == "empty") {
      printError("ln_ap_cdErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('ln_ap_cdErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ln_ap_cdErr", "");
      ln_ap_cdErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }

      // 6
      if(db_ln_tc == "empty") {
      printError("db_ln_tcErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('db_ln_tcErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("db_ln_tcErr", "");
      db_ln_tcErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 7
      if(ap_dl_ie == "empty") {
      printError("ap_dl_ieErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('ap_dl_ieErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ap_dl_ieErr", "");
      ap_dl_ieErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 8
      if(genr == "empty") {
      printError("genrErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('genrErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("genrErr", "");
      genrErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 9
      if(rp_br_efrm == "empty") {
      printError("rp_br_efrmErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('rp_br_efrmErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("rp_br_efrmErr", "");
      rp_br_efrmErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 10
      if(rv_fr_cd == "empty") {
      printError("rv_fr_cdErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('rv_fr_cdErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("rv_fr_cdErr", "");
      rv_fr_cdErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      //11
      if(frc_maj == "empty") {
      printError("frc_majErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('frc_majErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("frc_majErr", "");
      frc_majErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 12
      if(outs == "empty") {
      printError("outsErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('outsErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("outsErr", "");
      outsErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 13
      if(gr_rd_mc == "empty") {
      printError("gr_rd_mcErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('gr_rd_mcErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("gr_rd_mcErr", "");
      gr_rd_mcErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }


      if((fr_prt_cdErr || ob_cdErr|| ky_comErr || ap_ln_prErr||ln_ap_cdErr||db_ln_tcErr||ap_dl_ieErr||genrErr||rp_br_efrmErr||rv_fr_cdErr||frc_majErr||outsErr||gr_rd_mcErr )  == true) {
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
