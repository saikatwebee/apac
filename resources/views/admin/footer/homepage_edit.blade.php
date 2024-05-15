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
                            <h3 class="mb-3">{{__('Apac at a Glance')}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('glance_desc') has-error @enderror">
                                    <label for="glance_desc" class="control-label">{{ __('Glance Description') }}</label>
                                    <textarea class="form-control no-resize" name="glance_desc" id="glance_desc" rows="3" >{{$home_page_info->glance_desc}}</textarea>
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

                            </div>
                            <div class="col-md-6">

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

                            </div>

                        </div>
    {{-- Benefits Of Apac Loans section ends --}}
                    </div>
                    <div class="card-footer ">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Update') }}</button>
                        {{-- <a href="{{route('dashboard')}}" class="btn btn-secondary" type="reset">{{ __('Cancel') }}</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
  }

  function validateForm() {

      var glance_desc = document.home_form.glance_desc.value;
      var branches = document.home_form.branches.value;
      var states = document.home_form.states.value;
      var  employees= document.home_form.employees.value;
      var customers = document.home_form.customers.value;
      var points1 = document.home_form.points1.value;
      var points2 = document.home_form.points2.value;
      var points3 = document.home_form.points3.value;
      var points4 = document.home_form.points4.value;
      var points5 = document.home_form.points5.value;

      var  glance_descErr=branchesErr=points3Err=statesErr=employeesErr=customersErr=points1Err=points2Err=points4Err=points5Err=true;

      if(glance_desc == "") {
          printError("glance_descErr", "Please Enter the value");
          document.getElementById("glance_desc").style.borderColor = "red";
          document.getElementById('glance_descErr').style.color = "red";
      } else {
              printError("glance_descErr", "");
              glance_descErr = false;
              document.getElementById("glance_desc").style.borderColor = "";
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



      if((points3Err||branchesErr||glance_descErr||statesErr||employeesErr||customersErr||points1Err||points2Err||points4Err||points5Err) == true) {
        return false;
      }
  }
  </script>

@endsection
