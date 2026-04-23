@extends('frontend.layouts.layout')
@section('title', $blog->meta_title ?? $blog->title)
@section('meta-title', $blog->meta_title ?? $blog->title)
@section('keywords', $blog->meta_keywords ?? '')
@section('meta-description', $blog->meta_description ?? Str::limit(strip_tags($blog->content), 150))
@push('style')

<style>
    .category-widget {
        background: #fff;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .widget-title {
        font-size: 18px;
        font-weight: 700;
        border-left: 4px solid #E03B3B;
        padding-left: 10px;
    }

    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .category-list li {
        margin-bottom: 12px;
    }

    .category-list li a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 15px;
        border-radius: 8px;
        background: #f7f7f7;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .category-list li a:hover {
        background: #E03B3B;
        color: #fff;
        transform: translateX(5px);
    }

    .cat-name {
        font-weight: 500;
    }

    .cat-count {
        background: #fff;
        color: #E03B3B;
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 20px;
    }

    .category-list li a:hover .cat-count {
        background: #fff;
        color: #E03B3B;
    }

    /* recent posts */
    .recent-widget {
        background: #fff;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .widget-title {
        font-size: 18px;
        font-weight: 700;
        border-left: 4px solid #E03B3B;
        padding-left: 10px;
    }

    .recent-post-card {
        display: flex;
        gap: 12px;
        margin-bottom: 18px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .recent-post-card:last-child {
        border-bottom: none;
    }

    .recent-post-card:hover {
        transform: translateX(5px);
    }

    .recent-img img {
        width: 80px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
    }

    .recent-content h6 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
        line-height: 1.4;
    }

    .recent-content h6 a {
        color: #222;
        text-decoration: none;
        transition: 0.3s;
    }

    .recent-content h6 a:hover {
        color: #E03B3B;
    }

    .recent-date {
        font-size: 12px;
        color: #888;
    }


    /* Style */
    .blog-content {
        text-align: justify;
        line-height: 1.9;
        font-size: 16px;
        color: #444;
    }

    .blog-content p {
        margin-bottom: 18px;
    }

    .blog-content h1,
    .blog-content h2,
    .blog-content h3,
    .blog-content h4 {
        margin-top: 25px;
        margin-bottom: 15px;
        font-weight: 700;
        color: #222;
    }

    .blog-content ul {
        padding-left: 20px;
        margin-bottom: 20px;
    }

    .blog-content ul li {
        margin-bottom: 8px;
    }

    .blog-content img {
        max-width: 100%;
        border-radius: 10px;
        margin: 20px 0;
    }

    .blog-content a {
        color: #E03B3B;
        text-decoration: underline;
    }

    .blog-content blockquote {
        border-left: 4px solid #E03B3B;
        padding-left: 15px;
        color: #666;
        font-style: italic;
        margin: 20px 0;
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
                <div class="it-blog-area pt-120 pb-100">
                    <div class="container">
                        <div class="row">

                            <!-- LEFT SIDE (BLOG CONTENT) -->
                            <div class="col-lg-8">

                                <div class="it-blog-details">

                                    <!-- Image -->
                                    <div class="it-blog-details-thumb mb-30">
                                        <img class="img-fluid rounded -bottom-3`5" src="{{ asset($blog->image) }}"
                                            alt="{{ $blog->title }}">
                                    </div>

                                    <!-- Meta -->
                                    <div class="it-blog-meta mb-20">
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
                                        <span>{{ $blog->category->name ?? 'General' }}</span>
                                    </div>

                                    <!-- Title -->
                                    <h2 class="mb-20">{{ $blog->title }}</h2>

                                    <!-- Content -->
                                    <div class="blog-content">
                                        {!! $blog->content !!}
                                    </div>

                                </div>

                            </div>

                            <!-- RIGHT SIDE (SIDEBAR) -->
                            <div class="col-lg-4">
                                <!-- Recent Blogs -->
                                <div class="sidebar-widget recent-widget mb-40">
                                    <h5 class="widget-title mb-25">Recent Posts</h5>

                                    @foreach ($recentBlogs as $recent)
                                        <div class="recent-post-card">

                                            <div class="recent-img">
                                                <a href="{{ route('blog.details', $recent->slug) }}">
                                                    <img src="{{ asset($recent->image) }}" alt="{{ $recent->title }}">
                                                </a>
                                            </div>

                                            <div class="recent-content">
                                                <h6>
                                                    <a href="{{ route('blog.details', $recent->slug) }}">
                                                        {{ Str::limit($recent->title, 55) }}
                                                    </a>
                                                </h6>

                                                <span class="recent-date">
                                                    {{ \Carbon\Carbon::parse($recent->created_at)->format('d M Y') }}
                                                </span>
                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                                <!-- Categories -->
                                <div class="sidebar-widget category-widget mb-40">
                                    <h5 class="widget-title mb-25">Categories</h5>

                                    <ul class="category-list">
                                        @foreach ($categories as $cat)
                                            <li>
                                                <a href="{{ route('blog.category', $cat->slug) }}">
                                                    <span class="cat-name">{{ $cat->name }}</span>
                                                    <span class="cat-count">{{ $cat->blogs_count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
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
