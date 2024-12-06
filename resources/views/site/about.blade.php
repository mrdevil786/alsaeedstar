@extends('site.layout.main')

@section('frontend-title-section', 'About')
@section('frontend-about-section', 'active')

@section('frontend-main-section')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">We are <span class="text-primary">the Experts</span> in
                    Construction, Maintenance, HVAC, and IT Solutions</h1>
                <h4 class="text-uppercase mb-3 text-body">Innovative Solutions for a Diverse Range of Needs</h4>
                <p>At Al Saeed Star Co. Ltd., we excel in delivering top-tier construction and maintenance services,
                    alongside advanced HVAC and IT solutions. Our dedication to quality and innovation ensures that we
                    provide tailored, comprehensive solutions that address the unique requirements of each client. From
                    creating robust structures to maintaining them with precision, and optimizing your HVAC and IT systems,
                    our team is committed to delivering exceptional results on time and to the highest standards.</p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Strategic Planning and
                            Execution</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Highly Skilled Professionals
                        </p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Cutting-Edge Technology</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Efficient Project Management
                        </p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Comprehensive Maintenance</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative HVAC and IT
                            Solutions</p>
                    </div>
                </div>
                <p class="mb-4">Our expertise spans across various sectors, ensuring that we meet the evolving needs of
                    our clients with precision and excellence. Al Saeed Star Co. Ltd. is your trusted partner for
                    high-quality, reliable, and efficient services that drive success and sustainability in every project we
                    undertake.</p>
                <img src="{{ asset('frontend/img/signature.png') }}" alt="Signature">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('frontend/img/about.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span>
                    </h1>
                </div>
                <p class="mb-5">Looking for expert advice or a tailored solution? We’re here to help. Whether you have
                    questions about our construction, HVAC, IT services, or maintenance, our team is ready to assist you.
                    Provide your details and preferred time, and we’ll get back to you promptly to discuss how we can meet
                    your needs and exceed your expectations.</p>
                <a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
            </div>
            <div class="col-lg-8">
                <div class="bg-light text-center p-3">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Team Start -->
    @if (!$teams->isEmpty())
        <div class="container-fluid py-6 px-5">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-4">We Are <span class="text-primary">Professional & Expert</span>
                    Workers</h1>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="row g-0">
                            <div class="col-10" style="min-height: 300px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100" src="{{ asset($team->image) }}"
                                        style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                                    @if ($team->twitter)
                                        <a class="btn" href="{{ $team->twitter }}" target="blank"><i
                                                class="fab fa-twitter"></i></a>
                                    @endif
                                    @if ($team->facebook)
                                        <a class="btn" href="{{ $team->facebook }}" target="blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if ($team->linkedin)
                                        <a class="btn" href="{{ $team->linkedin }}" target="blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if ($team->instagram)
                                        <a class="btn" href="{{ $team->instagram }}" target="blank"><i
                                                class="fab fa-instagram"></i></a>
                                    @endif
                                    @if ($team->youtube)
                                        <a class="btn" href="{{ $team->youtube }}" target="blank"><i
                                                class="fab fa-youtube"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-light p-4">
                                    <h6 class="text-uppercase">{{ $team->name }}</h6>
                                    <span>{{ $team->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!-- Team End -->

@endsection
