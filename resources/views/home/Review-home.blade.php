@extends('component.layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">


    <link rel="stylesheet" href="/css/home/review_home.css">

    <!-- Main Content -->
    <div class="review-page" data-aos="fade-up">
        <h1>รีวิวบ้าน</h1>
        <p>
            พาทัวร์บ้านรูปแบบใหม่ ไม่ซ้ำใคร ที่แรกและที่เดียว เพราะเราพาดูงานระบบของบ้านในโครงการต่างๆ<br>
            ไม่ว่าจะเป็นงานสถาปัตย์ ระบบไฟฟ้า ระบบสุขาภิบาล หรืองานหลังคา ซึ่งไม่มีที่ไหนทำมาก่อน
        </p>

        <!-- Categories Section -->
        <div class="categories" data-aos="fade-up" data-aos-duration="1500">
            <button class="category-btn active" data-category="all">All</button>
            <button class="category-btn" data-category="Land and House">Land and House</button>
            <button class="category-btn" data-category="Sansiri">Sansiri</button>
            <button class="category-btn" data-category="SC Asset">SC Asset</button>
            <button class="category-btn" data-category="Ap Thai">Ap Thai</button>
            <button class="category-btn" data-category="Property Profect">Property Profect</button>
            <button class="category-btn" data-category="MQDC">MQDC</button>
            <button class="category-btn" data-category="QHouse">QHouse</button>
            <button class="category-btn" data-category="Others">Others</button>
        </div>

        <div class="review-cards" id="review-container">
            <!-- cards will be inserted dynamically -->
        </div>
        {{-- <script>
            fetch('/HOMESPECTOR/backend/panel/api_reviews.php')
                .then(res => res.json())
                .then(data => {
                    const container = document.querySelector(".review-cards");
                    renderCards(data);

                    document.querySelectorAll('.category-btn').forEach(btn => {
                        btn.addEventListener('click', () => {
                            const cat = btn.dataset.category;
                            document.querySelectorAll('.category-btn').forEach(b => b.classList.remove(
                                'active'));
                            btn.classList.add('active');

                            const filtered = cat === 'all' ? data : data.filter(r => r.category === cat);
                            container.innerHTML = '';
                            renderCards(filtered);
                        });
                    });

                    function renderCards(reviews) {
                        reviews.reverse().forEach(review => {
                            const card = document.createElement('a');
                            card.className = "card";
                            card.setAttribute("data-category", review.category || "Others");
                            card.href = review.url;
                            card.innerHTML = `
                                        <img src="${review.thumbnail}" alt="${review.headline}">
                                        <p>${review.headline}</p>
                                    `;
                            container.appendChild(card);
                        });
                    }
                });
        </script> --}}

        <!-- Review Cards -->
        <div class="review-cards">
            <a href="/HOMESPECTOR/Homepage/after_review_home.html" class="card" data-category="Land and House">
                <img src="/img/after_review/bugaan-bg.jpg" alt="House Review 1">
                <p>บูก้าน กรุงเทพกรีฑา</p>
            </a>
            <a href="/Homepage/after_review_home1.html" class="card" data-category="Sansiri">
                <img src="/img/after_review/vie-bg.jpg" alt="House Review 2">
                <p>Vie ทางด่วนรามอินทรา-วงแหวน</p>
            </a>
            <a href="/Homepage/after_review_home2.html" class="card" data-category="SC Asset">
                <img src="/img/after_review/GrandBangkok-bg.jpg" alt="House Review 3">
                <p>Grand Bangkok Boulevard ยาร์ด บางนา</p>
            </a>
            <a href="/Homepage/after_review_home3.html" class="card" data-category="Land and House">
                <img src="/img/after_review/sarangsiri-bg.png" alt="House Review 4">
                <p>สราญสิริ แกรนเด พุทธมณฑล สาย 3 </p>
            </a>
            <a href="/Homepage/after_review_home4.html" class="card" data-category="QHouse">
                <img src="/img/after_review/thecity-bg.jpg" alt="House Review 5">
                <p>The City จรัญฯ – ปิ่นเกล้า </p>
            </a>
            <a href="/Homepage/after_review_home5.html" class="card" data-category="Ap Thai">
                <img src="/img/after_review/sevres.jpg" alt="House Review 6">
                <p>คอนนาเซอร์ พัฒนาการ</p>
            </a>
            <a href="/Homepage/after_review_home6.html" class="card" data-category="Property Profect">
                <img src="/img/after_review/review-bg7.jpg" alt="House Review 7">
                <p>เศรษฐสิริ ราชพฤกษ์-สาย1 </p>
            </a>
            <a href="/Homepage/after_review_home7.html" class="card" data-category="MQDC">
                <img src="/img/after_review/review-bg8.jpg" alt="House Review 8">
                <p>แกรนด์ บางกอก บูเลอวาร์ด แจ้งวัฒนะ-ราชพฤกษ์</p>
            </a>
            <a href="/Homepage/after_review_home8.html" class="card" data-category="Others">
                <img src="/img/after_review/review-bg9.jpg" alt="House Review 9">
                <p>บางกอก บูเลอวาร์ด ซิกเนเจอร์ แจ้งวัฒนะ-ราชพฤกษ์</p>
            </a>
        </div>
    </div>





            <script src="/HOMESPECTOR/JS/Toggle_Navbar.js"></script>
            <script src="/HOMESPECTOR/JS/filter.js"></script>
            <script src="/HOMESPECTOR/JS/dropdown.js"></script>
            <script src="/HOMESPECTOR/JS/footer.js"></script>
            <script src="/HOMESPECTOR/JS/footer.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
            <script src="/HOMESPECTOR/JS/search_ham.js"></script>
            <script>
                AOS.init();
            </script>

    @endsection
