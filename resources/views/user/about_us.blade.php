@extends('user.layout.guest_layout')


@section('content')
 <div class="inner-banner position-relative" style="background-image:url({{ asset('asset/frontend/images/banner.jpg')}});">
    <div class="container">
      <div class="text-center">
        <strong> About us </strong>
      </div>
    </div>
  </div>

  
  <!-- About  -->

  <section class="about-part gap-top gap-bottom">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-6">
          <div class="heading mb-5">
          <h2> About Our Company </h2>
          <span><img src="{{ asset('asset/frontend/images/three-dots.png')}}"> </span>
          </div>

          <div class="common-text">
            <h3> Leading global logistic and transport agency </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sem vitae sem vestibulum venenatis. Ut nec dapibus diam. Sed placerat condimentum nulla ac ultricies. Phasellus scelerisque facilisis arcu, et maximus justo porta volutpat. Duis placerat velit quam, vitae sodales velit volutpat sit amet. </p>
            <p> Ut pretium vehicula pretium. Curabitur vulputate congue tellus nec commodo. Praesent dignissim vel orci et efficitur. Nulla gravida enim sapien, at imperdiet nunc convallis ac. Sed finibus nisl non auctor hendrerit. Morbi quis diam dui </p>
           
          </div>

        </div>

        <div class="col-lg-6">
          <div class="about-image-area position-relative">
            <div class="about-right text-end">
              <img src="{{ asset('asset/frontend/images/about-right.png')}}">
            </div>

            <div class="about-left-image">
              <img src="{{ asset('asset/frontend/images/about-left.png')}}" alt="">
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
            <img class="mb-3" src="{{ asset('asset/frontend/images/inverted-comma.png">
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
