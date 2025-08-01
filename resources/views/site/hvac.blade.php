@extends('site.layout.main')

@section('frontend-title-section', 'HVAC Services')
@section('frontend-hvac-section', 'active')

@section('frontend-main-section')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">HVAC Services</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="{{ url('/') }}">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">HVAC Services</h6>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- HVAC Services Intro Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">Professional <span class="text-primary">HVAC Solutions</span></h1>
                <h4 class="text-uppercase mb-3 text-body">Comprehensive Heating, Ventilation & Air Conditioning Services
                </h4>
                <p>At Al Najm Al Saeed Co. Ltd., we provide complete HVAC solutions for residential, commercial, and
                    industrial properties. Our expert technicians deliver reliable, energy-efficient systems designed to
                    maintain optimal comfort and air quality year-round.</p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>24/7 Emergency Service</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Licensed & Certified
                            Technicians</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Energy-Efficient Solutions</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Quality Guaranteed Work</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Competitive Pricing</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Free Estimates</p>
                    </div>
                </div>
                <p class="mb-4">From new installations to complex renovations and routine maintenance, we ensure your HVAC systems operate at peak performance, providing comfort, efficiency, and reliability. Our team of skilled professionals uses state-of-the-art equipment and follows industry best practices to deliver exceptional results. Whether you need emergency repairs, system upgrades, or preventive maintenance, we're committed to keeping your indoor environment comfortable and healthy year-round. Trust us to handle all your heating, cooling, and ventilation needs with precision and care.</p>
            </div>
            <div class="col-lg-5">
                <div class="h-100">
                    <img class="w-100 h-100" src="{{ asset('frontend/img/hvac-hero.png') }}" 
                         style="object-fit: cover; border-radius: 10px;" alt="HVAC Systems">
                </div>
            </div>
        </div>
    </div>
    <!-- HVAC Services Intro End -->

    <!-- HVAC Services Categories Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-5 text-uppercase mb-4">Comprehensive <span class="text-primary">HVAC Services</span></h1>
            <p class="lead">From new installations to emergency repairs and preventive maintenance - we provide complete
                HVAC solutions for your home and business</p>
        </div>

        <div class="row g-4">
            <!-- New Installation -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-white rounded h-100 d-flex flex-column align-items-center text-center p-4 shadow-sm">
                    <div class="service-icon bg-primary rounded-circle mb-4"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-tools text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-primary">New Installation</h4>
                    <div class="flex-grow-1">
                        <p class="mb-4">Complete HVAC system installation for new construction and replacement projects
                            with the latest energy-efficient technology.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Central Air Conditioning
                                Systems</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Gas & Electric Heating Systems
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Custom Ductwork Design &
                                Installation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Advanced Ventilation Systems
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Smart Thermostat Integration
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Energy Efficiency Consultation
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>System Sizing & Load
                                Calculations</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary rounded-pill">Get Free Quote</a>
                    </div>
                </div>
            </div>

            <!-- Repair Services -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-white rounded h-100 d-flex flex-column align-items-center text-center p-4 shadow-sm">
                    <div class="service-icon bg-danger rounded-circle mb-4"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-wrench text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-danger">Repair Services</h4>
                    <div class="flex-grow-1">
                        <p class="mb-4">Fast, reliable repair services to get your HVAC system back up and running when
                            you need it most.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>24/7 Emergency Repairs</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>AC & Heating System Repairs</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Compressor & Motor Replacement
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Refrigerant Leak Detection &
                                Repair</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Electrical Component Repairs
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Thermostat Troubleshooting</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Ductwork Repairs & Sealing</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-danger rounded-pill">Emergency Repair</a>
                    </div>
                </div>
            </div>

            <!-- Maintenance Services -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-white rounded h-100 d-flex flex-column align-items-center text-center p-4 shadow-sm">
                    <div class="service-icon bg-success rounded-circle mb-4"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-cog text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-success">Maintenance Services</h4>
                    <div class="flex-grow-1">
                        <p class="mb-4">Comprehensive preventive maintenance services to extend system life and maintain
                            peak performance.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Seasonal System Tune-ups</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Regular Filter Replacement
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Coil Cleaning & Maintenance
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>System Performance Testing
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Lubrication & Belt
                                Replacement</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Safety Inspections</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Energy Efficiency
                                Optimization</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-success rounded-pill">Schedule Maintenance</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Services Row -->
        <div class="row g-4 mt-4">
            <!-- System Upgrades -->
            <div class="col-lg-6 col-md-6">
                <div
                    class="service-item bg-white rounded h-100 d-flex flex-column align-items-center text-center p-4 shadow-sm">
                    <div class="service-icon bg-warning rounded-circle mb-4"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-arrow-up text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-warning">System Upgrades</h4>
                    <div class="flex-grow-1">
                        <p class="mb-4">Modernize your existing HVAC systems with the latest technology for improved
                            efficiency and comfort.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>High-Efficiency System
                                Upgrades</li>
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Smart Home Integration</li>
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Zoning System Installation
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Air Quality Improvement
                                Systems</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-warning rounded-pill">Upgrade Quote</a>
                    </div>
                </div>
            </div>

            <!-- Emergency Services -->
            <div class="col-lg-6 col-md-6">
                <div
                    class="service-item bg-white rounded h-100 d-flex flex-column align-items-center text-center p-4 shadow-sm">
                    <div class="service-icon bg-info rounded-circle mb-4"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-phone text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-info">24/7 Emergency Service</h4>
                    <div class="flex-grow-1">
                        <p class="mb-4">Round-the-clock emergency HVAC services because comfort can't wait for business
                            hours.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Same-Day Emergency Response</li>
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Weekend & Holiday Service</li>
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Immediate System Diagnostics
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Priority Service for Existing
                                Customers</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="tel:+966536161198" class="btn btn-info rounded-pill">Call Now: (53) 616-1198</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HVAC Services Categories End -->

    <!-- HVAC Systems We Service Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">HVAC <span class="text-primary">Systems We Service</span></h1>
            <p>We work with all major HVAC brands and system types</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-snowflake text-primary fa-3x mb-3"></i>
                    <h5 class="text-uppercase mb-2">Air Conditioning</h5>
                    <p class="mb-0">Central AC, Split Systems, Window Units</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-fire text-primary fa-3x mb-3"></i>
                    <h5 class="text-uppercase mb-2">Heating Systems</h5>
                    <p class="mb-0">Furnaces, Heat Pumps, Boilers</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-wind text-primary fa-3x mb-3"></i>
                    <h5 class="text-uppercase mb-2">Ventilation</h5>
                    <p class="mb-0">Exhaust Fans, Air Purifiers, Ventilation Systems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-thermometer-half text-primary fa-3x mb-3"></i>
                    <h5 class="text-uppercase mb-2">Controls</h5>
                    <p class="mb-0">Smart Thermostats, Zoning Systems, Controls</p>
                </div>
            </div>
        </div>
    </div>
    <!-- HVAC Systems We Service End -->

    <!-- Why Choose Us Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h1 class="display-5 text-uppercase mb-4">Why Choose <span class="text-primary">Our HVAC Services</span>
                </h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-award text-white"></i>
                            </div>
                            <div>
                                <h5 class="text-uppercase mb-2">Expert Technicians</h5>
                                <p class="mb-0">Our certified HVAC professionals bring years of experience and ongoing
                                    training to every job.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h5 class="text-uppercase mb-2">24/7 Emergency Service</h5>
                                <p class="mb-0">HVAC emergencies don't wait for business hours. We're available when you
                                    need us most.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-leaf text-white"></i>
                            </div>
                            <div>
                                <h5 class="text-uppercase mb-2">Energy Efficiency Focus</h5>
                                <p class="mb-0">We prioritize energy-efficient solutions that save you money and reduce
                                    environmental impact.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <h5 class="text-uppercase mb-2">Quality Guarantee</h5>
                                <p class="mb-0">We stand behind our work with comprehensive warranties and quality
                                    guarantees.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/hvac-technician.png') }}"
                        style="object-fit: cover; border-radius: 10px;" alt="HVAC Technician">
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->

    <!-- AC Services Pricing Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-5 text-uppercase mb-4">AC Service <span class="text-primary">Pricing</span></h1>
            <p class="lead">Transparent rates for deep cleaning, repairs, and installation/uninstallation of Split and
                Window AC units</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow-sm">
                    <div class="service-icon bg-primary rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-spray-can text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-primary">AC Deep Cleaning (Foam)</h4>
                    <div class="flex-grow-1">
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">Split AC</h5>
                            <ul class="list-unstyled mb-3">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>1 AC</span>
                                    <strong class="text-primary">SAR 79</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>2 AC</span>
                                    <strong class="text-primary">SAR 149</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>3 AC</span>
                                    <strong class="text-primary">SAR 199</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>4 AC</span>
                                    <strong class="text-primary">SAR 249</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>5 AC</span>
                                    <strong class="text-primary">SAR 299</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">Window AC</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>1 AC</span>
                                    <strong class="text-primary">SAR 69</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>2 AC</span>
                                    <strong class="text-primary">SAR 129</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>3 AC</span>
                                    <strong class="text-primary">SAR 169</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>4 AC</span>
                                    <strong class="text-primary">SAR 209</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>5 AC</span>
                                    <strong class="text-primary">SAR 249</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary rounded-pill">Book Service</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow-sm">
                    <div class="service-icon bg-danger rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-wrench text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-danger">AC Repair Services</h4>
                    <div class="flex-grow-1">
                        <div class="mb-4">
                            <h5 class="text-danger mb-3">Common Repairs</h5>
                            <ul class="list-unstyled mb-3">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Water Leakage</span>
                                    <strong class="text-danger">SAR 109</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Less/No Cooling</span>
                                    <strong class="text-danger">SAR 59</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Unwanted Noise/Smell</span>
                                    <strong class="text-danger">SAR 59</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Power On Issue</span>
                                    <strong class="text-danger">SAR 59</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-danger mb-3">Freon Refill</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Honeywell (USA)</span>
                                    <strong class="text-danger">SAR 250</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>India Brand</span>
                                    <strong class="text-danger">SAR 150</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-danger rounded-pill">Emergency Repair</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow-sm">
                    <div class="service-icon bg-success rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-tools text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-success">Installation Services</h4>
                    <div class="flex-grow-1">
                        <div class="mb-4">
                            <h5 class="text-success mb-3">Relocation</h5>
                            <ul class="list-unstyled mb-3">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Split AC Relocation</span>
                                    <strong class="text-success">SAR 250</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Window AC Relocation</span>
                                    <strong class="text-success">SAR 199</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-success mb-3">New Installation</h5>
                            <ul class="list-unstyled mb-3">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Split AC Installation</span>
                                    <strong class="text-success">SAR 249</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Window AC Installation</span>
                                    <strong class="text-success">SAR 109</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-success mb-3">Uninstallation</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Split AC Uninstall</span>
                                    <strong class="text-success">SAR 109</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Window AC Uninstall</span>
                                    <strong class="text-success">SAR 109</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-success rounded-pill">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AC Services Pricing End -->

    <!-- Detailed AC Parts & Services Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-5 text-uppercase mb-4">AC Parts & <span class="text-primary">Services Pricing</span></h1>
            <p class="lead">Comprehensive pricing for all AC parts replacement, repairs, and specialized services</p>
        </div>
        
        <!-- Detailed Parts & Services Grid -->
        <div class="row g-5 mb-5">
            <!-- Electrical Parts -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow">
                    <div class="service-icon bg-warning rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-bolt text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-warning">Electrical Parts</h4>
                    <div class="flex-grow-1">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Capacitor Indoor</span>
                                <strong class="text-warning">SAR 200</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Capacitor Outdoor</span>
                                <strong class="text-warning">SAR 200</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Replace Sensor</span>
                                <strong class="text-warning">SAR 120</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Contactor Replaced</span>
                                <strong class="text-warning">SAR 175</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Change PCB with Remote</span>
                                <strong class="text-warning">SAR 250</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Non-Inverter PCB Repaired</span>
                                <strong class="text-warning">SAR 400</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Inverter PCB Repaired</span>
                                <strong class="text-warning">SAR 600</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-warning rounded-pill">Get Quote</a>
                    </div>
                </div>
            </div>

            <!-- Fans & Motors -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow">
                    <div class="service-icon bg-info rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-fan text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-info">Fans & Motors</h4>
                    <div class="flex-grow-1">
                        <div class="mb-4">
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Fan Motor Outdoor</span>
                                    <strong class="text-info">SAR 375</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Blower Motor Replaced</span>
                                    <strong class="text-info">SAR 275</strong>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="text-info mb-3">Other Parts</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Blower Replaced</span>
                                    <strong class="text-info">SAR 275</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>AC Fan Blade</span>
                                    <strong class="text-info">SAR 285</strong>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Universal Remote</span>
                                    <strong class="text-info">SAR 50</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-info rounded-pill">Get Quote</a>
                    </div>
                </div>
            </div>

            <!-- Minor Repairs -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow">
                    <div class="service-icon bg-secondary rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-screwdriver text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-secondary">Minor Repairs</h4>
                    <div class="flex-grow-1">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Connector Wires Replaced (1mtr)</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Water Leakage Repaired</span>
                                <strong class="text-secondary">SAR 109</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Adjust Pipe & Tighten Compressor</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Adjust Grill Locks</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Drain Pipe Adjust</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Noise Adjustment in Motor</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Insulation Refix</span>
                                <strong class="text-secondary">SAR 100</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-secondary rounded-pill">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row g-5">
            <!-- Gas Charging -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow">
                    <div class="service-icon bg-primary rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-snowflake text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-primary">Gas Charging</h4>
                    <div class="flex-grow-1">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Flair Nut Replaced</span>
                                <strong class="text-primary">SAR 120</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Service Valve Replaced</span>
                                <strong class="text-primary">SAR 250</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Gas Charging (R410)</span>
                                <strong class="text-primary">SAR 250</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Capillary and Filter</span>
                                <strong class="text-primary">SAR 150</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Copper Cooling Coil</span>
                                <strong class="text-primary">SAR 500</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Compressor 0.8–1 Ton</span>
                                <strong class="text-primary">SAR 615</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Compressor 1.5 Ton</span>
                                <strong class="text-primary">SAR 675</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Compressor 2 Ton</span>
                                <strong class="text-primary">SAR 700</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Freon Refill</span>
                                <strong class="text-primary">SAR 250</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Freon Refill + Deep Cleaning</span>
                                <strong class="text-primary">SAR 250</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary rounded-pill">Get Quote</a>
                    </div>
                </div>
            </div>

            <!-- Service Packages -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="service-item bg-white rounded h-100 d-flex flex-column text-center p-4 shadow">
                    <div class="service-icon bg-success rounded-circle mb-4 mx-auto"
                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-gift text-white fa-2x"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-success">Service Packages</h4>
                    <div class="flex-grow-1">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span>5 AC Deep Cleaning</span>
                                <strong class="text-success">SAR 299</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>3 AC Deep Cleaning</span>
                                <strong class="text-success">SAR 199</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>AC Deep Clean (Window/Split)</span>
                                <strong class="text-success">SAR 129</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Window AC Installation</span>
                                <strong class="text-success">SAR 109</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Window AC Uninstallation</span>
                                <strong class="text-success">SAR 109</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Split AC Installation</span>
                                <strong class="text-success">SAR 249</strong>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Split AC Uninstallation</span>
                                <strong class="text-success">SAR 109</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-success rounded-pill">Get Package Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detailed AC Parts & Services End -->

    <!-- Contact CTA Start -->
    <div class="container-fluid bg-primary py-6 px-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 text-uppercase text-white mb-4">Ready to Improve Your Indoor Comfort?</h1>
                <p class="text-white mb-0">Contact us today for a free consultation and estimate on your HVAC needs. Our
                    experts are ready to help you find the perfect solution for your home or business.</p>
            </div>
            <div class="col-lg-4 text-center">
                <a href="{{ route('frontend.contact') }}" class="btn btn-light btn-lg px-5 py-3">
                    <i class="fas fa-phone me-2"></i>Get Free Estimate
                </a>
            </div>
        </div>
    </div>
    <!-- Contact CTA End -->

@endsection