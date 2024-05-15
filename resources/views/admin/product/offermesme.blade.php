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
                    <h1>Product Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">offermesme - update</li>
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
                    <form action="{{route('offermesme_update',$offermesme->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return validateForm();" name="about_form">
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
                                    <label for="tes_img">{{__('BUSINESS NEEDS ')}} <span class="text-danger">*</span></label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$offermesme->content}}</textarea>
                                    <div class="error" id="contentErr"></div>

                                </div>
                            </div>
                            <div class="col-md-12">
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

      var content= document.about_form.content.value;


    var contentErr  = true;


    if(content == "") {
      printError("contentErr", "Please Enter The Value");
      document.getElementById("content").style.borderColor = "red";
      document.getElementById('contentErr').style.color = "red";
    } else {
      printError("contentErr", "");
      contentErr = false;
      document.getElementById("content").style.borderColor = "";
      document.getElementById('contentErr').style.color = "";
    }



      if(contentErr == true) {
        return false;
      }
  }
  </script>



@endsection
