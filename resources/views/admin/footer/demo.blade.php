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
                    <h1>Manage Frontend</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">testing</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body text-center">
                    <h2>AGM & EGM</h2>
                    <h4>2017-2018</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "1")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h4>2018-19</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "2")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h4>2019-20</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "3")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h4>2020-21</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "4")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h4>2021-22</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "5")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h4>2022-2023</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "1" && $row->sub_tle == "6")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h2>ANNUAL RETURN</h2>
                    @foreach($compliance as $row)
                        @if($row->tle == "2" && $row->sub_tle == "8")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h2>OTHER POLICIES</h2>
                    <h4>Policies & Declarations</h4>
                    @foreach($compliance as $row)
                        @if($row->tle == "3" && $row->sub_tle == "7")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach
                    <h2>COMPANY UPDATE</h2>
                    @foreach($compliance as $row)
                        @if($row->tle == "4" && $row->sub_tle == "9")
                            <p>{{$row->cl_fl}}</p>
                            <p>{{$row->com_fl_nm}}</p>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
