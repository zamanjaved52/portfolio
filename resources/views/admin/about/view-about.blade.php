@extends('layouts.admin')
@section('title', 'laraPortfolio - View About')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>About Settings <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
                        View</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>ZamSh!</strong> {{ session('msg') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body text-center">
                                    {{-- @if ($about->image)
                                        <img src="{{ asset('public-assets/images/hero.jpg') }}" alt="admin avatar"
                                            class="img-fluid mt-5" style="height: 260px">
                                    @else --}}
                                    <img src="{{ asset('storage/about_image') }}/{{ $about->image }}" alt="admin avatar"
                                        class="img-fluid mt-5" style="height: 260px">
                                    {{-- @endif --}}

                                    <h5 class="mt-5">{{ $about->nickname != null ? $about->nickname : 'Atlas' }}</h5>
                                    <p class="text-muted my-2">Admin, laraPortfolio</p>
                                    <p class="text-muted my-2">
                                        {{ $about->city }}</p>

                                    <div class="pt-2">
                                        <form action="{{ route('admin.about.update-image') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="about_image" class="form-control mt-3">
                                            <p class="text-right" style="color:red;">
                                                @error('about_image')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                            <button type="submit" class="btn btn-outline-primary btn-block"
                                                style="margin: 30px 0px 10px">Update Profile Image</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Full Name</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->full_name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Nickname</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->nickname }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Short Description</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->short_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Designation</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->designation }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Birthday</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->birthday }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Age</p>
                                        <p class="text-muted mb-0">{{ $about->age }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Gender</p>
                                        <p class="text-muted mb-0">{{ $about->gender }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Email</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->email }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Phone</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->phone }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Degree</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->degree }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">City</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->city }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">Freelance</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->freelance }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0">Website</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->website_link }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0">CV</p>
                                        <p class="text-muted mb-0">
                                            {{ $about->cv_file != null ? $about->cv_file : 'Not Given' }}</p>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="justify-content-center">
                                        <a href="{{ route('admin.edit-about') }}" class="btn btn-primary mr-1">Edit
                                            Profile</a>
                                        <a href="{{ route('admin.change-password') }}"
                                            class="btn btn-outline-primary">Change
                                            Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
