@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Edit Page</h1>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/dashboard') }}"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin-pagemanagement') }}">Page Management</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Edit Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card py-5">
                <div class="col-12">
                    @include('inc.messages')
                </div>

                <form class="validate-form" method="POST"
                    action="{{ url('admin/pagemanagement/'. $page->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') ?? $page->title }}" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-bold" for="url">URL <span class="text-danger">*</span></label>
                                    <input type="text" name="url" id="url" class="form-control" maxlength="500" value="{{ old('url') ?? $page->url }}" @if ($page->id <= 4) readonly style="pointer-events: none;" @endif required />
                                    <span>Make sure to avoid special characters except "-" symbol.</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-bold" for="blade">Blade <span class="text-danger">*</span></label>
                                    <input type="text" name="blade" id="blade" class="form-control" maxlength="500" value="{{ old('blade') ?? $page->blade }}" @if ($page->id <= 4) readonly style="pointer-events: none;" @endif required />
                                    <span>Make sure to avoid special characters "." symbol.</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_title">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" maxlength="450" value="{{ old('meta_title') ?? $page->meta_title }}" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_description">Meta Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control no-resize" name="meta_description" id="meta_description" rows="3" required>{{ old('meta_description') ?? $page->meta_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-bold" for="meta_keywords">Meta Keywords <span class="text-danger">*</span></label>
                                    <textarea class="form-control no-resize" name="meta_keywords" id="meta_keywords" rows="3" required>{{ old('meta_keywords') ?? $page->meta_keywords }}</textarea>
                                </div>
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