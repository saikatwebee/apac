{{-- <a href="{{route('contact.create')}}">hiiiiii</a> --}}
@extends('layouts.admin')
@section('content')

<style>
    .size-16{
        width: 16px;
        height: 16px;
    }
    #serail_no{
    width: 40px;
}
td {
  white-space: normal !important;
  word-wrap: break-word;
}
table {
  table-layout: fixed;
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
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Media</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('contact.create') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add News">
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
                                    <th id="serail_no">S.No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Email</th>
                                    <th>Phone Number 1</th>
                                    <th>Phone Number 2</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $id=1;
                                        ?>
                                @foreach ($contactinfo as $row)
                                <tr>

                                    <td>{{$id}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->description}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone_number1}}</td>
                                    <td>{{$row->phone_number2}}</td>

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

                                            <a href="{{ route('contact.edit' ,$row->id) }}">
                                                <button class="btn btn-sm btn-warning" title="Edit Contact" style="margin-right: 5px; font-size: 20px; line-height: 1.3;"><i class="ti ti-pencil" ></i></button>
                                            </a>

                                            <form class="delete-form" method="POST" action="{{ route('contact.destroy' ,$row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" title="Delete Contact" style="font-size: 20px; line-height: 1.3;" onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i class="ion ion-ios-trash-outline"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <?php
                                       $id++;
                                    ?>
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
