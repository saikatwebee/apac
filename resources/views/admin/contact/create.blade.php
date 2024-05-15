@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>{{$create_title}}</h1>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('contact.index') }}">{{$list_title}}</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">{{$create_title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card py-5">
                {{-- <div class="col-12">
                    @include('inc.messages')
                </div> --}}

                <form class="validate-form" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group @error('title') has-error @enderror">
                                    <label for="title" class="control-label">{{ __('Title') }}<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="title" id="title" >
                                        @if($errors->has('text'))
                                            <p class="text-danger">{{ $errors->first('text') }}</p>
                                        @endif
                                </div>

                                <div class="form-group @error('description') has-error @enderror">
                                <label class="control-label text-bold" for="description">{{ __('Description') }}<span class="text-danger">*</span></label>

                                    {{-- <label for="description" class="control-label">{{ __('Description') }}</label> --}}
                                    <textarea class="form-control no-resize" name="description" id="description" rows="3" ></textarea>

                                        {{-- <input type="text" class="form-control" name="description" id="description" > --}}
                                        @if($errors->has('description'))
                                            <p class="text-danger">{{ $errors->first('description') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <label for="email" class="control-label">{{ __('Email') }}<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="email" id="email" >
                                        @if($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('phone_number1') has-error @enderror">
                                    <label for="phone_number1" class="control-label">{{ __('Phone number 1 ') }}<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" name="phone_number1" id="phone_number1" >
                                        @if($errors->has('phone_number1'))
                                            <p class="text-danger">{{ $errors->first('phone_number1') }}</p>
                                        @endif
                                </div>
                                <div class="form-group @error('phone_number2') has-error @enderror">
                                    <label for="phone_number2" class="control-label">{{ __('Phone number 2') }}</label>

                                        <input type="text" class="form-control" name="phone_number2" id="phone_number1" >
                                        @if($errors->has('phone_number2'))
                                            <p class="text-danger">{{ $errors->first('phone_number2') }}</p>
                                        @endif
                                </div>



                                {{-- <div class="form-group">
                                    <label class="control-label" for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title"  required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Description <span class="text-danger">*</span></label>
                                    <input type="text" name="description" class="form-control" id="description"  required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email"  required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="phone_number1">Phone number 1 <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number1" class="form-control" id="phone_number1"  required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="phone_number2">Phone number 2 <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number2" class="form-control" id="phone_number2"  required />
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label class="control-label" for="post_image">Post Thumbnail</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                    <span class="text-danger">Min Dimensions: 400px * 400px</span>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label class="control-label" for="post_date">Post Date</label>
                                    <input type="text" name="post_date" class="form-control datepicker" id="post_date" value="{{ old('post_date') }}" required />
                                </div> --}}


                            </div>


                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">{{ __('Submit') }}</button>
                        <a href="{{route('contact.index')}}" class="btn btn-secondary" type="reset">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
