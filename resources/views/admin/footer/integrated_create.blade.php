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
                    <h1>{{$footer_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Integrated - Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('footer/integrated_ombusman_scheme') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
                      <i class="fa fa-arrow-left btn btn-icon text-primary"  aria-hidden="true"></i>
                  </a>
              </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">

                <form class="validate-form" method="POST" action="{{route('footer/integrated.store')}}" enctype="multipart/form-data" id="footer_form" onsubmit="return validateForm();" name="footer_form">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group @error('integrated_year') has-error @enderror">
                                    <label for="integrated_year" class="control-label">{{ __('Integrated Year') }}<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="integrated_year" id="integrated_year" >
                                        <div class="error" id="integrated_yearErr"></div>

                                        @if($errors->has('integrated_year'))
                                            <p class="text-danger">{{ $errors->first('integrated_year') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('integrated_pdf_name') has-error @enderror">
                                    <label for="integrated_pdf_name" class="control-label">{{ __('Integrated PDF Name') }}<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="integrated_pdf_name" id="integrated_pdf_name" >
                                        <div class="error" id="integrated_pdf_nameErr"></div>

                                        @if($errors->has('integrated_pdf_name'))
                                            <p class="text-danger">{{ $errors->first('integrated_pdf_name') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('integrated_pdf_file') has-error @enderror">
                                <label class="control-label text-bold" for="integrated_pdf_file">{{ __('Integrated PDF File') }}<span class="text-danger">*</span></label>

                                    <input id="integrated_pdf_file" name="integrated_pdf_file" class="form-control" type="file"  />
                                    <div class="error" id="integrated_pdf_fileErr"></div>


                                        {{-- <input type="text" class="form-control" name="description" id="description" > --}}
                                        @if($errors->has('integrated_pdf_file'))
                                            <p class="text-danger">{{ $errors->first('integrated_pdf_file') }}</p>
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

      var integrated_year = document.footer_form.integrated_year.value;
      var integrated_pdf_name= document.footer_form.integrated_pdf_name.value;
      var  integrated_pdf_file= document.footer_form.integrated_pdf_file.value;
    //   var cl_fl = document.footer_form.cl_fl.value;
    //   var customers = document.about_form.customers.value;
    //   var stable = document.about_form.stable.value;


      var  integrated_yearErr=integrated_pdf_nameErr=integrated_pdf_fileErr=true;

      if(integrated_year == "") {
          printError("integrated_yearErr", "Please Enter the value");
          document.getElementById("integrated_year").style.borderColor = "red";
          document.getElementById('integrated_yearErr').style.color = "red";
      } else {
              printError("integrated_yearErr", "");
              integrated_yearErr = false;
              document.getElementById("integrated_year").style.borderColor = "";
              document.getElementById('integrated_yearErr').style.color = "";
      }



      if(integrated_pdf_name == "") {
          printError("integrated_pdf_nameErr", "Please Enter the value");
          document.getElementById("integrated_pdf_name").style.borderColor = "red";
          document.getElementById('integrated_pdf_nameErr').style.color = "red";
      } else {
              printError("integrated_pdf_nameErr", "");
              integrated_pdf_nameErr = false;
              document.getElementById("integrated_pdf_name").style.borderColor = "";
              document.getElementById('integrated_pdf_nameErr').style.color = "";
      }
      if(integrated_pdf_file == "") {
          printError("integrated_pdf_fileErr", "Please Enter the value");
          document.getElementById("integrated_pdf_file").style.borderColor = "red";
          document.getElementById('integrated_pdf_fileErr').style.color = "red";
      } else {
              printError("integrated_pdf_fileErr", "");
              integrated_pdf_fileErr = false;
              document.getElementById("integrated_pdf_file").style.borderColor = "";
              document.getElementById('integrated_pdf_fileErr').style.color = "";
      }





      if((integrated_yearErr||integrated_pdf_nameErr||integrated_pdf_fileErr) == true) {
        return false;
      }
  }
  </script>

@endsection
