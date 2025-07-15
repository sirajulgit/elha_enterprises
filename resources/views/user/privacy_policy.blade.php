@extends('user.layout.guest_layout')


@section('content')
    <div class="inner-banner position-relative"
        style="background-image:url({{ asset('asset/frontend/images/banner.jpg') }});">
        <div class="container">
            <div class="text-center">
                <strong> Privacy Policy </strong>
            </div>
        </div>
    </div>


    <!-- About  -->

    <section class="gap-top gap-bottom">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5">
                        <h2> Privacy Policy </h2>

                    </div>

                    <div class="common-text">
                        <p>At Elha-Enterprises LLC, we are committed to protecting the privacy and personal information of
                            our clients, website visitors, and business partners. This Privacy Policy explains how we
                            collect, use, disclose, and safeguard your information when you visit our website or use our
                            services.

                            By accessing our website or engaging with our services, you agree to the practices described in
                            this policy.</p>
                            <p>1. Information We Collect
We may collect the following types of information:

Personal Information: Name, email address, phone number, business name, address, and other contact details provided through forms or inquiries.

Business Information: Trade documents, contracts, shipping details, and financial information necessary for consulting services.

Usage Data: IP address, browser type, pages visited, and interaction data collected via cookies and analytics tools.</p>

<p>2. How We Use Your Information
We use your information to:

Provide and manage consulting services

Respond to inquiries and client requests

Improve website performance and user experience

Comply with legal obligations and regulations

Communicate updates, service offerings, or company news (only if you opt in)</p>

<p>3. Sharing Your Information
We do not sell, rent, or trade your personal information. We may share information with:

Trusted third-party service providers who assist with logistics, legal, or financial services under confidentiality agreements

Government or regulatory authorities, if legally required

Internal employees or agents who need access to perform company-related services</p>

<p>4. Data Security
We use industry-standard security measures (SSL, data encryption, and secure storage) to protect your information. While we take all reasonable steps, no online data transmission is 100% secure, and we cannot guarantee absolute protection.</p>

<p>5. Cookies and Tracking Technologies
Our website uses cookies to improve user experience, analyze traffic, and enhance performance. You may disable cookies in your browser settings, though some features may not function properly.</p>

<p>6. Your Rights
You have the right to:

Access the personal data we hold about you

Request correction or deletion of your information

Withdraw consent for data processing (where applicable)

To exercise these rights, please contact us using the details below.</p>

<p>7. Third-Party Links
Our website may contain links to third-party websites. We are not responsible for their privacy practices or content. Please review their privacy policies separately.</p>

<p>8. Policy Updates
We may update this Privacy Policy from time to time. Changes will be posted on this page with a revised "15 July 2025" </p>


                    </div>

                </div>


            </div>
        </div>
    </section>




    {{-- <section class="faq-area gap-bottom gap-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <div class="heading text-left mb-4">
                        <h2> {!! $homedata['faq']['head_title'] !!} </h2>
                        <span><img src="{{ asset('asset/frontend/images/three-dots.png') }}"> </span>
                    </div>

                    <div class="acor-area">
                        <div class="accordion" id="accordionExample">
                            @if (count($homedata['faq']['badge_data']) > 0)
                                @foreach ($homedata['faq']['badge_data'] as $item)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $item['id'] }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $item['id'] }}" aria-expanded="true"
                                                aria-controls="collapse{{ $item['id'] }}">
                                                {{ $item['badge_title_1'] }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $item['id'] }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $item['id'] }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $item['badge_details_1'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif



                        </div>
                    </div>


                </div>
                <div class="col-lg-5">
                    <div class="from-area">
                        <div class="text-center mb-5">
                            <h3>Get in touch</h3>
                        </div>
                        <form id="contact_form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <input class="form-control" type="text" placeholder="Your Name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="form_error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <input class="form-control" type="email" placeholder="Your Email" name="email">
                                     @if ($errors->has('email'))
                                        <span class="form_error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <input class="form-control" type="tel" placeholder="Mobile Number" name="phone">
                                     @if ($errors->has('phone'))
                                        <span class="form_error">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <input class="form-control" type="text" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <textarea class="form-control" name="message"></textarea>
                                     @if ($errors->has('message'))
                                        <span class="form_error">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <input class="sub-btn" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}



    <!-- Testimonial  -->



    {{-- <section class="testimonial gap-top gap-bottom">
        <div class="container">
            <div class="heading text-center">
                <h2> {!! $homedata['testimonials']['head_title'] !!} </h2>
                <span><img src="{{ asset('asset/frontend/images/three-dots.png') }}"> </span>
            </div>
            <div class="client-say-area">
                <div class="row align-items-center">
                    <div class="col-lg-3">

                        <div class="client-say-heading">
                            <img class="mb-3" src="{{ asset('asset/frontend/images/inverted-comma.png') }}">
                            <div class="testimo-heading">
                                {!! $homedata['testimonials']['title_1'] !!}
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-9">
                        <div class="testimo-right">
                            <div class="testi-slider">

                                @if (count($homedata['testimonials']['badge_data']) > 0)
                                    @foreach ($homedata['testimonials']['badge_data'] as $item)
                                        <div class="p-3 pb-5">
                                            <div class="client-content position-relative">
                                                <img src="{{ asset('asset/frontend/images/inverted-blue.png') }}">
                                                <p>{{ $item['badge_details_1'] }}</p>
                                                <div class="client-details">
                                                    <div class="client-image">
                                                        <img src="{{ asset($item['badge_image_1']) }}">
                                                    </div>
                                                    <strong>{{ $item['badge_text_1'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}



    {{-- <div class="logo-area gap-bottom gap-top">
        <div class="container">

            <ul class="d-flex justify-content-between align-items-center">
               <li><img src="{{ $homedata['client']['image_1'] }}"></li>
                <li><img src="{{ $homedata['client']['image_2'] }}"></li>
                <li><img src="{{ $homedata['client']['image_3'] }}"></li>
                <li><img src="{{ $homedata['client']['image_4'] }}"></li>
                <li><img src="{{ $homedata['client']['about_badge_icon1'] }}"></li>
            </ul>

        </div>
    </div> --}}

    <div id="form-loader"
        style="display: none !important; position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
    background-color: rgba(0,0,0,0.4); z-index: 9999; display: flex; justify-content: center; align-items: center;">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
@endsection
@section('script_content')
    <script>
        $(document).ready(function() {

            ////////////// form validation ////////////////////////
            $('#contact_form').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    phone: {
                        required: true,
                        number: true,
                    },
                    message: {
                        required: true
                    },
                },
                messages: {
                    name: "Please enter your name",
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    phone: {
                        required: "Please enter your phone number",
                        number: "Please enter a valid phone number"
                    },
                    message: "Please enter your message"
                },
                errorElement: 'span',
                errorClass: 'form_error text-danger',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();

                    const formData = new FormData(form);
                    const url = "{{ route('post_contact_us') }}";

                    // ++++++++++++++ | form submit | +++++++++++++++
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        url: url,
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $('#form-loader').show();
                            $(form).find('input[type="submit"]').prop('disabled', true);
                        },
                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                icon: "success",
                                title: "Success",
                                text: "Thank you for contacting us.",
                                showConfirmButton: true,
                                confirmButtonText: "OK",
                            });
                        },
                        error: function(error) {
                            $('#form-loader').hide();
                            console.log("error" + error);
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong!",
                                showConfirmButton: true,
                                confirmButtonText: "OK",
                            });
                        },
                        complete: function() {
                            $('#form-loader').hide();
                            form.reset();
                            $(form).find('input[type="submit"]').prop('disabled', false);
                        }
                    });
                }
            });
            ////////////// end form validation ////////////////////

        });
    </script>
@endsection
