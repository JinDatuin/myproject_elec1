@extends('Layout.GeneralLayout')

@section('title')
    Contact us
@endsection

@section('contactus')
    active
@endsection

@section('content')
    <div class="main-container">
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg border-0 rounded">

                        <section class="text-center my-1" style="color: #454537;">
                            <h2 class="text-gray">Get in Touch</h2>
                            <p class="text-gray">We'd love to hear from you! Reach out to us for any inquiries.</p>
                        </section>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label" style="color: #454537;">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label" style="color: #454537;">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label" style="color: #454537;">Message</label>
                                    <textarea class="form-control" id="message" rows="4"
                                        placeholder="Write your message here..." required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center text-muted">
                            <small>We will get back to you within 24-48 hours.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
