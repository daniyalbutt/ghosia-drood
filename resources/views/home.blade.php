@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Total Durood - {{ $current_month }}</p>
                                <h4 class="mb-0">{{ number_format($total_durood, 0) }} </h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Users</p>
                                <h4 class="mb-0">{{ $total_user }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Books</p>
                                <h4 class="mb-0">{{ $total_book }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Durood</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="home-datatable">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">ID#</th>
                                <th class="align-middle">User</th>
                                <th class="align-middle">Month</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $value)
                            <tr>
                                <td>{{ $value->id_number }}</td>
                                <td>
                                    <div class="d-flex">
                                        @if($value->image != null)
                                        <a href="{{ asset($value->image) }}" target="_blank"><img src="{{ asset($value->image) }}" style="height: 65px;margin-right: 15px;"></a>
                                        @else
                                        <img src="{{ asset('images/user.jpg') }}" style="height: 65px;margin-right: 15px;">
                                        @endif
                                        <p style="width: 150px;text-wrap: auto;"><strong>{{ $value->name }}</strong><span style="display: block;text-decoration: underline;">{{ $value->profile != null ? $value->profile->address : '' }}</span>
                                    </div>
                                </td>
                                <td>{{ date('F') }}</td>    
                                <td>{{ $value->total_durood() }}</td>
                                <td>
                                    <a target="_blank" href="{{ route('attendance.index', ['id' => $value->id, 'name' => str_replace(' ', '-', strtolower($value->name))]) }}" class="btn btn-info btn-sm mt-1 mb-1"><i class="fa fa-user-check"></i></a>
                                    @foreach($value->attendance as $key => $value)
                                    <button class="btn btn-success btn-sm mt-1 mb-1">{{ $value->time_date }}</button><br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Durood</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">User</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $value->user != null ? $value->user->name : '' }}</a> </td>
                                <td>{{ date('d M, Y - g:i:s A', strtotime($value->updated_at)) }}</td>
                                <td>{{ $value->durood }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
