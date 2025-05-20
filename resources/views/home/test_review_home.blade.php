<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โครงร่างหน้าเว็บบทความ</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .main-content {
            flex: 2; /* ให้พื้นที่มากขึ้น */
            padding: 15px;
            border: 1px solid #ccc;
        }

        .sidebar {
            flex: 1;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .recommended-articles {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .recommended-articles h3 {
            margin-top: 0;
        }

        .recommended-article-item {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #ddd;
        }

        .recommended-article-item:last-child {
            border-bottom: none;
        }

        .sidebar-section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .sidebar-section:last-child {
            border-bottom: none;
        }

        .sidebar-section h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>หน้าเว็บบทความเกี่ยวกับการตรวจบ้าน</h1>

    <div class="container">
        <div class="main-content">
            <h2>หัวข้อบทความหลักเกี่ยวกับการตรวจบ้าน</h2>
            <p>เนื้อหาของบทความหลักเกี่ยวกับการตรวจบ้าน...</p>
            <p>เนื้อหาเพิ่มเติม...</p>

            <div class="recommended-articles">
                <h3>บทความแนะนำอื่นๆ</h3>
                <div class="recommended-article-item">
                    <a href="#">เคล็ดลับการเตรียมตัวก่อนการตรวจบ้าน</a>
                </div>
                <div class="recommended-article-item">
                    <a href="#">สิ่งที่ต้องตรวจสอบอย่างละเอียดในการตรวจบ้าน</a>
                </div>
                <div class="recommended-article-item">
                    <a href="#">คำถามที่ควรถามผู้ตรวจบ้าน</a>
                </div>
                </div>
        </div>

        <div class="sidebar">
            <div class="sidebar-section">
                <h3>บทความแนะนำเกี่ยวกับการตรวจบ้าน</h3>
                <ul>
                    <li><a href="#">ความสำคัญของการตรวจบ้านมือสอง</a></li>
                    <li><a href="#">ข้อผิดพลาดที่พบบ่อยในการตรวจบ้าน</a></li>
                    <li><a href="#">การเลือกผู้ตรวจบ้านมืออาชีพ</a></li>
                </ul>
            </div>

            <div class="sidebar-section">
                <h3>เครื่องมือและตัวช่วย</h3>
                <ul>
                    <li><a href="#">ดาวน์โหลด Checklist การตรวจบ้าน</a></li>
                    <li><a href="#">คำแนะนำในการอ่านรายงานการตรวจบ้าน</a></li>
                </ul>
            </div>

            <div class="sidebar-section">
                <h3>เกี่ยวกับบริการของเรา</h3>
                <p>รายละเอียดเกี่ยวกับบริการตรวจบ้านของบริษัทของคุณ...</p>
                <a href="#">ดูบริการทั้งหมด</a>
            </div>

            <div class="sidebar-section">
                <h3>ติดต่อเรา</h3>
                <p>ช่องทางการติดต่อต่างๆ...</p>
                <a href="#">ติดต่อสอบถาม</a>
            </div>
        </div>
    </div>

</body>
</html>