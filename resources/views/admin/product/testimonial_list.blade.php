@extends('layouts.admin')
<style>
    .card.py-5 {
        padding-top: 1rem!important;
    }
</style>
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Product Management</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Testimonial - List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('testimonial_create') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                    @if (Session::has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                      <strong>{{session::get('msg')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    <div class="datatable-wrapper table-responsive">
                        <table class="display table table-striped table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Customer Image</th>
                                    <th>Customer Name</th>
                                    <th>Customer Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($testimonial as $row)
                                      <tr>
                                        <td>{{$i}}</td>
                                        <td>
                                          <img src="{{ asset('product/'.$row->tes_img)}}" alt="" width="40px" height="40px" >
                                        </td>
                                        <td>{{$row->tes_nme}}</td>
                                        <td>{{$row->tes_rol}}</td>
                                        <td>
                                          <a href="{{ route('testimonial_edit',$row->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti ti-pencil" ></i>
                                          </a>
                                          <a  class="btn btn-danger btn-sm del"  onclick="dir_del({{$row->id}})" href="javascript:;">
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
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function dir_del(id){
        var x = confirm("Do you want to delete the Testimonial?");
        if(x == true) {
          var id = id;
          $.ajax({
              url: "{{ route('testimonial_delete') }}",
              data: { "id": id },
              type: "GET",
              dataType: "json",
              success: function (data) {
                window.location.reload();
              }
          });
        }
    }
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