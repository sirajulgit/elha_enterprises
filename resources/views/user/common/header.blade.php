   <header>

       <div class="menu-part d-flex">
           <div class="logo me-5">
               <img src="{{ asset('asset/frontend/images/logo.png') }}" alt="" title="">
           </div>

           <div class="nav-info">
               <div class="head-top-info d-flex justify-content-between">
                   <ul class="d-flex social-media">
                       <li><a href="{{ $settings['fb_link'] }}"> <i class="fa fa-facebook"></i> </a></li>
                       <li><a href="{{ $settings['twitter_link'] }}"> <i class="fa fa-twitter"></i> </a></li>
                       <li><a href="{{ $settings['insra_link'] }}"> <i class="fa fa-linkedin"></i> </a></li>
                       <li><a href="{{ $settings['youtube_link'] }}"> <i class="fa fa-youtube-play"></i> </a></li>
                   </ul>
                   <a class="mail-head" href=""><i class="fa fa-envelope-o me-2"></i>
                       {{ $settings['contact_email'] }}</a>
               </div>
               <div class="nav-area">
                   <span id="pull">
                       <div class="hamburger hamburger--spring">
                           <div class="hamburger-box">
                               <div class="hamburger-inner"></div>
                           </div>
                       </div>
                   </span>
                   <div class="nav">
                       <div class="mob-logo d-none">
                           <img src="{{ asset('asset/frontend/images/logo.png') }}" alt="" title="">
                       </div>
                       <ul id="menu-bg">

                           <li class="{{ $data['activePageName'] == 'home' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('home') }}"> Home </a>
                           </li>
                           <li class="{{ $data['activePageName'] == 'about_us' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('about_us') }}"> About Us </a>
                           </li>
                           <li class="{{ $data['activePageName'] == 'services' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('services') }}"> Services </a>
                           </li>
                            <li class="{{ $data['activePageName'] == 'resources' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('resources') }}"> Resources </a>
                           </li>
                           
                           <li class="{{ $data['activePageName'] == 'blog' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('blogs') }}"> Blog </a>
                           </li>
                           <li class="{{ $data['activePageName'] == 'event' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('events') }}"> Events </a>
                           </li>

                           <li class="{{ $data['activePageName'] == 'contact_us' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('contact_us') }}"> Contact Me </a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="head-right d-flex align-items-center ms-lg-auto">
               <div class="top-call d-flex">
                   <div class="phone-icon me-3">
                       <i class="bi bi-telephone-fill"></i>
                   </div>
                   <div class="text-phone me-4">
                       <span>Call Anytime</span><br>
                       <a href="tel:{{ $settings['contact_no'] }}"> {{ $settings['contact_no'] }} </a>
                   </div>
               </div>
           </div>
       </div>
       </div>

   </header>
