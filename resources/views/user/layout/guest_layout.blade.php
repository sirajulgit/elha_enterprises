<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }} | {{ $data['page_title'] ?? '' }}</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('asset/frontend/css/bootstrap.min.css')}}">
  <!-- Animate CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/animate.min.css')}}">
  <!-- Gallery CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/baguetteBox.min.css')}}">
  <!-- Slider CSS -->
  <link rel='stylesheet' href="{{ asset('asset/frontend/css/slickanimate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/slick.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/slick-theme.css')}}"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('asset/frontend/css/font-awesome.min.css')}}">
  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Style CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/frontend/css/responsive.css')}}">
</head>


<body>
    {{-- +++++++++++++++++ | Header | +++++++++++++++++ --}}
    @include('user.common.header')


    {{-- +++++++++++++++++ | Main Content | +++++++++++++++++ --}}
    @yield('content')

    {{-- +++++++++++++++++ | Footer | +++++++++++++++++ --}}
    @include('user.common.footer')


    {{-- ################# | Jquery | ################# --}}
 
  <!-- Scroll Top -->
  <div class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

  <!-- jquery Min js -->
  <script src="{{ asset('asset/frontend/js/jquery-3.7.1.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('asset/frontend/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Gallery JS -->
  <script src="{{ asset('asset/frontend/js/baguetteBox.js') }}"></script>
  <!-- Gallery JS -->
  <script src="{{ asset('asset/frontend/js/aos.js') }}"></script>
  <!-- Slider JS -->
  <script src="{{ asset('asset/frontend/js/slick.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/slick-animation.min.js') }}"></script>
  <!-- matchHeight js -->
  <script src="{{ asset('asset/frontend/js/jquery.matchHeight-min.js') }}"></script>
  <!-- Custome js -->
  <script src="{{ asset('asset/frontend/js/custome.js') }}"></script>


    {{-- custom own page script --}}
    @yield('script_content')
</body>

</html>
