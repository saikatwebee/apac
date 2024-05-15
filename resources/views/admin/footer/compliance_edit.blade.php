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
                            <li class="breadcrumb-item active text-primary" aria-current="page">compliance - Edit</li>
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
                    <form  action="{{route('compliance_update',$compliance->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validateForm()" name="restaurantRegisterForm" class="restaurantRegisterForm" id="restaurantRegisterForm">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group " >
                                        <label for="tle">{{__('Select title')}}</label>
                                        <select class="form-control"  onchange="tle_sel(this)" id="tle" name="tle"> 
                                            <option value="0" selected>-- select title --</option>
                                            <option value="1" @if($compliance->tle =="1") selected @endif >AGM & EGM</option>
                                            <option value="2" @if($compliance->tle =="2") selected @endif>ANNUAL RETURN</option>
                                            <option value="3" @if($compliance->tle == "3") selected @endif>OTHER POLICIES</option>
                                            <option value="4" @if($compliance->tle =="4") selected @endif>COMPANY UPDATE</option>
                                          </select>
                                         
                                    </div>
                                    <input type="hidden" name="checking_value" id="checking_value" value="{{$compliance->tle}}">
                                    <div class="form-group" style="display: none" id="agm_div">
                                        <label for="sub_sel">{{__('Select subtitle')}}</label>
                                        <select class="form-control" aria-label="Default select example" id="agm" name="agm" >
                                            <option value="0" selected>-- select subtitle --</option>
                                            @foreach ($agm as $row)
                                                @if ($row->id <= 6)
                                                <option value="{{$row->id}}" @if($compliance->sub_tle == $row->id) selected @endif >{{$row->subtile}}</option>
                                                @endif
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group"  style="display: none" id="policy_div" >
                                        <label for="sub_sel">{{__('Select subtitle')}}</label>
                                        <select class="form-control" aria-label="Default select example" id="policy" name="policy" >
                                            <option value="0" selected>-- select subtitle --</option>
                                            @foreach ($agm as $row)
                                                @if ($row->id == 7)
                                                <option value="{{$row->id}}" @if($compliance->sub_tle == $row->id) selected @endif >{{$row->subtile}}</option>
                                                @endif
                                            @endforeach
                                          </select>
                                    </div>
                                    {{-- <div class="form-group" style="display:none;" id="div_sbt">
                                        <label for="sub_sel">{{__('Select subtitle')}}</label>
                                        <select class="form-control" aria-label="Default select example" id="sub_sel" >

                                          </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="com_fl_nm" name>{{__('File name')}}</label><br>
                                        <input type="text" class="form-control" name="com_fl_nm" id="com_fl_nm" value="{{$compliance->com_fl_nm}}">
                                         <div class="error" id="seumErr"></div>

                                    </div>
                                    <div class="form-group" id="upload_div">
                                        <label for="cl_fl">{{__('Upload File')}}</label><br>
                                        <input type="file" name="cl_fl" id="cl_fl" >

                                        <input type="hidden" value="{{$compliance->cl_fl}}" id="cl_fl_old" name="cl_fl_old">
                                        <a href="https://cogereonline.com/apac/public/compliance/{{$compliance->cl_fl}}" target="_blank" >
                                            <i class="fa fa-file" aria-hidden="true" style="font-size: 20px;" id="file_icn">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">update</button>
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
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
      $(document).ready(function(){
        $check = $('#checking_value').val();
        if($check == "1"){
            $('#agm_div').show()
            $('#policy_div').hide()
        }else if($check =="3"){
            $('#agm_div').hide()
            $('#policy_div').show()
        }
        else if($check =="2"){
            $('#agm_div').hide()
            $('#policy_div').hide()
        }
        else{
            $('#agm_div').hide()
            $('#policy_div').hide()
            $('#upload_div').hide()
        }
        // alert($check);
      });
</script>
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
      function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function validateForm() {
        
        // alert('as');
        var com_fl_nm = document.forms["restaurantRegisterForm"]["com_fl_nm"].value;
        var seumErr = true

        if(com_fl_nm == "") {
            printError("seumErr", "Please enter the value");
            document.getElementById("com_fl_nm").style.borderColor = "red";
            document.getElementById('seumErr').style.color = "red";
        } else {
            printError("seumErr", "");
            seumErr = false;
            document.getElementById("com_fl_nm").style.borderColor = "";
            document.getElementById('seumErr').style.color = "";
        }

        
        if(seumErr == true) {
        return false;
        } else{
        //alert(email + " = " + password)
        }
   }
   </script>
   