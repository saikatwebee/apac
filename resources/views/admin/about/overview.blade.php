@extends('layouts.admin')
@section('content')

<style>
  textarea{
    resize: none;
  }
label{
  color: #212529;
}
/* .note-editing-area{
  height: 432px;
} */
.note-editor.note-frame .note-editing-area {
  height: 330px !important;
}
.note-editor.note-frame .note-editing-area .note-editable {
  height: 330px !important;
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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Overview</li>
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
                      <form action="{{route('overview.update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
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
                          <div class="col-md-6">
                            <div class="form-group @error('ovr_desc') has-error @enderror">
                              <label for="ovr_desc">{{__('Overview Descrpition')}}</label>
                              <textarea class="summernote" name="ovr_desc" id="summernote">{{$overview->ovr_desc}}</textarea>
                              <div class="error" id="ovr_descErr"></div>



                              @if($errors->has('ovr_desc'))
                              <p class="text-danger">{{ $errors->first('ovr_desc') }}</p>
                          @endif

                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="aum">{{__('AUM')}}</label>
                              <input type="text" name="aum" id="aum"  class="form-control" value="{{$overview->aum}}">
                              <div class="error" id="aumErr"></div>

                            </div>
                            <div class="form-group">
                              <label for="branches">{{__('Branches')}}</label>
                              <input type="text" name="branches" id="branches"  class="form-control" value="{{$overview->branches}}">
                              <div class="error" id="branchesErr"></div>

                            </div>

                            <div class="form-group">
                              <label for="average_ticket">{{__('Average Ticket Size')}}</label>
                              <input type="text" name="average_ticket" id="average_ticket"  class="form-control" value="{{$overview->average_ticket}}">
                              <div class="error" id="average_ticketErr"></div>

                            </div>
                            <div class="form-group">
                              <label for="employees">{{__('Employees')}}</label>
                              <input type="text" name="employees" id="employees"  class="form-control" value="{{$overview->employees}}">
                              <div class="error" id="employeesErr"></div>

                            </div>
                            <div class="form-group">
                              <label for="customers">{{__('Customers')}}</label>
                              <input type="text" name="customers" id="customers"  class="form-control" value="{{$overview->customers}}">
                              <div class="error" id="customersErr"></div>

                            </div>
                            <div class="form-group">
                              <label for="stable">{{__('Stable')}}</label>
                              <input type="text" name="stable" id="stable"  class="form-control" value="{{$overview->stable}}">
                              <div class="error" id="stableErr"></div>

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
    var loadFile = function(event) {
     var output = document.getElementById('output');
     output.src = URL.createObjectURL(event.target.files[0]);
     output.onload = function() {
       URL.revokeObjectURL(output.src) // free memory
     }
   };
 </script>
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
       var aum = document.about_form.aum.value;
       var branches= document.about_form.branches.value;
       var average_ticket= document.about_form.average_ticket.value;
       var employees = document.about_form.employees.value;
       var customers = document.about_form.customers.value;
       var stable = document.about_form.stable.value;


       var  aumErr=branchesErr=statesErr=employeesErr=customersErr=stableErr=average_ticketErr=true;


    if(summernote == ""){
    var ovr_desc = document.forms["about_form"]["ovr_desc"].value;
    ovr_desc = "empty";
    }else{
      var ovr_desc = document.forms["about_form"]["ovr_desc"].value;
    }
    var  ovr_descErr= true;




    if(ovr_desc == "empty") {
      printError("ovr_descErr", "Please enter the value");
      document.getElementById("summernote").style.borderColor = "red";
      document.getElementById('ovr_descErr').style.color = "red";
    } else {
      printError("ovr_descErr", "");
      ovr_descErr = false;
      document.getElementById("summernote").style.borderColor = "";
      document.getElementById('ovr_descErr').style.color = "";
    }


       if(aum == "") {
           printError("aumErr", "Please Enter the value");
           document.getElementById("aum").style.borderColor = "red";
           document.getElementById('aumErr').style.color = "red";
       } else {
               printError("aumErr", "");
               aumErr = false;
               document.getElementById("aum").style.borderColor = "";
               document.getElementById('aumErr').style.color = "";
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
       if(average_ticket == "") {
           printError("average_ticketErr", "Please Enter the value");
           document.getElementById("average_ticket").style.borderColor = "red";
           document.getElementById('average_ticketErr').style.color = "red";
       } else {
               printError("average_ticketErr", "");
               average_ticketErr = false;
               document.getElementById("average_ticket").style.borderColor = "";
               document.getElementById('average_ticketErr').style.color = "";
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



       if((aumErr||branchesErr||employeesErr||customersErr||stableErr||ovr_descErr||average_ticketErr) == true) {
         return false;
       }
   }
   </script>

@endsection

