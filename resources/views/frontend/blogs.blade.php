@extends('frontend.layouts.layout')
@section('title', 'Steel Fabrication Blogs | Bharat Steel Fabricator Delhi NCR')
@section('meta-title', 'Steel Fabrication Blogs | Gates, Railings & Design Ideas')
@section('keywords',
    'steel fabrication blogs, steel gates design, railing design, steel fabrication Delhi NCR, modern
    steel homes, metal fabrication ideas')
@section('meta-description',
    'Read expert blogs on steel fabrication, modern gate designs, railings, and interior steel
    solutions. Bharat Steel Fabricator delivers durable and stylish designs across Delhi NCR.')

    @push('style')
        <style>
            .custom-pagination {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 8px;
                margin-top: 40px;
                flex-wrap: wrap;
            }
            .custom-pagination a,
            .custom-pagination span {
                padding: 10px 16px;
                border-radius: 8px;
                background: #f4f4f4;
                color: #333;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .custom-pagination a:hover {
                background: #E03B3B;
                color: #fff;
            }

            .custom-pagination .active {
                background: #E03B3B;
                color: #fff;
                font-weight: 600;
            }

            .custom-pagination .disabled {
                background: #ddd;
                color: #999;
                cursor: not-allowed;
            }
        </style>
    @endpush
@section('content')


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- breadcrumb-area-start -->
                <div class="it-breadcrumb-area it-breadcrumb-overlay z-index-1 fix p-relative"
                    data-background="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-7">
                                <div class="it-breadcrumb-content">
                                    <div class="it-breadcrumb-title-box">
                                        <h3 class="it-breadcrumb-title it-split-text it-split-in-right">Blogs</h3>
                                    </div>
                                    <div class="it-breadcrumb-list-wrap">
                                        <div class="it-breadcrumb-list">
                                            <span><a href="{{ route('home') }}">Home</a></span>
                                            <span class="dvdr">
                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.728891 0L0 0.728893L3.76852 4.5L0 8.27111L0.728891 9L5.23148 4.5L0.728891 0Z"
                                                        fill="#E03B3B" />
                                                </svg>
                                            </span>
                                            <span><a href="{{ route('blogs') }}">Blogs</a></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area-end -->

                <!-- about-area-start -->
                <div class="it-blog-area it-blog-style-2 it-blog-style-3 it-blog-style-4 pt-125 pb-100">
                    <div class="container">
                        <div class="row gx-35">

                            @forelse($blogs as $blog)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="it-blog-item gray-bg mb-30">
                                        <div class="it-blog-thumb w-100">
                                            <a href="{{ route('blog.details', $blog->slug) }}">
                                                <img class="w-100" src="{{ asset($blog->image) }}" alt="">
                                                <img class="w-100" src="{{ asset($blog->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="it-blog-content">
                                            <div class="it-blog-meta mb-20">
                                                <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
                                                <span> {{ $blog->category->name ?? 'General' }}</span>
                                            </div>
                                            <h4 class="it-blog-title mb-20">
                                                <a class="border-line-black"
                                                    href="{{ route('blog.details', $blog->slug) }}">
                                                    {{ $blog->title }}
                                                </a>
                                            </h4>
                                            <p>
                                                {{ Str::limit(strip_tags($blog->short_content), 120) }}
                                            </p>
                                            <a class="it-blog-btn border-line-orange"
                                                href="{{ route('blog.details', $blog->slug) }}">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center">
                                    <p>No blogs found.</p>
                                </div>
                            @endforelse

                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-40">
                                    @if ($blogs->lastPage() > 1)
                                        <div class="custom-pagination">

                                            {{-- Prev Button --}}
                                            @if ($blogs->onFirstPage())
                                                <span class="disabled">Prev</span>
                                            @else
                                                <a href="{{ $blogs->previousPageUrl() }}" class="prev">Prev</a>
                                            @endif

                                            {{-- Page Numbers --}}
                                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                                @if ($i == $blogs->currentPage())
                                                    <span class="active">{{ $i }}</span>
                                                @else
                                                    <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                                @endif
                                            @endfor

                                            {{-- Next Button --}}
                                            @if ($blogs->hasMorePages())
                                                <a href="{{ $blogs->nextPageUrl() }}" class="next">Next</a>
                                            @else
                                                <span class="disabled">Next</span>
                                            @endif

                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <!-- about-area-end -->

            </main>

            @include('frontend.includes.footer')
        </div>
    </div>

@endsection
