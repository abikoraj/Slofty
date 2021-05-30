@extends('layouts.backend.app')
@section('content')

    {{-- <div style="width: 500px; margin:auto;">
        <form action="{{ route('team.submit') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="post" placeholder="post">
            <input type="text" name="facebook" placeholder="facebook">
            <input type="text" name="twitter" placeholder="twitter">
            <input type="text" name="linkedin" placeholder="linkedin">
            <button type="submit">Save</button>
        </form>
    </div> --}}

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Teams</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Teams</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class=" col-md-12 justify-content-center">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="header">
                                <h2>Add<strong> Teams</strong></h2>
                            </div>
                            <form action="{{ route('team.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body row">
                                    <div class="form-group col-md-3">
                                        <label for="image">Image (370x480)</label>
                                        <input type="file" name="image" class="dropify"
                                            data-default-file="{{ asset('assets/Aero/images/team-1a.jpg') }}" required>
                                    </div>
                                    <div class="col-md-9 row">
                                        <div class="col-md-6">
                                            <label for="title">Name</label>
                                            <input type="text" name="name" class="form-control form-control"
                                                placeholder="Enter Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="subtitle">Designation</label>
                                            <input type="text" name="post" class="form-control form-control"
                                                placeholder="Enter Designation" required>
                                        </div>
                                        <div class="input-group masked-input mb-3 mt-3 col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-facebook"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="facebook"
                                                placeholder="https://www.facebook.com/abc">
                                        </div>
                                        <div class="input-group masked-input mb-3 col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="twitter"
                                                placeholder="https://twitter.com/abc">
                                        </div>
                                        <div class="input-group masked-input mb-3 col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="linkedin"
                                                placeholder="https://www.linkedin.com/abc">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-blue btn-lg float-right">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2><strong>Teams</strong></h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 c_list c_table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\Team::all() as $item)
                                            <tr>
                                                <td>
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt=""
                                                        style="width: 100px; height: 100px;">
                                                </td>
                                                <td>
                                                    {{ $item->name }}
                                                </td>
                                                <td>
                                                    {{ $item->post }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('team.edit', ['team' => $item->id]) }}"><i
                                                            class="zmdi zmdi-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="{{ route('team.delete', ['team' => $item->id]) }}"><i
                                                            class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
