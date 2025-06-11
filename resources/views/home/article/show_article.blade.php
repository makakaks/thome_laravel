@extends('component.layout')

@section('content')
    <link rel="stylesheet" href="/css/home/article/test_article.css">
    <main>
        <div class="art-header">
            <div class="art-track-area mb-4">
                <a href="/">หน้าหลัก</a> >
                <a href="/articles">บทความ</a> >
                <a href="/articles/{{$article->slug }}">{{ $article['translation']['title'] }}</a>
            </div>
            {{-- <h1>{{$locale}}</h1> --}}
            <h1 class="art-name">{{ $article['translation']['title'] }}</h1>
            <div class="art-name-below">
                <div class="art-tag-container">
                    @foreach ($article->tags as $tag)
                        <div class="art-tag">
                            {{ $tag['name'] }}
                        </div>
                    @endforeach
                </div>
                <div class="social-share" style="display: flex; gap: 4px;">
                    <a class="facebook" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/2048px-2023_Facebook_icon.svg.png"
                            alt="">
                    </a>
                    <a class="twitter" target="_blank">
                        <svg role="img" viewBox="0 0 24 24" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>X</title>
                            <path
                                d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
                                fill="#fff"></path>
                        </svg>
                    </a>
                    <a class="line" target="_blank">
                        <svg role="img" viewBox="0 0 24 24" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>LINE</title>
                            <path
                                d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"
                                fill="#fff"></path>
                        </svg>
                    </a>
                    <a class="copy-link">
                        <img src="https://cdn-icons-png.flaticon.com/512/25/25702.png" alt="">
                    </a>
                </div>
            </div>


            <div class="art-cover-img">
                <img src="{{ $article['translation']['coverPageImg'] }}" alt="">
                <div class="art-date">
                    {{ \Carbon\Carbon::parse($article['created_at'])->locale(app()->getLocale())->isoFormat('D MMM YYYY h:mm') }}
                        {{-- $article['created_at']->format('d M Y H:i') --}}
                    {{-- 14 พ.ค. 2568 13:44 น --}}
                    {{-- {{print_r($article, true)}} --}}
                </div>
            </div>
        </div>
        <div class="art-body">
            <div class="art-content">
                {!! $article['translation']['content'] !!}
            </div>
            <div class="art-promote">
                <div class="card">
                    <h5 class="card-title">บทความยอดนิยม</h5>
                    <div class="card-content">
                        <div class="rec-article">
                            <img src="/img/articles_releted.jpg" alt="บทความยอดนิยม 1" class="rec-article-image">
                            <div>
                                <h4 class="rec-article-title">
                                    <a href="#">ซื้อบ้านใหม่ ติดเครื่องทำน้ำอุ่นยังไง</a>
                                </h4>
                                <p class="rec-article-date">10 พฤษภาคม 2025</p>
                            </div>
                        </div>
                        <div class="rec-article">
                            <img src="/img/ev-charger.jpg" alt="บทความยอดนิยม 1" class="rec-article-image">
                            <div>
                                <h4 class="rec-article-title">
                                    <a href="#">สิ่งที่ต้องรู้เกี่ยวกับ EV Charger</a>
                                </h4>
                                <p class="rec-article-date">10 พฤษภาคม 2025</p>
                            </div>
                        </div>

                        <button class="btn btn-outline btn-sm btn-full btn-rec">ดูบทความทั้งหมด</button>
                    </div>
                </div>

                <!-- รีวิวจากลูกค้า -->
                <div class="card">
                    <h5 class="card-title">รีวิวจากลูกค้า</h5>
                    <div class="card-content">
                        <div class="review">
                            <p class="review-text">
                                "ทีมงานและเครื่องมือพร้อม ตรวจสอบละเอียด เจ้าหน้าที่ให้คำแนะนำ ดีมากค่ะ"
                            </p>
                            <p class="review-author">- คุณลียะกิตติพร</p>
                        </div>
                        <div class="review">
                            <p class="review-text">
                                "ดีใจที่เลือกใช้บริการของ ต ตรวจบ้านครับ ให้คำแนะนำดีมาก ตรวจละเอียด
                                อุปกรณ์ในการตรวจครบครับ 🙂"
                            </p>
                            <p class="review-author">- คุณ Chaiyapond</p>
                        </div>
                        <button class="btn btn-outline btn-sm btn-full btn-review">ดูรีวิวทั้งหมด</button>
                    </div>
                </div>

                <!-- ติดต่อเรา -->
                <div class="card">
                    <h5 class="card-title">ติดต่อเรา</h5>
                    <div class="card-content">
                        <div class="contact-item">
                            <svg class="icon contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span class="contact-text">02-454-2043, 082-045-6155</span>
                        </div>
                        <div class="contact-item">
                            <svg class="icon contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="contact-text">Info@thomeinspector.com</span>
                        </div>
                        <button class="btn btn-full mt-2 btn-contact btn-outline-primary">ติดต่อเรา</button>
                    </div>
                </div>
            </div>
            <div class="art-share-tail">
                <h3>Share Article</h3>
                <div class="social-share" style="display: flex;">
                    <a class="facebook" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/2048px-2023_Facebook_icon.svg.png"
                            alt="">
                    </a>
                    <a class="twitter" target="_blank">
                        <svg role="img" viewBox="0 0 24 24" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>X</title>
                            <path
                                d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
                                fill="#fff"></path>
                        </svg>
                    </a>
                    <a class="line" target="_blank">
                        <svg role="img" viewBox="0 0 24 24" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>LINE</title>
                            <path
                                d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"
                                fill="#fff"></path>
                        </svg>
                    </a>
                    <a class="copy-link">
                        <img src="https://cdn-icons-png.flaticon.com/512/25/25702.png" alt="">
                    </a>
                </div>
            </div>
        </div>



        <section class="carousel-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h2>บทความอื่น</h2>
            <div class="video-carousel aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <button class="prev">❮</button>
                <div class="video-wrapper" id="videoSlider">
                    <!-- <div class="video-item">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/M-nLhplc-mc?si=cXWxjwDwR4Tk84WZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div> -->
                    <a class="content-carousel-item video-item" href="/articles_view3">
                        <img src="https://www.thomeinspector.com/assets/upload/newsThumbnail/b764dd4c5037789dd95efac895cfbac14aa2a041.jpg"
                            alt="Content 1">
                        <div class="content-carousel-info">
                            <h3>เราต่างจากที่อื่นอย่างไร What Makes US Different?<i
                                    class="fa-solid fa-circle-arrow-right"></i></h3>
                        </div>
                    </a>
                    <a class="content-carousel-item video-item" href="/articles_view3">
                        <img src="https://www.thomeinspector.com/assets/upload/newsThumbnail/b764dd4c5037789dd95efac895cfbac14aa2a041.jpg"
                            alt="Content 1">
                        <div class="content-carousel-info">
                            <h3>เราต่างจากที่อื่นอย่างไร What Makes US Different?<i
                                    class="fa-solid fa-circle-arrow-right"></i></h3>
                        </div>
                    </a>
                    <a class="content-carousel-item video-item" href="/articles_view3">
                        <img src="https://www.thomeinspector.com/assets/upload/newsThumbnail/b764dd4c5037789dd95efac895cfbac14aa2a041.jpg"
                            alt="Content 1">
                        <div class="content-carousel-info">
                            <h3>เราต่างจากที่อื่นอย่างไร What Makes US Different?<i
                                    class="fa-solid fa-circle-arrow-right"></i></h3>
                        </div>
                    </a>
                    <a class="content-carousel-item video-item" href="/articles_view3">
                        <img src="https://www.thomeinspector.com/assets/upload/newsThumbnail/b764dd4c5037789dd95efac895cfbac14aa2a041.jpg"
                            alt="Content 1">
                        <div class="content-carousel-info">
                            <h3>เราต่างจากที่อื่นอย่างไร What Makes US Different?<i
                                    class="fa-solid fa-circle-arrow-right"></i></h3>
                        </div>
                    </a>
                </div>
                <button class="next">❯</button>
            </div>

        </section>
    </main>
    <script src='/js/home/article/test_article.js'></script>
@endsection
