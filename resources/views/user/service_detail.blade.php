@extends('user.layout.guest_layout')


@section('content')

    <div class="inner-banner position-relative" style="background-image:url({{ asset('asset/frontend/images/banner.jpg')}});">
        <div class="container">
            <div class="text-center">
                <strong> {{ $data['blog_data']['title'] }} </strong>
            </div>
        </div>
    </div>

    <!-- Service -->

    <section class="gap-top gap-bottom">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-text">


                        @if ($data['blog_data']['image'])
                            <img src="{{ asset($data['blog_data']['image']) }}">
                        @endif
                        <h3>{{ $data['blog_data']['title'] }}</h3>

                        {!! $data['blog_data']['long_description'] !!}


                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
