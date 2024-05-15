@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
    label{
    font-weight: 700;
    color: #2c2e3e;
}
.form-controlhalf
{
    width: 50%;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>{{$home_page_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">{{$update_title}}</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card py-5">
                <div class="col-12">
                    @if(session('success'))
    <div class="alert alert-inverse-success border-0 alert-dismissible fade show border-radius-none" uk-alert>
        {{-- <button type="button text-white" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
        {{session('success')}}
    </div>
@endif
                </div>

                <form class="validate-form" method="POST" action="{{ route('home_page.update') }}" enctype="multipart/form-data" id="home_form" onsubmit="return validateForm();" name="home_form">
                    @csrf

                    <div class="card-body">
                        <div class="p-3 text-center bg-none">
                            <h3 class="mb-3">{{__('APAC at a Glance')}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('glance_desc') has-error @enderror">
                                    <label for="glance_desc" class="control-label">{{ __('Glance Description') }}</label>
                                    <textarea class="summernote" name="glance_desc" id="summernote" >{{$home_page_info->glance_desc}}</textarea>
                                    <div class="error" id="glance_descErr"></div>

                                        @if($errors->has('glance_desc'))
                                            <p class="text-danger">{{ $errors->first('glance_desc') }}</p>
                                        @endif
                                </div>
                            </div>
                        </div>

    {{--Apac at a Glance section ends  --}}

                        <div class="p-3 text-center bg-none">
                            <h3 class="mb-3">{{__('Data Points')}}</h3>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @error('branches') has-error @enderror">
                                    <label for="branches" class="control-label">{{ __('Branches') }}</label>
                                    <input type="text" class="form-control" name="branches" id="branches" value="{{$home_page_info->branches}}">
                                    <div class="error" id="branchesErr"></div>
                                        @if($errors->has('branches'))
                                            <p class="text-danger">{{ $errors->first('branches') }}</p>
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @error('states') has-error @enderror">
                                    <label for="states" class="control-label">{{ __('States') }}</label>
                                    <input type="text" class="form-control" name="states" id="states" value="{{$home_page_info->states}}">
                                    <div class="error" id="statesErr"></div>

                                        @if($errors->has('states'))
                                            <p class="text-danger">{{ $errors->first('states') }}</p>
                                        @endif
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @error('employees') has-error @enderror">
                                    <label for="employees" class="control-label">{{ __('Employees') }}</label>
                                    <input type="text" class="form-control" name="employees" id="employees" value="{{$home_page_info->employees}}">
                                    <div class="error" id="employeesErr"></div>

                                        @if($errors->has('employees'))
                                            <p class="text-danger">{{ $errors->first('employees') }}</p>
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @error('customers') has-error @enderror">
                                    <label for="customers" class="control-label">{{ __('Customers') }}</label>
                                    <input type="text" class="form-control" name="customers" id="customers" value="{{$home_page_info->customers}}">
                                    <div class="error" id="customersErr"></div>

                                        @if($errors->has('customers'))
                                            <p class="text-danger">{{ $errors->first('customers') }}</p>
                                        @endif
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @error('stable') has-error @enderror">
                                    <label for="stable" class="control-label">{{ __('Stable') }}</label>
                                    <input type="text" class="form-control" name="stable" id="stable" value="{{$home_page_info->stable}}">
                                    <div class="error" id="stableErr"></div>

                                        @if($errors->has('stable'))
                                            <p class="text-danger">{{ $errors->first('stable') }}</p>
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @error('aum') has-error @enderror">
                                    <label for="aum" class="control-label">{{ __('Aum') }}</label>
                                    <input type="text" class="form-control" name="aum" id="aum" value="{{$home_page_info->aum}}">
                                    <div class="error" id="aumErr"></div>

                                        @if($errors->has('aum'))
                                            <p class="text-danger">{{ $errors->first('aum') }}</p>
                                        @endif
                                </div>
                            </div>
                          </div>

    {{-- Data Points section ends --}}

                        <div class="p-3 text-center bg-none">
                            <h3 class="mb-3">{{__('Benefits Of Apac Loans')}}</h3>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @error('points1') has-error @enderror">
                                    <label for="points1" class="control-label">{{ __('Benefits 1') }}</label>
                                    <input type="text" class="form-control" name="points1" id="points1" value="{{$home_page_info->points1}}">
                                    <div class="error" id="points1Err"></div>


                                        @if($errors->has('points1'))
                                            <p class="text-danger">{{ $errors->first('points1') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points2') has-error @enderror">
                                    <label for="points2" class="control-label">{{ __('Benefits 2') }}</label>
                                    <input type="text" class="form-control" name="points2" id="points2" value="{{$home_page_info->points2}}">
                                    <div class="error" id="points2Err"></div>

                                        @if($errors->has('points2'))
                                            <p class="text-danger">{{ $errors->first('points2') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points3') has-error @enderror">
                                    <label for="points3" class="control-label">{{ __('Benefits 3') }}</label>
                                    <input type="text" class="form-control" name="points3" id="points3" value="{{$home_page_info->points3}}">
                                    <div class="error" id="points3Err"></div>

                                        @if($errors->has('points3'))
                                            <p class="text-danger">{{ $errors->first('points3') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points4') has-error @enderror">
                                    <label for="points4" class="control-label">{{ __('Benefits 4') }}</label>
                                    <input type="text" class="form-control" name="points4" id="points4" value="{{$home_page_info->points4}}">
                                    <div class="error" id="points4Err"></div>

                                        @if($errors->has('points4'))
                                            <p class="text-danger">{{ $errors->first('points4') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points5') has-error @enderror">
                                    <label for="points5" class="control-label">{{ __('Benefits 5') }}</label>
                                    <input type="text" class="form-control" name="points5" id="points5" value="{{$home_page_info->points5}}">
                                    <div class="error" id="points5Err"></div>

                                        @if($errors->has('points5'))
                                            <p class="text-danger">{{ $errors->first('points5') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points6') has-error @enderror">
                                    <label for="points5" class="control-label">{{ __('Benefits 6') }}</label>
                                    <input type="text" class="form-control" name="points6" id="points6" value="{{$home_page_info->points6}}">
                                    <div class="error" id="points6Err"></div>

                                        @if($errors->has('points6'))
                                            <p class="text-danger">{{ $errors->first('points6') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('points7') has-error @enderror">
                                    <label for="points7" class="control-label">{{ __('Benefits 7') }}</label>
                                    <input type="text" class="form-control" name="points7" id="points7" value="{{$home_page_info->points7}}">
                                    <div class="error" id="points7Err"></div>

                                        @if($errors->has('points7'))
                                            <p class="text-danger">{{ $errors->first('points7') }}</p>
                                        @endif
                                </div>


                            </div>
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos1') has-error @enderror">
                                    <label for="benefit_logos1" class="control-label">{{ __('Benefits logos 1') }}</label>
                                    <input type="file" name="benefit_logos1" id="benefit_logos1" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos1) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos1_img_old" id="benefit_logos1_img_old" value="{{$home_page_info->benefit_logos1}}">
                          <div class="error" id="benefit_logos1_imgErr"></div>
                          @if ($errors->has('benefit_logos1'))
                          <p class="text-danger">{{ $errors->first('benefit_logos1') }}</p>
                          @endif
                                </div>
                                {{-- 1 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos2') has-error @enderror">
                                    <label for="benefit_logos2" class="control-label">{{ __('Benefits logos 2') }}</label>
                                    <input type="file" name="benefit_logos2" id="benefit_logos2" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos2) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos2_img_old" id="benefit_logos2_img_old" value="{{$home_page_info->benefit_logos2}}">
                          <div class="error" id="benefit_logos2_imgErr"></div>
                          @if ($errors->has('benefit_logos2'))
                          <p class="text-danger">{{ $errors->first('benefit_logos2') }}</p>
                          @endif
                                </div>
                                {{-- 2 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos3') has-error @enderror">
                                    <label for="benefit_logos3" class="control-label">{{ __('Benefits logos 3') }}</label>
                                    <input type="file" name="benefit_logos3" id="benefit_logos3" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos3) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos3_img_old" id="benefit_logos3_img_old" value="{{$home_page_info->benefit_logos3}}">
                          <div class="error" id="benefit_logos3_imgErr"></div>
                          @if ($errors->has('benefit_logos3'))
                          <p class="text-danger">{{ $errors->first('benefit_logos3') }}</p>
                          @endif
                                </div>
                                {{-- 3 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos4') has-error @enderror">
                                    <label for="benefit_logos4" class="control-label">{{ __('Benefits logos 4') }}</label>
                                    <input type="file" name="benefit_logos4" id="benefit_logos4" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos4) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos4_img_old" id="benefit_logos4_img_old" value="{{$home_page_info->benefit_logos1}}">
                          <div class="error" id="benefit_logos4_imgErr"></div>
                          @if ($errors->has('benefit_logos4'))
                          <p class="text-danger">{{ $errors->first('benefit_logos4') }}</p>
                          @endif
                                </div>
                                {{-- 4 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos5') has-error @enderror">
                                    <label for="benefit_logos5" class="control-label">{{ __('Benefits logos 5') }}</label>
                                    <input type="file" name="benefit_logos5" id="benefit_logos5" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos5) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos5_img_old" id="benefit_logos5_img_old" value="{{$home_page_info->benefit_logos5}}">
                          <div class="error" id="benefit_logos5_imgErr"></div>
                          @if ($errors->has('benefit_logos5'))
                          <p class="text-danger">{{ $errors->first('benefit_logos5') }}</p>
                          @endif
                                </div>
                                {{-- 5 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos6') has-error @enderror">
                                    <label for="benefit_logos6" class="control-label">{{ __('Benefits logos 6') }}</label>
                                    <input type="file" name="benefit_logos6" id="benefit_logos6" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos6) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos6_img_old" id="benefit_logos6_img_old" value="{{$home_page_info->benefit_logos6}}" accept="image/png, image/gif, image/jpeg">
                          <div class="error" id="benefit_logos6_imgErr"></div>
                          @if ($errors->has('benefit_logos6'))
                          <p class="text-danger">{{ $errors->first('benefit_logos6') }}</p>
                          @endif
                                </div>
                                {{-- 6 --}}
                                <div class="row">
                                    <div class="col-md-9">

                                <div class="form-group @error('benefit_logos7') has-error @enderror">
                                    <label for="benefit_logos7" class="control-label">{{ __('Benefits logos 7') }}</label>
                                    <input type="file" name="benefit_logos7" id="benefit_logos7" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                    </div>
                                    <div class="col-md-3">

                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->benefit_logos7) }}"  style="margin-left: 2px;
                                margin-top: 25px;"  width="50px" height="50px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="benefit_logos7_img_old" id="benefit_logos7_img_old" value="{{$home_page_info->benefit_logos7}}" >
                          <div class="error" id="benefit_logos7_imgErr"></div>
                          @if ($errors->has('benefit_logos7'))
                          <p class="text-danger">{{ $errors->first('benefit_logos7') }}</p>
                          @endif
                                </div>
                                {{-- 7 --}}
                            </div>

                        </div>
    {{-- Benefits Of Apac Loans section ends --}}
                    <div class="p-3 text-center bg-none">
                        <h3 class="mb-3">{{__('DOWNLOAD OUR APP')}}</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group @error('app_img') has-error @enderror">
                                <label for="app_img" class="control-label">{{ __('DOWNLOAD OUR APP IMAGE') }}</label>
                                <input type="file" name="app_img" id="app_img" class="form-control" accept="image/png, image/gif, image/jpeg">



                                <div class="pre">
                                <img
                                src="{{ asset('benifits_icons/'.$home_page_info->app_img) }}"  style="margin-left: 400px;
                                margin-top: 25px;"  width="250px" height="450px" id="output"/>
                                </div>
                                    </div>
                                <input type="hidden" name="app_img_img_old" id="app_img_img_old" value="{{$home_page_info->app_img}}">
                          <div class="error" id="app_img_imgErr"></div>
                          @if ($errors->has('app_img'))
                          <p class="text-danger">{{ $errors->first('app_img') }}</p>
                          @endif
                            </div>

                        </div>
                    </div>
                    <div class="card-footer ">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Update') }}</button>
                        {{-- <a href="{{route('dashboard')}}" class="btn btn-secondary" type="reset">{{ __('Cancel') }}</a> --}}
                    </div>

                    </div>

                </form>
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
      var branches = document.home_form.branches.value;
      var states = document.home_form.states.value;
      var employees= document.home_form.employees.value;
      var customers = document.home_form.customers.value;
      var  stable= document.home_form.stable.value;
      var aum = document.home_form.aum.value;
      var points1 = document.home_form.points1.value;
      var points2 = document.home_form.points2.value;
      var points3 = document.home_form.points3.value;
      var points4 = document.home_form.points4.value;
      var points5 = document.home_form.points5.value;
      var points6 = document.home_form.points6.value;
      var points7 = document.home_form.points7.value;

      var  branchesErr=points3Err=statesErr=employeesErr=customersErr=points1Err=points2Err=points4Err=points5Err=points6Err=points7Err=stableErr=aumErr=true;

    if(summernote == ""){
    var glance_desc = document.forms["home_form"]["glance_desc"].value;
    glance_desc = "empty";
    }else{
      var glance_desc = document.forms["home_form"]["glance_desc"].value;
    }
    var  glance_descErr= true;




    if(glance_desc == "empty") {
      printError("glance_descErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('glance_descErr').style.color = "red";
    } else {
      printError("glance_descErr", "");
      glance_descErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('glance_descErr').style.color = "";
    }


      if(branches == "") {
          printError("branchesErr", "Please Enter the value");
          document.getElementById("branches").style.borderColor = "red";
          document.getElementById('branchesErr').style.color = "red";
      } else {
              printError("branchesErr", "");
              branchesErr = false;
              document.getElementById("branches").style.borderColor = "";
              document.getElementById('branchesErr').style.color = "";
      }
      if(states == "") {
          printError("statesErr", "Please Enter the value");
          document.getElementById("states").style.borderColor = "red";
          document.getElementById('statesErr').style.color = "red";
      } else {
              printError("statesErr", "");
              statesErr = false;
              document.getElementById("states").style.borderColor = "";
              document.getElementById('statesErr').style.color = "";
      }
      if(employees == "") {
          printError("employeesErr", "Please Enter the value");
          document.getElementById("employees").style.borderColor = "red";
          document.getElementById('employeesErr').style.color = "red";
      } else {
              printError("employeesErr", "");
              employeesErr = false;
              document.getElementById("employees").style.borderColor = "";
              document.getElementById('employeesErr').style.color = "";
      }
      if(customers == "") {
          printError("customersErr", "Please Enter the value");
          document.getElementById("customers").style.borderColor = "red";
          document.getElementById('customersErr').style.color = "red";
      } else {
              printError("customersErr", "");
              customersErr = false;
              document.getElementById("customers").style.borderColor = "";
              document.getElementById('customersErr').style.color = "";
      }
      if(stable == "") {
          printError("stableErr", "Please Enter the value");
          document.getElementById("stable").style.borderColor = "red";
          document.getElementById('stableErr').style.color = "red";
      } else {
              printError("stableErr", "");
              stableErr = false;
              document.getElementById("stable").style.borderColor = "";
              document.getElementById('stableErr').style.color = "";
      }
      if(aum == "") {
          printError("aum", "Please Enter the value");
          document.getElementById("aum").style.borderColor = "red";
          document.getElementById('aumErr').style.color = "red";
      } else {
              printError("aumErr", "");
              aumErr = false;
              document.getElementById("aum").style.borderColor = "";
              document.getElementById('aumErr').style.color = "";
      }
      if(points1 == "") {
          printError("points1Err", "Please Enter the value");
          document.getElementById("points1").style.borderColor = "red";
          document.getElementById('points1Err').style.color = "red";
      } else {
              printError("points1Err", "");
              points1Err = false;
              document.getElementById("points1").style.borderColor = "";
              document.getElementById('points1Err').style.color = "";
      }
      if(points2 == "") {
          printError("points2Err", "Please Enter the value");
          document.getElementById("points2").style.borderColor = "red";
          document.getElementById('points2Err').style.color = "red";
      } else {
              printError("points2Err", "");
              points2Err = false;
              document.getElementById("points2").style.borderColor = "";
              document.getElementById('points2Err').style.color = "";
      }
      if(points3 == "") {
          printError("points3Err", "Please Enter the value");
          document.getElementById("points3").style.borderColor = "red";
          document.getElementById('points3Err').style.color = "red";
      } else {
              printError("points3Err", "");
              points3Err = false;
              document.getElementById("points3").style.borderColor = "";
              document.getElementById('points3Err').style.color = "";
      }
      if(points4 == "") {
          printError("points4Err", "Please Enter the value");
          document.getElementById("points4").style.borderColor = "red";
          document.getElementById('points4Err').style.color = "red";
      } else {
              printError("points4Err", "");
              points4Err = false;
              document.getElementById("points4").style.borderColor = "";
              document.getElementById('points4Err').style.color = "";
      }
      if(points5 == "") {
          printError("points5Err", "Please Enter the value");
          document.getElementById("points5").style.borderColor = "red";
          document.getElementById('points5Err').style.color = "red";
      } else {
              printError("points5Err", "");
              points5Err = false;
              document.getElementById("points5").style.borderColor = "";
              document.getElementById('points5Err').style.color = "";
      }
      if(points6 == "") {
          printError("points6Err", "Please Enter the value");
          document.getElementById("points6").style.borderColor = "red";
          document.getElementById('points6Err').style.color = "red";
      } else {
              printError("points6Err", "");
              points6Err = false;
              document.getElementById("points6").style.borderColor = "";
              document.getElementById('points6Err').style.color = "";
      }
      if(points7 == "") {
          printError("points7Err", "Please Enter the value");
          document.getElementById("points7").style.borderColor = "red";
          document.getElementById('points7Err').style.color = "red";
      } else {
              printError("points7Err", "");
              points7Err = false;
              document.getElementById("points7").style.borderColor = "";
              document.getElementById('points7Err').style.color = "";
      }



      if((glance_descErr||points3Err||branchesErr||statesErr||employeesErr||customersErr||points1Err||points2Err||points4Err||points5Err||points6Err||points7Err||aumErr||stableErr) == true) {
        return false;
      }
  }
  </script>

@endsection
