@extends('component.layout_admin')

@section('content')
    <link rel="stylesheet" href="/css/admin/manage_articles.css">
    <link rel="stylesheet" href="/css/admin/manage_faq.css">
    <link rel="stylesheet" href="/css/component/tag_selector.css">
    <div class="container">
        <header>
            <h1>คำถามที่พบบ่อย</h1>
        </header>

        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" id="search" placeholder="ค้นหาคำถาม...">
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
                    <h2>จัดการคำถามที่พบบ่อย</h2>
                    <div>
                        <a id="add-tag" class="btn btn-outline-success border">เพิ่มtag</a>
                        <button id="add-article" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">เพิ่มคำถามที่พบบ่อย</button>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="col-2">ชื่อคำถาม</th>
                                <th class="col-6">คำตอบ</th>
                                <th class="col-1">แท็ก</th>
                                <th class="col-1">การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody id="articles-list">
                            <!-- จะถูกเติมด้วย JavaScript -->
                            @foreach ($faqs as $faq)
                                <tr class="d-none">
                                    {{-- <div class="d-none" 
                                        data-id="{{$faq['id']}}"
                                        data-question="{{$faq['question']}}"
                                        data-question-eng="{{$faq['question_eng']}}"
                                        data-answer="{{$faq['answer']}}"
                                        data-answer-eng="{{$faq['answer_eng']}}"
                                        data-tags="{{ implode(',', $faq['tags']) }}"    
                                    ></div> --}}
                                    <td>
                                        {{ $faq['id'] }}
                                    </td>
                                    <td>
                                        {{ $faq['question'] }}
                                    </td>
                                    <td>
                                        {{ $faq['answer'] }}
                                    </td>
                                    <td>
                                        @foreach ($faq['tags'] as $tag)
                                            <span class="tag">{{ $tag }}</span>
                                        @endforeach
                                    </td>
                                    <td class="actions-buttons">
                                        <button class="btn btn-edit" data-id="{{ $faq['id'] }}" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            แก้ไข
                                        </button>
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">สร้างคำถามใหม่</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="tag-selector-container" data-mode="create"></div>
                        <div class="form-group mb-3">
                            <label for="question">คำถาม</label>
                            <input type="text" id="question" class="form-control mb-2" placeholder="กรุณากรอกคำถาม">
                            <label for="question">Question</label>
                            <input type="text" id="question-eng" class="form-control"
                                placeholder="Please enter the question">
                        </div>
                        <div class="form-group">
                            <label for="ans">คำตอบ</label>
                            <textarea type="text" id="ans" class="form-control mb-2" placeholder="กรุณากรอกคำตอบ"></textarea>
                            <label for="ans">Answer</label>
                            <textarea type="text" id="ans-eng" class="form-control" placeholder="Please enter the answer"></textarea>
                        </div>
                        <div>
                            <label for="tags">tags</label>
                            <div class="tag-input-container" id="tagContainer">
                                <input type="text" class="tag-input" id="tagInput"
                                    placeholder="Search or select tags...">
                                <div class="options-container" id="optionsContainer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">สร้าง</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="/js/admin/faq/manage_faq.js" type="module"></script>
@endsection
