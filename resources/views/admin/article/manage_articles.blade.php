@extends('component.layout_admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/manage_articles.css') }}">
    <div class="container">
        <header>
            <h1>ระบบจัดการบทความ</h1>
        </header>

        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" id="search" placeholder="ค้นหาบทความ...">
                <span class="search-icon">🔍</span>
            </div>
            <div class="filter-box">
                <label for="articles-filter">กรองตามแท็ก:</label>
                <select name="filter" id="articles-filter">
                    <option value="all">ทั้งหมด</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag['id'] }}">{{ $tag->translation->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <section class="articles-section">
            <div class="table-container">
                <div class="table-header">
                    <h2>จัดการบทความ</h2>
                    <div>
                        <a id="add-tag" class="btn btn-outline-success border">เพิ่มtag</a>
                        <a id="add-article" class="btn btn-primary" href="/admin/manage_article/create">เพิ่มบทความ</a>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">ID</th>
                                <th class="col-3">รูปภาพ</th>
                                <th class="col-5">ชื่อหัวข้อ</th>
                                <th class="col-1">แท็ก</th>
                                <th class="col-2">การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody id="articles-list">
                            @foreach ($articles as $article)
                                <tr data-id="{{ $article['id'] }}">
                                    <td class="d-none" label="available-languages">
                                        @foreach ($article['availablelang'] as $lang)
                                            <span>{{ $lang }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <span class="article-id">{{ $article['id'] }}</span>
                                    </td>
                                    <td>
                                        <img src="{{ $article->translation->coverPageImg }}" alt="" width="100%">
                                    </td>
                                    <td>
                                        <a href="/article/detail?news_id={{ $article->id }}">{{ $article->translation->title }}</a>
                                    </td>
                                    <td>
                                        @foreach ($article['tags'] as $tag)
                                            <span class="tag">{{ $tag['name'] }}</span>
                                        @endforeach
                                    </td>
                                    <td class="actions-buttons">
                                        <button 
                                            class="btn btn-success" btn-type="add-lang">เพิ่มภาษา</ิ>
                                        <button
                                            class="btn btn-edit" btn-type="edit">แก้ไข</button>
                                        <button class="btn btn-danger delete-article"
                                            data-id="{{ $article['id'] }}">ลบ</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($articles->isEmpty())
                    <div id="no-results" class="no-results">ไม่พบบทความที่ตรงกับการค้นหา</div>
                @endif

                {{ $articles->links('vendor.pagination.default') }}
            </div>
        </section>
    </div>

    <script src="{{ asset('js/admin/article/manage_articles.js') }}" type="module"></script>
    <script>

    </script>
@endsection
