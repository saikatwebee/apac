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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Interest Rate Policy</li>
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
                    <form action="{{route('interestratepolicy.update')}}" method="post" enctype="multipart/form-data" autocomplete="off"  id="footer_form" onsubmit="return validateForm();" name="footer_form">
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
                                    <label for="intr">{{__('Introduction')}}</label>
                                    <textarea class="summernote" name="intr" id="summernote">
                                        {{$privacypolicy->intr}}
                                    </textarea>
                                  <div class="error" id="intrErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="rte_md">{{__('Interest Rate Model')}}</label>
                                    <textarea class="summernote1" name="rte_md" id="summernote1"> {{$privacypolicy->rte_md}}</textarea>
                                  <div class="error" id="rte_mdErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="ap_grd_rk">{{__('Approach For Gradation Of Risk')}}</label>
                                    <textarea class="summernote2" name="ap_grd_rk" id="summernote2"> {{$privacypolicy->ap_grd_rk}}</textarea>
                                  <div class="error" id="ap_grd_rkErr"></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="com_frm">{{__('Communication Framework')}}</label>
                                    <textarea class="summernote3" name="com_frm" id="summernote3"> {{$privacypolicy->com_frm}}</textarea>
                                  <div class="error" id="com_frmErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="rev_mod">{{__('Review/Modifications')}}</label>
                                    <textarea class="summernote4" name="rev_mod" id="summernote4"> {{$privacypolicy->rev_mod}}</textarea>
                                  <div class="error" id="rev_modErr"></div>

                                </div>
                                <div class="form-group">
                                    <label for="sch_chr">{{__('Schedule Of Charges')}}</label>
                                    <textarea class="summernote5" name="sch_chr" id="summernote5"> {{$privacypolicy->sch_chr}}</textarea>
                                  <div class="error" id="sch_chrErr"></div>

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
          var intr = document.forms["footer_form"]["intr"].value;
          intr = "empty";
      }else{
          var intr = document.forms["footer_form"]["intr"].value;
      }

      // 2
      var check1 = $('#chk1').text();
      if(check1 == ''){
          var rte_md = document.forms["footer_form"]["rte_md"].value;
          rte_md = "empty";
      }else{
          var rte_md = document.forms["footer_form"]["rte_md"].value;

      }

      // 3
      var check2 = $('#chk2').text();
      if(check2 == ''){
          var ap_grd_rk = document.forms["footer_form"]["ap_grd_rk"].value;
          ap_grd_rk = "empty";
      }else{
          var ap_grd_rk = document.forms["footer_form"]["ap_grd_rk"].value;
      }

      // 4
      var check3 = $('#chk3').text();
      if(check3 == ''){
          var com_frm = document.forms["footer_form"]["com_frm"].value;
          com_frm = "empty";
      }else{
          var com_frm = document.forms["footer_form"]["com_frm"].value;
      }
       // 5
       var check4 = $('#chk4').text();
      if(check4 == ''){
          var rev_mod = document.forms["footer_form"]["rev_mod"].value;
          rev_mod = "empty";
      }else{
          var rev_mod = document.forms["footer_form"]["rev_mod"].value;
      }
       // 6
       var check5 = $('#chk5').text();
      if(check5 == ''){
          var sch_chr = document.forms["footer_form"]["sch_chr"].value;
          sch_chr = "empty";
      }else{
          var sch_chr = document.forms["footer_form"]["sch_chr"].value;
      }

      // alert(descr);
      var intrErr = rte_mdErr = ap_grd_rkErr = com_frmErr = rev_modErr=sch_chrErr=true;

      var seum = $('#chk2').text();

      if(intr == "empty") {
      printError("intrErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('intrErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("intrErr", "");
      intrErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote").style.borderColor = "";
      // document.getElementById('seumErr').style.color = "";
      }


      // 2
      if(rte_md == "empty") {
      printError("rte_mdErr", "Please enter the value");
      document.getElementById("summernote1").style.borderColor = "red";
      document.getElementById('rte_mdErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("rte_mdErr", "");
      rte_mdErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote1").style.borderColor = "";
      // document.getElementById('cl_useErr').style.color = "";
      }


      // 3
      if(ap_grd_rk == "empty") {
      printError("ap_grd_rkErr", "Please enter the value");
      document.getElementById("summernote2").style.borderColor = "red";
      document.getElementById('ap_grd_rkErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("ap_grd_rkErr", "");
      ap_grd_rkErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote2").style.borderColor = "";
      // document.getElementById('ty_dt_clErr').style.color = "";
      }


      // 4
      if(com_frm == "empty") {
      printError("com_frmErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('com_frmErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("com_frmErr", "");
      com_frmErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }
      // 5
      if(rev_mod == "empty") {
      printError("rev_modErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('rev_modErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("rev_modErr", "");
      rev_modErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }

      // 6
      if(sch_chr == "empty") {
      printError("sch_chrErr", "Please enter the value");
      document.getElementById("summernote3").style.borderColor = "red";
      document.getElementById('sch_chrErr').style.color = "red";
      // $('.note-editor').css('border-color', 'red');

      } else {
      printError("sch_chrErr", "");
      sch_chrErr = false;
      $('.note-editor').css('border-color', '');
      document.getElementById("summernote3").style.borderColor = "";
      // document.getElementById('lrg_reqErr').style.color = "";
      }


      if((intrErr || rte_mdErr|| ap_grd_rkErr || com_frmErr||rev_modErr||sch_chrErr )  == true) {
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
