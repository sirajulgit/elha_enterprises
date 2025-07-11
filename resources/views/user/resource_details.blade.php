@extends('user.layout.guest_layout')


@section('content')
 <div class="inner-banner position-relative" style="background-image:url({{ asset('asset/frontend/images/banner.jpg')}});">
    <div class="container">
      <div class="text-center">
        <strong> Resources / Import and Export Guides</strong>
      </div>
    </div>
  </div>

 
 

  <section class="gap-top gap-bottom">
    <div class="container">
      
      <div class="row">
      

        <div class="col-lg-12">
          <div class="common-text gap-top">
            


              <h3>Import and Export Guides</h3>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

          </div>
        </div>


        </div>
      </div>

         
    </div>
  </section>
   <section class="faq-area gap-bottom gap-top">
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
    </section>
  
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
