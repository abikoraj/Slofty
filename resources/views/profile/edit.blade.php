@extends('layouts.backend.app')
@section('content')

    @php
    $item = App\Models\Profile::first();
    @endphp

    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Profile Setting</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                    Dashboard</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li> --}}
                            <li class="breadcrumb-item active">Edit Profile</li>
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
                <!-- Masked Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
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
                                <h2>Edit<strong> Profile</strong></h2>
                            </div>
                            <div class="body shadow">
                                <form action="{{ route('profile.update', ['profile' => $item->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        @csrf
                                        <div class="col-lg-4 col-md-6">
                                            <label>Company's Logo</label>
                                            <div class="input-group masked-input">
                                                <input type="file" name="logo" class="form-control dropify"
                                                    data-default-file="{{ asset($item->logo) }}">
                                            </div>
                                        </div>
                                        <div class="row col-lg-8 col-md-6 pr-0 pl-0">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Company Name</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-group-work"></i></span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $item->name }}" placeholder="Company Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Address</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="zmdi zmdi-pin"></i></span>
                                                    </div>
                                                    <input type="text" name="address" class="form-control"
                                                        value="{{ $item->address }}"
                                                        placeholder="Ex: 15/A, Nest Tower, NYC">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Phone Number</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-phone"></i></span>
                                                    </div>
                                                    <input type="text" name="phone" class="form-control mobile-phone-number"
                                                        value="{{ $item->phone }}" placeholder="Ex: +00 (000) 000-00-00">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Email Address</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-email"></i></span>
                                                    </div>
                                                    <input type="email" name="email" class="form-control email"
                                                        value="{{ $item->email }}" placeholder="Ex: example@example.com"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Support</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-account-box-mail"></i></span>
                                                    </div>
                                                    <input type="email" name="support" class="form-control email"
                                                        value="{{ $item->support }}"
                                                        placeholder="Ex: support@example.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Website</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-globe-alt"></i></span>
                                                    </div>
                                                    <input type="text" name="website" class="form-control"
                                                        value="{{ $item->website }}" placeholder="Ex: www.website.com"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="subtitle">Google Map Link</label>
                                            <textarea class="form-control no-resize" name="message" rows="4"
                                                placeholder="Embed Google Map Here"></textarea>
                                        </div>
                                        <div class="row col-md-12 pr-0">
                                            <div class="col-lg-4 col-md-4">
                                                <label>Facebook</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-facebook"></i></span>
                                                    </div>
                                                    <input type="url" name="facebook" class="form-control key"
                                                        value="{{ $item->facebook }}" placeholder="Ex: facebook.com/xyz">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Twitter</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-twitter"></i></span>
                                                    </div>
                                                    <input type="url" name="twitter" class="form-control key"
                                                        value="{{ $item->twitter }}" placeholder="Ex: twitter.com/xyz">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Instagram</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-instagram"></i></span>
                                                    </div>
                                                    <input type="url" name="instagram" class="form-control key"
                                                        value="{{ $item->instagram }}"
                                                        placeholder="Ex: instagram.com/xyz">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Linkedin</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-linkedin"></i></span>
                                                    </div>
                                                    <input type="text" name="linkedin" class="form-control key"
                                                        value="{{ $item->linkedin }}" placeholder="Ex: linkedin.com/xyz">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Pinterest</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-pinterest"></i></span>
                                                    </div>
                                                    <input type="text" name="pinterest" class="form-control key"
                                                        value="{{ $item->pinterest }}"
                                                        placeholder="Ex: pinterest.com/xyz">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>YouTube</label>
                                                <div class="input-group masked-input mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="zmdi zmdi-youtube"></i></span>
                                                    </div>
                                                    <input type="text" name="youtube" class="form-control key"
                                                        value="{{ $item->youtube }}" placeholder="Ex: youtube.com/xyz">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mt-3">
                                                <button type="submit" class="float-right btn btn-primary btn-lg">Save
                                                    Changes</button>
                                            </div>
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
