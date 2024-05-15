@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Media</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/dashboard') }}"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Media</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('admin-add-news') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add News">
                        <i class="fe fe-plus btn btn-icon text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    @include('inc.messages')

                    <div class="datatable-wrapper table-responsive">
                        <table class="display table table-striped table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Date Posted</th>
                                    <th>Source</th>
                                    {{-- <th>Category</th> --}}
                                    {{-- <th>Stats</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a href="{{ $item->source }}" style="width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                            {{-- {{ $item->source }} --}}
                                            {{ \Illuminate\Support\Str::limit($item->source, 40, $end='...') }}
                                        </a>
                                    </td>
                                    {{-- <td>
                                        @if(!empty($item->category)) --}}
                                            <?php #$category = DB::table('categories')->where('id', $item->category)->first(); ?>
                                            {{-- {{ $category->name }}
                                        @else
                                            Uncategorized
                                        @endif
                                    </td> --}}
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ url('/admin/news/' . $item->url) }}">
                                                <button class="btn btn-sm btn-primary" title="View Post" style="margin-right: 5px; font-size: 20px; line-height: 1.3;"><i class="ion ion-ios-eye" ></i></button>
                                            </a> --}}

                                            <a href="{{ url('admin/news/' . $item->id) }}">
                                                <button class="btn btn-sm btn-warning" title="Edit Post" style="margin-right: 5px; font-size: 20px; line-height: 1.3;"><i class="ti ti-pencil" ></i></button>
                                            </a>
                                            
                                            <form class="delete-form" method="POST" action="{{ url('admin/news/' . $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" title="Delete Post" style="font-size: 20px; line-height: 1.3;" onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i class="ion ion-ios-trash-outline"></i></button>
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
 
@endsection