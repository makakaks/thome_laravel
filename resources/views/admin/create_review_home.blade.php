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
    
    <link rel="stylesheet" href="/HOMESPECTOR/CSS/admin/create_articles.css">
    
    <title>Header Design</title>
</head>

<body>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="input-group article-input">
            <div>
                <label for="thai-title">ชื่อบทความ</label> 
                <input type="text" id="thai-title" class="articleName thai form-control" placeholder="กรอกชื่อบทความภาษาไทย">
            </div>
            <div>
                <label for="eng-title">Article name</label> 
                <input type="text" id="eng-title" class="articleName eng form-control" placeholder="Enter article name in English">
            </div>
            <div class="cover-image-input">
                <label for="thai-cover">รูปภาพหน้าปก</label> 
                <input type="file" id="thai-cover" accept="image/*" class="articleCoverImage thai form-control">
            </div>
            <div class="cover-image-input">
                <label for="eng-cover">Cover page</label> 
                <input type="file" id="eng-cover" accept="image/*" class="articleCoverImage eng form-control">
            </div>
            <div class="">
                <label for="หมวด">เลือกโครงการ</label>
                <div class="tag-input-container" id="tagContainer">
                    <input type="text" class="tag-input" id="tagInput" placeholder="Search or select tags...">
                    <div class="options-container" id="optionsContainer"></div>
                </div>
            </div>
        </div>
        
        <div class="carousel-inner" role="listbox">
            <div class="item active thai">
                <h2>ภาษาไทย</h2>
                <div id="summernote1"></div>
            </div>
            <div class="item eng">
                <h2>ภาษาอังกฤษ</h2>
                <div id="summernote2"></div>
            </div>
        </div>

        <div class="button-container">
            <button id="preview" class="preview btn btn-outline-primary">Preview</button>
            
            <div class="navigation-buttons">
                <button class="active btn btn-primary" id="btn-prev">ย้อนกลับ</button>
                <button data-target="#carousel-example-generic" data-slide-to="1" class="btn btn-primary" id="btn-next">ถัดไป</button>
                <button id="submit" class="btn btn-success">บันทึก</button>
            </div>
        </div>
    </div>

    <div id="previewModal" class="preview-modal">
        <div class="preview-modal-content">
            <div class="preview-modal-header">
                <h2>ตัวอย่างบทความ</h2>
                <!-- <button id="closePreview"></button> -->
                <img src="https://www.svgrepo.com/show/499592/close-x.svg" alt="" id="closePreview" class="closePreview" >
            </div>
            

            <hr>
            <div id="previewContent">
                <h3 class="preview-title">บทความ</h3>
                <img src="/placeholder.svg" alt="" class="preview-cover-img">
                <div class="preview-body">

                </div>
            </div>
            <button class="btn btn-primary closePreview">ปิด</button>
        </div>
    </div>

    <script>

        $(document).ready(function () {
            var resize75Btn = function (context) {
                var ui = $.summernote.ui;

                var button = ui.button({
                    contents: '<span class="note-fontsize-10">75%</span>',
                    tooltip: 'Resize to 75%',
                    click: function () {
                        context.invoke('editor.resize', '0.75');
                    }
                });

                return button.render(); // return button as jquery object
            }
            
            const settings = {
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['fontname', ['fontname', 'fontsize', 'color', 'backcolor']],
                    ['para', ['ul', 'ol', 'hr', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'help']],
                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resize75', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['paragraph']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                    ]
                },
                fontNames: ['FCSound', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Lucida Sans Unicode', 'Tahoma', 'Times New Roman', 'Trebuchet MS', 'Verdana'],
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28', '36', '48', '64', '82'],
                fontNamesIgnoreCheck: ['FCSound'],
                buttons: {
                    resize75: resize75Btn
                }
            }

            $('#summernote1').summernote(settings);
            

            $('#summernote2').summernote(settings);
        });
    </script>
    <script src="/HOMESPECTOR/JS/admin/create_articles.JS" type="module"></script>
</body>

</html>

