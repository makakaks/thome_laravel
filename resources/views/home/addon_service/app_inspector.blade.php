@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/addon_service/app_inspector.css">

    <div class="container-newapp aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
        <div class="header-newapp">
            <h1>New</h1>
            <h2>Application ตรวจบ้านด้วยตัวเอง</h2>
            <p>ตรวจบ้านด้วยตัวเอง พร้อมออกรายงานในตัว ตรวจไม่เป็นก็มีคลิปสอนให้ภายในแอป</p>
        </div>
        <div class="content-newapp">
            <div class="app-preview">
                <img src="/img/app1.png" alt="App Preview 1">
                <img src="/img/app2.png" alt="App Preview 2">
            </div>
            <div class="main-btn">
                <button>
                    <a href="https://liff.line.me/2005695449-36Xrdj94">ใช้งานฟรี!</a>
                </button>
            </div>
        </div>
    </div>


    <!-- Hero Section -->
    <header class="hero" data-aos="fade-up">
        <h1>ต.ตรวจบ้าน - บริการตรวจสอบบ้าน</h1>
        <p>แพลตฟอร์มที่ช่วยเจ้าของบ้านและผู้ซื้อบ้านตรวจสอบคุณภาพบ้านก่อนซื้อ</p>
        <a href="https://liff.line.me/2005695449-36Xrdj94" class="btn">เข้าใช้งานแอป</a>
    </header>

    <!-- Feature Section -->
    <section class="features">
        <div class="container">
            <h2 data-aos="fade-right">📌 คุณสมบัติเด่นของแอป</h2>
            <div class="grid">
                <div class="card" data-aos="zoom-in">
                    <h3>🛠️ ระบบตรวจสอบบ้าน</h3>
                    <p>สามารถเพิ่มข้อบกพร่องที่พบ เช่น หลังคารั่ว, ผนังแตกร้าว และระบบไฟฟ้ามีปัญหา</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <h3>📑 รายงานการตรวจสอบ</h3>
                    <p>สามารถสร้างรายงานสรุปปัญหา และแยกหมวดหมู่เพื่อให้เข้าใจง่าย</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="200">
                    <h3>📊 สรุปรายการปัญหา</h3>
                    <p>ดูตารางข้อบกพร่อง พร้อมสถานะการแก้ไข “แก้แล้ว” หรือ “รอแก้ไข”</p>
                </div>
                <div class="card" data-aos="zoom-in" data-aos-delay="300">
                    <h3>🔍 วิธีตรวจบ้าน</h3>
                    <p>แนะนำวิธีตรวจบ้านขั้นตอนต่าง ๆ โดยผู้เชี่ยวชาญ</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section -->
    <section class="categories">
        <div class="container-categories">
            <div class="category-header">
                <h2 data-aos="fade-right">📊 หมวดหมู่การตรวจสอบ</h2>
            </div>
            <ul class="category-list">
                <li>🏠 โครงสร้างอาคาร</li>
                <li>🏡 หลังคา</li>
                <li>🚰 สุขาภิบาล</li>
                <li>⚡ ระบบไฟฟ้า</li>
                <li>💧 รั่วซึม</li>
            </ul>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="cta" data-aos="fade-up">
        <div class="container">
            <h2>เริ่มต้นตรวจสอบบ้านของคุณวันนี้!</h2>
            <a href="https://liff.line.me/2005695449-36Xrdj94" class="btn">ใช้งานแอป</a>
        </div>
    </section>
@endsection
