@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/contact/joinwithus.css">

    <div class="join-us-container">
        <div class="join-us-content">
            <h1 data-translate="join-title">JOIN US !</h1>
            <p data-translate="join-description">
                Join us to be a part of the professional consulting team, providing extraordinary
                level of expertise on services and solutions of the ever growing industry.
            </p>
            <a href="mailto:admin@thomeinspector.com" class="btn" data-translate="join-button">Join Us</a>
        </div>

        <div class="join-us-image">
            <img src="img/joinwithus2.png" alt="Join Us Illustration">
        </div>
    </div>
    <div class="apply-job aos-init" data-aos="fade-up">
        <h1>We're Hiring!</h1>
        <p>Join our team and grow your career with us. Check out our latest job openings below</p>

        <div class="job-container aos-init" data-aos="fade-up-right">
            <div class="job-listing">
                <h2>Admin</h2>
                <p><strong>Location:</strong> Office</p>
                <p><strong>Requirements:</strong> Experience with office management, scheduling, and communication skills.
                </p>
                <a class="apply-btn" href="/job1">Apply Now</a>
            </div>

            <div class="job-listing aos-init" data-aos="fade-up">
                <h2>Civil Engineer</h2>
                <p><strong>Location:</strong> On-site </p>
                <p><strong>Requirements:</strong> Experience with structural analysis, CAD software, and construction
                    management.</p>
                <a class="apply-btn" href="/job2">Apply Now</a>
            </div>

            <!-- <div class="job-listing" data-aos="fade-up-left">
                                <h2>Intern Student</h2>
                                <p><strong>Location:</strong> On-site</p>
                                <p><strong>Requirements:</strong> Currently enrolled in a relevant degree program, eager to learn, and strong analytical skills.</p>
                                <a href="job3.html" class="apply-btn">Apply Now</a>
                            </div>  -->
        </div>
    </div>
@endsection
