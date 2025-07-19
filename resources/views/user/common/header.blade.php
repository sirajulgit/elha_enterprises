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
                       <li><a href="{{ $settings['insra_link'] }}"> <i class="fa fa-instagram"></i> </a></li>
                        <li><a href="{{ $settings['linkedin_link'] }}"> <i class="fa fa-linkedin"></i> </a></li>
                       
                       <li><a href="{{ $settings['youtube_link'] }}"> <i class="fa fa-youtube-play"></i> </a></li>
                       <li><a href="{{ $settings['tiktok_link'] }}"> <i class="fa fa-tiktok"></i> </a></li>
                       
                   </ul>
                   <a class="mail-head" href="mailto:{{ $settings['contact_email'] }}"><i class="fa fa-envelope-o me-2"></i>
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
                        @if ($settings['logo'])
                           <img src="{{ asset($settings['logo']) }}" alt="" title="">
                            
                        @endif
                           
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
                               <ul class="sub-menu">
                          
                                 @foreach ($settings['services'] as $item)
                                    <li>
                                        <a href="{{ route('service_details', $item->slug) }}">{{ $item->title }}</a>
                                    </li>
                                     
                                 @endforeach
                               
                                
                               </ul>
                           </li>
                            <li class="{{ $data['activePageName'] == 'resources' ? 'current-menu-item' : '' }} ">
                               <a href="#"> Resources </a>
                               <ul class="sub-menu">
                          
                                 @foreach ($settings['resources'] as $item)
                                    <li>
                                        <a href="{{ route('resource_details', $item->slug) }}">{{ $item->title }}</a>
                                    </li>
                                     
                                 @endforeach
                               
                                
                               </ul>
                           </li>
                           
                           <li class="{{ $data['activePageName'] == 'blog' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('blogs') }}"> Blog </a>
                           </li>
                           <li class="{{ $data['activePageName'] == 'event' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('events') }}"> Events </a>
                           </li>

                           <li class="{{ $data['activePageName'] == 'contact_us' ? 'current-menu-item' : '' }}">
                               <a href="{{ route('contact_us') }}"> Contact Us </a>
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
                       <span>Phone:</span><br>
                       <a href="tel:{{ $settings['contact_no'] }}"> {{ $settings['contact_no'] }} </a>
                   </div>
               </div>
           </div>
       </div>
       </div>

   </header>
