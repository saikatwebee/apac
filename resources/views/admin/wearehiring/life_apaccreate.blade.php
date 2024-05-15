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
                    <h1>We are Hiring</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">We are Hiring - Life @ Apac</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('life_apac') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('life_apac_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="wearehiring_form" onsubmit="return validateForm();" name="wearehiring_form">
                    @csrf
                    <div class="row">




                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="apac_image">{{__('Life @ APac Image')}}</label><br>
                          <input type="file" name="apac_image" id="apac_image" class="form-control" accept="image/png, image/gif, image/jpeg">
                          <div class="error" id="apac_image_imgErr"></div>

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



      var  apac_image= document.wearehiring_form.apac_image.value;


      var  apac_image_imgErr=true;

if(apac_image == "") {
          printError("apac_image_imgErr", "Please Enter the value");
          document.getElementById("apac_image").style.borderColor = "red";
          document.getElementById('apac_image_imgErr').style.color = "red";
      } else {
              printError("apac_image_imgErr", "");
              apac_image_imgErr = false;
              document.getElementById("apac_image").style.borderColor = "";
              document.getElementById('apac_image_imgErr').style.color = "";
      }






      if((apac_image_imgErr) == true) {
        return false;
      }
  }
  </script>

@endsection
