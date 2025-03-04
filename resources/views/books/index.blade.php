@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Books</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Books</li>
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
            <a href="{{ route('books.create') }}" class="btn btn-primary">ADD BOOK</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Language</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <td>
                                <img src="{{ asset($value->image) }}" alt="" width="80">
                            </td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->author }}</td>
                            <td>{{ $value->language }}</td>
                            <td>
                                <a href="{{ asset($value->link) }}" download>Download File</a>
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a class="btn btn-warning btn-sm content-icon" href="{{ route('books.edit',$value->id) }}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{ route('books.destroy', $value->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm content-icon"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection