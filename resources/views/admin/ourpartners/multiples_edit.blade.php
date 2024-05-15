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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Management Team - Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('multiples') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('multiples_update',$multiples->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="multiples_form" onsubmit="return validateForm();" name="multiples_form">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="team_img">{{__('Multiples Image (200*120)')}}</label><br>

                              <input type="file" name="image" id="image">
                              <div class="pre">
                                <img
                                src="{{ asset('investor/'.$multiples->image) }}"  style="margin-left: 2px;
                                margin-top: 3px;"  width="50px" height="50px" id="output"/>
                              </div>
                            <input type="hidden" name="image_img_old" id="image_img_old" value="{{$multiples->image}}">
                          <div class="error" id="image_imgErr"></div>

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
{{-- <script>
    function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
  }

  function validateForm() {

   //    var summernote = document.about_form.summernote.value;
      var tem_nme= document.about_form.tem_nme.value;
      var  tem_rol= document.about_form.tem_rol.value;



      var  tem_nmeErr=tem_rolErr=true;




      if(tem_nme == "") {
          printError("tem_nmeErr", "Please Enter the value");
          document.getElementById("tem_nme").style.borderColor = "red";
          document.getElementById('tem_nmeErr').style.color = "red";
      } else {
              printError("tem_nmeErr", "");
              tem_nmeErr = false;
              document.getElementById("tem_nme").style.borderColor = "";
              document.getElementById('tem_nmeErr').style.color = "";
      }
      if(tem_rol == "") {
          printError("tem_rolErr", "Please Enter the value");
          document.getElementById("tem_rol").style.borderColor = "red";
          document.getElementById('tem_rolErr').style.color = "red";
      } else {
              printError("tem_rolErr", "");
              tem_rolErr = false;
              document.getElementById("tem_rol").style.borderColor = "";
              document.getElementById('tem_rolErr').style.color = "";
      }



      if((tem_nmeErr||tem_rolErr) == true) {
        return false;
      }
  }
  </script> --}}

@endsection
