@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Add News</h1>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/dashboard') }}"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin-news') }}">Media</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Add News</li>
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

                <form class="validate-form" method="POST" action="{{ url('admin/news/create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required />
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="post_image">Post Thumbnail</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                    <span class="text-danger">Min Dimensions: 400px * 400px</span>
                                </div>

                                {{-- <div class="form-group">
                                    <label class="control-label" for="post_date">Post Date</label>
                                    <input type="text" name="post_date" class="form-control datepicker" id="post_date" value="{{ old('post_date') }}" required />
                                </div> --}}

                                <div class="form-group">
                                    <label class="control-label" for="post">Content <span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="post" id="summernote">{{ old('post') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-3">
                                {{-- <div class="form-group">
                                    <label class="control-label text-bold" for="category">Category <span class="text-danger">*</span></label>
                                    <select class="form-control select2" name="category" required>
                                        <option value="{{ 0 }}"> Uncategorized</option>
                                        @if(isset($categories) && $categories->count() > 0)
                                            @foreach($categories as $item)
                                                <option @if (old('category') == $item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div> --}}

                                <div class="form-group">
                                    <label class="control-label text-bold" for="source">Source <span class="text-danger">*</span></label>
                                    <input type="text" name="source" id="source" class="form-control" maxlength="500" value="{{ old('source') }}" required />
                                    {{-- <span>Make sure to avoid special characters except "-" symbol.</span> --}}
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_title">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" maxlength="450" value="{{ old('meta_title') }}" required />
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_description">Meta Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control no-resize" name="meta_description" id="meta_description" rows="3" required>{{ old('meta_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_keywords">Meta Keywords <span class="text-danger">*</span></label>
                                    <textarea class="form-control no-resize" name="meta_keywords" id="meta_keywords" rows="3" required>{{ old('meta_keywords') }}</textarea>
                                </div>

                                {{-- <div class="form-group">
                                    <label>Tags</label>
                                    <input type="text" class="form-control inputtags" name="tags" value="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
