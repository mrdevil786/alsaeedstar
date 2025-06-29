@extends('site.layout.main')

@section('frontend-title-section', 'Contact')
@section('frontend-contact-section', 'active')

@section('frontend-main-section')

    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact</h6>
        </div>
    </div>

    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Please <span class="text-primary">Feel Free</span> To Contact Us</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" style="height: 600px;">
                <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462118.0234567!2d46.5!3d24.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0521e55c794b%3A0x8a9ebba0fd6b17b1!2sAl%20Najm%20Al%20Saeed%20Company!5e0!3m2!1sen!2ssa!4v1603794290143!5m2!1sen!2ssa"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="contact-form bg-light p-3">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name"
                                style="height: 55px;">
                            <div class="text-danger" id="name-error" style="display:none;"></div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" id="email" placeholder="Your Email"
                                style="height: 55px;">
                            <div class="text-danger" id="email-error" style="display:none;"></div>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0" id="subject" placeholder="Subject"
                                style="height: 55px;">
                            <div class="text-danger" id="subject-error" style="display:none;"></div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0" id="message" rows="4" placeholder="Message"></textarea>
                            <div class="text-danger" id="message-error" style="display:none;"></div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" id="submit-button" type="button">Send
                                Message</button>
                        </div>
                    </div>
                    <div id="success-message" class="mt-3 text-center text-success" style="display:none;"></div>
                    <div id="error-message" class="mt-3 text-center text-danger" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('frontend-scripts-section')
    <script>
        $(document).ready(function() {
            $('#submit-button').on('click', function() {
                const name = $('#name').val();
                const email = $('#email').val();
                const subject = $('#subject').val();
                const message = $('#message').val();

                $.ajax({
                    url: '{{ route('frontend.contact.store') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        email: email,
                        subject: subject,
                        message: message
                    },
                    success: function(response) {
                        $('#success-message').text(response.message).show();
                        $('#error-message').hide();
                        $('.text-danger').hide().text('');
                        $('input, textarea').val('');
                    },
                    error: function(xhr) {
                        $('.text-danger').hide().text('');
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (let key in errors) {
                                $('#' + key + '-error').text(errors[key][0]).show();
                            }
                        } else {
                            $('#error-message').text(xhr.responseJSON.message ||
                                'An error occurred. Please try again.').show();
                        }
                        $('#success-message').hide();
                    }
                });
            });
        });
    </script>
@endsection
