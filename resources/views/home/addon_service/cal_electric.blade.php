@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/addon_service/cal_electric.css">
    <div class="cal-container" data-aos="zoom-in-down">
        <div class="cal">
            <div class="cal-item">
                <div>
                    <h2><i class="fas fa-calculator"></i> About the Calculator (เกี่ยวกับเครื่องคำนวณ)</h2>
                    <p><i class="fas fa-info-circle"></i> This calculator helps you estimate the cost of home
                        inspection services. (เครื่องคำนวณนี้ช่วยประมาณค่าบริการตรวจสอบบ้านของคุณ)</p>
                    <p><i class="fas fa-check-circle"></i> Simply enter the required details, and the system
                        will provide an instant estimate. (เพียงป้อนข้อมูลที่จำเป็น ระบบจะคำนวณราคาให้คุณทันที)
                    </p>
                    <p><i class="fas fa-phone"></i> If you have any questions, feel free to contact us.
                        (หากมีข้อสงสัย ติดต่อเราได้ทุกเมื่อ)</p>
                </div>
                <div class="logo-container">
                    <img src="https://img.freepik.com/free-vector/household-public-utilities-design-concept-illustrated-consumption-accounting-energetic-water-resources-isometric-vector-illustration_98292-9053.jpg?t=st=1738919465~exp=1738923065~hmac=e56ee21aff5e511ecc26ae700c498f651b595e534afce2935ef0b8959ced7d59&w=1060"
                        alt="House Logo">
                </div>
            </div>

            <!-- Right side iframe -->
            <iframe class="cal-iframe" src="https://requestform.thomeinspector.com/calc/"></iframe>
        </div>
    </div>

    <!-- cal-details strat -->
    <div class="hero" data-aos="fade-up">
        <h1>ทำไมต้องคำนวณขนาดเครื่องใช้ไฟฟ้าในบ้าน?</h1>
        <p>การคำนวณขนาดเครื่องใช้ไฟฟ้าในบ้านช่วยให้คุณจัดการพลังงานอย่างมีประสิทธิภาพและลดค่าไฟฟ้า</p>
        <a href="https://requestform.thomeinspector.com/calc/" class="btn">คำนวณค่าไฟตอนนี้</a>
    </div>

    <!-- Content Section -->
    <section id="details" class="content">
        <div class="container">
            <h2 data-aos="fade-right">💡 ทำไมการคำนวณขนาดเครื่องใช้ไฟฟ้าจึงสำคัญ?</h2>
            <p data-aos="fade-left">การใช้เครื่องใช้ไฟฟ้าโดยไม่คำนวณขนาดให้เหมาะสม อาจทำให้เกิดปัญหาหลายอย่าง
                เช่น ไฟฟ้าเกินโหลด ค่าไฟแพงขึ้น หรือแม้กระทั่งไฟฟ้าลัดวงจร</p>

            <div class="grid">
                <div class="card" data-aos="zoom-in">
                    <h3>🔌 ป้องกันไฟฟ้าเกินโหลด</h3>
                    <p>เครื่องใช้ไฟฟ้าที่มากเกินไปในวงจรเดียวกัน อาจทำให้ไฟดับหรือเกิดความร้อนสะสม</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <h3>⚡ ลดค่าไฟฟ้า</h3>
                    <p>เลือกเครื่องใช้ไฟฟ้าที่เหมาะสม ช่วยลดค่าไฟ และใช้พลังงานได้อย่างมีประสิทธิภาพ</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="200">
                    <h3>🏡 เพิ่มความปลอดภัยในบ้าน</h3>
                    <p>การคำนวณระบบไฟฟ้าที่ดีช่วยลดความเสี่ยงจากไฟฟ้าช็อต หรือไฟไหม้จากการใช้ไฟเกินกำลัง</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="300">
                    <h3>🔋 เลือกสายไฟและอุปกรณ์ที่เหมาะสม</h3>
                    <p>การใช้สายไฟและเบรกเกอร์ที่เหมาะสมช่วยให้ระบบไฟฟ้ามีเสถียรภาพและปลอดภัย</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="400">
                    <h3>🌍 ลดผลกระทบต่อสิ่งแวดล้อม</h3>
                    <p>การใช้ไฟฟ้าอย่างมีประสิทธิภาพช่วยลดการปล่อยก๊าซเรือนกระจกและลดภาระต่อโลก</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="500">
                    <h3>💡 ใช้พลังงานหมุนเวียนได้ดีขึ้น</h3>
                    <p>หากคุณติดตั้งโซลาร์เซลล์หรือพลังงานหมุนเวียน การคำนวณพลังงานช่วยให้ใช้งานได้สูงสุด</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta" data-aos="fade-up">
        <div class="container">
            <h2>เริ่มต้นวางแผนระบบไฟฟ้าภายในบ้านของคุณ!</h2>
            <a href="https://page.line.me/t.home?openQrModal=true" class="btn">ติดต่อผู้เชี่ยวชาญ</a>
        </div>
    </section>
@endsection
