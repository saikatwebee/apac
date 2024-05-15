@extends('layouts.admin')
@section('content')

<style>
    textarea{
      resize: none;
    }
    .remove {
  background: #f1f1f1;
    }
  .remove.td {
    font-style: italic;
}

.table>tbody>tr>td {
  vertical-align: middle;
}
.input-group {
  width: 100%;
}

.editable {
  border: none;
  padding: 0;
  margin: 0;
  text-shadow: none;
  box-shadow: none;
}
.addBtn {
  cursor: pointer;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Manage Frontend</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">About</li>
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

                      <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data" autocomplete="off" id="about_form">
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
                            <div class="form-group">
                              <label for="demo">{{__('About APAC')}}</label>
                              <textarea name="abt_apac" id="abt_apac"  rows="3" class="form-control">{{$about->abt_apac}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="demo">{{__('Our Vision Title')}}</label>
                              <input type="text" name="our_vis_til" id="our_vis_til"  class="form-control" value="{{$about->our_vis_til}}">
                            </div>
                            <div class="form-group">
                              <label for="demo">{{__('Our Vision')}}</label>
                              <textarea name="our_vis_desc" id="our_vis_desc"  rows="3" class="form-control">{{$about->our_vis_desc}}</textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="demo">{{__('Founder Title')}}</label>
                                <input type="text" name="fud_til" id="fud_til" class="form-control"
                                value="{{$about->fud_til}}">
                              </div>
                              <div class="form-group">
                                <label for="demo">{{__('Founder Image')}}</label>
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="file" class="form-control" id="fud_img" name="fud_img"  accept="image/*" onchange="loadFile(event)">
                                  </div>
                                  <div class="col-md-6" style="margin-top: -18px;">
                                    <div class="pre" style="height: 60px;
                                    width: 60px;
                                    border: 2px dashed #ccc;
                                    border-radius: 2px;">
                                      <img   
                                      src="{{ asset('about/'.$about->fud_img) }}"  style="margin-left: 2px;
                                      margin-top: 3px;"  width="50px" height="50px" id="output" />
                                      <input type="hidden" name="fud_img_old" id="fud_img_old" value="{{$about->fud_img}}">
                                    </div>
                                  </div>
                                </div>                                
                              </div>
                              <div class="form-group">
                                <label for="demo">{{__('Founder Details')}}</label>
                                <textarea name="fud_dtl" id="fud_dtl"  rows="3" class="form-control">{{$about->fud_dtl}}</textarea>
                              </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
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
   var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
{{-- <script>
function abt_upd(){
  $.ajax({
    headers:{"X-CSRF-TOKEN":"{{csrf_token()}}"},
    url:"{{route('about.update')}}",
    type:"POST",
    data:$('#about_form').serialize(),
    success:function(res){
      alert(res)
    }
  })
}
</script> --}}