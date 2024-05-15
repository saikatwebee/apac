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
                    <h1>We’re Hiring</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">why join - update</li>
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


                    <form action="{{route('why_join_update',$whyjoins->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
                      @csrf
                      @if (Session::has('msg'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                        <strong>{{session::get('msg')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif

                      <div class="p-3 text-center bg-none">
                        <h3 class="mb-3">{{__('Hiring Description')}}</h3>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group @error('hiring_desc') has-error @enderror">
                                <label for="hiring_desc" class="control-label">{{ __('Hiring Description') }}</label>
                                <textarea class="summernote" name="hiring_desc" id="summernote" >{{$whyjoins->hiring_desc}}</textarea>
                                <div class="error" id="hiring_descErr"></div>

                                    @if($errors->has('hiring_desc'))
                                        <p class="text-danger">{{ $errors->first('hiring_desc') }}</p>
                                    @endif
                            </div>
                        </div>
                    </div>

                      <div class="p-3 text-center bg-none">
                        <h3 class="mb-3">{{__('Why Join APAC')}}</h3>
                      </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tes_img">{{__('point1')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point1" id="point1" value="{{$whyjoins->point1}}" class="form-control" >
                                    <div class="error" id="point1Err"></div>

                                </div>
                                <div class="form-group">
                                    <label for="tes_img">{{__('point3')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point3" id="point3" value="{{$whyjoins->point3}}" class="form-control">
                                    <div class="error" id="point3Err"></div>


                                </div>
                                <div class="form-group">
                                    <label for="tes_img">{{__('point5')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point5" id="point5" value="{{$whyjoins->point5}}" class="form-control">
                                    <div class="error" id="point5Err"></div>

                                </div>
                                <div class="form-group">
                                    <label for="tes_img">{{__('point2')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point2" id="point2" value="{{$whyjoins->point2}}" class="form-control">
                                    <div class="error" id="point2Err"></div>


                                </div>
                                <div class="form-group">
                                    <label for="tes_img">{{__('point4')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point4" id="point4" value="{{$whyjoins->point4}}" class="form-control">
                                    <div class="error" id="point4Err"></div>


                                </div>
                                <div class="form-group">
                                    <label for="tes_img">{{__('point6')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="point6" id="point6" value="{{$whyjoins->point6}}" class="form-control">
                                    <div class="error" id="point6Err"></div>

                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos1') has-error @enderror">
                                    <label for="whyjoin_logos1" class="control-label">{{ __('Why Join logos 1') }}</label>
                                    <input type="file" name="whyjoin_logos1" id="whyjoin_logos1" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos1) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos1_img_old" id="whyjoin_logos1_img_old" value="{{$whyjoins->whyjoin_logos1}}">
                          <div class="error" id="whyjoin_logos1_imgErr"></div>
                          @if ($errors->has('whyjoin_logos1'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos1') }}</p>
                          @endif
                                </div>
                                {{-- 1 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos2') has-error @enderror">
                                    <label for="whyjoin_logos2" class="control-label">{{ __('Why Join logos 2') }}</label>
                                    <input type="file" name="whyjoin_logos2" id="whyjoin_logos2" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos2) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos2_img_old" id="whyjoin_logos2_img_old" value="{{$whyjoins->whyjoin_logos2}}">
                          <div class="error" id="whyjoin_logos2_imgErr"></div>
                          @if ($errors->has('whyjoin_logos2'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos2') }}</p>
                          @endif
                                </div>
                                {{-- 2 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos3') has-error @enderror">
                                    <label for="whyjoin_logos3" class="control-label">{{ __('Why Join logos 3') }}</label>
                                    <input type="file" name="whyjoin_logos3" id="whyjoin_logos3" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos3) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos3_img_old" id="whyjoin_logos3_img_old" value="{{$whyjoins->whyjoin_logos3}}">
                          <div class="error" id="benefit_logos3_imgErr"></div>
                          @if ($errors->has('whyjoin_logos3'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos3') }}</p>
                          @endif
                                </div>
                                {{-- 3 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos4') has-error @enderror">
                                    <label for="whyjoin_logos4" class="control-label">{{ __('Why Join logos 4') }}</label>
                                    <input type="file" name="whyjoin_logos4" id="whyjoin_logos4" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos4) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos4_img_old" id="whyjoin_logos4_img_old" value="{{$whyjoins->whyjoin_logos4}}">
                          <div class="error" id="whyjoin_logos4_imgErr"></div>
                          @if ($errors->has('whyjoin_logos4'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos4') }}</p>
                          @endif
                                </div>
                                {{-- 4 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos5') has-error @enderror">
                                    <label for="whyjoin_logos5" class="control-label">{{ __('Why Join logos 5') }}</label>
                                    <input type="file" name="whyjoin_logos5" id="whyjoin_logos5" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos5) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos5_img_old" id="whyjoin_logos5_img_old" value="{{$whyjoins->whyjoin_logos5}}">
                          <div class="error" id="whyjoin_logos5_imgErr"></div>
                          @if ($errors->has('whyjoin_logos5'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos5') }}</p>
                          @endif
                                </div>
                                {{-- 5 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('whyjoin_logos6') has-error @enderror">
                                    <label for="whyjoin_logos6" class="control-label">{{ __('Why Join logos 6') }}</label>
                                    <input type="file" name="whyjoin_logos6" id="whyjoin_logos6" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('whyjoin_icons/'.$whyjoins->whyjoin_logos6) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="whyjoin_logos6_img_old" id="whyjoin_logos6_img_old" value="{{$whyjoins->whyjoin_logos6}}">
                          <div class="error" id="whyjoin_logos6_imgErr"></div>
                          @if ($errors->has('whyjoin_logos6'))
                          <p class="text-danger">{{ $errors->first('whyjoin_logos6') }}</p>
                          @endif
                                </div>
                                {{-- 6 --}}




                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100">Update</button>
                              </div>
                        </div>
                    {{-- </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
     $('.summernote').summernote({
       height: 300,
     });
   });
 </script>

<script>
    function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
  }

  function validateForm() {
      var summernote = $('.card-block').text();
    //   var hiring_desc= document.about_form.hiring_desc.value;
      var point1= document.about_form.point1.value;
      var point2= document.about_form.point2.value;
      var point3= document.about_form.point3.value;
      var point4= document.about_form.point4.value;
      var point5= document.about_form.point5.value;
      var point6= document.about_form.point6.value;


    var point1Err  = point2Err  = point3Err  = point4Err  = point6Err  = point6Err = true;

    if(summernote == ""){
    var hiring_desc = document.forms["about_form"]["hiring_desc"].value;
    hiring_desc = "empty";
    }else{
      var hiring_desc = document.forms["about_form"]["hiring_desc"].value;
    }
    var  hiring_descErr= true;


    if(hiring_desc == "empty") {
      printError("hiring_descErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('hiring_descErr').style.color = "red";
    } else {
      printError("hiring_descErr", "");
      hiring_descErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('hiring_descErr').style.color = "";
    }
    // point 1
    if(point1 == "") {
      printError("point1Err", "Please Enter The Value");
      document.getElementById("point1").style.borderColor = "red";
      document.getElementById('point1Err').style.color = "red";
    } else {
      printError("point1Err", "");
      point1Err = false;
      document.getElementById("point1").style.borderColor = "";
      document.getElementById('point1Err').style.color = "";
    }

    // point 2
    if(point2 == "") {
      printError("point2Err", "Please Enter The Value");
      document.getElementById("point2").style.borderColor = "red";
      document.getElementById('point2Err').style.color = "red";
    } else {
      printError("point2Err", "");
      point2Err = false;
      document.getElementById("point2").style.borderColor = "";
      document.getElementById('point2Err').style.color = "";
    }

    // point 3
    if(point3 == "") {
      printError("point3Err", "Please Enter The Value");
      document.getElementById("point3").style.borderColor = "red";
      document.getElementById('point3Err').style.color = "red";
    } else {
      printError("point3Err", "");
      point3Err = false;
      document.getElementById("point3").style.borderColor = "";
      document.getElementById('point3Err').style.color = "";
    }

    // point 4
    if(point4 == "") {
      printError("point4Err", "Please Enter The Value");
      document.getElementById("point4").style.borderColor = "red";
      document.getElementById('point4Err').style.color = "red";
    } else {
      printError("point4Err", "");
      point4Err = false;
      document.getElementById("point4").style.borderColor = "";
      document.getElementById('point4Err').style.color = "";
    }

    // point 5
    if(point5 == "") {
      printError("point5Err", "Please Enter The Value");
      document.getElementById("point5").style.borderColor = "red";
      document.getElementById('point5Err').style.color = "red";
    } else {
      printError("point5Err", "");
      point5Err = false;
      document.getElementById("point5").style.borderColor = "";
      document.getElementById('point5Err').style.color = "";
    }

    // point 6
    if(point6 == "") {
      printError("point6Err", "Please Enter The Value");
      document.getElementById("point6").style.borderColor = "red";
      document.getElementById('point6Err').style.color = "red";
    } else {
      printError("point6Err", "");
      point6Err = false;
      document.getElementById("point6").style.borderColor = "";
      document.getElementById('point6Err').style.color = "";
    }


      if((point1Err || point2Err || point3Err || point4Err || point5Err || point6Err||hiring_descErr) == true) {
        return false;
      }
  }
  </script>



@endsection
