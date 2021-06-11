@extends('layouts.backend.app')
@section('content')

    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Blogs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                    Dashboard</a></li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                        {{-- <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button> --}}
                    </div>
                </div>
            </div>
            {{-- @php
                $item = App\Models\Policy::first();
            @endphp --}}
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
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
                                <h2>Add New<strong> Blog</strong></h2>
                            </div>
                            <div class="body mb-2">
                                {{-- <div class="summernote"> --}}
                                <form action="{{ route('blog.submit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="question">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                            required>
                                    </div>
                                    <textarea name="body" class="summernote" required
                                        placeholder="What's on your mind..."></textarea>
                                    <button type="submit" class="btn btn-primary btn-lg mt-3">Upload</button>
                                </form>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Blog</strong> List</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 c_list c_table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\Blog::all() as $item)
                                            <tr>
                                                <td>
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    {{ $item->title }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('blog.edit', ['blog' => $item->id]) }}"><i
                                                            class="zmdi zmdi-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="{{ route('blog.delete', ['blog' => $item->id]) }}"><i
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
