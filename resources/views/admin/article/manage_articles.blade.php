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
            </select>
        </div>
    </div>
    
    <section class="articles-section">
        <div class="table-container">
            <div class="table-header">
                <h2>จัดการบทความ</h2>
                <a id="add-article" class="btn btn-primary" href="/admin/manage_article/create">เพิ่มบทความ</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อหัวข้อ</th>
                            <th>แท็ก</th>
                            <th>การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody id="articles-list">
                        @foreach ($articles as $article)
                            <tr class="d-none">
                                <td>
                                    {{ $article['id'] }}
                                </td>
                                <td>
                                    {{ $article['title'] }}
                                </td>
                                <td>
                                    @foreach ($article['tags'] as $tag)
                                        <span class="tag">{{ $tag }}</span>
                                    @endforeach
                                </td>
                                <td class="actions-buttons">
                                    <a href="/admin/manage_article/edit/{{ $article['id'] }}" class="btn btn-edit">แก้ไข</a>
                                    <button class="btn btn-danger delete-article" data-id="{{ $article['id'] }}">ลบ</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="no-results" class="no-results hidden">ไม่พบบทความที่ตรงกับการค้นหา</div>
            <div class="pagination-container">
                <button id="prev-page" class="btn btn-secondary">ก่อนหน้า</button>
                <span id="page-info">หน้า <input type="text" id="page-num" value=1></รบ></span>
                <button id="next-page" class="btn btn-secondary">ถัดไป</button>

            </div>
        </div>
    </section>
</div>

<script src="{{asset('js/admin/manage_articles.js')}}" type="module"></script>

@endsection


