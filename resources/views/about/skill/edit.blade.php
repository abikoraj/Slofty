@extends('layouts.backend.app')

@section('content')

    @php
    $item = App\Models\Skill::first();
    @endphp

    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Skills</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                    Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Skills</li>
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
                                <h2>Edit<strong> Skills</strong></h2>
                            </div>
                            <div class="body clearfix shadow-sm">
                                <form action="{{ route('skills.update', ['skill' => $item->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="sideImage">Side Image</label>
                                            <input type="file" name="sideImage" class="dropify" accept="image/*, video/*"
                                                data-default-file="{{ asset($item->sideImage) }}">
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="row">
                                                <div class="form-group-lg col-md-6">
                                                    <label for="heading">Heading</label>
                                                    <input type="text" name="heading" class="form-control"
                                                        placeholder="Heading" required value="{{ $item->heading }}">
                                                </div>
                                                <div class="form-group-lg col-md-6">
                                                    <label for="subHeading">Sub Heading</label>
                                                    <input type="text" name="subHeading" class="form-control"
                                                        placeholder="Sub Heading" required
                                                        value="{{ $item->subHeading }}">
                                                </div>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="description">Description</label>
                                                <textarea rows="5" class="form-control no-resize" name="description"
                                                    placeholder="Description">{{ $item->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="skill1">Skill 1</label>
                                            <input type="text" name="skill1" class="form-control" placeholder="Skill 1"
                                                required value="{{ $item->skill1 }}" maxlength="52">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="progress1">Progress 1</label>
                                            <input type="number" name="progress1" class="form-control" min="0" max="100"
                                                placeholder="Progress 1" required value="{{ $item->progress1 }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="skill2">Skill 2</label>
                                            <input type="text" name="skill2" class="form-control" placeholder="Skill 2"
                                                required value="{{ $item->skill2 }}" maxlength="52">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="progress2">Progress 2</label>
                                            <input type="number" name="progress2" class="form-control" min="0" max="100"
                                                placeholder="Progress 2" required value="{{ $item->progress2 }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="skill3">Skill 3</label>
                                            <input type="text" name="skill3" class="form-control" placeholder="Skill 3"
                                                required value="{{ $item->skill3 }}" maxlength="52">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="progress3">Progress 3</label>
                                            <input type="number" name="progress3" class="form-control" min="0" max="100"
                                                placeholder="Progress 3" required value="{{ $item->progress3 }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="skill4">Skill 4</label>
                                            <input type="text" name="skill4" class="form-control" placeholder="Skill 4"
                                                required value="{{ $item->skill4 }}" maxlength="52">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="progress4">Progress 4</label>
                                            <input type="number" name="progress4" class="form-control" min="0" max="100"
                                                placeholder="Progress 4" required value="{{ $item->progress4 }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="skill5">Skill 5</label>
                                            <input type="text" name="skill5" class="form-control" placeholder="Skill 5"
                                                value="{{ $item->skill5 }}" maxlength="52">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="progress5">Progress 5</label>
                                            <input type="number" name="progress5" class="form-control" min="0" max="100"
                                                placeholder="Progress 5" value="{{ $item->progress5 }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-blue btn-lg float-right">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
