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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Overview Multiples Images-Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('overviewmultiples') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('overviewmultiples_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="multiples_form" onsubmit="return validateForm();" name="multiples_form">
                    @csrf
                    <div class="row">




                      <div class="col-md-12">
                        <div class="form-group @error('overview_image') has-error @enderror">
                          <label for="overview_image">{{__('Overview Multiples Images (200*120)')}}</label><br>
                          <input type="file" name="overview_image" id="overview_image" class="form-control"accept="image/png, image/gif, image/jpeg">
                          <div class="error" id="overview_image_imgErr"></div>
                          @if ($errors->has('overview_image'))
                                            <p class="text-danger">{{ $errors->first('overview_image') }}</p>
                          @endif

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



      var  overview_image= document.multiples_form.overview_image.value;


      var  overview_image_imgErr=true;

if(image == "") {
          printError("overview_image_imgErr", "Please Enter the value");
          document.getElementById("overview_image").style.borderColor = "red";
          document.getElementById('overview_image_imgErr').style.color = "red";
      } else {
              printError("overview_image_imgErr", "");
              image_imgErr = false;
              document.getElementById("overview_image").style.borderColor = "";
              document.getElementById('overview_image_imgErr').style.color = "";
      }






      if((overview_image_imgErr) == true) {
        return false;
      }
  }
  </script>

@endsection
