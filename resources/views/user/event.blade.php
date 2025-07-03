@extends('user.layout.guest_layout')


@section('content')

    <div class="inner-banner position-relative" style="background-image:url({{ asset('asset/frontend/images/banner.jpg')}});">
        <div class="container">
            <div class="text-center">
                <strong> Events </strong>
            </div>
        </div>
    </div>
    <!-- Service -->

    <section class="gap-top gap-bottom">
        <div class="container">

            @foreach ($data['event_data'] as $item)
                <div class="row align-items-center event-area mb-4">
                    <div class="col-md-4">
                        <img src="{{ asset($item['image']) }}">
                    </div>
                    <div class="col-md-8">
                        <div class="common-text">
                            <h2>{{ $item['title'] }}</h2>
                            <p>
                                @if ($item['short_description'])
                                    {!! \Illuminate\Support\Str::limit($item['short_description'], 100, '...') !!}
                                @endif
                            </p>
                            <a class="btn-readmore" href="{{ route('event_details', $item['slug']) }}"> Read More <i
                                    class="fa fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            @endforeach


            {{-- ########### | Pagination | ########### --}}
            @if ($data['event_data']->hasPages())
                <nav class="Page navigation pagination-area mt-4">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($data['event_data']->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $data['event_data']->previousPageUrl() }}"
                                    rel="prev">Previous</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($data['event_data']->links()->elements[0] as $page => $url)
                            @if ($page == $data['event_data']->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($data['event_data']->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $data['event_data']->nextPageUrl() }}"
                                    rel="next">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                        @endif
                    </ul>
                </nav>
            @endif

        </div>
    </section>

@endsection
