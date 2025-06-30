@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/review_home/index.css">

    <!-- Main Content -->
    <div class="review-page" data-aos="fade-up">
        <h1>รีวิวบ้าน</h1>
        <p>
            พาทัวร์บ้านรูปแบบใหม่ ไม่ซ้ำใคร ที่แรกและที่เดียว เพราะเราพาดูงานระบบของบ้านในโครงการต่างๆ
            ไม่ว่าจะเป็นงานสถาปัตย์ ระบบไฟฟ้า ระบบสุขาภิบาล หรืองานหลังคา ซึ่งไม่มีที่ไหนทำมาก่อน
        </p>

        <!-- Categories Section -->
        <div class="search-part d-flex justify-content-center mb-3">
            <form action="/review" method="GET" style="width: 60%;" class="d-flex justify-content-center gap-2">
                <input type="search" class="form-control flex-grow-1" placeholder="ค้นหาบทความ..." aria-label="ค้นหาบทความ"
                    value="{{ request()->query('search') }}" name="search" id="search" style="min-width: 200px;">
                <button type="submit" style="width: fit-content;"
                    class="form-control px-3 py-2 btn btn-outline-info">ค้นหา</button>
            </form>
        </div>

        <div class="categories mb-3" data-aos="fade-up" data-aos-duration="1500">
            {{-- <button class="category-btn active" data-category="all">All</button> --}}
            @if (request()->query('project') == '' || request()->query('project') == null)
                <a class="category-btn active all" href="#">All</a>
            @else
                <a class="category-btn" href="/review">All</a>
            @endif

            @foreach ($projects as $project)
                @if (request()->query('project') == $project->translation)
                    <a class="category-btn active"
                        href="?project={{ $project->translation }}">{{ $project->translation }}</a>
                @else
                    <a class="category-btn" href="?project={{ $project->translation }}">{{ $project->translation }}</a>
                @endif
            @endforeach
        </div>

        <!-- Review Cards -->
        <div class="review-cards">
            @if ($houses->isEmpty())
                <div class="no-articles">
                    <p>ไม่มีรีวิวบ้านในโครงการนี้</p>
                </div>
            @else
                @foreach ($houses as $house)
                    <a href="/review/detail?news_id={{ $house->id }}" class="card new-card"
                        data-category="{{ $house->project }}">
                        <img src="{{ $house->translation->coverPageImg }}" alt="House Review 1">
                        <p>{{ $house->translation->title }}</p>
                    </a>
                @endforeach
            @endif
        </div>
        {{ $houses->links('vendor.pagination.default') }}
    </div>





    {{-- <script src="/HOMESPECTOR/JS/Toggle_Navbar.js"></script>
    <script src="/HOMESPECTOR/JS/filter.js"></script>
    <script src="/HOMESPECTOR/JS/dropdown.js"></script>
    <script src="/HOMESPECTOR/JS/footer.js"></script>
    <script src="/HOMESPECTOR/JS/footer.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="/HOMESPECTOR/JS/search_ham.js"></script> --}}
@endsection
