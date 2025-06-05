@extends('component.layout')

@section('content')
    <link rel="stylesheet" href="/css/home/article/index.css">
    <div class="content-box">
        <div class="content-box">

            <div class="review-page" data-aos="fade-up">
                <h1>บทความ</h1>
                <p>
                    ความรู้เกี่ยวกับ งานตรวจรับบ้านเเละคอนโดก่อนโอนกรรมสิทธิ์
                </p>

                <!-- Categories Section -->
                <div class="categories" data-aos="fade-up" data-aos-duration="1500">
                    @if (request()->query('tag') == '' || request()->query('tag') == null)
                        <a class="category-btn active all">All</a>
                    @else
                        <a class="category-btn" href="/articles">All</a>
                    @endif
                    @foreach ($tags as $tag)
                        @if (request()->query('tag') == $tag->translation->name)
                            <a class="category-btn active"
                                href="?tag={{ $tag->translation->name }}">{{ $tag->translation->name }}</a>
                        @else
                            <a class="category-btn"
                                href="?tag={{ $tag->translation->name }}">{{ $tag->translation->name }}</a>
                        @endif
                    @endforeach
                </div>

                <!-- Review Cards -->
                <div class="review-cards" id="review-cards">
                    @if ($articles->isEmpty())
                        <div class="no-articles">
                            <p>ไม่มีบทความในหมวดหมู่นี้</p>
                        </div>
                    @else
                        @foreach ($articles as $article)
                            <a href="/articles/{{ $article->slug }}" class="card" data-category="Roof">
                                <img src="{{ $article->translation->coverPageImg }}" alt="House Review 1">
                                <p> {{ $article->translation->title }} </p>
                                <span
                                    class="upload-date">{{ \Carbon\Carbon::parse($article->created_at)->locale(app()->getlocale())->isoFormat('D-MM-YYYY') }}
                                    |
                                    @foreach ($article->tags as $tag)
                                        {{ $tag->name }}
                                        @if (!$loop->last), @endif
                                    @endforeach
                                </span>
                            </a>
                        @endforeach
                        {{ $articles->links('vendor.pagination.default') }}
                    @endif
                    {{-- <a href="/Homepage/articles_view.html" class="card" data-category="Roof">
                        <img src="/img/article1.1.jpg" alt="House Review 1">
                        <p>สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน </p>
                        <span class="upload-date">2025-02-10 | Roof</span>
                    </a>
                    <a href="/Homepage/articles_view2.html" class="card" data-category="Roof">
                        <img src="/img/releted2.jpg" alt="House Review 2">
                        <p>เราต่างจากที่อื่นอย่างไร What Makes US Different? </p>
                        <span class="upload-date">2025-02-08 | Roof</span>
                    </a>
                    <a href="/Homepage/articles_view3.html" class="card" data-category="Electrical System">
                        <img src="/img/articles_releted.jpg" alt="House Review 3">
                        <p>ซื้อบ้านใหม่ ติดเครื่องทำน้ำอุ่นยังไง </p>
                        <span class="upload-date">2025-02-07 | Electrical System</span>
                    </a>
                    <a href="/Homepage/articles_view4.html" class="card" data-category="Electrical System">
                        <img src="/img/ebook.jpg" alt="House Review 4">
                        <p>แจกฟรี!!! ebook ความรู้ระบบไฟฟ้าภายในบ้าน </p>
                        <span class="upload-date">2024-12-07 | Electrical System</span>
                    </a>
                    <a href="/Homepage/articles_view5.html" class="card" data-category="Electrical System">
                        <img src="/img/review5.1.jpg" alt="House Review 5">
                        <p>ทำอย่างไร เมื่อสายดินหลุดออกจากหลักดิน ? </p>
                        <span class="upload-date">2024-12-06 | Electrical System</span>
                    </a>
                    <a href="/Homepage/articles_view6.html" class="card" data-category="Plumbing System">
                        <img src="/img/ev-charger.jpg" alt="House Review 6">
                        <p>สิ่งที่ต้องรู้เกี่ยวกับ EV Charger </p>
                        <span class="upload-date">2024-12-05 | Plumbing System</span>
                    </a>
                    <a href="/Homepage/articles_view7.html" class="card" data-category="Plumbing System">
                        <img src="/img/tou.jpg" alt="House Review 7">
                        <p>ความแตกต่างระหว่างมิเตอร์ปกติกับมิเตอร์ TOU</p>
                        <span class="upload-date">2024-12-03 | Plumbing System</span>
                    </a>
                    <a href="/Homepage/articles_view8.html" class="card" data-category="HVAC System">
                        <img src="/img/review8.1.jpg" alt="House Review 8">
                        <p>การตรวจสอบสาย LAN </p>
                        <span class="upload-date">2024-12-02 | HVAC System</span>
                    </a>
                    <a href="/Homepage/articles_view9.html" class="card" data-category="HVAC System">
                        <img src="/img/ac.jpg" alt="House Review 9">
                        <p>การตรวจเช็คเครื่องปรับอากาศ </p>
                        <span class="upload-date">2025-02-01 | HVAC System</span>
                    </a>
                    <a href="/Homepage/articles_view10.html" class="card" data-category="Roof">
                        <img src="/img/articles10.png" alt="House Review 10">
                        <p>Grand Bangkok Boulevard Yard Bangna </p>
                        <span class="upload-date">2025-01-01 | Roof</span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="/JS/filter.js"></script>
    <script src="/JS/article.js"></script>
    <script src="/JS/upload_date.js"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categoryButtons = document.querySelectorAll(".category-btn");
            const articles = document.querySelectorAll(".review-cards .card");

            categoryButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const selectedCategory = this.getAttribute("data-category");

                    // Remove "active" class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove("active"));
                    // Add "active" class to clicked button
                    this.classList.add("active");

                    // Show or hide articles based on selected category
                    articles.forEach(article => {
                        const articleCategory = article.getAttribute("data-category");
                        if (selectedCategory === "all" || articleCategory ===
                            selectedCategory) {
                            article.style.display = "block"; // Show matching category
                        } else {
                            article.style.display = "none"; // Hide non-matching category
                        }
                    });
                });
            });
        });
    </script>
    <script>
        const jj = @json($articles);
        console.log(jj.data);
        document.querySelector('.all').addEventListener('click', function(event) {
            event.preventDefault();
            localtion.href = '/articles';
        });
    </script>
@endsection
