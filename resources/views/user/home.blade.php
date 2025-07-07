@extends('user.layout.guest_layout')


@section('content')

  <div class="banner">
    <div class="banner-area">
        @foreach ($bannerdata as $item)
        <div class="position-relative">
          <img src="{{ $item->image }}" alt="banner">
          <div class="container">
            <div class="banner-content">
              <h1 class="animated top-title" data-animation-in="animate__fadeInUp" data-delay-in="0.3"> 
                {{ $item->title_1 }}
              </h1>
              <p class="animated" data-animation-in="animate__fadeInUp" data-delay-in="0.9"> <i>{{ $item->details }} </i>  </p>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
  </div>

 

  <!-- Service -->

  <section class="service gap-top">
    <div class="container">
      <div class="heading mb-5 pb-5">
        <span> {!! $homedata['services']['head_title'] !!} <img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
        <h2> {!! $homedata['services']['content'] !!} </h2>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="logistic">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ $homedata['services']['image_1'] }});"></a>
            </div>
             <div class="service-icon blue-bg">
                <img src="{{ $homedata['services']['about_badge_icon1'] }}">
              </div>
            <div class="service-content-area text-center matchHeight">
              <h3> {{ $homedata['services']['image_1_text_1'] }} </h3>
              <p> {{ $homedata['services']['image_1_text_2'] }}  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ $homedata['services']['image_2'] }});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ $homedata['services']['about_badge_icon2'] }}">
              </div>
            <div class="service-content-area text-center matchHeight">
               <h3> {{ $homedata['services']['image_2_text_1'] }} </h3>
              <p> {{ $homedata['services']['image_2_text_2'] }}  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic margin-top-mynes">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ $homedata['services']['image_3'] }});"></a>
            </div>
              <div class="service-icon green-bg">
                <img src="{{ $homedata['services']['about_badge_icon3'] }}">
              </div>
            <div class="service-content-area text-center matchHeight">
               <h3> {{ $homedata['services']['image_3_text_1'] }} </h3>
              <p> {{ $homedata['services']['image_3_text_2'] }}  </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="logistic margin-top-mynes">
            <div class="pic">
              <img src="{{ asset('asset/frontend/images/rashio-image.jpg')}}" alt="Blank Image">
              <a class="holder" href="" style="background-image:url({{ $homedata['services']['image_4'] }});"></a>
            </div>
             <div class="service-icon green-bg">
                <img src="{{ $homedata['services']['about_badge_icon4'] }}">
              </div>
            <div class="service-content-area text-center matchHeight">
               <h3> {{ $homedata['services']['image_4_text_1'] }} </h3>
              <p> {{ $homedata['services']['image_4_text_2'] }}  </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>


  <!-- About  -->

  <section class="about-part gap-top gap-bottom">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-6">
          <div class="heading mb-5">
          {!! $homedata['about']['head_title'] !!}
          <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
          </div>

          <div class="common-text">
            {!! $homedata['about']['title_1'] !!}
            {!! $homedata['about']['content'] !!}
            <a class="btn-readmore" href="{{ route('about_us') }}"> Read More <i class="fa fa-arrow-right"></i> </a>
          </div>

        </div>

        <div class="col-lg-6">
          <div class="about-image-area position-relative">
            <div class="about-right text-end">
              <img src="{{ $homedata['about']['image_2'] }}">
            </div>

            <div class="about-left-image">
              <img src="{{ $homedata['about']['image_1'] }}" alt="">
            </div>


          </div>
        </div>

      </div>
    </div>
  </section>

  <!--  -->

  <section class="different-industry gap-bottom gap-top">
    <div class="container">

       <div class="heading text-center mb-5">
            <h2 class="text-white">  {!! $homedata['industry']['head_title'] !!}</h2>
            <div class="text-center">
              <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
            </div>
        </div>

      <div class="row">
        
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
          <div class="cover-industry">
            <div class="industry-image overflow-hidden">
              <img src="{{ $homedata['industry']['image_1'] }}">
            </div>
            <div class="diffrent-text position-relative">
              <h3>{!! $homedata['industry']['image_1_text_1'] !!}</h3>
              <p> {!! $homedata['industry']['image_1_text_2'] !!}  </p>
              <a class="arrow-btn" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
          <div class="cover-industry">
            <div class="industry-image overflow-hidden">
              <img src="{{ $homedata['industry']['image_2'] }}">
            </div>
            <div class="diffrent-text position-relative">
              <h3>{!! $homedata['industry']['image_2_text_1'] !!}</h3>
              <p> {!! $homedata['industry']['image_2_text_2'] !!}  </p>
              <a class="arrow-btn" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
          <div class="cover-industry">
            <div class="industry-image overflow-hidden">
              <img src="{{ $homedata['industry']['image_3'] }}">
            </div>
            <div class="diffrent-text position-relative">
              <h3>{!! $homedata['industry']['image_3_text_1'] !!}</h3>
              <p> {!! $homedata['industry']['image_3_text_2'] !!}  </p>
              <a class="arrow-btn" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
          <div class="cover-industry">
            <div class="industry-image overflow-hidden">
              <img src="{{ $homedata['industry']['image_4'] }}">
            </div>
            <div class="diffrent-text position-relative">
              <h3>{!! $homedata['industry']['image_4_text_1'] !!}</h3>
              <p> {!! $homedata['industry']['image_4_text_2'] !!}  </p>
              <a class="arrow-btn" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>



      </div>

    </div>
  </section>

  <!-- How It Work -->

  <section class="how-it-work gap-bottom gap-top">
    <div class="container">
       
        <div class="heading text-center mb-5 pb-5">
          <h2> {{ $homedata['work']['head_title'] }} </h2>
          <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
        </div>

        <div class="weav-area">
          <ul class="d-flex">
              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['image_1'] }}">
                </div>
                <p>{!! $homedata['work']['image_1_text_1'] !!}</p>
              </li>

              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['image_2'] }}">
                </div>
                <p> {!! $homedata['work']['image_2_text_1'] !!}</p>
              </li>

              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['image_3'] }}">
                </div>
                <p> {!! $homedata['work']['image_3_text_1'] !!} </p>
              </li>

              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['image_4'] }}">
                </div>
                <p> {!! $homedata['work']['image_4_text_1'] !!}</p>
              </li>

               <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['about_badge_icon1'] }}">
                </div>
                <p> {{ $homedata['work']['badge_1_text'] }} </p>
              </li>

              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['about_badge_icon2'] }}">
                </div>
                <p> {{ $homedata['work']['badge_2_text'] }}</p>
              </li>

              <li>
                <div class="icon-part">
                  <img src="{{ $homedata['work']['about_badge_icon3'] }}">
                </div>
                <p>{{ $homedata['work']['badge_3_text'] }}</p>
              </li>

          </ul>
        </div>


    </div>
  </section>



  <!-- EXPORT -->

  <section class="export-sec position-relative overflow-hidden">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="different-industry-sec">
              <div class="heading mb-5">
                <h2 class="text-white mb-4"> {!! $homedata['market']['title_1'] !!} </h2>
                <p class="text-white">{!! $homedata['market']['content'] !!}</p>
              </div>

              <div class="row">
                
                <div class="col-md-6 col-sm-6 mb-4">
                  <div class="expo-icon">
                    <img src="{{ $homedata['market']['about_badge_icon1'] }}">
                  </div>
                  <div class="export-text">
                    <p>{{ $homedata['market']['badge_1_text'] }}</p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                  <div class="expo-icon">
                    <img src="{{ $homedata['market']['about_badge_icon2'] }}">
                  </div>
                  <div class="export-text">
                    <p>{{ $homedata['market']['badge_2_text'] }} </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                  <div class="expo-icon">
                    <img src="{{ $homedata['market']['about_badge_icon3'] }}">
                  </div>
                  <div class="export-text">
                    <p> {{ $homedata['market']['badge_3_text'] }} </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                  <div class="expo-icon">
                    <img src="{{ $homedata['market']['about_badge_icon4'] }}">
                  </div>
                  <div class="export-text">
                    <p> {{ $homedata['market']['badge_4_text'] }} </p>
                  </div>
                </div>

              </div>
              </div>
  
          </div>
          
          <div class="col-lg-6 ">
            <div class="expo-image-area">
              <img src="{{ $homedata['market']['image_1'] }}">
            </div>
          </div>

      </div>

  </section>


  <!-- Testimonial  -->



<section class="testimonial gap-top gap-bottom">
  <div class="container">
    <div class="heading text-center">
      <h2> Testimonials </h2>
      <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
    </div>
    <div class="client-say-area">
      <div class="row align-items-center">
        <div class="col-lg-3">

          <div class="client-say-heading">
            <img class="mb-3" src="{{ asset('asset/frontend/images/inverted-comma.png')}}">
            <div class="testimo-heading">
              <h3>What our <br> clients <br> say about <br> our company</h3>
            </div>
          </div>

          </div>
            
          <div class="col-lg-9">
            <div class="testimo-right">
              <div class="testi-slider"> 

                <div class="p-3 pb-5">
                  <div class="client-content position-relative">
                    <img src="{{ asset('asset/frontend/images/inverted-blue.png')}}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ex non est cursus tristique ac quis metus. Proin semper.......</p>
                    <div class="client-details">
                      <div class="client-image">
                        <img src="{{ asset('asset/frontend/images/client-1.png')}}">
                      </div>
                      <strong>Kathleen Smith</strong>
                    </div>
                  </div>
                </div>

                <div class="p-3 pb-5">
                  <div class="client-content position-relative">
                    <img src="{{ asset('asset/frontend/images/inverted-blue.png')}}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ex non est cursus tristique ac quis metus. Proin semper.......</p>
                    <div class="client-details">
                      <div class="client-image">
                        <img src="{{ asset('asset/frontend/images/client-2.png')}}">
                      </div>
                      <strong>Van Hunter</strong>
                    </div>
                  </div>
                </div>

                <div class="p-3 pb-5">
                  <div class="client-content position-relative">
                    <img src="{{ asset('asset/frontend/images/inverted-blue.png')}}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ex non est cursus tristique ac quis metus. Proin semper.......</p>
                    <div class="client-details">
                      <div class="client-image">
                        <img src="{{ asset('asset/frontend/images/client-3.png')}}">
                      </div>
                      <strong>Macquarie Telecom</strong>
                    </div>
                  </div>
                </div>

                <div class="p-3 pb-5">
                  <div class="client-content position-relative">
                    <img src="{{ asset('asset/frontend/images/inverted-blue.png')}}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ex non est cursus tristique ac quis metus. Proin semper.......</p>
                    <div class="client-details">
                      <div class="client-image">
                        <img src="{{ asset('asset/frontend/images/client-2.png')}}">
                      </div>
                      <strong>Kathleen Smith</strong>
                    </div>
                  </div>
                </div>
                 

              </div>
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
          <h2> Frequently asked <br> questions </h2>
          <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
        </div>

        <div class="acor-area">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Efficient logistics solutions possible?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Focusing on medium tolarge-scale commercial?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Add value to your business?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Add value to your business?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
      <div class="col-lg-5">
        <div class="from-area">
          <div class="text-center mb-5">
            <h3>Request A Quote</h3>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
              <input class="form-control" type="text" placeholder="Your Name">
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <input class="form-control" type="email" placeholder="Your Email">
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <input class="form-control" type="text" placeholder="Subject">
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <input class="form-control" type="tel" placeholder="Subject">
            </div>
             <div class="col-lg-12 mb-4">
              <textarea class="form-control"></textarea>
            </div>
            <div class="col-lg-12">
              <input class="sub-btn" type="submit" value="Submit">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<div class="logo-area gap-bottom gap-top">
  <div class="container">

    <ul class="d-flex justify-content-between align-items-center">
      <li><img src="{{ asset('asset/frontend/images/sponcer-1.png')}}"></li>
      <li><img src="{{ asset('asset/frontend/images/image-12.png')}}"></li>
      <li><img src="{{ asset('asset/frontend/images/image-13.png')}}"></li>
      <li><img src="{{ asset('asset/frontend/images/image-14.png')}}"></li>
      <li><img src="{{ asset('asset/frontend/images/image-15.png')}}"></li>
    </ul>

  </div>
</div>




@endsection
