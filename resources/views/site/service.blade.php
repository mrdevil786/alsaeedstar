@extends('site.layout.main')

@section('frontend-title-section', 'Service')
@section('frontend-service-section', 'active')

@section('frontend-main-section')


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction
                Services</h1>
        </div>
        <div class="row g-5">
            @forelse($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                        <img class="img-fluid" src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        <div class="service-icon bg-white">
                            <i class="{{ $service->icon }} text-primary"></i>
                        </div>
                        <div class="px-4 pb-4">
                            <h4 class="text-uppercase mb-3">{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                            {{-- <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No services available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-6 px-5">
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


    <!-- Testimonial Start -->
    @if (!$testimonials->isEmpty())
        <div class="container-fluid bg-light py-6 px-5">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Happy Clients</span> Say!!!</h1>
            </div>
            <div class="row gx-0 align-items-center">
                <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                    <img class="img-fluid w-100 h-100" src="{{ asset('frontend/img/testimonial.jpg') }}">
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="testimonial bg-light">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach ($testimonials as $testimonial)
                                <div class="row gx-4 align-items-center">
                                    <div class="col-xl-4 col-lg-5 col-md-5">
                                        <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0"
                                            src="{{ asset($testimonial->avatar) }}" alt="">
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7">
                                        <h4 class="text-uppercase mb-0">{{ $testimonial->name }}</h4>
                                        <p>{{ $testimonial->title }}</p>
                                        <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i>
                                            {{ $testimonial->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->


@endsection
