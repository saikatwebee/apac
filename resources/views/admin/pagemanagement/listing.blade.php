@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Page Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/dashboard') }}"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Page Management</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('admin-add-pagemanagement') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
                        <i class="fe fe-plus btn btn-icon text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card py-5">
                <div class="card-body">
                    @include('inc.messages')

                    <div class="datatable-wrapper table-responsive">
                        <table class="display table table-striped table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Page Title</th>
                                    <th>URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title ?? '' }}</td>
                                        <td>
                                            {{ $item->url ?? '' }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/pagemanagement/' . $item->id) }}">
                                                    <button class="btn btn-sm btn-primary" title="Edit Page" style="margin-right: 5px; font-size: 20px; line-height: 1.3;"><i class="ti ti-pencil" ></i></button>
                                                </a>
                                                @if ($item->id > 4)
                                                    <form class="delete-form" method="POST"
                                                        action="{{ url('admin/pagemanagement/' . $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" title="Delete Page" style="font-size: 20px; line-height: 1.3;" onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i class="ion ion-ios-trash-outline"></i></button>
                                                    </form>
                                                @endif
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

@endsection
