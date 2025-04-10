@extends('Layout.GeneralLayout')

@section('title')
    Profile
@endsection

@section('dashboard')
    active
@endsection

<style>
    .profile {
        background: rgba(0, 0, 0, 0.5) url("{{ asset('image/background.png') }}");
        background-repeat: round;
    }
</style>

@section('content')
    <section id="home" class="intro-section">
        <div class="container" style="color: #454537;">
            <div class="row align-items-center text-white">
                <!-- START THE CONTENT FOR THE INTRO  -->
                <div class="col-md-6 intros text-start">
                    <h1 class="display-2">
                        <span class="display-2--intro">Hey!, I'm Zyrell Naron</span>
                        <span class="display-2--description lh-base">
                            passionate about technology, software development, and innovative IT solutions.
                        </span>
                    </h1>
                </div>
                <!-- START THE CONTENT FOR THE VIDEO -->
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                        <img src="{{ asset('image/intro-section-illustration.png') }}" alt="video illutration"
                            class="img-fluid">
                        <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                            <span>
                                <i class="fas fa-play-circle"></i>
                            </span>
                            <span class="border-animation border-animation--border-1"></span>
                            <span class="border-animation border-animation--border-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>



    <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-gray">Our Services</h1>
                <div class="heading-line mb-1"></div>
            </div>
            <!-- START THE DESCRIPTION CONTENT  -->
            <div class="row pt-2 pb-2 mt-0 mb-3">
                <div class="col-md-6 border-right">
                    <div class="bg-white p-3">
                        <h2 class="fw-bold text-capitalize text-center text-gray">
                            From Initial Design to Deployment—Anywhere, Anytime
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-4 text-start">
                        <p class="fw-light text-gray">
                            We provide end-to-end IT solutions tailored to your needs, ensuring seamless integration,
                            performance, and scalability. Our expertise covers everything from conceptual design and
                            development to deployment and ongoing maintenance. Whether you're looking for custom software, a
                            robust online presence, or secure cloud solutions, we've got you covered.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE CONTENT FOR THE SERVICES  -->
        <div class="container">
            <!-- START THE MARKETING CONTENT  -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-paper-plane"></div>
                        <h3 class="display-3--title mt-1">Marketing</h3>
                        <p class="lh-lg text-gray">
                            <b>From Initial Design to Deployment—Anywhere, Anytime</b>
                            <br>
                            Our marketing services focus on data-driven strategies, SEO optimization, content creation, and
                            social media management. We help businesses enhance their online presence, reach their target
                            audience effectively, and generate more leads through innovative digital campaigns.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary text-gray">Learn more
                            <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="{{ asset('image/services/service-1.png') }}" alt="marketing illustration"
                            class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- START THE WEB DEVELOPMENT CONTENT  -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                    <div class="services__pic">
                        <img src="{{ asset('image/services/service-2.png') }}" alt="web development illustration"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-code"></div>
                        <h3 class="display-3--title mt-1">Web Development</h3>
                        <p class="lh-lg text-gray">
                            <b>Building Modern, Scalable, and User-Friendly Websites</b>
                            <br>
                            Our web development services include front-end and back-end development, responsive design,
                            e-commerce solutions, and web applications. We ensure that your website is not only visually
                            appealing but also optimized for performance, security, and scalability.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary text-gray">Learn more
                            <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- START THE CLOUD HOSTING CONTENT  -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-cloud-upload-alt"></div>
                        <h3 class="display-3--title mt-1">Cloud Hosting</h3>
                        <p class="lh-lg text-gray">
                            <b>Secure, Reliable, and Scalable Cloud Solutions</b>
                            <br>
                            Our cloud hosting services provide high-performance, secure, and cost-effective solutions for
                            businesses of all sizes. Whether you need managed cloud hosting, virtual private servers, or
                            dedicated hosting, we ensure maximum uptime and data security.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary text-gray">Learn more
                            <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="{{ asset('image/services/service-3.png') }}" alt="cloud hosting illustration"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>

</style>
