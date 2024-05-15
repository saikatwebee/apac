@extends('layouts.admin')
@section('content')

<style>
    textarea{
      resize: none;
    }
    label{
      color: #212529;
    }
        .note-editor.note-frame .note-editing-area {
      height: 200px !important;
    }
    .note-editor.note-frame .note-editing-area .note-editable {
      height: 200px !important;
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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Board of Directors - Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('director_list') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
                      <i class="fa fa-arrow-left btn btn-icon text-primary"  aria-hidden="true"></i>
                  </a>
              </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                  {{-- dir_upload --}}
                  <form action="{{route('director_update',$director->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dir_img">{{__('Director Image')}}</label><br>

                              <input type="file" name="dir_img" id="dir_img" accept="image/png, image/gif, image/jpeg">
                              <div class="pre">
                                <img
                                src="{{ asset('about/'.$director->dir_img) }}"  style="margin-left: 2px;
                                margin-top: 3px;"  width="50px" height="50px" id="output"/>
                              </div>
                            <input type="hidden" name="dir_img_old" id="dir_img_old" value="{{$director->dir_img}}">
                          <div class="error" id="dir_imgErr"></div>

                          </div>
                        <div class="form-group">
                          <label for="dir_nme">{{__('Director Name')}}</label>
                          <input type="text" name="dir_nme" id="dir_nme" class="form-control" value="{{$director->dir_nme}}">
                          <div class="error" id="dir_nmeErr"></div>

                        </div>

                        <div class="form-group">
                          <label for="dir_rol">{{__('Director Role')}}</label>
                          <input type="text" name="dir_rol" id="dir_rol" class="form-control" value="{{$director->dir_rol}}">
                          <div class="error" id="dir_rolErr"></div>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dir_descr">{{__('Director Descrpition')}}</label>
                          <textarea name="dir_descr" id="summernote" class="summernote">{{$director->dir_descr}}</textarea>
                          <div class="error" id="dir_descrErr"></div>

                        </div>
                      </div>

                      <div class="col-md-12">
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

      var summernote = $('.card-block').text();
      var dir_nme= document.about_form.dir_nme.value;
      var  dir_rol= document.about_form.dir_rol.value;



      var  dir_nmeErr=dir_rolErr=employeesErr=customersErr=stableErr=true;

    if(summernote == ""){
    var dir_descr = document.forms["about_form"]["dir_descr"].value;
    dir_descr = "empty";
    }else{
      var dir_descr = document.forms["about_form"]["dir_descr"].value;
    }
    var  dir_descrErr= true;




    if(dir_descr == "empty") {
      printError("dir_descrErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('dir_descrErr').style.color = "red";
    } else {
      printError("dir_descrErr", "");
      dir_descrErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('dir_descrErr').style.color = "";
    }





      if(dir_nme == "") {
          printError("dir_nmeErr", "Please Enter the value");
          document.getElementById("dir_nme").style.borderColor = "red";
          document.getElementById('dir_nmeErr').style.color = "red";
      } else {
              printError("dir_nmeErr", "");
              dir_nmeErr = false;
              document.getElementById("dir_nme").style.borderColor = "";
              document.getElementById('dir_nmeErr').style.color = "";
      }
      if(dir_rol == "") {
          printError("dir_rolErr", "Please Enter the value");
          document.getElementById("dir_rol").style.borderColor = "red";
          document.getElementById('dir_rolErr').style.color = "red";
      } else {
              printError("dir_rolErr", "");
              dir_rolErr = false;
              document.getElementById("dir_rol").style.borderColor = "";
              document.getElementById('dir_rolErr').style.color = "";
      }




      if((dir_nmeErr||dir_rolErr||dir_descrErr) == true) {
        return false;
      }
  }
  </script>



@endsection
