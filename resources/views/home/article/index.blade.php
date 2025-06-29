@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/article/index.css">
    <div class="content-box">
        <div class="content-box">

            <div class="review-page" data-aos="fade-up">
                <h1>บทความ</h1>
                <p>
                    ความรู้เกี่ยวกับ งานตรวจรับบ้านเเละคอนโดก่อนโอนกรรมสิทธิ์sadasdasasd
                </p>

                <!-- Categories Section -->
                <div class="search-part d-flex justify-content-center mb-3">
                    <form action="/article" method="GET" style="width: 60%;" class="d-flex justify-content-center gap-2">
                        <input type="search" class="form-control flex-grow-1" placeholder="ค้นหาบทความ..."
                            aria-label="ค้นหาบทความ" value="{{ request()->query('search') }}" name="search" id="search"
                            style="min-width: 200px;">
                        <button type="submit" style="width: fit-content;"
                            class="form-control px-3 py-2 btn btn-outline-info">ค้นหา</button>
                    </form>
                </div>
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
                    {{-- @for ($index = 1; $index <= 5; $index += 1) --}}
                    @if ($articles->isEmpty())
                        <div class="no-articles">
                            <p>ไม่มีบทความในหมวดหมู่นี้</p>
                        </div>
                    @else
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
                    @endif
                    {{-- @endfor --}}
                </div>
                {{ $articles->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.all').addEventListener('click', function(event) {
            event.preventDefault();
            localtion.href = '/article';
        });
    </script>
@endsection
