@extends('site.layout.main')

@section('frontend-title-section', 'Careers')
@section('frontend-career-section', 'active')

@section('frontend-main-section')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Careers</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Careers</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Job Details Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-12">

                <!-- Location and Type Details -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <p class="h5 text-muted"><i class="fa fa-user-tie text-primary me-2"></i><strong>Position:</strong>
                            {{ $job->title }}</p>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="h5 text-muted"><i class="fa fa-info-circle text-primary me-2"></i><strong>Job
                                Description:</strong> {{ $job->description }}</p>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="h5 text-muted"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i><strong>Location:</strong>
                            {{ $job->location }}</p>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="h5 text-muted"><i class="fa fa-briefcase text-primary me-2"></i><strong>Job Type:</strong>
                            {{ $job->type }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Details End -->

    <!-- Application Form Start -->
    <div class="container-fluid py-6 px-5">
        <div class="bg-light text-center p-3">
            <h1 class="display-5 text-uppercase mb-4">Apply For <span class="text-primary">{{ $job->title }}</span></h1>

            <form action="{{ route('frontend.career-apply', ['job' => $job->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_opening_id" value="{{ $job->id }}">

                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" name="name"
                            class="form-control border-0 @error('name') is-invalid @enderror" placeholder="Your Name"
                            style="height: 55px;" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" name="email"
                            class="form-control border-0 @error('email') is-invalid @enderror" placeholder="Your Email"
                            style="height: 55px;" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input type="text" name="phone"
                            class="form-control border-0 @error('phone') is-invalid @enderror" placeholder="Your Phone"
                            style="height: 55px;" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="form-control border-0 @error('message') is-invalid @enderror" rows="5"
                            placeholder="Optional Message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input type="file" name="resume"
                            class="form-control border-0 @error('resume') is-invalid @enderror">
                        @error('resume')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Application</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Application Form End -->

@endsection
