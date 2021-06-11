@extends('layouts.backend.app')
@section('content')
@php
    $profile = App\Models\Profile::first();
    $skill = App\Models\Skill::first();
@endphp
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i>
                                    Dashboard</a>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                        <a href="{{ route('profile.edit') }}" class="btn btn-info btn-icon float-right"><i
                                class="zmdi zmdi-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card mcard_3">
                            <div class="body">
                                <a href="/" target="_blank"><img src="{{ asset($profile->logo) }}"
                                         alt="profile-image" class="p-2 shadow"></a>
                                <h4 class="m-t-10">{{ $profile->name }}</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="social-links list-unstyled">
                                            @if ($profile->facebook)
                                            <li><a title="Facebook" href="{{ $profile->facebook }}"><i
                                                        class="zmdi zmdi-facebook"></i></a></li>
                                            @endif
                                            @if ($profile->twitter)
                                            <li><a title="Twitter" href="{{ $profile->twitter }}"><i
                                                        class="zmdi zmdi-twitter"></i></a></li>
                                            @endif
                                            @if ($profile->instagram)
                                            <li><a title="Instagram" href="{{ $profile->instagram }}"><i
                                                        class="zmdi zmdi-instagram"></i></a></li>
                                            @endif
                                            @if ($profile->linkedin)
                                            <li><a title="Linkedin" href="{{ $profile->linkedin }}"><i
                                                        class="zmdi zmdi-linkedin"></i></a></li>
                                            @endif
                                            @if ($profile->pinterest)
                                            <li><a title="Pinterest" href="{{ $profile->pinterest }}"><i
                                                        class="zmdi zmdi-pinterest"></i></a></li>
                                            @endif
                                            @if ($profile->youtube)
                                            <li><a title="YouTube" href="{{ $profile->youtube }}"><i
                                                        class="zmdi zmdi-youtube"></i></a></li>
                                            @endif
                                        </ul>
                                        <p class="text-muted">{{ $profile->address }}</p>
                                    </div>
                                    @php
                                        $count = App\Models\Counter::first();
                                    @endphp
                                    <div class="col-4">
                                        <h5>{{ $count->count1 }}+</h5>
                                        <small>{{ $count->title1 }}</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>{{ $count->count2 }}+</h5>
                                        <small>{{ $count->title2 }}</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>{{ $count->count3 }}+</h5>
                                        <small>{{ $count->title3 }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <small class="text-muted">Email address: </small>
                                <p>{{ $profile->email }}</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>{{ $profile->phone }}</p>
                                <hr>
                                <ul class="list-unstyled">
                                    @if ($skill->skill1)
                                    <li>
                                        <div>{{ $skill->skill1 }}</div>
                                        <div class="progress m-b-20">
                                            <div class="progress-bar l-khaki " role="progressbar" aria-valuenow="{{ $skill->progress1 }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress1 }}%"> <span
                                                    class="sr-only">{{ $skill->progress1 }}% Complete</span> </div>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($skill->skill2)
                                    <li>
                                        <div>{{ $skill->skill2 }}</div>
                                        <div class="progress m-b-20">
                                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="{{ $skill->progress2 }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress2 }}%"> <span
                                                    class="sr-only">{{ $skill->progress2 }}% Complete</span> </div>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($skill->skill3)
                                    <li>
                                        <div>{{ $skill->skill3 }}</div>
                                        <div class="progress m-b-20">
                                            <div class="progress-bar l-pink " role="progressbar" aria-valuenow="{{ $skill->progress3 }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress3 }}%"> <span
                                                    class="sr-only">{{ $skill->progress3 }}% Complete</span> </div>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($skill->skill4)
                                    <li>
                                        <div>{{ $skill->skill4 }}</div>
                                        <div class="progress m-b-20">
                                            <div class="progress-bar l-green " role="progressbar" aria-valuenow="{{ $skill->progress4 }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress4 }}%"> <span
                                                    class="sr-only">{{ $skill->progress4 }}% Complete</span> </div>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($skill->skill5)
                                    <li>
                                        <div>{{ $skill->skill5 }}</div>
                                        <div class="progress m-b-20">
                                            <div class="progress-bar l-purple " role="progressbar" aria-valuenow="{{ $skill->progress5 }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress5 }}%"> <span
                                                    class="sr-only">{{ $skill->progress5 }}% Complete</span> </div>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Media</strong> Gallery</h2>
                            </div>
                            <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    @foreach (App\Models\Portfolio::take(6)->latest()->get() as $porto)
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset($porto->image) }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset($porto->image) }}" alt=""> </a>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/2.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/2.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/3.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/3.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/4.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/4.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/5.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/5.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/6.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/6.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/7.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/7.jpg') }}" alt=""> </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a
                                            href="{{ asset('assets/Aero/images/image-gallery/8.jpg') }}"> <img
                                                class="img-fluid img-thumbnail"
                                                src="{{ asset('assets/Aero/images/image-gallery/8.jpg') }}" alt=""> </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
