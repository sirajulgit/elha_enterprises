@extends('user.layout.guest_layout')


@section('content')


    <div class="inner-banner position-relative"
        style="background-image:url({{ asset('asset/frontend/images/banner.jpg') }});">
        <div class="container">
            <div class="text-center">
                <strong> Blog </strong>
            </div>
        </div>
    </div>

    <!-- Blogs -->

    <section class="gap-top gap-bottom">
        <div class="container">

            <div class="row">
                @foreach ($data['blog_data'] as $item)
                    <div class="col-lg-4 mb-4">
                        <div class="blog-card matchHeight " style="height: 555px;">
                            <div class="blog-image">
                                <img src="{{ asset($item['image']) }}">
                            </div>
                            <div class="blog-content">
                                <h4> {{ $item['title'] }} </h4>
                                <p>
                                    @if ($item['short_description'])
                                        {!! \Illuminate\Support\Str::limit($item['short_description'], 100, '...') !!}
                                    @endif
                                </p>
                                <a class="btn-readmore" href="{{ route('blog_details', $item['slug']) }}"> Read More <i
                                        class="fa fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
            {{-- ########### | Pagination | ########### --}}
            @if ($data['blog_data']->hasPages())
                <nav class="Page navigation pagination-area mt-4">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($data['blog_data']->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $data['blog_data']->previousPageUrl() }}"
                                    rel="prev">Previous</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($data['blog_data']->links()->elements[0] as $page => $url)
                            @if ($page == $data['blog_data']->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($data['blog_data']->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $data['blog_data']->nextPageUrl() }}" rel="next">Next</a>
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
