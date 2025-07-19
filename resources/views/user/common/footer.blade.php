
<footer>
  <div class="container">

    <div class="footer-info">
      <ul class="d-flex justify-content-center">
        <li class="d-flex">
          <i class="fa fa-map-marker"></i>
          <div>
            <strong>Address</strong>
            <p> {!! $settings['address'] !!} </p>
          </div>
        </li>
        <li class="d-flex">
          <i class="fa fa-phone"></i>
          <div>
            <strong>Phone</strong>
            <p> {{$settings['contact_no']}} </p>
          </div>
        </li>
        <li class="d-flex">
          <i class="fa fa-envelope-o"></i>
          <div>
            <strong>Mail</strong>
            <p> <a href="mailto:{{ $settings['contact_email'] }}"> {{$settings['contact_email']}}</a> </p>
          </div>
        </li>
      </ul>

    </div>

    <div class="row pt-4 pb-4">
      
      <div class="col-lg-2 col-md-6">
        <div class="footer-holder">
          <h3> Services </h3>
          <ul>
            @foreach ($settings['services'] as $item)
              <li>
                <a href="{{ route('service_details', $item->slug) }}">{{ $item->title }}</a>
              </li>
            @endforeach
           
          </ul>
        </div>
      </div>


      <div class="col-lg-3 col-md-6">
        <div class="footer-holder">
          <h3> Useful Links </h3>
          <ul>
            <li><a href="{{ route('disclaimer')}}"> Disclaimer </a></li>
            <li><a href="{{route('privacy_policy')}}"> Privacy Policy </a></li>
            <li><a href="{{route('terms_conditions')}}"> Terms & Conditions </a></li>
          </ul>
        </div>
      </div>
    
   
      <div class="col-lg-3 col-md-6">
        <div class="footer-holder">
          <h3> About Us </h3>
          <p>Elha-Enterprises LLC is a U.S.-based import and export consulting company dedicated to empowering businesses to expand globally with confidence and compliance. With a strong foundation in international trade laws, market intelligence, and logistics management, we provide end-to-end solutions that streamline cross-border transactions.</p>
        </div>
      </div>


    </div>


    <div class="copy-right mt-4">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="text-center pt-4 pb-4">
            <p> © Copyright 2025 All rights reserved. </p>
               <p> Powered by The Tech On Point, Inc.  <a href="https://www.thetechonpoint.com/"> www.thetechonpoint.com</a>  </p>
            </div>
          </div>
        </div>
    </div>

  
  </div>
</footer>
