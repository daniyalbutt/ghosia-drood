@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users Attendance - {{ $data->name }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Users - {{ $data->name }}</li>
                    <li class="breadcrumb-item active">Attendance</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ $message }}</p>
        </div>
        @endif
        <div class="text-right text-end mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">ADD USER</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <th>Month</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($fridays as $key => $value)
                        <tr>
                            <td>{{ $value['month'] }}</td>
                            <td>{{ $value['date'] }}</td>
                            <td>{{ $value['day'] }}</td>
                            <td>
                                <a href="javascript:;" onclick="confirmOpen('{{ $value['key'] }}', {{ $data->id }})"  class="btn btn-primary btn-sm">Check in</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Default Modal Heading</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Are you Sure?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function confirmOpen(key, id){
        $('#myModal').modal('show');
    }
</script>
@endpush