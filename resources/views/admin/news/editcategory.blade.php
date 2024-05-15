@extends('layouts.admin')
@section('content')

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-6"><h4>Edit Blog Categories</h4></div>
                        <div class="col-6">
                            <div class="card-toolbar" style="text-align: right;">
                                <a href="{{ route('admin-news-categories') }}" class="btn btn-icon icon-left btn-primary" title="Add Post"><i class="fas fa-plus"></i> Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('inc.messages')
                        <form class="validate-form" method="POST" action="{{ url('admin/blog/categories/'.$category->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group" >
                                                <label class="control-label" for="name">Category Name<font class="text-danger">*</font></label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name??old('name') }}" required />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group" >
                                                <label class="control-label" for="url">URL<font class="text-danger">*</font></label>
                                                <input type="text" name="url" class="form-control" id="url" value="{{ $category->url??old('url') }}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/blog/category/' . $item->id) }}">
                                                    <button class="btn btn-warning" title="Edit Category" style="margin-right: 5px;"><i class="fas fa-pencil-alt" ></i></button>
                                                </a>

                                                <form class="delete-form" method="POST" action="{{ url('admin/blog/categories/' . $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" title="Delete Category" onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
