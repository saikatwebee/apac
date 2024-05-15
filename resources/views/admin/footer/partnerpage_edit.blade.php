@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
    label{
    font-weight: 700;
    color: #2c2e3e;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>{{$partner_page_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">{{$partner_page_update_title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card py-5">
                <div class="col-12">
                    @include('inc.messages')
                </div>

                <form class="validate-form" method="POST" action="{{ route('partnerpage.update') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="p-3 text-center bg-none">
                            <h3 class="mb-3">{{__('Partner Page Section')}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('partnerpage_section1') has-error @enderror">
                                    <label for="partnerpage_section1" class="control-label">{{ __('Partner Page Section 1') }}</label>
                                    <input class="form-control " name="partnerpage_section1" id="partnerpage_section1" value="{{$partner_page_info->partnerpage_section1}}"   />

                                        @if($errors->has('partnerpage_section1'))
                                            <p class="text-danger">{{ $errors->first('partnerpage_section1') }}</p>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @error('partnerpage_section2') has-error @enderror">
                                    <label for="partnerpage_section2" class="control-label">{{ __('Partner Page Section 2') }}</label>
                                    <input class="form-control " name="partnerpage_section2" id="partnerpage_section2" value="{{$partner_page_info->partnerpage_section2}}"   />


                                        @if($errors->has('partnerpage_section2'))
                                            <p class="text-danger">{{ $errors->first('partnerpage_section2') }}</p>
                                        @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer ">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Update') }}</button>
                        {{-- <a href="{{route('dashboard')}}" class="btn btn-secondary" type="reset">{{ __('Cancel') }}</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection
