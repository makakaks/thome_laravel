@extends('component.layout_admin')

@section('import', 'bootstrap')

@section('content')
    <link rel="stylesheet" href="/css/admin/create_articles.css">
    <link rel="stylesheet" href="/css/component/tag_selector.css">
    <div class="container">
        <h2 class="text-center">สร้างบทความ</h2>
        <form id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="input-group article-input">
                {{-- @if (request()->url() == 'xxx')
                    {}
                @endif --}}
                <div>
                    <label for="thai-title">ชื่อบทความ</label>
                    <input type="text" id="thai-title" class="articleName thai form-control"
                        placeholder="กรอกชื่อบทความภาษาไทย" required>
                </div>
                <div>
                    <label for="eng-title">ชื่อบทความ(อังกฤษ)</label>
                    <input type="text" id="eng-title" class="articleName eng form-control"
                        placeholder="Enter article name in English" required>
                </div>
                <div class="cover-image-input">
                    <label for="thai-cover">รูปภาพหน้าปก</label>
                    <input type="file" id="thai-cover" accept="image/*" class="articleCoverImage thai form-control"
                        required>
                </div>
                <div class="cover-image-input">
                    <label for="eng-cover">รูปภาพหน้าปก(อังกฤษ)</label>
                    <input type="file" id="eng-cover" accept="image/*" class="articleCoverImage eng form-control"
                        requried>
                </div>
                <div id="tag-selector-container"></div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active thai">
                    <h2>เนื้อหาภาษาไทย</h2>
                    <div id="summernote1"></div>
                </div>
                <div class="item eng">
                    <h2>เนื้อหาภาษาอังกฤษ</h2>
                    <div id="summernote2"></div>
                </div>
            </div>

            <div class="button-container">
                <a class="active btn btn-primary" id="btn-prev">ย้อนกลับ</a>

                <div class="navigation-buttons">
                    <button data-target="#carousel-example-generic" data-slide-to="1" class="btn btn-primary"
                        id="btn-next">ถัดไป</button>
                    <a id="submit" class="btn btn-success">บันทึก</a>
                </div>
            </div>
        </form>

        <div class="tag-fetch hidden">
            @foreach ($tag as $t)
                <div data-id="{{$t['id']}}">
                    @foreach ($t['translations'] as $singleTag)
                        <span data-locale="{{$singleTag['locale']}}">{{$singleTag['name']}}</span>
                    @endforeach
                </div>
            @endforeach
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
                    },
                }

                $('#summernote1').summernote(settings);


                $('#summernote2').summernote(settings);
            });
        </script>
    </div>
    {{-- <script src="/js/component/tag_selector.js"></script> --}}
    <script src="/js/admin/article/create_articles.js" type="module"></script>
@endsection
