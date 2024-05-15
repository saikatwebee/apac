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
                    <h1>Contact Us</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Branch - Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('branch_list') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                    <form action="{{route('branch_update',$branchpincode->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <?php
                        $temp = App\Models\State::find($branchpincode->state_id);
                        ?>
                        <div class="form-group">
                          <label for="dir_nme">{{__('State Name')}} <span class="text-danger">*</span></label>
                          <input type="text" name="state" id="state" class="form-control" value="{{$temp->state}}" onKeyPress="return ValidateAlpha(event);">
                          <div class="error" id="stateErr"></div>

                        </div>

                        <div class="form-group">
                          <label for="dir_rol">{{__('Pincode')}} <span class="text-danger">*</span></label>
                          <input type="text" name="pincode" id="pincode" class="form-control" value="{{$branchpincode->pincode}}" onkeypress="return isNumberKey(event)" maxlength="6">
                          <div class="error" id="pincodeErr"></div>

                        </div>

                        <div class="form-group">
                            <label for="dir_descr">{{__('Embedded iframe')}} <span class="text-danger">*</span></label>
                            <textarea type="text" name="embedded" id="embedded" class="form-control">{{$branchpincode->embedded}}</textarea>
                            <div class="error" id="embeddedErr"></div>

                          </div>
                    </div>
                    <div class="col-md-6">
                          <div class="form-group">
                            <label for="dir_descr">{{__('Branch Name')}} <span class="text-danger">*</span></label>
                            <input type="text" name="branch" id="branch" class="form-control" value="{{$branchpincode->branch}}" onKeyPress="return ValidateAlpha(event);">
                          <div class="error" id="branchErr"></div>

                          </div>
                          <div class="form-group">
                            <label for="dir_descr">{{__('Address')}} <span class="text-danger">*</span></label>
                            <textarea name="branch_address" id="branch_address" cols="30" rows="10" class="form-control">{{$branchpincode->branch_address}}</textarea>
                            <div class="error" id="branch_addressErr"></div>

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

    var state = document.about_form.state.value;
    var pincode = document.about_form.pincode.value;
     var  embedded= document.about_form.embedded.value;
    var latitude = document.about_form.latitude.value;
    var longitude = document.about_form.longitude.value;
    var longitude = document.about_form.longitude.value;
    var branch = document.about_form.branch.value;
    var branch_address = document.about_form.branch_address.value;


    var stateErr = pincodeErr = embeddedErr  = branchErr = branch_addressErr = true;

    // state
    if(state == "") {
      printError("stateErr", "Please Enter the value");
      document.getElementById("state").style.borderColor = "red";
      document.getElementById('stateErr').style.color = "red";
    } else {
      printError("stateErr", "");
      stateErr = false;
      document.getElementById("state").style.borderColor = "";
      document.getElementById('stateErr').style.color = "";
    }


    // pincode
    if(pincode == "") {
      printError("pincodeErr", "Please Enter the value");
      document.getElementById("pincode").style.borderColor = "red";
      document.getElementById('pincodeErr').style.color = "red";
    } else {
      printError("pincodeErr", "");
      pincodeErr = false;
      document.getElementById("pincode").style.borderColor = "";
      document.getElementById('pincodeErr').style.color = "";
    }

     // embedded
    if(embedded == "") {
      printError("embeddedErr", "Please Enter the value");
      document.getElementById("embedded").style.borderColor = "red";
      document.getElementById('embeddedErr').style.color = "red";
    } else {
      printError("embeddedErr", "");
      embeddedErr = false;
      document.getElementById("embedded").style.borderColor = "";
      document.getElementById('embeddedErr').style.color = "";
    }


    // // longitude
    // if(longitude == "") {
    //   printError("longitudeErr", "Please Enter the value");
    //   document.getElementById("longitude").style.borderColor = "red";
    //   document.getElementById('longitudeErr').style.color = "red";
    // } else {
    //   printError("longitudeErr", "");
    //   longitudeErr = false;
    //   document.getElementById("longitude").style.borderColor = "";
    //   document.getElementById('longitudeErr').style.color = "";
    // }

    // branch
    if(branch == "") {
      printError("branchErr", "Please Enter the value");
      document.getElementById("branch").style.borderColor = "red";
      document.getElementById('branchErr').style.color = "red";
    } else {
      printError("branchErr", "");
      branchErr = false;
      document.getElementById("branch").style.borderColor = "";
      document.getElementById('branchErr').style.color = "";
    }

    // branch_address
    if(branch_address == "") {
      printError("branch_addressErr", "Please Enter the value");
      document.getElementById("branch_address").style.borderColor = "red";
      document.getElementById('branch_addressErr').style.color = "red";
    } else {
      printError("branch_addressErr", "");
      branch_addressErr = false;
      document.getElementById("branch_address").style.borderColor = "";
      document.getElementById('branch_addressErr').style.color = "";
    }


    if(( stateErr || pincodeErr || embeddedErr||branchErr || branch_addressErr) == true) {
      return false;
    }
  }
  </script>
<script>
    function isNumberKey(evt){  <!--Function to accept only numeric values-->
//var e = evt || window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode
if (charCode != 46 && charCode > 31
&& (charCode < 48 || charCode > 57))
    return false;
    return true;
}

function ValidateAlpha(evt)
{
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

    return false;
        return true;
}
</script>
@endsection
