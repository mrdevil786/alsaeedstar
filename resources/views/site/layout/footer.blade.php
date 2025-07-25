<!-- Footer Start -->
<div class="footer border-top border-primary container-fluid position-relative bg-light bg-light-radial text-black-50 py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-6 pe-lg-5">
            <a href="{{ url('/') }}" class="mb-3 navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/images/brand/logo-black.svg') }}" alt=""
                    class="header-brand-img">
            </a>
            <p>Welcome to Al Najm Al Saeed Co. Ltd., where innovation drives excellence in construction, HVAC, IT services,
                and maintenance. Our expert team delivers precise, tailored solutions to meet your needs with unmatched
                expertise.</p>
            <p><a href="https://maps.app.goo.gl/EFSyh53gF2wbauWC8" target="blank"><i
                        class="fa fa-map-marker-alt me-2"></i>Prince Abdulaziz bin Musaed bin Julawi 12628, Riyadh, Saudi Arabia</a></p>
            <p><a href="tel:+966536161198"><i class="fa fa-phone-alt me-2"></i>+966 (53) 616-1198</a></p>
            <p><a href="mailto:info@alsaeedstar.com"><i class="fa fa-envelope me-2"></i>info@alsaeedstar.com</a></p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.facebook.com/people/Al-Star-Al-Saeed-CoLtd/61565546530111/"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://lnkd.in/g__bw_u2"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <div class="row g-5">
                <div class="col-sm-6">
                    <h4 class="text-black text-uppercase mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-black-50 mb-2" href="{{ route('frontend.home') }}"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.about') }}"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.service') }}"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.hvac') }}"><i class="fa fa-angle-right me-2"></i>HVAC Services</a>
                        <a class="text-black-50" href="{{ route('frontend.contact') }}"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4 class="text-black text-uppercase mb-4">Our Services</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-black-50 mb-2" href="{{ route('frontend.hvac') }}"><i class="fa fa-angle-right me-2"></i>HVAC Installation</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.hvac') }}"><i class="fa fa-angle-right me-2"></i>HVAC Renovation</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.hvac') }}"><i class="fa fa-angle-right me-2"></i>HVAC Maintenance</a>
                        <a class="text-black-50 mb-2" href="{{ route('frontend.career') }}"><i class="fa fa-angle-right me-2"></i>Careers</a>
                        <a class="text-black-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h4 class="text-black text-uppercase mb-4">Newsletter</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 20px 30px;"
                                placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light bg-light-radial border-top border-primary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-black text-md-start">
            <p class="mb-0">&copy; <a class="text-primary" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
                {{ date('Y') }}. All Rights Reserved.</p>
        </div>
        <div class="py-4 px-5 bg-primary footer-shape text-white position-relative text-center text-md-end">
            <p class="mb-0">Designed & Developed by <a class="text-dark"
                    href="{{ url('/') }}">{{ env('APP_NAME') }}</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@yield('frontend-scripts-section')

</body>

</html>
