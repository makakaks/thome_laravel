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
                        <a class="category-btn" href="/article">All</a>
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
                        @for ($index = 0; $index < 5; $index++)
                            @foreach ($articles as $article)
                                <div class="new-card">
                                    <a href="/article/detail?news_id={{ $article->id }}"><img
                                            src="{{ $article->translation->coverPageImg }}" alt="" loading="lazy"></a>
                                    <a href="/article/detail?news_id={{ $article->id }}"
                                        class="new-card-title">{{ $article->translation->title }}</a>
                                    <div class="new-card-tags">
                                        @foreach ($article->tags as $tag)
                                            <a href="/article?tag={{ $tag->name }}">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                    <div>
                                        <span
                                            class="upload-date">{{ \Carbon\Carbon::parse($article->created_at)->locale(app()->getlocale())->isoFormat('D-MM-YYYY') }}
                                        </span>
                                    </div>
                                    {{-- <span
                                    class="upload-date">{{ \Carbon\Carbon::parse($article->created_at)->locale(app()->getlocale())->isoFormat('D-MM-YYYY') }}
                                    |
                                    @foreach ($article->tags as $tag)
                                        {{ $tag->name }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </span> --}}
                                </div>
                            @endforeach
                        @endfor

                        {{ $articles->links('vendor.pagination.default') }}
                    @endif
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
            localtion.href = '/article';
        });
    </script>
@endsection
