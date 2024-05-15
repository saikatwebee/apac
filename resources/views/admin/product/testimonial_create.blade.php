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
                    <h1>Product Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Testimonial - Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('testimonial_list') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('testimonial_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tes_img">{{__('Testimonial Image')}} <span class="text-danger">*</span></label><br>
                          <input type="file" name="tes_img" id="tes_img" accept="image/png, image/gif, image/jpeg">
                          <div class="error" id="tes_imgErr"></div>

                        </div>

                        <div class="form-group">
                          <label for="tes_nme">{{__('Testimonial Name')}} <span class="text-danger">*</span></label>
                          <input type="text" name="tes_nme" id="tes_nme" class="form-control">
                          <div class="error" id="tes_nmeErr"></div>

                        </div>

                        <div class="form-group">
                          <label for="tes_rol">{{__('Testimonial Role')}} <span class="text-danger">*</span></label>
                          <input type="text" name="tes_rol" id="tes_rol" class="form-control">
                          <div class="error" id="tes_rolErr"></div>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tes_descr">{{__('Testimonial Descrpition')}} <span class="text-danger">*</span></label>
                          <textarea name="tes_descr" id="tes_descr" class="form-control" rows="9" cols="50"></textarea>
                          <div class="error" id="tes_descrErr"></div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">Create</button>
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
      var tes_img = document.about_form.tes_img.value;
      var tes_nme= document.about_form.tes_nme.value;

      var tes_rol= document.about_form.tes_rol.value;
      var tes_descr= document.about_form.tes_descr.value;

    var tes_imgErr = tes_nmeErr = tes_rolErr = tes_descrErr = true;


    if(tes_descr == "") {
      printError("tes_descrErr", "Please Enter Descrpition");
      document.getElementById("tes_descr").style.borderColor = "red";
      document.getElementById('tes_descrErr').style.color = "red";
    } else {
      printError("tes_descrErr", "");
      tes_descrErr = false;
      document.getElementById("tes_descr").style.borderColor = "";
      document.getElementById('tes_descrErr').style.color = "";
    }

      if(tes_img == "") {
          printError("tes_imgErr", "Please choose the image");
          document.getElementById("tes_img").style.borderColor = "red";
          document.getElementById('tes_imgErr').style.color = "red";
      } else {
              printError("tes_imgErr", "");
              tes_imgErr = false;
              document.getElementById("tes_img").style.borderColor = "";
              document.getElementById('tes_imgErr').style.color = "";
      }



      if(tes_nme == "") {
          printError("tes_nmeErr", "Please Enter Name");
          document.getElementById("tes_nme").style.borderColor = "red";
          document.getElementById('tes_nmeErr').style.color = "red";
      } else {
              printError("tes_nmeErr", "");
              tes_nmeErr = false;
              document.getElementById("tes_nme").style.borderColor = "";
              document.getElementById('tes_nmeErr').style.color = "";
      }
      if(tes_rol == "") {
          printError("tes_rolErr", "Please Enter Role");
          document.getElementById("tes_rol").style.borderColor = "red";
          document.getElementById('tes_rolErr').style.color = "red";
      } else {
              printError("tes_rolErr", "");
              tes_rolErr = false;
              document.getElementById("tes_rol").style.borderColor = "";
              document.getElementById('tes_rolErr').style.color = "";
      }


      if((tes_imgErr||tes_nmeErr||tes_rolErr||tes_descrErr) == true) {
        return false;
      }
  }
  </script>

@endsection
