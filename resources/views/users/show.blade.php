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
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p class="mb-0">{{ $message }}</p>
            </div>
            @endif
            <div class="card-body">
                <div class="hstack gap-2 mb-2">
                    <button class="btn btn-soft-primary w-100">Total Durood: {{ number_format($data->durood_sum(), 0) }}</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            @if($data->profile != null)
                            @if($data->profile->reference != null)
                            <tr>
                                <th scope="col">Reference</th>
                                <td scope="col">{{ $data->profile->reference }}</td>
                            </tr>
                            @endif
                            @endif
                            <tr>
                                <th scope="col">ID#</th>
                                <td scope="col">{{ $data->id_number }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Member Type</th>
                                <td scope="col">{{ $data->profile != null ? $data->profile->member_type : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Name</th>
                                <td scope="col">{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Father Name</th>
                                <td scope="col">{{ $data->profile != null ? $data->profile->father_name : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Date Of Birth</th>
                                <td>{{ $data->profile != null ? $data->profile->dob : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $data->profile != null ? $data->profile->address : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">City</th>
                                <td>{{ $data->profile != null ? $data->profile->city : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Country</th>
                                <td>{{ $data->profile != null ? $data->profile->country : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">ID Card#</th>
                                <td>{{ $data->profile != null ? $data->profile->id_card : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Cell#</th>
                                <td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Whatsapp#</th>
                                <td>{{ $data->profile != null ? $data->profile->whatsapp : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Mureed</th>
                                <td>{{ $data->profile != null ? $data->profile->mureed  == 0 ? 'NO' : 'YES' : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Silsila</th>
                                <td>{{ $data->profile != null ? $data->profile->silsila : '' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Peer SB Name</th>
                                <td>{{ $data->profile != null ? $data->profile->peer_sb_name : '' }}</td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Astana Location</th>
                                <td>{{ $data->profile != null ? $data->profile->astana_location : '' }}</td>
                            </tr> -->
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
                    @if($data->image != null)
                    <img src="{{ asset($data->image) }}" style="height: 50px">
                    @else
                    <img src="{{ asset('images/user.jpg') }}" style="height: 50px">
                    @endif
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
            <div class="card-body">
                <form action="{{ route('users.show', $data->id) }}">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control" name="start_date" value="{{ app('request')->input('start_date') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date" value="{{ app('request')->input('end_date') }}">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" style="margin-top: 27px;">Search Result</button>
                        </div>
                    </div>
                </form>
                <form method="post" action="{{ route('durood.store') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $data->id }}">
                    <div class="input-group mb-3">
                        <input type="number" name="durood" class="form-control" placeholder="Durood" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-loader" type="submit">
                                <img src="{{ asset('images/loader.gif') }}" alt="">
                                Add Durood
                            </button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Month</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($durood as $key => $value)
                            <tr>
                                <td>{{ date('F', strtotime($value->updated_at)) }}</td>
                                <td>{{ date('d M, Y - g:i:s A', strtotime($value->updated_at)) }}</td>
                                <td>{{ $value->durood }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a class="btn btn-warning btn-sm content-icon" onclick="openModel({{$value->id}}, {{ $value->durood }})" href="javascript:;"><i class="fa fa-edit"></i></a>
                                        <form method="post" action="{{ route('durood.trash', $value->id) }}">
                                            @csrf
                                            <button class="btn btn-primary btn-sm content-icon"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div><!--end col-->
</div>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true" id="largeModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Durood</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('durood.update') }}">
                    @csrf
                    <input type="hidden" name="durood_id" class="durood_id" value="{{ $data->id }}">
                    <div class="input-group mb-3">
                        <input type="number" name="durood" class="form-control durood" placeholder="Durood" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-loader" type="submit">
                                <img src="{{ asset('images/loader.gif') }}" alt="">
                                Update Durood
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    function openModel(a, durood){
        $('#largeModal').find('.durood_id').val(a);
        $('#largeModal').find('.durood').val(durood);
        $('#largeModal').modal('show');
    }
</script>
@endpush