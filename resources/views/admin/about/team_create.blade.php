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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Management Team - Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('team_list') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('team_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="team_img">{{__('Team Image')}}</label><br>
                          <input type="file" name="team_img" id="team_img" accept="image/png, image/gif, image/jpeg">
                          <div class="error" id="team_imgErr"></div>

                        </div>
                        <div class="form-group">
                          <label for="tem_nme">{{__('Team Name')}}</label>
                          <input type="text" name="tem_nme" id="tem_nme" class="form-control">
                          <div class="error" id="tem_nmeErr"></div>

                        </div>

                        <div class="form-group">
                          <label for="tem_rol">{{__('Team Role')}}</label>
                          <input type="text" name="tem_rol" id="tem_rol" class="form-control">
                          <div class="error" id="tem_rolErr"></div>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tem_descr">{{__('Team Descrpition')}}</label>
                          <textarea name="tem_descr" id="summernote" class="summernote"></textarea>
                           <div class="error" id="team_descrErr"></div>
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

   //    var summernote = document.about_form.summernote.value;
      var tem_nme= document.about_form.tem_nme.value;
      var  tem_rol= document.about_form.tem_rol.value;
      var  team_img= document.about_form.team_img.value;
     var  tem_descr= document.about_form.tem_descr.value;

      var  team_descrErr = team_imgErr = tem_nmeErr=tem_rolErr=true;

if(team_img == "") {
          printError("team_imgErr", "Please Enter the value");
          document.getElementById("team_img").style.borderColor = "red";
          document.getElementById('team_imgErr').style.color = "red";
      } else {
              printError("team_imgErr", "");
              team_imgErr = false;
              document.getElementById("team_img").style.borderColor = "";
              document.getElementById('team_imgErr').style.color = "";
      }


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
    
    if(tem_descr == "") {
          printError("team_descrErr", "Please enter the value");
          document.getElementById("summernote").style.borderColor = "red";
          document.getElementById('team_descrErr').style.color = "red";
        } else {
          printError("team_descrErr", "");
          team_descrErr = false;
          document.getElementById("summernote").style.borderColor = "";
          document.getElementById('team_descrErr').style.color = "";
        }

      if((team_imgErr || tem_nmeErr||tem_rolErr || team_descrErr) == true) {
        return false;
      }
  }
  </script>

@endsection
