@extends('layouts.admin')
<style>
    .card.py-5 {
        padding-top: 1rem!important;
    }
     li.breadcrumb-item a{
    color: #77787e!important;
}
li.breadcrumb-item.active.text-primary {
    color: #8e54e9!important;

}
.page-item.active .page-link {
    z-index: 1;
    color: #fff !important;
    background-color: #8e54e9 !important;
    border-color: #8e54e9 !important;
}
.page-link {
    color: #8e54e9 !important;

}
.page-link:focus{
    box-shadow: none !important;
}
input[type=submit],.btn-primary{
    color: #fff;
    background-color: #8e54e9 !important;;
    border-color: #8e54e9 !important;
}
.btn-primary:focus, .btn-primary.focus{
    box-shadow: none !important;

}
.secondary-menu .btn.btn-icon{
    color: #8e54e9 !important;
}
</style>
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
  textarea{
    resize: none;
  }
label{
  color: #212529;
}
li.breadcrumb-item.active.text-primary {
  color: #8e54e9!important;
}

li.breadcrumb-item:first-child a {
  color: #a6a9b7 !important;
  text-decoration: none;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>About Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Newsroom - List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('newsroom_create') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add News">
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
                    @if (Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                                    <strong>{{session::get('message')}}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                    <div class="datatable-wrapper table-responsive">
                        <table class="display table table-striped table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @php($i=1)
                                  @foreach ($newsroom as $row)
                                        <tr>
                                          <td>{{$i}}</td>
                                          <td>{{$row->newsroom_date}}</td>
                                          {{-- <td>{{$row->newsroom_title}}</td> --}}
                                          <td>{{ Str::limit($row->newsroom_title, 40) }}</td>
                                          {{-- <td>{{$row->newsroom_url}}</td> --}}
                                          <td>{{ Str::limit($row->newsroom_url, 20) }}</td>
                                          <td>
                                            <a href="{{ route('newsroom_edit',$row->id) }}" class="btn btn-info btn-sm">
                                              <i class="ti ti-pencil" ></i>
                                            </a>
                                            <a  class="btn btn-danger btn-sm del" data-demo="{{$row->id}}" href="javascript:;">
                                              <i class="ion ion-ios-trash-outline"></i>
                                            </a>
                                          </td>
                                        </tr>
                                    @php($i++)
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.del').on('click',function(){
        var x = confirm("Do you want to delete the Newroom?");
        if(x == true) {
          var id = $(this).data('demo');
          $.ajax({
              url: "{{ route('newsroom_delete') }}",
              data: { "id": id },
              type: "GET",
              dataType: "json",
              success: function (data) {
                window.location.reload();
              }
          });
        }
      });
    });
  </script>
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