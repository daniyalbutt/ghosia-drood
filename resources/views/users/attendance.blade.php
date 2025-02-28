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
                                @if(in_array($value['key'], $attendance_key))
                                <a href="javascript:;" class="btn btn-success btn-sm">Checked</a>
                                @else
                                <a href="javascript:;" onclick="confirmOpen('{{ $value['key'] }}', '{{ $value['date'] }}', '{{ $value['day'] }}' , '{{ $value['month'] }}', {{ $data->id }})"  class="btn btn-danger btn-sm">Check in</a>
                                @endif
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('attendance.post') }}" method="post" class="attendance-form">
                @csrf
                <input type="hidden" name="time_key" class="time_key">
                <input type="hidden" name="time_date" class="time_date">
                <input type="hidden" name="time_day" class="time_day">
                <input type="hidden" name="time_month" class="time_month">
                <input type="hidden" name="user_id" class="user_id">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center" id="myModalLabel" style="text-transform: uppercase;font-weight: bold;color: wblak;">Are you Sure?</h4>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">YES</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function confirmOpen(key, date, day, month, id){
        $('.attendance-form').find('.time_key').val(key);
        $('.attendance-form').find('.time_date').val(date);
        $('.attendance-form').find('.time_day').val(day);
        $('.attendance-form').find('.time_month').val(month);
        $('.attendance-form').find('.user_id').val(id);
        $('#myModal').modal('show');
    }
</script>
@endpush