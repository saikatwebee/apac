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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Newsroom - Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                  <a href="{{ route('newsroom_list') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                  <form action="{{route('newsroom_update',$newsroom->id)}}"  method="post" enctype="multipart/form-data" autocomplete="off" id="about_form" onsubmit="return loanapply()">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="newsroom_date_old">{{__('Newsroom Current Date')}}</label><br>
                          <input type="text" name="newsroom_date_old" id="newsroom_date_old" class="form-control " value="{{$newsroom->newsroom_date}}" readonly>
                          <input type="hidden" name="newsroom_date_org_old" id="newsroom_date_org_old" class="form-control " value="{{$newsroom->newsroom_date_org}}">
                          {{-- <div class="error" id="newsroom_date_err"></div> --}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="newsroom_date_chg">{{__('Newsroom Change Date (Optional)')}}</label><br>
                          <input type="date" name="newsroom_date_chg" id="newsroom_date_chg" class="form-control" >
                          <div class="error" id="newsroom_date_err"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="newsroom_title">{{__('Newsroom Title')}}</label>
                          <input type="text" name="newsroom_title" id="newsroom_title" class="form-control" value="{{$newsroom->newsroom_title}}">
                          <div class="error" id="newsroom_title_err"></div>
                        </div>
                       
                        <div class="form-group">
                          <label for="newsroom_url">{{__('Newsroom URL')}}</label>
                          <input type="text" name="newsroom_url" id="newsroom_url" class="form-control" value="{{$newsroom->newsroom_url}}">
                          <div class="error" id="newsroom_url_err"></div>
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
 
@endsection

<script>
  function printError(elemId, hintMsg) {
document.getElementById(elemId).innerHTML = hintMsg;
  }
  function printErrored(elemId, hintMsg) {
       const selectElement = document.querySelector("select");
          selectElement.children[0].textContent = "Select here";
  }
  function loanapply(){
    var newsroom_title=$("#newsroom_title").val();
    var newsroom_url=$("#newsroom_url").val();
  
   
  // alert();
    var newsroom_title_err = newsroom_url_err =  true;

     
      // newsroom_title
      if(newsroom_title == "") {
          printError("newsroom_title_err", "Enter Your Title");
          document.getElementById("newsroom_title").style.borderColor = "red";
          document.getElementById('newsroom_title_err').style.color = "red";
      }
      else
      {
          printError("newsroom_title_err", "");
          newsroom_title_err = false;
          document.getElementById("newsroom_title").style.borderColor = "";
          document.getElementById('newsroom_title_err').style.color = "";
      }

      // newsroom_url
      if(newsroom_url == "") {
          printError("newsroom_url_err", "Enter Your URL");
          document.getElementById("newsroom_url").style.borderColor = "red";
          document.getElementById('newsroom_url_err').style.color = "red";
      }
      else
      {
          printError("newsroom_url_err", "");
          newsroom_url_err = false;
          document.getElementById("newsroom_url").style.borderColor = "";
          document.getElementById('newsroom_url_err').style.color = "";
      }
     


      if((newsroom_title_err || newsroom_url_err)== true) {
          // alert('Please Fill The Mandatory Field');
          return false;

      } 
  }

</script>
