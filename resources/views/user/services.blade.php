@extends('user.layout.guest_layout')


@section('content')
    <div class="inner-banner position-relative"
        style="background-image:url({{ asset('asset/frontend/images/banner.jpg') }});">
        <div class="text-center">
            <strong> Service </strong>
        </div>
    </div>



    <!-- Service -->

    <section class="service gap-top gap-bottom">
        <div class="container">
            <div class="heading mb-5 pb-5">
                <span> Our Services <img src="{{ asset('asset/frontend/images/three-dots.png') }}"> </span>
                <h2> Were Offering Our Special Services </h2>
            </div>

            <div class="row">
                @foreach ($data['services'] as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="logistic mb-4">
                            <div class="pic">
                                <img src="{{ asset('asset/frontend/images/rashio-image.jpg') }}" alt="Blank Image">
                                <a class="holder" href=""
                                    style="background-image:url({{ asset($item['image']) }});"></a>
                            </div>
                        
                            <div class="service-content-area-new text-center matchHeight">
                                <h3> {{ $item['title'] }} </h3>
                                 @if ($item['short_description'])
                                    {!! \Illuminate\Support\Str::limit($item['short_description'], 100, '...') !!}
                                @endif
                                <a class="arrow-btn" href="{{ route('service_details', $item['slug']) }}"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
@endsection
