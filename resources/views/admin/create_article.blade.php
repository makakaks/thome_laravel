@extends('component.layout_admin')

@section('import', 'bootstrap')

@section('content')
    <div class="container">
        <link rel="stylesheet" href="/css/admin/create_articles.css">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="input-group article-input">
                <div>
                    <label for="thai-title">ชื่อบทความ</label>
                    <input type="text" id="thai-title" class="articleName thai form-control"
                        placeholder="กรอกชื่อบทความภาษาไทย">
                </div>
                <div>
                    <label for="eng-title">Article name</label>
                    <input type="text" id="eng-title" class="articleName eng form-control"
                        placeholder="Enter article name in English">
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
                    <label for="หมวด">เลือกหมวด</label>
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
                <button class="active btn btn-primary" id="btn-prev">ย้อนกลับ</button>

                <div class="navigation-buttons">
                    <button data-target="#carousel-example-generic" data-slide-to="1" class="btn btn-primary"
                        id="btn-next">ถัดไป</button>
                    <button id="submit" class="btn btn-success">บันทึก</button>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                var resize75Btn = function(context) {
                    var ui = $.summernote.ui;

                    var button = ui.button({
                        contents: '<span class="note-fontsize-10">75%</span>',
                        tooltip: 'Resize to 75%',
                        click: function() {
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
                    fontNames: ['FCSound', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact',
                        'Lucida Sans Unicode', 'Tahoma', 'Times New Roman', 'Trebuchet MS', 'Verdana'
                    ],
                    fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28', '36',
                        '48', '64', '82'
                    ],
                    fontNamesIgnoreCheck: ['FCSound'],
                    buttons: {
                        resize75: resize75Btn
                    }
                }

                $('#summernote1').summernote(settings);


                $('#summernote2').summernote(settings);
            });
        </script>
    </div>

    <script src="/js/admin/create_articles.js" type="module"></script>
@endsection
