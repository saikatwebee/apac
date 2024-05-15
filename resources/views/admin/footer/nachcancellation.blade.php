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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Nach Cancellation</li>
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
                    <form  action="{{route('nachcancellation.update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="footer_form" onsubmit="return validateForm();" name="footer_form">
                        @csrf
                            @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                                    <strong>{{session::get('message')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="dir_nme">{{__('Customer Service: Request for NACH Cancellation')}}</label>
                                <textarea class="summernote" name="nac_desc" id="summernote">{{$nachcancellation->nac_desc}}</textarea>
                                <div class="error" id="nac_descErr"></div>

                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update</button>
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
      var nac_desc = document.forms["footer_form"]["nac_desc"].value;
      nac_desc = "empty";
    }else{
      var nac_desc = document.forms["footer_form"]["nac_desc"].value;
    }

    var nac_descErr = true;

    if(nac_desc == "empty") {
        
      printError("nac_descErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('nac_descErr').style.color = "red";
    } else {
      printError("nac_descErr", "");
      nac_descErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('nac_descErr').style.color = "";
    }


    if((nac_descErr)  == true) {
      return false;
    } else{
      //alert(email + " = " + password)
    }
   }
   </script>

@endsection
