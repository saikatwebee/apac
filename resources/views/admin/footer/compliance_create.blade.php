@extends('layouts.admin')
@section('content')

<style>
  textarea{
    resize: none;
  }
label{
  color: #212529;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Footer Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">compliance - Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('footer/compliance') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add News">
                        <i class="fa fa-arrow-left btn btn-icon text-primary" aria-hidden="true"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <form  action="{{route('compliance_store')}}" method="post" enctype="multipart/form-data" autocomplete="off" >
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('tle') has-error @enderror">
                                        <label for="tle">{{__('Select title')}}</label> <span class="text-danger">*</span>
                                        <select class="form-control"  onchange="tle_sel(this)" id="tle" name="tle"> 
                                            <option value=" " selected>-- select title --</option>
                                            <option value="1">AGM & EGM</option>
                                            <option value="2">ANNUAL RETURN</option>
                                            <option value="3">OTHER POLICIES</option>
                                            <option value="4">COMPANY UPDATE</option>
                                          </select>
                                          @if ($errors->has('tle'))
                                            <p class="text-danger">{{ $errors->first('tle') }}</p>
                                          @endif
                                    </div>
                                    <div class="form-group @error('agm') has-error @enderror" style="display: none" id="agm_div">
                                        <label for="agm">{{__('Select subtitle')}}</label> <span class="text-danger">*</span>
                                        <select class="form-control" aria-label="Default select example" id="agm" name="agm" >
                                            <option value=" " selected>-- select subtitle --</option>
                                            @foreach ($agm as $row)
                                                @if ($row->id <= 6 )
                                                <option value="{{$row->id}}">{{$row->subtile}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('agm'))
                                            <p class="text-danger">{{ $errors->first('agm') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group @error('policy') has-error @enderror"  style="display: none" id="policy_div" >
                                        <label for="policy">{{__('Select subtitle')}}</label> <span class="text-danger">*</span>
                                        <select class="form-control" aria-label="Default select example" id="policy" name="policy" >
                                            <option value=" " selected>-- select subtitle --</option>
                                            @foreach ($agm as $row)
                                                @if ($row->id == 7)
                                                <option value="{{$row->id}}">{{$row->subtile}}</option>
                                                @endif
                                            @endforeach
                                          </select>
                                          @if ($errors->has('policy'))
                                            <p class="text-danger">{{ $errors->first('policy') }}</p>
                                          @endif
                                    </div>
                                    {{-- <div class="form-group" style="display:none;" id="div_sbt">
                                        <label for="sub_sel">{{__('Select subtitle')}}</label>
                                        <select class="form-control" aria-label="Default select example" id="sub_sel" >

                                          </select>
                                    </div> --}}
                                    <div class="form-group @error('com_fl_nm') has-error @enderror">
                                        <label for="com_fl_nm" name>{{__('File name')}}</label>  <span class="text-danger"> *</span><br>
                                        <input type="text" class="form-control" name="com_fl_nm" id="com_fl_nm">
                                        @if ($errors->has('com_fl_nm'))
                                            <p class="text-danger">{{ $errors->first('com_fl_nm') }}</p>
                                          @endif
                                    </div>
                                    <div class="form-group @error('cl_fl') has-error @enderror" id="upload_div">
                                        <label for="cl_fl">{{__('Upload File')}}</label> <span class="text-danger"> *</span><br>
                                        <input type="file" name="cl_fl" id="cl_fl">
                                        @if ($errors->has('cl_fl'))
                                            <p class="text-danger">{{ $errors->first('cl_fl') }}</p>
                                          @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">create</button>
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
    function tle_sel(tel){
        if(tel.value =="1"){
            $('#agm_div').show()
            $('#policy_div').hide()
        }else if(tel.value =="3"){
            $('#agm_div').hide()
            $('#policy_div').show()
        }
        else if(tel.value =="2"){
            $('#agm_div').hide()
            $('#policy_div').hide()
        }
        else{
            $('#agm_div').hide()
            $('#policy_div').hide()
            $('#upload_div').hide()
        }
    }
</script>
{{-- <script>
    function tle_sel(tel){
        if(tel.value =="1"){
          var div_sbt = $('#div_sbt').show();
            var newOptions = {
                '-- select subtitle --':'0',
                '2017-2018':'1',
                '2018-19':'2',
                '2019-20':'3',
                '2020-21':'4',
                '2021-22':'5',
                '2022-23':'6',
            };
    
            var $el = $('#sub_sel');
            var prevValue = $el.val();
            $el.empty();
            $.each(newOptions, function(key, value) {
            $el.append($('<option></option>').attr('value', value).text(key));
            if (value === prevValue){
                $el.val(value);
            }
            });
            $el.trigger('change');
        }
        else if(tel.value =="2"){
            var div_sbt = $('#div_sbt').hide();
        }
        else if(tel.value =="3"){
            var div_sbt = $('#div_sbt').show();
            var newOptions = {
                '-- select subtitle --':'0',
                'Policies & Declarations':'1',
            };
    
            var $el = $('#sub_sel');
            var prevValue = $el.val();
            $el.empty();
            $.each(newOptions, function(key, value) {
            $el.append($('<option></option>').attr('value', value).text(key));
            if (value === prevValue){
                $el.val(value);
            }
            });
            $el.trigger('change');

        }
        else
        {
            var div_sbt = $('#div_sbt').hide();
        }
            
        
    }
    function sub_tle(){
        var tle_val = $('#tle').find(":selected").val();
        var subtl_val = $('#sub_sel').find(":selected").val();
        alert(tle_val);
        alert(subtl_val);
    }
</script> --}}