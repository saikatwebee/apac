{{-- <a href="{{route('contact.create')}}">hiiiiii</a> --}}
@extends('layouts.admin')
@section('content')

<style>
.size-16{
        width: 16px;
        height: 16px;
    }
#serail_no{
    width: 40px !important;
}
td {
  white-space: normal !important;
  word-wrap: break-word;
}
table {
  table-layout: fixed;
}
 .card.py-5 {
        padding-top: 1rem!important;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>{{$footer_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">{{$list_title}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('footer/newsletter.create') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add News">
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
                        <table class="display table table-striped table-hover" id="example">
                            <thead>
                                <tr>
                                    <th id="serail_no">S.No</th>
                                    
                                    <th>Newsletter PDF Name</th>
                                    <th>Newsletter PDF File</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $id=1;
                                        ?>
                                @foreach ($newsletterinfo as $row)
                                <tr>

                                    <td>{{$id}}</td>
                                    <td>{{$row->newsletter_pdf_name}}</td>
                                    <td>{{$row->newsletter_pdf_file}}</td>


                                    <td>
                                        <div class="btn-group">


                                            <a href="{{ route('footer/newsletter.edit' ,$row->id) }}">
                                                <button class="btn btn-sm btn-warning"  title="Edit Contact" style="margin-right: 10px; font-size: 15px; line-height: 1.3;"><i class="ti ti-pencil" ></i></button>
                                            </a>

                                            <form class="delete-form" method="POST" action="{{ route('footer/newsletter.delete' ,$row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" title="Delete Contact" style="font-size: 16px; line-height: 1.3;" onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i class="ion ion-ios-trash-outline"></i></button>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>
      $(document).ready(function() {
          var table = $('#example').DataTable( {
              lengthChange: false,
              buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
          } );

          table.buttons().container()
              .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      } );
</script>