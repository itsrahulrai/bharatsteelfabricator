@extends('frontend.layouts.layout')
@section('title', 'Steel Fabricator Manufacturer in Delhi NCR | Bharat Steel Fabricator')
@section('meta-title', 'Steel Fabricator Manufacturer in Delhi NCR | Bharat Steel Fabricator')
@section('keywords', 'steel fabricator, steel manufacturer, steel gates, steel railings, steel interior solutions, custom steel fabrication, durable steel products, stylish steel designs, reliable steel services, Delhi NCR steel fabricator')
@section('meta-description', 'Bharat Steel Fabricator is a leading manufacturer and fabricator of premium aluminium and steel products in Delhi NCR. We offer custom solutions for gates, railings, and interior steel work.')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- slider-area-start -->
                <div class="it-slider-area">
                    <div class="it-slider-wrapper p-relative">
                        <div class="swiper-container it-slider-active">
                            <div class="swiper-wrapper">

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="it-slider-overlay">
                                        <div class="it-slider-shape-2">
                                            <img src="{{asset('assets/img/shape/slider-2-1.png')}}" alt="">
                                        </div>
                                        <div class="it-slider-bg" data-background="{{asset('assets/img/custom/slider1.jpg')}}"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xxl-8 col-xl-7 col-lg-8">
                                                    <div class="it-slider-content">
                                                        <span class="it-slider-subtitle">
                                                            Premium Aluminium & Steel Work
                                                        </span>
                                                        <h1 class="it-slider-title">
                                                            Modern Gates, Railings <br>
                                                            & Duplex Staircases
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="it-slider-overlay">
                                        <div class="it-slider-shape-2">
                                            <img src="{{asset('assets/img/shape/slider-2-1.png')}}" alt="">
                                        </div>
                                        <div class="it-slider-bg" data-background="{{asset('assets/img/custom/slider2.jpg')}}"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xxl-8 col-xl-7 col-lg-8">
                                                    <div class="it-slider-content">
                                                        <span class="it-slider-subtitle">
                                                            Custom Fabrication Solutions
                                                        </span>
                                                        <h1 class="it-slider-title">
                                                            Elegant Glass Railings <br>
                                                            & Interior Steel Work
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="it-slider-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- slider-area-end -->

                <!-- form-area-start -->
                <div class="it-form-area">
                    <div class="container">
                        <form action="send-mail.php" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-xl-10">

                                    <div class="it-form-wrap it-faq-style-2 z-index-1 wow zoomIn p-4"
                                        data-wow-duration=".8s" data-wow-delay=".5s">

                                        <div
                                            class="row gx-15 row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-1 row-cols-sm-2 align-items-center">

                                            <!-- Name -->
                                            <div class="col">
                                                <div class="it-contact-input-box">
                                                    <input type="text" name="name" placeholder="Name" required
                                                        class="w-100">
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="col">
                                                <div class="it-contact-input-box">
                                                    <input type="tel" name="phone" placeholder="Phone"
                                                        pattern="[0-9]{10}" maxlength="10" required class="w-100">
                                                </div>
                                            </div>

                                            <!-- Subject -->
                                            <div class="col">
                                                <div class="it-contact-input-box">
                                                    <div class="postbox__select">
                                                        <select name="subject" required class="w-100">
                                                            <option value="">Subject*</option>
                                                            <option>Aluminium profile Gate</option>
                                                            <option>Glass Railing</option>
                                                            <option>Steel Gate</option>
                                                            <option>Powder Coated Railing</option>
                                                            <option>Duplex Staircase</option>
                                                            <option>Iron and Steel Interior Work</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="col">
                                                <div class="it-contact-btn">
                                                    <button type="submit" class="it-btn-orange w-100">
                                                        <span>
                                                            <span class="text-1">Enquire Now</span>
                                                            <span class="text-2">Enquire Now</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- form-area-end -->

                <!-- about-area-start -->
                <div class="it-about-area it-about-style-2 it-about-style-3 p-relative pt-130 pb-130">
                    <img class="it-about-shape-1 d-none d-lg-block" src="{{asset('assets/img/shape/about-5-1.png')}}" alt="">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7">
                                <div class="it-about-right">
                                    <div class="it-section-title-box">
                                        <span class="it-section-subtitle">ABOUT BHARAT STEEL FABRICATOR</span>
                                        <h4 class="it-section-title it-split-text it-split-in-right">
                                            Crafting Strength & Style <br>
                                            with Premium Steel & Aluminium Work
                                        </h4>
                                    </div>

                                    <p class="wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        Bharat Steel Fabricator is a trusted name in high-quality steel and aluminium
                                        fabrication services.
                                        We specialize in Aluminium Profile Gates, Glass Railings, Steel Gates, Powder
                                        Coated Railings,
                                        Duplex Staircases, and complete Iron & Steel Interior Work.
                                        Our expert craftsmanship, modern designs, and durable materials ensure
                                        long-lasting strength
                                        and elegant finishing for both residential and commercial projects.
                                        We focus on precision, safety, and customer satisfaction in every project we
                                        deliver.
                                    </p>

                                    <div class="it-about-funfact-wrap wow itfadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".5s">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="it-about-funfact">
                                                    <h4 class="it-about-funfact-number mb-0">
                                                        <i class="purecounter" data-purecounter-duration="1"
                                                            data-purecounter-end="98">98</i> %
                                                    </h4>
                                                    <span>Client Satisfaction <br>
                                                        & Repeat Customers</span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="it-about-funfact">
                                                    <h4 class="it-about-funfact-number mb-0">
                                                        <i class="purecounter" data-purecounter-duration="1"
                                                            data-purecounter-end="500">500</i>+
                                                    </h4>
                                                    <span>Successfully Completed <br>
                                                        Projects</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="it-about-btn d-flex align-items-center wow itfadeUp"
                                        data-wow-duration=".9s" data-wow-delay=".7s">

                                        <a href="{{ route('about-us') }}" class="it-btn-orange d-none d-md-inline-flex mr-30">
                                            <span>
                                                <span class="text-1">Explore Our Work</span>
                                                <span class="text-2">Explore Our Work</span>
                                            </span>
                                            <i>
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                        fill="white" />
                                                </svg>
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                        fill="white" />
                                                </svg>
                                            </i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-5">
                                <div class="it-about-thumb-wrap it-img-anim-wrap p-relative wow img-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.1">
                                    <div class="it-about-thumb mb-35 it-img-anim"
                                        data-displacement="{{asset('assets/img/webgl/pattern-1.jpg')}}" data-intensity="0.6"
                                        data-speedin="1" data-speedout="1">
                                        <img src="{{asset('assets/img/custom/about-1-1.webp')}}" alt="Bharat Steel Fabricator Work">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- about-area-end -->

                <!-- service-area-start -->
                <div class="it-service-2-area gray-bg p-relative z-index-1 pt-125 pb-130">
                    <img class="it-service-shape-1" src="{{asset('assets/img/shape/service-1-1.png')}}" alt="">
                    <div class="container">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="it-section-title-box text-center mb-65">
                                    <span class="it-section-subtitle">Our Premium Services</span>
                                    <h4 class="it-section-title it-split-text it-split-in-right mb-0">
                                        High Quality Steel & Aluminium <br>
                                        Fabrication Solutions
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Aluminium Profile Gate -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/al.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('aluminium-profile-gate') }}">
                                                Aluminium Profile Gate
                                            </a>
                                        </h4>
                                        <p>Modern, rust-free and durable aluminium profile gates with stylish designs
                                            for homes and commercial spaces.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Glass Railing -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/glass.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('glass-railing') }}">
                                                Glass Railing
                                            </a>
                                        </h4>
                                        <p>Elegant and strong glass railing systems that enhance safety while
                                            maintaining a premium modern look.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Steel Gate -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/steel.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('steel-gate') }}">
                                                Steel Gate
                                            </a>
                                        </h4>
                                        <p>Heavy-duty steel gates built with strength and precision to provide maximum
                                            security and long life.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Powder Coated Railing -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/powder.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('powder-coated-railing') }}">
                                                Powder Coated Railing
                                            </a>
                                        </h4>
                                        <p>Weather-resistant powder coated railings with smooth finish and long-lasting
                                            color durability.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Duplex Staircase -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/duplex.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('duplex-staircase') }}">
                                                Duplex Staircase
                                            </a>
                                        </h4>
                                        <p>Custom-designed duplex staircases combining steel structure and elegant
                                            finishing for modern interiors.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Iron & Steel Interior Work -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-service-2-item mb-35">
                                    <div class="it-service-2-thumb">
                                        <img class="w-100" src="{{asset('assets/img/custom/interior.webp')}}" alt="">
                                    </div>
                                    <div class="it-service-2-content">
                                        <h4 class="it-service-2-title">
                                            <a class="border-line-black" href="{{ route('iron-steel-interior-work') }}">
                                                Iron & Steel Interior Work
                                            </a>
                                        </h4>
                                        <p>Premium iron and steel interior fabrication work tailored for residential and
                                            commercial projects.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- service-area-end -->

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
                        <img src="{{asset('assets/img/custom/bg-5-1.webp')}}" alt="Bharat Steel Fabricator Work">
                    </div>
                </div>
                <!-- choose-area-end -->

                <!-- testimonial-area-start -->
                <div class="it-testimonial-2-area z-index-1 black-bg pt-130 pb-130">
                    <img class="it-service-shape-1" src="{{asset('assets/img/shape/testimonial-3-1.png')}}" alt="">
                    <div class="container">
                        <div class="row align-items-end">

                            <div class="col-xl-4 col-lg-5 order-1 order-lg-0">
                                <div class="it-testimonial-2-thumb">
                                    <img src="{{asset('assets/img/custom/testimonial-3-1.webp')}}"
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

                <!-- cta-area-start -->
                <div class="it-cta-area it-cta-overlay" data-background="{{asset('assets/img/custom/slider1.jpg')}}">
                    <img class="it-cta-shape-1 d-none d-xxl-block" src="{{asset('assets/img/shape/cta.png')}}" alt="">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-8 col-md-7">
                                <div class="it-cta-contant">
                                    <div class="it-section-title-box mb-20">
                                        <span class="it-section-subtitle">Contact with Us</span>
                                        <h4 class="it-section-title it-split-text it-split-in-right text-white mb-0">
                                            Your Trusted Partner <br> for Premium Gates, Railings & Staircases</h4>
                                    </div>
                                    <!-- <p class="mb-0">We specialize in high-quality fabrication and installation of Aluminium Profile Gates, Steel Gates, Glass Railings, Powder Coated Railings, Duplex Staircases, and custom Iron & Steel Interior Work across Faridabad, Delhi NCR, and nearby areas. Get in touch for durable, modern, and perfectly customized solutions.</p> -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-5">
                                <div class="it-cta-btn text-md-end">
                                    <a href="{{ route('contact') }}" class="it-btn-orange">
                                        <span>
                                            <span class="text-1">Get a Free Quote</span>
                                            <span class="text-2">Get a Free Quote</span>
                                        </span>
                                        <i>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                    fill="white" />
                                            </svg>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                    fill="white" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cta-area-end -->

                <!-- blog-area-start -->
                <div class="it-blog-area it-blog-style-2 it-blog-style-3 it-blog-style-4 pt-125 pb-100">
                    <div class="container">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="it-section-title-box text-center mb-65">
                                    <span class="it-section-subtitle">Our Blog</span>
                                    <h4 class="it-section-title mb-0">
                                        Latest Updates & Fabrication Insights
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-35">

                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-blog-item gray-bg mb-30">
                                    <div class="it-blog-thumb w-100">
                                        <a href="blog-details.html">
                                            <img class="w-100" src="{{asset('assets/img/blog/blog-5-1.jpg')}}" alt="">
                                            <img class="w-100" src="{{asset('assets/img/blog/blog-5-1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="it-blog-content">
                                        <div class="it-blog-meta mb-20">
                                            <span>January 10, 2026</span>
                                            <span>Fabrication Guide</span>
                                        </div>
                                        <h4 class="it-blog-title mb-20">
                                            <a class="border-line-black" href="blog-details.html">
                                                Benefits of Aluminium Profile Gates for Modern Homes
                                            </a>
                                        </h4>
                                        <p>
                                            Discover why aluminium profile gates are becoming the top choice
                                            for durability, low maintenance, and stylish entrance design.
                                        </p>
                                        <a class="it-blog-btn border-line-orange" href="blog-details.html">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>

                        
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="it-blog-btn text-center mt-30">
                                    <a href="{{ route('blogs') }}" class="it-btn-orange">
                                        <span>
                                            <span class="text-1">View All Blogs</span>
                                            <span class="text-2">View All Blogs</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- blog-area-end -->

                <!-- contact-area-start -->
                <div class="it-contact-area it-contact-style-3 z-index-1 pt-125 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="it-contact-left">
                                    <div class="it-section-title-box mb-10">
                                        <span class="it-section-subtitle">Contact us</span>
                                        <h4 class="it-section-title mb-0">Contact Information</h4>
                                    </div>
                                    <div class="it-contact-list-wrap">
                                        <div class="it-contact-list-box d-flex align-items-center mb-30">
                                            <div class="it-contact-list-icon">
                                                <span>
                                                    <svg width="45" height="45" viewBox="0 0 45 45"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.3759 1.87409C24.3759 1.37681 24.5735 0.899894 24.9251 0.548263C25.2768 0.196632 25.7537 -0.000911936 26.2509 -0.000911936C31.2221 0.00454731 35.988 1.98174 39.5032 5.49687C43.0183 9.01199 44.9955 13.778 45.0009 18.7491C45.0009 19.2464 44.8034 19.7233 44.4518 20.0749C44.1001 20.4265 43.6232 20.6241 43.1259 20.6241C42.6287 20.6241 42.1517 20.4265 41.8001 20.0749C41.4485 19.7233 41.2509 19.2464 41.2509 18.7491C41.2465 14.7722 39.6647 10.9595 36.8526 8.14742C34.0405 5.33534 30.2278 3.75355 26.2509 3.74909C25.7537 3.74909 25.2768 3.55154 24.9251 3.19991C24.5735 2.84828 24.3759 2.37137 24.3759 1.87409ZM26.2509 11.2491C28.2401 11.2491 30.1477 12.0393 31.5542 13.4458C32.9608 14.8523 33.7509 16.76 33.7509 18.7491C33.7509 19.2464 33.9485 19.7233 34.3001 20.0749C34.6517 20.4265 35.1287 20.6241 35.6259 20.6241C36.1232 20.6241 36.6001 20.4265 36.9518 20.0749C37.3034 19.7233 37.5009 19.2464 37.5009 18.7491C37.498 15.7663 36.3117 12.9066 34.2026 10.7974C32.0935 8.68829 29.2337 7.50207 26.2509 7.49909C25.7537 7.49909 25.2768 7.69663 24.9251 8.04826C24.5735 8.39989 24.3759 8.87681 24.3759 9.37409C24.3759 9.87137 24.5735 10.3483 24.9251 10.6999C25.2768 11.0515 25.7537 11.2491 26.2509 11.2491ZM43.3003 31.3847C44.3869 32.4743 44.9971 33.9503 44.9971 35.4891C44.9971 37.0279 44.3869 38.5039 43.3003 39.5935L41.5941 41.5603C26.2378 56.2622 -11.1309 18.9028 3.34407 3.49784L5.50032 1.62284C6.59114 0.566608 8.05395 -0.0176949 9.57227 -0.00365911C11.0906 0.0103767 12.5423 0.621623 13.6134 1.69784C13.6716 1.75596 17.1459 6.26909 17.1459 6.26909C18.1769 7.35214 18.7508 8.79083 18.7483 10.2861C18.7459 11.7814 18.1673 13.2182 17.1328 14.2978L14.9616 17.0278C16.1632 19.9474 17.9298 22.6008 20.16 24.8355C22.3902 27.0702 25.04 28.8422 27.9572 30.0497L30.7041 27.8653C31.7839 26.8317 33.2204 26.2538 34.7153 26.2517C36.2101 26.2496 37.6482 26.8235 38.7309 27.8541C38.7309 27.8541 43.2422 31.3266 43.3003 31.3847ZM40.7203 34.111C40.7203 34.111 36.2334 30.6591 36.1753 30.601C35.789 30.218 35.2671 30.0031 34.7231 30.0031C34.1792 30.0031 33.6572 30.218 33.2709 30.601C33.2203 30.6535 29.4384 33.6666 29.4384 33.6666C29.1836 33.8694 28.8803 34.0024 28.5584 34.0524C28.2365 34.1024 27.9072 34.0676 27.6028 33.9516C23.8237 32.5445 20.3911 30.3417 17.5375 27.4924C14.6839 24.643 12.4761 21.2136 11.0634 17.4366C10.9382 17.1281 10.8974 16.7918 10.9451 16.4622C10.9929 16.1327 11.1276 15.8218 11.3353 15.5616C11.3353 15.5616 14.3484 11.7778 14.3991 11.7291C14.7821 11.3428 14.997 10.8209 14.997 10.2769C14.997 9.73293 14.7821 9.21099 14.3991 8.82471C14.3409 8.76846 10.8891 4.27784 10.8891 4.27784C10.497 3.92629 9.98533 3.73802 9.45891 3.75161C8.9325 3.76521 8.43122 3.97964 8.05782 4.35096L5.90157 6.22596C-4.67718 18.946 27.7059 49.5328 38.8528 38.9991L40.5609 37.0303C40.9612 36.6596 41.2016 36.1477 41.2314 35.6029C41.2611 35.0581 41.0779 34.5231 40.7203 34.111Z"
                                                            fill="#E03B3B" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="it-contact-list">
                                                <span>Call Center</span>
                                                <p>Make a call for your general enquiries.</p>
                                                <a class="border-line-orange" href="tel:8750287795">(+91) 8750287795
                                                    <br>(+91) 9711727223</a>
                                            </div>
                                        </div>
                                        <div class="it-contact-list-box d-flex align-items-center mb-30">
                                            <div class="it-contact-list-icon">
                                                <span>
                                                    <svg width="45" height="43" viewBox="0 0 45 43"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M35.625 0.875H9.375C6.88951 0.877977 4.50667 1.86665 2.74916 3.62416C0.991654 5.38167 0.00297723 7.76451 0 10.25L0 32.75C0.00297723 35.2355 0.991654 37.6183 2.74916 39.3758C4.50667 41.1333 6.88951 42.122 9.375 42.125H35.625C38.1105 42.122 40.4933 41.1333 42.2508 39.3758C44.0083 37.6183 44.997 35.2355 45 32.75V10.25C44.997 7.76451 44.0083 5.38167 42.2508 3.62416C40.4933 1.86665 38.1105 0.877977 35.625 0.875ZM9.375 4.625H35.625C36.7477 4.62721 37.8441 4.96534 38.773 5.59588C39.702 6.22642 40.421 7.12053 40.8375 8.16313L26.4788 22.5237C25.4221 23.5762 23.9914 24.1671 22.5 24.1671C21.0086 24.1671 19.5779 23.5762 18.5212 22.5237L4.1625 8.16313C4.57903 7.12053 5.29803 6.22642 6.22696 5.59588C7.1559 4.96534 8.25228 4.62721 9.375 4.625ZM35.625 38.375H9.375C7.88316 38.375 6.45242 37.7824 5.39752 36.7275C4.34263 35.6726 3.75 34.2418 3.75 32.75V13.0625L15.87 25.175C17.6299 26.9305 20.0142 27.9163 22.5 27.9163C24.9858 27.9163 27.3701 26.9305 29.13 25.175L41.25 13.0625V32.75C41.25 34.2418 40.6574 35.6726 39.6025 36.7275C38.5476 37.7824 37.1168 38.375 35.625 38.375Z"
                                                            fill="#E03B3B" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="it-contact-list">
                                                <span>Email</span>
                                                <p>Send your mail for general enquiries.</p>
                                                <a class="border-line-orange"
                                                    href="mailto:hasan727223@gmail.com">hasan727223@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="it-contact-list-box d-flex align-items-center">
                                            <div class="it-contact-list-icon">
                                                <span>
                                                    <svg width="45" height="45" viewBox="0 0 45 45"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2290_8666)">
                                                            <path
                                                                d="M22.5 11.25C21.0166 11.25 19.5666 11.6899 18.3332 12.514C17.0999 13.3381 16.1386 14.5094 15.5709 15.8799C15.0032 17.2503 14.8547 18.7583 15.1441 20.2132C15.4335 21.668 16.1478 23.0044 17.1967 24.0533C18.2456 25.1022 19.582 25.8165 21.0368 26.1059C22.4917 26.3953 23.9997 26.2468 25.3701 25.6791C26.7406 25.1114 27.9119 24.1501 28.736 22.9168C29.5601 21.6834 30 20.2334 30 18.75C30 16.7609 29.2098 14.8532 27.8033 13.4467C26.3968 12.0402 24.4891 11.25 22.5 11.25ZM22.5 22.5C21.7583 22.5 21.0333 22.2801 20.4166 21.868C19.7999 21.456 19.3193 20.8703 19.0355 20.1851C18.7516 19.4998 18.6774 18.7458 18.8221 18.0184C18.9668 17.291 19.3239 16.6228 19.8484 16.0984C20.3728 15.5739 21.041 15.2167 21.7684 15.0721C22.4958 14.9274 23.2498 15.0016 23.9351 15.2855C24.6203 15.5693 25.206 16.0499 25.618 16.6666C26.0301 17.2833 26.25 18.0083 26.25 18.75C26.25 19.7446 25.8549 20.6984 25.1517 21.4017C24.4484 22.1049 23.4946 22.5 22.5 22.5Z"
                                                                fill="#E03B3B" />
                                                            <path
                                                                d="M22.5016 44.9998C20.9227 45.0079 19.3649 44.6376 17.9586 43.9199C16.5522 43.2023 15.3383 42.1581 14.4184 40.8748C7.27281 31.018 3.64844 23.608 3.64844 18.8492C3.64844 13.8491 5.63474 9.05369 9.17039 5.51805C12.706 1.9824 17.5014 -0.00390625 22.5016 -0.00390625C27.5017 -0.00390625 32.2971 1.9824 35.8327 5.51805C39.3684 9.05369 41.3547 13.8491 41.3547 18.8492C41.3547 23.608 37.7303 31.018 30.5847 40.8748C29.6648 42.1581 28.4509 43.2023 27.0446 43.9199C25.6382 44.6376 24.0804 45.0079 22.5016 44.9998ZM22.5016 4.08922C18.5873 4.09369 14.8347 5.65058 12.0669 8.41835C9.29918 11.1861 7.74228 14.9388 7.73781 18.853C7.73781 22.6217 11.2872 29.5911 17.7297 38.4767C18.2766 39.2301 18.9941 39.8432 19.8235 40.266C20.6529 40.6888 21.5706 40.9092 22.5016 40.9092C23.4325 40.9092 24.3502 40.6888 25.1796 40.266C26.009 39.8432 26.7265 39.2301 27.2734 38.4767C33.7159 29.5911 37.2653 22.6217 37.2653 18.853C37.2608 14.9388 35.704 11.1861 32.9362 8.41835C30.1684 5.65058 26.4158 4.09369 22.5016 4.08922Z"
                                                                fill="#E03B3B" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2290_8666">
                                                                <rect width="45" height="45" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="it-contact-list">
                                                <span>Our Location</span>
                                                <p>View location for staying guests.</p>
                                                <a class="border-line-orange">1170 Utsav Vihar Kanjhawala road Rohini
                                                    Sector 39 Delhi 110081</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="it-contact-form-box z-index-1 p-relative">
                                    <h4 class="it-contact-form-title mb-10">Get in touch!</h4>
                                    <p>With a passion for precision and a commitment to quality we have been <br>
                                        empowering industries and driving progress. We specialize</p>
                                    <form action="#">
                                        <div class="it-contact-input-wrap">
                                            <div class="row gx-30">
                                                <div class="col-sm-6 mb-35">
                                                    <div class="it-contact-input-box">
                                                        <input type="text" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-35">
                                                    <div class="it-contact-input-box">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-35">
                                                    <div class="it-contact-input-box">
                                                        <input type="text" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-35">
                                                    <div class="it-contact-input-box">
                                                        <div class="postbox__select">
                                                            <select>
                                                                <option>Subject*</option>
                                                                <option>Aluminium profile Gate</option>
                                                                <option>Glass Railing</option>
                                                                <option>Steel Gate</option>
                                                                <option>Powder Coated Railing</option>
                                                                <option>Duplex Staircase</option>
                                                                <option>Iron and Steel Interior Work</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-60">
                                                    <div class="it-contact-input-box">
                                                        <textarea placeholder="Project Description*"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="it-contact-btn">
                                                <button type="submit" class="it-btn-orange">
                                                    <span>
                                                        <span class="text-1">Submit now</span>
                                                        <span class="text-2">Submit now</span>
                                                    </span>
                                                    <i>
                                                        <svg width="12" height="13" viewBox="0 0 12 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg width="12" height="13" viewBox="0 0 12 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"
                                                                fill="white" />
                                                        </svg>
                                                    </i>

                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <img class="it-contact-shape-1" src="{{asset('assets/img/shape/contact-1-1.png')}}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact-area-end -->
            </main>
             @include('frontend.includes.footer')

        </div>
    </div>
    

@endsection
