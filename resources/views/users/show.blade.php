@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users - {{ $data->name }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                    <li class="breadcrumb-item active">{{ $data->name }}</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="hstack gap-2 mb-2">
                    <button class="btn btn-soft-primary w-100">Total Durood: {{ number_format($data->durood_sum(), 0) }}</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="col">Name</th>
                                <td scope="col">{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Education</th>
                                <td>{{ $data->profile != null ? $data->profile->education : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Profession</th>
                                <td>{{ $data->profile != null ? $data->profile->profession : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Country</th>
                                <td>{{ $data->profile != null ? $data->profile->country : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">District</th>
                                <td>{{ $data->profile != null ? $data->profile->district : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Date Of Birth</th>
                                <td>{{ $data->profile != null ? $data->profile->dob : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $data->profile != null ? $data->profile->address : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--end col-->
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="d-flex">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-semibold">{{ $data->name }}</h5>
                        <ul class="list-unstyled hstack gap-2 mb-0">
                            <li>
                                <i class="bx bx-building-house"></i> <span class="text-muted">{{ $data->phone }}</span>
                            </li>
                            <li>
                                <i class="bx bx-map"></i> <span class="text-muted">{{ $data->profile != null ? $data->profile->country : '' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div>

@endsection