@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Users - {{ $data->name }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Edit User - {{ $data->name }}</li>
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
                <form method="post" action="{{ route('users.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-name-input" class="form-label">Name <strong>*</strong></label>
                                <input name="name" type="text" class="form-control" id="formrow-name-input" value="{{ old('name', $data->name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-email-input" class="form-label">Email <strong>*</strong></label>
                                <input name="email" type="email" class="form-control" id="formrow-email-input" value="{{ old('email', $data->email) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-password-input" class="form-label">Password</label>
                                <input name="password" type="text" class="form-control" id="formrow-password-input" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-phone-input" class="form-label">Phone <strong>*</strong></label>
                                <input name="phone" type="text" class="form-control" id="formrow-phone-input" value="{{ old('phone', $data->phone) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-education-input" class="form-label">Education <strong>*</strong></label>
                                <input name="education" type="text" class="form-control" id="formrow-education-input" value="{{ old('education', $data->profile != null ? $data->profile->education : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-profession-input" class="form-label">Profession <strong>*</strong></label>
                                <input name="profession" type="text" class="form-control" id="formrow-profession-input" value="{{ old('profession', $data->profile != null ? $data->profile->profession : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-country-input" class="form-label">Country <strong>*</strong></label>
                                <input name="country" type="text" class="form-control" id="formrow-country-input" value="{{ old('country', $data->profile != null ? $data->profile->country : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-district-input" class="form-label">District <strong>*</strong></label>
                                <input name="district" type="text" class="form-control" id="formrow-district-input" value="{{ old('district', $data->profile != null ? $data->profile->district : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-dob-input" class="form-label">Date Of Birth <strong>*</strong></label>
                                <input name="dob" type="date" class="form-control" id="formrow-dob-input" value="{{ old('dob', $data->profile != null ? $data->profile->dob : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-address-input" class="form-label">Address <strong>*</strong></label>
                                <input name="address" type="text" class="form-control" id="formrow-address-input" value="{{ old('address', $data->profile != null ? $data->profile->address : '') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary w-md btn-loader">
                            <img src="{{ asset('images/loader.gif') }}" alt="">
                            Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection