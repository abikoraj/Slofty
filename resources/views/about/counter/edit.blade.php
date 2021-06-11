@extends('layouts.backend.app')
@section('content')

    @php
    $item = App\Models\Counter::first();
    @endphp

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Counter</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                    Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Counter</li>
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
                                <h2>Edit<strong> Counter</strong></h2>
                            </div>
                            <form action="{{ route('counter.update', ['counter' => $item->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="background">Background Image</label>
                                        <input type="file" name="background" class="dropify"
                                            value="{{ asset($item->background) }}"
                                            data-default-file="{{ asset($item->background) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-5">
                                                <label for="title1">Title 1</label>
                                                <input type="text" name="title1" class="form-control" placeholder="Title 2"
                                                    required value="{{ $item->title1 }}">
                                            </div>
                                            <div class="form-group col-md-4 pl-0">
                                                <label for="icon1">Icon 1</label>
                                                <input type="text" name="icon1" class="form-control" placeholder="Icon 1"
                                                    required value="{{ $item->icon1 }}">
                                            </div>
                                            <div class="form-group col-md-3 pl-0">
                                                <label for="count1">Count 1</label>
                                                <input type="number" name="count1" class="form-control"
                                                    placeholder="Count 1" required value="{{ $item->count1 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5">
                                                <label for="title2">Title 2</label>
                                                <input type="text" name="title2" class="form-control" placeholder="Title 2"
                                                    required value="{{ $item->title2 }}">
                                            </div>
                                            <div class="form-group col-md-4 pl-0">
                                                <label for="icon2">Icon 2</label>
                                                <input type="text" name="icon2" class="form-control" placeholder="Icon 2"
                                                    required value="{{ $item->icon2 }}">
                                            </div>
                                            <div class="form-group col-md-3 pl-0">
                                                <label for="count2">Count 2</label>
                                                <input type="number" name="count2" class="form-control"
                                                    placeholder="Value-2" required value="{{ $item->count2 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5">
                                                <label for="title3">Title 3</label>
                                                <input type="text" name="title3" class="form-control" placeholder="Title 2"
                                                    required value="{{ $item->title3 }}">
                                            </div>
                                            <div class="form-group col-md-4 pl-0">
                                                <label for="icon3">Icon 3</label>
                                                <input type="text" name="icon3" class="form-control" placeholder="Value-2"
                                                    required value="{{ $item->icon3 }}">
                                            </div>
                                            <div class="form-group col-md-3 pl-0">
                                                <label for="count3">Count 3</label>
                                                <input type="number" name="count3" class="form-control"
                                                    placeholder="Value-2" required value="{{ $item->count3 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5">
                                                <label for="title4">Title 4</label>
                                                <input type="text" name="title4" class="form-control" placeholder="Title 2"
                                                    required value="{{ $item->title4 }}">
                                            </div>
                                            <div class="form-group col-md-4 pl-0">
                                                <label for="icon4">Icon 4</label>
                                                <input type="text" name="icon4" class="form-control" placeholder="Value-2"
                                                    required value="{{ $item->icon4 }}">
                                            </div>
                                            <div class="form-group col-md-3 pl-0">
                                                <label for="count4">Count 4</label>
                                                <input type="number" name="count4" class="form-control"
                                                    placeholder="Value-2" required value="{{ $item->count4 }}">
                                            </div>
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
