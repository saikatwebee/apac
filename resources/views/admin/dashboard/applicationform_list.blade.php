@extends('layouts.admin')

<style>
    .card.py-5 {
        padding-top: 1rem!important;
    }
    .table>tbody>tr>td {
        vertical-align: middle;
        white-space: normal !important;
    }
</style>

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>{{$application_form_title}}</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Application form-List</li>
                        </ol>
                    </nav>
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
                        <form action="{{ route('save_remarks') }}" method="post">
                            @csrf
                            <table class="display table table-striped table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Current Organisation</th>
                                        <th>Current Designation</th>
                                        <th>Years of exp</th>
                                        <th>Location</th>
                                        <th>State</th>
                                        <th>Resume</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Remark</th>
                                        <th>Submit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @if(auth()->check())
                                        @foreach ($application_form as $row)
                                            @if((auth()->user()->email == 'test@apacfin.com' && $row->states == '3') ||
                                                (auth()->user()->email == 'test2@apacfin.com' && $row->preferred_location == '1') ||
                                                (auth()->user()->email == 'test3@apacfin.com' && $row->preferred_location == '6') ||
                                                (!in_array(auth()->user()->email, ['test@apacfin.com', 'test2@apacfin.com', 'test3@apacfin.com'])))
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->mobile_number }}</td>
                                                    <td>{{ $row->current_organization }}</td>
                                                    <td>{{ $row->current_designation }}</td>
                                                    <td>{{ $row->yrs_exp }}</td>
                                                    <td>{{ $row->preferred_location }}</td>
                                                    <td>{{$row->states}}</td>
                                                    <td>{{$row->file}}</td>
                                                    <td>{{ $row->created_at->format('d/m/Y') }}</td>
                                                    <td>{{ $row->created_at->format('H:i:s') }}</td>
                                                
                                                    <td>
    <select name="status" class="form-control">
        <option value="Not Shortlisted" {{ $row->status == "Not Shortlisted" ? 'selected' : '' }}>Not Shortlisted</option>
        <option value="Busy Call Back Requested" {{ $row->status == "Busy Call Back Requested" ? 'selected' : '' }}>Busy Call Back Requested</option>
        <option value="No Response (Maximum attempts 2)" {{ $row->status == "No Response (Maximum attempts 2)" ? 'selected' : '' }}>No Response (Maximum attempts 2)</option>
        <option value="Not Eligible" {{ $row->status == "Not Eligible" ? 'selected' : '' }}>Not Eligible</option>
        <option value="Onboard" {{ $row->status == "Onboard" ? 'selected' : '' }}>Onboard</option>
        <option value="Shortlisted" {{ $row->status == "Shortlisted" ? 'selected' : '' }}>Shortlisted</option>
        <option value="Interview Scheduled" {{ $row->status == "Interview Scheduled" ? 'selected' : '' }}>Interview Scheduled</option>
        <option value="Offered" {{ $row->status == "Offered" ? 'selected' : '' }}>Offered</option>
        <option value="Rejected" {{ $row->status == "Rejected" ? 'selected' : '' }}>Rejected</option>
    </select>
</td>
   

                                                    <td>
                                                        <textarea name="remarks[]" class="form-control" rows="2" >{{ $row->remarks ?? '' }}</textarea>
                                                        <input type="hidden" name="ids[]" value="{{ $row->id }}">
                                                    </td>
                                                    
                                                    <td>
                                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                                    </td>
                                                </tr>
                                                @php($i++)
                                            @endif
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- JavaScript and jQuery Scripts -->
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>
