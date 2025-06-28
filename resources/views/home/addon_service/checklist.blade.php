@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/addon_service/cal_electric.css">

    <div class="content-box">
        <div class="content-box">
            <div class="check-container" data-aos="zoom-in-down">
                <div class="checklist-section">
                    <div class="checklist-item">
                        <h2><i class="fas fa-list-alt"></i> Checklist Before Buying a House</h2>
                        <p><i class="fas fa-info-circle"></i> This checklist helps you compare different home options
                            before making a decision. (เช็กลิสต์นี้ช่วยคุณเปรียบเทียบตัวเลือกบ้านก่อนตัดสินใจซื้อ)</p>
                        <p><i class="fas fa-check-circle"></i> Simply enter the project details, and the system will
                            help you compare. (เพียงป้อนข้อมูลโครงการ ระบบจะช่วยให้คุณเปรียบเทียบข้อมูลได้ง่ายขึ้น)</p>
                        <p><i class="fas fa-home"></i> It includes key aspects such as:</p>
                        <ul class="checklist">
                            <li><i class="fas fa-file-alt"></i> Project Information (ข้อมูลแบบบ้าน)</li>
                            <li><i class="fas fa-bath"></i> Sanitary (สุขาภิบาล)</li>
                            <li><i class="fas fa-warehouse"></i> Roofing (หลังคา)</li>
                            <li><i class="fas fa-bolt"></i> Electrical System (ไฟฟ้า)</li>
                        </ul>
                        <div class="logo-container">
                            <img src="https://img.freepik.com/free-vector/two-tiny-men-preparing-move-flat-illustration_74855-18782.jpg?t=st=1740374071~exp=1740377671~hmac=d1c2f0c5a4d7d9c369ba799943d8894453b60118c73f95bcb1cdc7c29d092f8a&w=1380"
                                alt="House Logo">
                        </div>
                    </div>
                    <iframe class="check-iframe" src="https://checklist-form.thomeinspector.com/"></iframe>
                </div>
            </div>
        </div>

        <!-- check-details start -->
        <div class="hero" data-aos="fade-up">
            <h1>ทำไมต้องเปรียบเทียบบ้านก่อนซื้อ?</h1>
            <p>การเปรียบเทียบบ้านช่วยให้คุณตัดสินใจซื้อได้อย่างมั่นใจ ทั้งด้านโครงสร้าง ราคา ทำเล และสิ่งอำนวยความสะดวก
            </p>
            <a href="https://checklist-form.thomeinspector.com/" class="btn">เริ่มต้นเปรียบเทียบบ้าน</a>
        </div>

        <!-- Content Section -->
        <section id="details" class="content">
            <div class="container">
                <h2 data-aos="fade-right">🏡 ทำไมการเปรียบเทียบบ้านก่อนซื้อจึงสำคัญ?</h2>
                <!-- <p data-aos="fade-left">การตัดสินใจซื้อบ้านเป็นการลงทุนระยะยาว
                            การเปรียบเทียบช่วยให้คุณเลือกบ้านที่เหมาะสมกับงบประมาณและไลฟ์สไตล์ของคุณ</p> -->

                <div class="grid">
                    <div class="card" data-aos="zoom-in">
                        <h3>💰 เปรียบเทียบราคา</h3>
                        <p>ช่วยให้คุณทราบว่าราคาบ้านที่คุณกำลังพิจารณานั้นคุ้มค่าหรือไม่
                            เมื่อเทียบกับบ้านที่คล้ายกันในพื้นที่เดียวกัน</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="100">
                        <h3>📍 ทำเลและการเดินทาง</h3>
                        <p>พิจารณาระยะทางจากที่ทำงาน โรงเรียน หรือแหล่งอำนวยความสะดวกต่างๆ เพื่อเลือกทำเลที่ดีที่สุด</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="200">
                        <h3>🏗️ โครงสร้างและคุณภาพวัสดุ</h3>
                        <p>ตรวจสอบว่าบ้านมีโครงสร้างที่แข็งแรง ใช้วัสดุที่มีคุณภาพ และได้รับมาตรฐานการก่อสร้างหรือไม่
                        </p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="300">
                        <h3>📜 เงื่อนไขสัญญาและการผ่อน</h3>
                        <p>เปรียบเทียบเงื่อนไขสินเชื่อ อัตราดอกเบี้ย และค่าใช้จ่ายเพิ่มเติม เช่น
                            ค่าส่วนกลางหรือค่าประกันบ้าน</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="400">
                        <h3>🚪 ความปลอดภัยและสภาพแวดล้อม</h3>
                        <p>ตรวจสอบระบบรักษาความปลอดภัย รวมถึงสภาพแวดล้อมโดยรอบ ว่าเหมาะสมกับการอยู่อาศัยหรือไม่</p>
                    </div>
                    <div class="card" data-aos="zoom-in" data-aos-delay="500">
                        <h3>📋 การประเมินความคุ้มค่า</h3>
                        <p>บ้านที่ดูดีอาจไม่ได้เหมาะสมที่สุด การเปรียบเทียบข้อมูลช่วยให้คุณตัดสินใจอย่างรอบคอบ</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Call to Action -->
        <section class="cta" data-aos="fade-up">
            <div class="container">
                <h2>เริ่มต้นเปรียบเทียบบ้านของคุณก่อนตัดสินใจซื้อ!</h2>
                <a href="https://checklist-form.thomeinspector.com/" class="btn">เริ่มต้นเปรียบเทียบบ้าน</a>
            </div>
        </section>
    </div>
@endsection
