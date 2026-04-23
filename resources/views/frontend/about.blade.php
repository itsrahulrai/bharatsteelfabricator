@extends('frontend.layouts.layout')
@section('title', 'About Bharat Steel Fabricator | Trusted Steel Fabricator in Delhi NCR')
@section('meta-title', '')
@section('keywords', '')
@section('meta-description', 'Bharat Steel Fabricator in Delhi NCR specializes in steel gates, railings & interiors.
    Quality craftsmanship, durable designs, and reliable service since [Year].')

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
                                        <h3 class="it-breadcrumb-title it-split-text it-split-in-right">About Us</h3>
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
                                            <span><a href="{{ route('about-us') }}">About us</a></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area-end -->

                <!-- about-area-start -->
                <div class="it-about-4-area gray-bg pt-130 pb-130">
                    <div class="container">
                        <div class="row gx-35 align-items-end align-items-xl-center">

                            <!-- Left Content -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-about-4-left">
                                    <div class="it-section-title-box mb-15">
                                        <span class="it-section-subtitle">ABOUT BHARAT STEEL FABRICATOR</span>
                                        <h4 class="it-section-title it-split-text it-split-in-right mb-0">
                                            Delivering Strong & Stylish <br>
                                            Steel Fabrication Solutions
                                        </h4>
                                    </div>
                                    <p class="mb-25">
                                        Bharat Steel Fabricator is a trusted name in Aluminium and Steel fabrication
                                        work.
                                        We specialize in Aluminium Profile Gates, Glass Railings, Steel Gates,
                                        Powder Coated Railings, Duplex Staircases, and customized Iron & Steel Interior
                                        Work.
                                        Our focus is on durability, precision craftsmanship, modern design, and complete
                                        customer satisfaction.
                                    </p>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-about-4-thumb">
                                    <img class="w-100" src="{{ asset('assets/img/custom/about-1-1.webp') }}"
                                        alt="Bharat Steel Fabricator Work">
                                </div>
                            </div>

                            <!-- Accordion Section -->
                            <div class="col-xl-4 col-lg-4">
                                <div class="it-about-4-right">
                                    <div class="it-custom-accordion">
                                        <div class="accordion" id="accordionExample4">

                                            <!-- Mission -->
                                            <div class="accordion-items">
                                                <h4 class="accordion-header" id="headingOne2">
                                                    <button class="accordion-buttons" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                                        aria-expanded="true">
                                                        Our Mission
                                                    </button>
                                                </h4>
                                                <div id="collapseOne2" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            Our mission is to provide high-quality steel and aluminium
                                                            fabrication
                                                            services with strong materials, modern designs, and precise
                                                            finishing
                                                            that ensure safety, durability, and customer satisfaction.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Vision -->
                                            <div class="accordion-items">
                                                <h4 class="accordion-header" id="headingTwo3">
                                                    <button class="accordion-buttons collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo3">
                                                        Our Vision
                                                    </button>
                                                </h4>
                                                <div id="collapseTwo3" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            Our vision is to become a leading steel fabrication company
                                                            known
                                                            for innovation, reliability, and excellence in Aluminium
                                                            Gates,
                                                            Railings, Staircases, and Interior Steel Work solutions.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Value -->
                                            <div class="accordion-items">
                                                <h4 class="accordion-header" id="headingFour4">
                                                    <button class="accordion-buttons collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour4">
                                                        Our Values
                                                    </button>
                                                </h4>
                                                <div id="collapseFour4" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            We believe in honesty, quality workmanship, timely delivery,
                                                            transparent pricing, and building long-term relationships
                                                            with our clients through trust and excellence.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- about-area-end -->

                <!-- choose-area-start -->
                <div class="it-choose-3-area p-relative pt-150 pb-125">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-7 col-xl-6 col-lg-7">
                                <div class="it-choose-3-content">

                                    <div class="it-section-title-box mb-45">
                                        <span class="it-section-subtitle">Why Choose Bharat Steel Fabricator</span>
                                        <h4 class="it-section-title it-split-text it-split-in-right mb-15">
                                            Trusted For Strength, <br> Precision & Quality Craftsmanship
                                        </h4>
                                        <p>
                                            At Bharat Steel Fabricator, we combine modern design with strong and durable
                                            materials
                                            to deliver high-quality Aluminium Gates, Steel Gates, Glass Railings, Duplex
                                            Staircases
                                            and customized Iron & Steel Interior Work. Our focus is on precision,
                                            durability,
                                            safety, and customer satisfaction in every project.
                                        </p>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="it-choose-3-more-info mb-30">
                                                <h5 class="it-choose-3-more-title">
                                                    <span>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.5 0C5.60777 0 0 5.60777 0 12.5C0 19.3922 5.60777 25 12.5 25C19.3922 25 25 19.3922 25 12.5C25 5.60777 19.3922 0 12.5 0Z"
                                                                fill="#E03B3B" />
                                                        </svg>
                                                    </span>
                                                    Premium Quality Materials
                                                </h5>
                                                <p>
                                                    We use high-grade steel and aluminium materials to ensure
                                                    long-lasting strength,
                                                    rust resistance, and superior finishing.
                                                </p>
                                            </div>

                                            <div class="it-choose-3-more-info mb-30">
                                                <h5 class="it-choose-3-more-title">
                                                    <span>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.5 0C5.60777 0 0 5.60777 0 12.5C0 19.3922 5.60777 25 12.5 25C19.3922 25 25 19.3922 25 12.5C25 5.60777 19.3922 0 12.5 0Z"
                                                                fill="#E03B3B" />
                                                        </svg>
                                                    </span>
                                                    Customized Design Solutions
                                                </h5>
                                                <p>
                                                    Every project is tailored to meet your specific needs, whether it’s
                                                    a modern gate,
                                                    railing system, or interior steel work.
                                                </p>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="it-choose-3-more-ml">

                                                <div class="it-choose-3-more-info mb-30">
                                                    <h5 class="it-choose-3-more-title">
                                                        <span>
                                                            <svg width="25" height="25" viewBox="0 0 25 25"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.5 0C5.60777 0 0 5.60777 0 12.5C0 19.3922 5.60777 25 12.5 25C19.3922 25 25 19.3922 25 12.5C25 5.60777 19.3922 0 12.5 0Z"
                                                                    fill="#E03B3B" />
                                                            </svg>
                                                        </span>
                                                        Skilled & Experienced Team
                                                    </h5>
                                                    <p>
                                                        Our expert fabricators ensure precision cutting, welding, and
                                                        finishing
                                                        for a flawless final result.
                                                    </p>
                                                </div>

                                                <div class="it-choose-3-more-info mb-30">
                                                    <h5 class="it-choose-3-more-title">
                                                        <span>
                                                            <svg width="25" height="25" viewBox="0 0 25 25"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.5 0C5.60777 0 0 5.60777 0 12.5C0 19.3922 5.60777 25 12.5 25C19.3922 25 25 19.3922 25 12.5C25 5.60777 19.3922 0 12.5 0Z"
                                                                    fill="#E03B3B" />
                                                            </svg>
                                                        </span>
                                                        On-Time Project Delivery
                                                    </h5>
                                                    <p>
                                                        We value your time and ensure timely completion of projects
                                                        without compromising on quality.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="it-choose-3-bg img-zoom-2">
                        <img src="{{ asset('assets/img/custom/bg-5-1.webp') }}" alt="Bharat Steel Fabricator Work">
                    </div>
                </div>
                <!-- choose-area-end -->

                <!-- testimonial-area-start -->
                <div class="it-testimonial-2-area z-index-1 black-bg pt-130 pb-130">
                    <img class="it-service-shape-1" src="{{ asset('assets/img/shape/testimonial-3-1.png') }}"
                        alt="">
                    <div class="container">
                        <div class="row align-items-end">

                            <div class="col-xl-4 col-lg-5 order-1 order-lg-0">
                                <div class="it-testimonial-2-thumb">
                                    <img src="{{ asset('assets/img/custom/testimonial-3-1.webp') }}"
                                        alt="Bharat Steel Fabricator Clients">
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7 order-0 order-lg-1">
                                <div class="it-testimonial-2-right">

                                    <div class="it-section-title-box mb-50">
                                        <span class="it-section-subtitle">Client Testimonials</span>
                                        <h4 class="it-section-title text-white mb-0">
                                            What Our Customers Say About Us
                                        </h4>
                                    </div>
                                    <div class="it-testimonial-wrapper p-relative">
                                        <div class="swiper-container it-testimonial-active p-relative">
                                            <div class="swiper-wrapper">

                                                <!-- Review 1 -->
                                                <div class="swiper-slide">
                                                    <div class="it-testimonial-item">
                                                        <div class="it-testimonial-text d-flex">
                                                            <p class="mb-30 text-white">
                                                                “Bharat Steel Fabricator designed and installed our
                                                                aluminium profile gate
                                                                perfectly. The finishing and quality are excellent. The
                                                                team was professional
                                                                and completed the work on time.”
                                                            </p>
                                                        </div>
                                                        <div class="it-testimonial-bottom d-flex align-items-center">
                                                            <div class="it-testimonial-ratting">
                                                                <span>5.0 ★</span>
                                                            </div>
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name text-white">
                                                                    Rajesh Sharma</h5>
                                                                <span>Residential Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Review 2 -->
                                                <div class="swiper-slide">
                                                    <div class="it-testimonial-item">
                                                        <div class="it-testimonial-text d-flex">
                                                            <p class="mb-30 text-white">
                                                                “We got glass railings and a duplex staircase installed
                                                                for our home.
                                                                The craftsmanship and detailing were outstanding. Highly
                                                                recommended
                                                                for steel and interior fabrication work.”
                                                            </p>
                                                        </div>
                                                        <div class="it-testimonial-bottom d-flex align-items-center">
                                                            <div class="it-testimonial-ratting">
                                                                <span>4.9 ★</span>
                                                            </div>
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name text-white">Anita
                                                                    Verma</h5>
                                                                <span>Homeowner</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Review 3 -->
                                                <div class="swiper-slide">
                                                    <div class="it-testimonial-item">
                                                        <div class="it-testimonial-text d-flex">
                                                            <p class="mb-30 text-white">
                                                                “The powder coated railing and steel gate work exceeded
                                                                our expectations.
                                                                Strong build quality, modern design, and very reasonable
                                                                pricing.
                                                                Great experience working with Bharat Steel Fabricator.”
                                                            </p>
                                                        </div>
                                                        <div class="it-testimonial-bottom d-flex align-items-center">
                                                            <div class="it-testimonial-ratting">
                                                                <span>4.8 ★</span>
                                                            </div>
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name text-white">Amit
                                                                    Kulkarni</h5>
                                                                <span>Commercial Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="it-testimonial-arrow-wrap">
                                                <button class="arrow-prev">‹</button>
                                                <button class="arrow-next">›</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- testimonial-area-end -->
            </main>

            @include('frontend.includes.footer')
        </div>
    </div>

@endsection
