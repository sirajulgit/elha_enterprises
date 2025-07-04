@extends('user.layout.guest_layout')


@section('content')
    <div class="inner-banner position-relative"
        style="background-image:url({{ asset('asset/frontend/images/banner.jpg') }});">
        <div class="container">
            <div class="text-center">
                <strong> {{ $data['event_data']['title'] }} </strong>
            </div>
        </div>
    </div>
    <section class="gap-top gap-bottom">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-text">


                        @if ($data['event_data']['image'])
                            <img src="{{ asset($data['event_data']['image']) }}">
                        @endif
                        <h3>{{ $data['event_data']['title'] }}</h3>

                        {!! $data['event_data']['long_description'] !!}

                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
