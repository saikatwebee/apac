@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  @endsection
@section('content')

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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Overview Multiples Images- List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('overviewmultiples_create') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Page">
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
                        <table class="display table table-striped table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Multiples Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php($i=1)
                                @foreach ($overviewmultiples as $row)
                                      <tr>
                                        <td>{{$i}}</td>
                                        <td>
                                          <img src="{{ asset('overview_icons/'.$row->overview_image)}}" alt="" width="120px" height="80px">
                                        </td>

                                        <td>
                                          <a href="{{ route('overviewmultiples_edit',$row->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti ti-pencil" ></i>
                                          </a>
                                          <a  class="btn btn-danger btn-sm del" data-demo="{{$row->id}}" onclick="overviewmultiples_del({{$row->id}})" href="javascript:;">
                                            <i class="ion ion-ios-trash-outline"></i>
                                          </a>
                                          {{-- href="{{ route('about.delete',$row->id) }}" --}}
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
function overviewmultiples_del(id){
     var x = confirm("Do you want to delete the Director?");
      if(x == true) {
        var id = id;
        $.ajax({
            url: "{{ route('overviewmultiples_delete') }}",
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
