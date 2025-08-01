@extends('site.layout.main')

@section('frontend-title-section', 'Careers')
@section('frontend-career-section', 'active')

@section('frontend-main-section')

    <!-- Success and Error Messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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


    <!-- Career Opportunities Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">Join Our <span class="text-primary">Dynamic Team</span></h1>
                <h4 class="text-uppercase mb-3 text-body">Empowering Talent, Building Futures</h4>
                <p>At Al Najm Al Saeed Co. Ltd., we believe that our people are our greatest asset. We are always on the
                    lookout for passionate and talented individuals to join our team and help us deliver excellence in
                    construction,
                    maintenance, HVAC, and IT solutions. If you are looking for a career that challenges, inspires, and
                    rewards,
                    you have come to the right place.</p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Collaborative Work Environment
                        </p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Growth and Learning
                            Opportunities</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Competitive Compensation</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Challenging Projects</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Diverse and Inclusive Culture
                        </p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Comprehensive Benefits</p>
                    </div>
                </div>
                <p class="mb-4">Explore our current openings and find a role that matches your skills, experience, and
                    aspirations.
                    Let's work together to build a better future.</p>
                <img src="{{ asset('frontend/img/signature.png') }}" alt="Signature">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 mt-5" src="{{ asset('frontend/img/about.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Career Opportunities End -->


    <!-- Job Listings Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Explore <span class="text-primary">Job Openings</span></h1>
        </div>

        @if ($jobOpenings->isEmpty())
            <div class="text-center">
                <h4 class="text-muted">
                    <i class="fa fa-exclamation-triangle text-warning me-2"></i>
                    Currently, there are no job openings available. Please check back later.
                </h4>
            </div>
        @else
            <div class="row g-5 justify-content-center">
                @foreach ($jobOpenings as $job)
                    <div class="col-lg-4">
                        <div class="bg-white border rounded p-4 mb-4">
                            <h5 class="text-uppercase"
                                style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{ $job->title }}</h5>
                            <p
                                style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{ $job->description }}
                            </p>
                            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</p>
                            <p class="mb-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ ucfirst($job->type) }}
                            </p>
                            <div class="text-center"><a class="btn btn-primary"
                                    href="{{ route('frontend.career-detail', $job->id) }}">Apply Now</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <!-- Job Listings End -->

@endsection
