@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p class="mb-1"><strong>Whoops!</strong> There were some problems with your input.</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ $message }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-id-number-input" class="form-label">ID# <strong>*</strong></label>
                                <input name="id_number" type="text" class="form-control" id="formrow-id-number-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-member_type-input" class="form-label">Member Type <strong>*</strong></label>
                                <select name="member_type" class="form-control" required>
                                    <option value="">Select Member Type</option>
                                    <option value="Wide">Wide</option>
                                    <option value="Domestic">Domestic</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-name-input" class="form-label">Name <strong>*</strong></label>
                                <input name="name" type="text" class="form-control" id="formrow-name-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-father-name-input" class="form-label">Father Name <strong>*</strong></label>
                                <input name="father_name" type="text" class="form-control" id="formrow-father-name-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-dob-input" class="form-label">Date Of Birth <strong>*</strong></label>
                                <input name="dob" type="date" class="form-control" id="formrow-dob-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-address-input" class="form-label">Address <strong>*</strong></label>
                                <input name="address" type="text" class="form-control" id="formrow-address-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-city-input" class="form-label">City <strong>*</strong></label>
                                <input name="city" type="text" class="form-control" id="formrow-city-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-country-input" class="form-label">Country <strong>*</strong></label>
                                <input name="country" type="text" class="form-control" id="formrow-country-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-id_card-input" class="form-label">ID Card# <strong>*</strong></label>
                                <input name="id_card" type="text" class="form-control" id="formrow-id_card-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-phone-input" class="form-label">Cell# <strong>*</strong></label>
                                <input name="phone" type="text" class="form-control" id="formrow-phone-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-whatsapp-input" class="form-label">Whatsapp# <strong>*</strong></label>
                                <input name="whatsapp" type="text" class="form-control" id="formrow-whatsapp-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-mureed-input" class="form-label">Mureed <strong>*</strong></label>
                                <select name="mureed" class="form-control" required>
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-silsila-input" class="form-label">Silsila</label>
                                <input name="silsila" type="text" class="form-control" id="formrow-silsila-input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-peer_sb_name-input" class="form-label">Peer SB Name</label>
                                <input name="peer_sb_name" type="text" class="form-control" id="formrow-peer_sb_name-input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-astana_location-input" class="form-label">Astana Location</label>
                                <input name="astana_location" type="text" class="form-control" id="formrow-astana_location-input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-email-input" class="form-label">Email <strong>*</strong></label>
                                <input name="email" type="email" class="form-control" id="formrow-email-input" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-password-input" class="form-label">Password <strong>*</strong></label>
                                <input name="password" type="text" class="form-control" id="formrow-password-input" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary w-md btn-loader">
                            <img src="{{ asset('images/loader.gif') }}" alt="">
                            Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection