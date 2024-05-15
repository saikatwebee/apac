@extends('layouts.admin')
@section('content')

<style>
  textarea{
    resize: none;
  }
label{
  color: #212529;
}
/* input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}


input[type=number] {
  -moz-appearance: textfield;
} */
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Home Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Emi calculation</li>
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
                    {{-- <h1 style="text-align: center;">EMI CALCULATION</h1> --}}
                    <form  action="{{route('emi_updated')}}" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validationForm()" id="validationForm">
                        @csrf
                            @if (Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                                    <strong>{{session::get('message')}}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dir_nme">{{__('Min Amount')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="min_amount" value="{{$emiupdate->min_amount}}" onkeypress="return isNumberKey(event)" maxlength="10" id="min_amount"> 
                                        <div class="error" id="min_amountErr"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dir_nme">{{__('Max Amount')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="max_amount" value="{{$emiupdate->max_amount}}" onkeypress="return isNumberKey(event)" maxlength="10" id="max_amount"> 
                                        <div class="error" id="max_amountErr"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="min_interest">{{__('Min Interest')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="min_interest" id="min_interest" value="{{$emiupdate->min_interest}}" onkeypress="return isNumberKey(event)" maxlength="2">
                                        <div class="error" id="min_interestErr"></div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dir_nme">{{__('Max Interest')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="max_interest" value="{{$emiupdate->max_interest}}" onkeypress="return isNumberKey(event)" maxlength="2" id="max_interest">
                                        <div class="error" id="max_interestErr"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dir_nme">{{__('Min Tenure')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="min_tenure" id="min_tenure" value="{{$emiupdate->min_tenure}}" onkeypress="return isNumberKey(event)" maxlength="2">
                                        <div class="error" id="min_tenureErr"></div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dir_nme">{{__('Max Tenure')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="max_tenure" id="max_tenure" value="{{$emiupdate->max_tenure}}" onkeypress="return isNumberKey(event)" maxlength="2">
                                        <div class="error" id="max_tenureErr"></div>

                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary w-100">Update</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function validationForm(){

      var min_amount=$("#min_amount").val();
      var max_amount=$("#max_amount").val();
      var min_interest=$("#min_interest").val();
      var max_interest=$("#max_interest").val();
      var min_tenure=$("#min_tenure").val();
      var max_tenure=$("#max_tenure").val();
    
      var min_amountErr = max_amountErr = max_tenureErr = min_tenureErr = max_interestErr = min_interestErr = true;

        // min_amount
        if(min_amount == "") {
            printError("min_amountErr", "Enter Your Min Amount");
            document.getElementById("min_amount").style.borderColor = "red";
            document.getElementById('min_amountErr').style.color = "red";
        }
        else
        {
            if(min_amount.length < 6) {
                printError("min_amountErr", "Mininum 1 lahk");
                document.getElementById("min_amount").style.borderColor = "red";
                document.getElementById('min_amountErr').style.color = "red";
            } else{
                printError("min_amountErr", " ");
                min_amountErr = false;
                document.getElementById("min_amount").style.borderColor = "";
                document.getElementById('min_amountErr').style.color = "";
            }

        }

        // max_amount
        if(max_amount == "") {
            printError("max_amountErr", "Enter Your Max Amount");
            document.getElementById("max_amount").style.borderColor = "red";
            document.getElementById('max_amountErr').style.color = "red";
        }
        else
        {
            if(max_amount.length < 6) {
                printError("max_amountErr", "Mininum 1 lahk");
                document.getElementById("max_amount").style.borderColor = "red";
                document.getElementById('max_amountErr').style.color = "red";
            } else{
                printError("max_amountErr", " ");
                max_amountErr = false;
                document.getElementById("max_amount").style.borderColor = "";
                document.getElementById('max_amountErr').style.color = "";
            }

        }

        // Min Interest
        if(min_interest == "") {
            printError("min_interestErr", "Enter Your Min Interest");
            document.getElementById("min_interest").style.borderColor = "red";
            document.getElementById('min_interestErr').style.color = "red";
        }
        else
        {
            printError("min_interestErr", " ");
            min_interestErr = false;
            document.getElementById("min_interest").style.borderColor = "";
            document.getElementById('min_interestErr').style.color = "";

        }
        // Max Interest
        if(max_interest == "") {
            printError("max_interestErr", "Enter Your Max Interest");
            document.getElementById("max_interest").style.borderColor = "red";
            document.getElementById('max_interestErr').style.color = "red";
        }
        else
        {
            printError("max_interestErr", " ");
            max_interestErr = false;
            document.getElementById("max_interest").style.borderColor = "";
            document.getElementById('max_interestErr').style.color = "";
            
        }
        
        // Min Tenure
        if(min_tenure == "") {
            printError("min_tenureErr", "Enter Your Min Tenure");
            document.getElementById("min_tenure").style.borderColor = "red";
            document.getElementById('min_tenureErr').style.color = "red";
        }
        else
        {
            printError("min_tenureErr", " ");
            min_tenureErr = false;
            document.getElementById("min_tenure").style.borderColor = "";
            document.getElementById('min_tenureErr').style.color = "";

        }
        // Max Tenure
        if(max_tenure == "") {
            printError("max_tenureErr", "Enter Your Max Tenure");
            document.getElementById("max_tenure").style.borderColor = "red";
            document.getElementById('max_tenureErr').style.color = "red";
        }
        else
        {
            printError("max_tenureErr", " ");
            max_tenureErr = false;
            document.getElementById("max_tenure").style.borderColor = "";
            document.getElementById('max_tenureErr').style.color = "";
            
        }
       

        
        if((max_amountErr || min_amountErr || max_tenureErr || min_tenureErr || max_interestErr || min_interestErr)== true) {
            // alert('Please Fill The Mandatory Field');
            return false;

        }
    }

</script>
<script>
    function isNumberKey(evt){  <!--Function to accept only numeric values-->
//var e || evt || window.event;
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
