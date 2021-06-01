@extends('layouts.backend.app')
@section('content')

    @php
    $item = App\Models\About::first();
    @endphp

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>About</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">About</li>
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
                                <h2>Edit<strong> About</strong></h2>
                            </div>
                            <form action="{{ route('about.update', ['about' => $item->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="heading">Heading</label>
                                                <input type="text" name="heading" class="form-control" placeholder="Heading"
                                                    required value="{{ $item->heading }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="subHeading">Sub-Heading</label>
                                                <input type="text" name="subHeading" class="form-control"
                                                    placeholder="Sub-Heading" required value="{{ $item->subHeading }}">
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-group col-md-12">
                                            <label for="title1">Title 1</label>
                                            <input type="text" name="title1" class="form-control" placeholder="Title 1"
                                                required value="{{ $item->title1 }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea rows="2" class="form-control no-resize" name="description1"
                                                placeholder="Description of Title 1">{{ $item->description1 }}</textarea>
                                        </div>

                                        <hr>

                                        <div class="form-group col-md-12">
                                            <label for="title2">Title 2</label>
                                            <input type="text" name="title2" class="form-control" placeholder="Title 2"
                                                required value="{{ $item->title2 }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea rows="2" class="form-control no-resize" name="description2" required
                                                placeholder="Description of Title 2">{{ $item->description2 }}</textarea>
                                        </div>

                                        <hr>

                                        <div class="form-group col-md-12">
                                            <label for="title3">Title 3</label>
                                            <input type="text" name="title3" class="form-control" placeholder="Title 3"
                                                required value="{{ $item->title3 }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea rows="2" class="form-control no-resize" name="description3"
                                                placeholder="Description of Title 3">{{ $item->description3 }}</textarea>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-12 pt-0 float-right">
                                        <button type="submit"
                                            class="btn btn-primary waves-blue btn-lg float-right">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
