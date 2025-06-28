@extends('site.layout.main')

@section('frontend-title-section', 'Home')
@section('frontend-home-section', 'active')

@section('frontend-main-section')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/img/carousel-1.webp') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{-- <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i> --}}
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Create your dream with us, where every
                                step brings joy!</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/carousel-2.webp') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{-- <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i> --}}
                            <h1 class="display-2 text-uppercase text-white mb-md-4">From HVAC to Design and IT to Plumbing,
                                we build your dream!</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">We are <span class="text-primary">the Experts</span> in
                    Construction, Maintenance, HVAC, and IT Solutions</h1>
                <h4 class="text-uppercase mb-3 text-body">Innovative Solutions for a Diverse Range of Needs</h4>
                <p>At Al Najm Al Saeed Co. Ltd., we excel in delivering top-tier construction and maintenance services,
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
                    our clients with precision and excellence. Al Najm Al Saeed Co. Ltd. is your trusted partner for
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


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction, HVAC & IT Services</h1>
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


    <!-- HVAC Services Highlight Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/hvac-systems.jpg') }}" 
                         style="object-fit: cover; border-radius: 10px;" alt="HVAC Systems">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 text-uppercase mb-4">Expert <span class="text-primary">HVAC Solutions</span></h1>
                <h4 class="text-uppercase mb-3 text-body">Complete Heating, Ventilation & Air Conditioning Services</h4>
                <p class="mb-4">From new installations to comprehensive maintenance, our certified HVAC professionals ensure your indoor environment remains comfortable and energy-efficient year-round.</p>
                
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-tools text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-uppercase mb-1">New Installation</h6>
                                <small>Complete system setup</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center bg-warning rounded-circle me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-wrench text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-uppercase mb-1">Renovation</h6>
                                <small>System upgrades</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center bg-success rounded-circle me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-cog text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-uppercase mb-1">Maintenance</h6>
                                <small>Regular service & repair</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center bg-danger rounded-circle me-3" style="width: 50px; height: 50px;">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-uppercase mb-1">24/7 Service</h6>
                                <small>Emergency support</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <a href="{{ route('frontend.hvac') }}" class="btn btn-primary py-3 px-5 me-3">Learn More</a>
                    <a href="{{ route('frontend.contact') }}" class="btn btn-outline-primary py-3 px-5">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
    <!-- HVAC Services Highlight End -->


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


    <!-- Portfolio Start -->
    {{-- <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Some Of Our <span class="text-primary">Popular</span> Dream
                Projects</h1>
        </div>
        <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="{{ asset('frontend/img/portfolio-1.jpg') }}" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                                style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="{{ asset('frontend/img/portfolio-2.jpg') }}" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                                style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Construction</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="{{ asset('frontend/img/portfolio-3.jp') }}g" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                                style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Renovation</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-5 portfolio-container">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-1.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-1.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-2.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-2.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-3.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-3.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-4.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-4.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-5.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-5.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/portfolio-6.jpg') }}" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                            York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="{{ asset('frontend/img/portfolio-6.jpg') }}"
                        data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Portfolio End -->


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


    <!-- Testimonial Start -->
    @if (!$testimonials->isEmpty())
        <div class="container-fluid bg-light py-6 px-5">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Happy Clients</span> Say!!!
                </h1>
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


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Latest <span class="text-primary">Articles</span> From Our Blog
                Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="{{ asset('frontend/img/blog-1.webp') }}" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('frontend/img/user.jpg') }}"
                                    width="35" height="35" alt="">
                                <span>Al Najm Al Saeed</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan,
                                    2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Maximize Comfort: Choosing the Right HVAC System for Your Home</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="{{ asset('frontend/img/blog-2.webp') }}" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('frontend/img/user.jpg') }}"
                                    width="35" height="35" alt="">
                                <span>Al Najm Al Saeed</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan,
                                    2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Enhance Curb Appeal: Best Cladding Options for Modern Homes</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="{{ asset('frontend/img/blog-3.webp') }}" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('frontend/img/user.jpg') }}"
                                    width="35" height="35" alt="">
                                <span>Al Najm Al Saeed</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan,
                                    2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Elevate Your Space: Essential Interior Design Tips for Modern
                            Living</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->

@endsection
