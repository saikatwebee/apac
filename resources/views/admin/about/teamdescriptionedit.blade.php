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
                    <h1>About Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Team Description</li>
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
                      <form action="{{route('about.team_descriptionupdate')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form"  onsubmit="return validateForm();" name="about_form">
                        @csrf
                        @if (Session::has('msg'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                        <strong>{{session::get('msg')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="team_description">{{__('Team Description')}}</label>
                              <textarea class="form-control" name="team_description" id="team_description" rows="5">{{$team_description->team_description}}</textarea>
                              <div class="error" id="team_descriptionErr"></div>

                            </div>
                            <div class="form-group">
                                <label for="team_img">{{__('Team Image')}}</label>
                                <input type="file" name="team_img" id="team_img" class="form-control" accept="image/png, image/gif, image/jpeg">
                                <div class="pre">
                                <img
                                src="{{ asset('Team_groupicons/'.$team_description->team_img) }}"  style="margin-left: 2px;
                                margin-top: 3px;"  width="100%" height="500px" id="output"/>
                                </div>
                                <input type="hidden" name="team_img_img_old" id="team_img_img_old" value="{{$team_description->team_img}}">
                          <div class="error" id="team_img_imgErr"></div>
                          @if ($errors->has('team_img'))
                          <p class="text-danger">{{ $errors->first('team_img') }}</p>
                          @endif

                              </div>
                          </div>

                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
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
    var team_description= document.about_form.team_description.value;
    var team_img_imgErr= document.about_form.team_img_imgErr.value;



    var  team_descriptionErr=team_img_imgErr=true;



   if(team_description == "") {
           printError("team_descriptionErr", "Please Enter the value");
           document.getElementById("team_description").style.borderColor = "red";
           document.getElementById('team_descriptionErr').style.color = "red";
       } else {
               printError("team_descriptionErr", "");
               team_descriptionErr = false;
               document.getElementById("team_description").style.borderColor = "";
               document.getElementById('team_descriptionErr').style.color = "";
       }


   if(team_img == "") {
           printError("team_img_imgErr", "Please Enter the value");
           document.getElementById("team_img").style.borderColor = "red";
           document.getElementById('team_img_imgErr').style.color = "red";
       } else {
               printError("team_img_imgErr", "");
               team_img_imgErr = false;
               document.getElementById("team_img").style.borderColor = "";
               document.getElementById('team_img_imgErr').style.color = "";
       }

       if((team_descriptionErr||team_img_imgErr) == true) {
         return false;
       }
    }
</script>
@endsection
