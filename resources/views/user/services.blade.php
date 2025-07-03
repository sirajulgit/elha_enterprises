@extends('user.layout.guest_layout')


@section('content')
  <div class="inner-banner position-relative" style="background-image:url({{ asset('asset/frontend/images/banner.jpg')}});">
  <div class="text-center">
      <strong> Service </strong>
  </div>
</div>

 

  <!-- Service -->

  <section class="service gap-top gap-bottom">
    <div class="container">
      <div class="heading mb-5 pb-5">
        <span> Our Services <img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
        <h2> Were Offering Our   Special Services </h2>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-1.png')}});"></a>
            </div>
             <div class="service-icon blue-bg">
                <img src="{{ asset('asset/frontend/images/Logistics.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Logistics </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-2.png')}});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ asset('asset/frontend/images/Financial.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Financial </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-3.png')}});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ asset('asset/frontend/images/gold-ingot.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Consulting Gold </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-4.png')}});"></a>
            </div>
             <div class="service-icon blue-bg">
                <img src="{{ asset('asset/frontend/images/charcoal.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Minerals Import & Export Trade </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-1.png')}});"></a>
            </div>
             <div class="service-icon blue-bg">
                <img src="{{ asset('asset/frontend/images/Logistics.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Logistics </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-2.png')}});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ asset('asset/frontend/images/Financial.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Financial </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-3.png')}});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ asset('asset/frontend/images/gold-ingot.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Consulting Gold </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic mb-4">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ asset('asset/frontend/images/service-image-4.png')}});"></a>
            </div>
             <div class="service-icon blue-bg">
                <img src="{{ asset('asset/frontend/images/charcoal.png')}}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> Minerals Import & Export Trade </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
            </div>
          </div>
        </div>

        


      </div>
    </div>
  </section>
@endsection
