<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบแอดมิน - จัดการบ้าน</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e0f7fa, #f1f8e9);
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 10px;
            border-left: 6px solid #2196F3;
            padding-left: 12px;
        }

        .success {
            color: #2e7d32;
            background-color: #c8e6c9;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        form input,
        form textarea,
        form button {
            width: 100%;
            padding: 10px 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        form label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        form button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #2196F3;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            border-radius: 6px;
            max-height: 100px;
            max-width: 150px;
            object-fit: cover;
        }

        .no-data {
            text-align: center;
            color: #888;
            padding: 20px;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #eee;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                top: 14px;
                font-weight: bold;
                color: #444;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>เพิ่มข้อมูลบ้านใหม่</h2>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.houses.store') }}" enctype="multipart/form-data">
        @csrf
        <label>ชื่อบ้าน</label>
        <input type="text" name="name" placeholder="ชื่อบ้าน" required>

        <label>จำนวนห้องนอน</label>
        <input type="number" name="bedrooms" placeholder="จำนวนห้องนอน" required>

        <label>จำนวนห้องน้ำ</label>
        <input type="number" name="bathrooms" placeholder="จำนวนห้องน้ำ" required>

        <label>พื้นที่ใช้สอย (ตร.ม.)</label>
        <input type="number" name="area" placeholder="พื้นที่ใช้สอย (ตร.ม.)" required>

        <label>ที่จอดรถ (คัน)</label>
        <input type="number" name="car_park" placeholder="จำนวนที่จอดรถ" required>

        <label>ที่ตั้งบ้าน</label>
        <input type="text" name="location" placeholder="ที่ตั้งบ้าน" required>

        <label>ประเภทบ้าน</label>
        <input type="text" name="type" placeholder="เช่น บ้านเดี่ยว, ทาวน์โฮม">

        <label>จำนวนชั้น</label>
        <input type="number" name="floors" placeholder="จำนวนชั้น">

        <label>ปีที่สร้าง</label>
        <input type="number" name="year_built" placeholder="ปีที่สร้าง">

        <label>สถานที่ใกล้เคียง</label>
        <textarea name="nearby_places" placeholder="เช่น โรงเรียน, ห้าง, รถไฟฟ้า (คั่นด้วย ,)" rows="3"></textarea>

        <label>รูปภาพบ้าน</label>
        <input type="file" name="image">

        <button type="submit">บันทึกข้อมูล</button>
    </form>

    <h2>รายการบ้านทั้งหมด</h2>

    @if(count($houses) > 0)
        <table>
            <thead>
                <tr>
                    <th>ชื่อบ้าน</th>
                    <th>ห้องนอน</th>
                    <th>ห้องน้ำ</th>
                    <th>พื้นที่</th>
                    <th>ที่จอดรถ</th>
                    <th>ที่ตั้ง</th>
                    <th>ประเภท</th>
                    <th>ชั้น</th>
                    <th>ปีที่สร้าง</th>
                    <th>สถานที่ใกล้เคียง</th>
                    <th>รูปภาพ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($houses as $house)
                <tr>
                    <td data-label="ชื่อบ้าน">{{ $house->name }}</td>
                    <td data-label="ห้องนอน">{{ $house->bedrooms }}</td>
                    <td data-label="ห้องน้ำ">{{ $house->bathrooms }}</td>
                    <td data-label="พื้นที่">{{ $house->area }} ตร.ม.</td>
                    <td data-label="ที่จอดรถ">{{ $house->car_park }}</td>
                    <td data-label="ที่ตั้ง">{{ $house->location }}</td>
                    <td data-label="ประเภท">{{ $house->type ?? '-' }}</td>
                    <td data-label="ชั้น">{{ $house->floors ?? '-' }}</td>
                    <td data-label="ปีที่สร้าง">{{ $house->year_built ?? '-' }}</td>
                    <td data-label="ใกล้สถานที่">
                        @if($house->nearby_places)
                            {!! nl2br(e($house->nearby_places)) !!}
                        @else
                            -
                        @endif
                    </td>
                    <td data-label="รูปภาพ">
                        @if ($house->image)
                            <img src="{{ asset('storage/' . $house->image) }}" alt="House image">
                        @else
                            ไม่มีรูป
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">ยังไม่มีข้อมูลบ้านในระบบ</p>
    @endif
</div>

</body>
</html>
