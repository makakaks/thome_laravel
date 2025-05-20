@extends('component.layout_admin')

@section('content')


@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="/HOMESPECTOR/img/favicon1.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <!-- <link rel="stylesheet" href="/HOMESPECTOR/CSS/addon/Hconstruction.css"> -->
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    
    <link rel="stylesheet" href="/HOMESPECTOR/CSS/admin/manage_articles.css">
    
    <title>Header Design</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/HOMESPECTOR/Homepage/component/admin_nav.php'; ?>
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
        
        <section class="articles-section">
            <div class="table-container">
                <div class="table-header">
                    <h2>จัดการรีวิวบ้าน</h2>
                    <a id="add-article" class="btn btn-primary" href="/HOMESPECTOR/Homepage/admin/create_review_home.php">เพิ่มรีวิวบ้าน</a>
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
                            
                            <!-- จะถูกเติมด้วย JavaScript -->
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

    <script src="/HOMESPECTOR/JS/admin/manage_articles.js" type="module"></script>
</body>
</html>

