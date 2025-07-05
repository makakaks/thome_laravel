@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/addon_service/cal_electric.css">

    <div class="content-box">
        <div class="content-box">
            <div class="check-container" data-aos="zoom-in-down">
                <div class="checklist-section">
                    <div class="checklist-item">
                        <h2><i class="fas fa-list-alt"></i> {{ __('checklist.title') }}</h2>
                        <p><i class="fas fa-info-circle"></i> {{ __('checklist.desc1') }}</p>
                        <p><i class="fas fa-check-circle"></i> {{ __('checklist.desc2') }}</p>
                        <p><i class="fas fa-home"></i> {{ __('checklist.desc3') }}</p>
                        <ul class="checklist">
                            <li><i class="fas fa-file-alt"></i> {{ __('checklist.list_project') }}</li>
                            <li><i class="fas fa-bath"></i> {{ __('checklist.list_sanitary') }}</li>
                            <li><i class="fas fa-warehouse"></i> {{ __('checklist.list_roofing') }}</li>
                            <li><i class="fas fa-bolt"></i> {{ __('checklist.list_electric') }}</li>
                        </ul>
                        <div class="logo-container">
                            <img src="https://img.freepik.com/free-vector/two-tiny-men-preparing-move-flat-illustration_74855-18782.jpg?t=st=1740374071~exp=1740377671~hmac=d1c2f0c5a4d7d9c369ba799943d8894453b60118c73f95bcb1cdc7c29d092f8a&w=1380"
                                alt="House Logo">
                        </div>
                    </div>
                    <iframe class="check-iframe" src="https://checklist-form.thomeinspector.com/"></iframe>
                </div>
            </div>
        </div>

        <!-- check-details start -->
        <div class="hero" data-aos="fade-up">
            <h1>{{ __('checklist.why_title') }}</h1>
            <p>{{ __('checklist.why_desc') }}</p>
            <a href="https://checklist-form.thomeinspector.com/" class="btn">{{ __('checklist.cta_btn') }}</a>
        </div>

        <!-- Content Section -->
        <section id="details" class="content">
            <div class="container">
                <h2 data-aos="fade-right">{{ __('checklist.section_title') }}</h2>
                <div class="grid">
                    <div class="card" data-aos="zoom-in">
                        <h3>{{ __('checklist.card1_title') }}</h3>
                        <p>{{ __('checklist.card1_desc') }}</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="100">
                        <h3>{{ __('checklist.card2_title') }}</h3>
                        <p>{{ __('checklist.card2_desc') }}</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="200">
                        <h3>{{ __('checklist.card3_title') }}</h3>
                        <p>{{ __('checklist.card3_desc') }}</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="300">
                        <h3>{{ __('checklist.card4_title') }}</h3>
                        <p>{{ __('checklist.card4_desc') }}</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="400">
                        <h3>{{ __('checklist.card5_title') }}</h3>
                        <p>{{ __('checklist.card5_desc') }}</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="500">
                        <h3>{{ __('checklist.card6_title') }}</h3>
                        <p>{{ __('checklist.card6_desc') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta" data-aos="fade-up">
            <div class="container">
                <h2>{{ __('checklist.cta_title') }}</h2>
                <a href="https://checklist-form.thomeinspector.com/" class="btn">{{ __('checklist.cta_btn') }}</a>
            </div>
        </section>
    </div>
@endsection
