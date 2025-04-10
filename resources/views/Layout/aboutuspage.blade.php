@extends('Layout.GeneralLayout')

@section('title')
    About us
@endsection

@section('aboutus')
    active
@endsection

@section('content')z
    <section style="color: #454537; padding-top: 10rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-gray">Who We Are</h2>
                    <p class="lead text-gray">We are a dedicated team committed to delivering innovative solutions that drive success.
                        Our
                        mission is
                        to create impactful and sustainable results for our clients and community.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/solo-leveling.jpg') }}" class="img-fluid rounded" alt="Team Work">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>

        <section>
            <div class="text-center" style="color: white">
                <h2 class="fw-bold">Our Mission & Vision</h2>
                <p class="lead mx-auto" style="max-width: 800px;">
                    We aim to inspire innovation, drive progress, and create value through cutting-edge solutions and
                    exceptional service.
                </p>
            </div>
        </section>

        <section>
            <div class="container mt-5" style="color: white">
                <h2 class="text-center fw-bold mb-4">Meet Our Team</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('image/SungJinwoo.png') }}" class="card-img-top" alt="CEO">
                            <div class="card-body">
                                <h5 class="card-title">Sung Jinwoo</h5>
                                <p class="card-text">Guild Master</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('image/YooJinho.png') }}" class="card-img-top" alt="Manager">
                            <div class="card-body">
                                <h5 class="card-title">Yoo Jinho</h5>
                                <p class="card-text">Vice-Guild Master</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('image/YooSoohyun.png') }}" class="card-img-top" alt="Developer">
                            <div class="card-body">
                                <h5 class="card-title">Yoo Soohyun</h5>
                                <p class="card-text">Guild Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection
