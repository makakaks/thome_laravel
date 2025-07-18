{{-- filepath: c:\xampp\htdocs\example-app\resources\views\home\addon_service\app_inspector.blade.php --}}
@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/addon_service/app_inspector.css">

    <div class="container-newapp aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
        <div class="header-newapp">
            <h1>{{ __('app_inspector.newapp-title') }}</h1>
            <h2>{{ __('app_inspector.newapp-header') }}</h2>
            <p>{{ __('app_inspector.newapp-description') }}</p>
        </div>
        <div class="content-newapp">
            <div class="app-preview">
                <img src="/img/app1.png" alt="App Preview 1">
                <img src="/img/app2.png" alt="App Preview 2">
            </div>
            <div class="main-btn">
                <button>
                    <a href="https://liff.line.me/2005695449-36Xrdj94">{{ __('app_inspector.newapp-button') }}</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <header class="hero" data-aos="fade-up">
        <h1>{{ __('app_inspector.hero-title') }}</h1>
        <p>{{ __('app_inspector.hero-description') }}</p>
        <a href="https://liff.line.me/2005695449-36Xrdj94" class="btn">{{ __('app_inspector.hero-button') }}</a>
    </header>

    <!-- Feature Section -->
    <section class="features">
        <div class="container">
            <h2 data-aos="fade-right">{{ __('app_inspector.features-title') }}</h2>
            <div class="grid">
                <div class="card" data-aos="zoom-in">
                    <h3>{{ __('app_inspector.feature1-title') }}</h3>
                    <p>{{ __('app_inspector.feature1-description') }}</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <h3>{{ __('app_inspector.feature2-title') }}</h3>
                    <p>{{ __('app_inspector.feature2-description') }}</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="200">
                    <h3>{{ __('app_inspector.feature3-title') }}</h3>
                    <p>{{ __('app_inspector.feature3-description') }}</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="300">
                    <h3>{{ __('app_inspector.feature4-title') }}</h3>
                    <p>{{ __('app_inspector.feature4-description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="categories">
        <div class="container-categories">
            <div class="category-header">
                <h2 data-aos="fade-right">{{ __('app_inspector.categories-title') }}</h2>
            </div>
            <ul class="category-list">
                <li>{{ __('app_inspector.category1') }}</li>
                <li>{{ __('app_inspector.category2') }}</li>
                <li>{{ __('app_inspector.category3') }}</li>
                <li>{{ __('app_inspector.category4') }}</li>
                <li>{{ __('app_inspector.category5') }}</li>
            </ul>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta" data-aos="fade-up">
        <div class="container">
            <h2>{{ __('app_inspector.cta-title') }}</h2>
            <a href="https://liff.line.me/2005695449-36Xrdj94" class="btn">{{ __('app_inspector.cta-button') }}</a>
        </div>
    </section>
@endsection
