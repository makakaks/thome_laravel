@extends('component.layout_admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/manage_articles.css') }}">
    <div class="container">
        <header>
            <h1>ระบบจัดการรีวิวบ้าน</h1>
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

        {{-- <section class="articles-section d-flex flex-wrap gap-3">
            @foreach ($houses as $house)
                <a class="card" style="width: 15.7rem;" href="#">
                    <img src="/img/after_review/bugaan-bg.jpg" class="card-img-top" alt="...">
                    <div class="card-title text-center p-2 fs-6">
                        <div>
                            {{$house['name']}}
                        </div>
                        <div>
                            <button class="btn btn-edit" onclick="edit({{$house['id']}})">แก้ไข</button>
                            <button class="btn btn-danger">ลบ</button>
                        </div>
                    </div>
                </a>
            @endforeach
        </section> --}}
        <section class="articles-section">
            <div class="table-container">
                <div class="table-header">
                    <h2>จัดการรีวิวบ้าน</h2>
                    <button id="add-article" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">เพิ่มรีวิว</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-3">รูปภาพ</th>
                                <th class="col-5">ชื่อโครงการ</th>
                                <th class="col-2">tags</th>
                                <th class="col-1">การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody id="articles-list">
                            @foreach ($houses as $house)
                                <tr class="d-none">
                                    <td class="col-3">
                                        <img src="/img/after_review/bugaan-bg.jpg" class="img" width="100%" alt="...">
                                    </td>
                                    <td>
                                        {{ $house['name'] }}
                                    </td>
                                    <td>
                                        <span class="tag">{{ $house['tag']}}</span>
                                    </td>
                                    <td class="actions-buttons">
                                        <a class="btn btn-edit" href="#">แก้ไข</a>
                                        <a class="btn btn-danger" href="#">ลบ</a>
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
    {{-- <script>
        function edit(id){
            window.location.href = "/admin/manage_review_home/edit/{{$house['id']}}"
        } --}}
    </script>

    <script src="/js/admin/manage_review_home.js" type="module"></script>
@endsection

</body>

</html>
