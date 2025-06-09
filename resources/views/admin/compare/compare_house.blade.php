<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบแอดมิน - จัดการบ้าน</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a6fd8;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --error-color: #ef4444;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 3rem;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .main-content {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr;
        }

        .card {
            background: var(--bg-primary);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-xl);
            overflow: hidden;
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem 2rem;
            border-bottom: none;
        }

        .card-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .card-body {
            padding: 2rem;
        }

        .success-message {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: var(--shadow-md);
            animation: slideInDown 0.5s ease-out;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-grid {
            display: grid;
            gap: 1.5rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            padding: 0.875rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background: var(--bg-primary);
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgb(102 126 234 / 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 2rem 0 1rem 0;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .feature-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            margin-bottom: 2rem;
        }

        .feature-item {
            background: var(--bg-secondary);
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 1rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .feature-item:hover {
            border-color: var(--primary-color);
            background: white;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .feature-item label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            user-select: none;
            white-space: nowrap;
            min-width: fit-content;
        }

        .feature-item input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: var(--primary-color);
            cursor: pointer;
        }

        .feature-item input[type="text"] {
            flex: 1;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .feature-item input[type="text"]:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgb(102 126 234 / 0.1);
        }

        .btn {
            background: var(--bg-gradient);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            justify-content: center;
            box-shadow: var(--shadow-md);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-full {
            width: 100%;
            margin-top: 2rem;
        }

        .table-container {
            overflow-x: auto;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background: var(--bg-primary);
            font-size: 0.9rem;
        }

        .table th {
            background: var(--bg-gradient);
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            white-space: nowrap;
        }

        .table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            vertical-align: top;
        }

        .table tr:hover {
            background: var(--bg-secondary);
        }

        .table img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
        }

        .no-data {
            text-align: center;
            color: var(--text-secondary);
            padding: 3rem;
            font-size: 1.1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            text-align: center;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            display: block;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .feature-item {
                flex-direction: column;
                align-items: stretch;
                gap: 0.75rem;
            }

            .feature-item label {
                justify-content: flex-start;
            }

            .table-container {
                font-size: 0.8rem;
            }

            .table th,
            .table td {
                padding: 0.75rem 0.5rem;
            }

            .card-body {
                padding: 1.5rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 1.75rem;
            }

            .btn {
                padding: 0.875rem 1.5rem;
                font-size: 1rem;
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-home"></i> ระบบจัดการบ้าน</h1>
            <p>ระบบแอดมินสำหรับจัดการข้อมูลบ้านอย่างครอบคลุมและทันสมัย</p>
        </div>

        <div class="main-content">
            <!-- Statistics Cards -->
            <div class="stats-grid fade-in">
                <div class="stat-card">
                    <span class="stat-number">{{ $houses->count() }}</span>
                    <div class="stat-label">
                        <i class="fas fa-home"></i> จำนวนบ้านทั้งหมด
                    </div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $houses->avg('bedrooms') ? number_format($houses->avg('bedrooms'), 1) : '0' }}</span>
                    <div class="stat-label">
                        <i class="fas fa-bed"></i> ห้องนอนเฉลี่ย
                    </div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $houses->avg('area') ? number_format($houses->avg('area'), 0) : '0' }}</span>
                    <div class="stat-label">
                        <i class="fas fa-ruler-combined"></i> พื้นที่เฉลี่ย (ตร.ม.)
                    </div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $houses->where('has_smart_home', true)->count() }}</span>
                    <div class="stat-label">
                        <i class="fas fa-brain"></i> Smart Home
                    </div>
                </div>
            </div>

            <!-- Add House Form -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2><i class="fas fa-plus-circle"></i> เพิ่มข้อมูลบ้านใหม่</h2>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="success-message">
                            <i class="fas fa-check-circle"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.houses.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Basic Information -->
                        <div class="form-grid">
                            <div class="form-group">
                                <label><i class="fas fa-tag"></i> ชื่อบ้าน</label>
                                <input type="text" name="name" placeholder="ชื่อบ้าน" required value="{{ old('name') }}">
                                @error('name')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-bed"></i> จำนวนห้องนอน</label>
                                <input type="number" name="bedrooms" placeholder="จำนวนห้องนอน" required min="1" value="{{ old('bedrooms') }}">
                                @error('bedrooms')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-bath"></i> จำนวนห้องน้ำ</label>
                                <input type="number" name="bathrooms" placeholder="จำนวนห้องน้ำ" required min="1" value="{{ old('bathrooms') }}">
                                @error('bathrooms')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-ruler-combined"></i> พื้นที่ใช้สอย (ตร.ม.)</label>
                                <input type="number" name="area" placeholder="พื้นที่ใช้สอย" required min="1" value="{{ old('area') }}">
                                @error('area')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-car"></i> ที่จอดรถ (คัน)</label>
                                <input type="number" name="car_park" placeholder="จำนวนที่จอดรถ" required min="0" value="{{ old('car_park') }}">
                                @error('car_park')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-map-marker-alt"></i> ที่ตั้งบ้าน</label>
                                <input type="text" name="location" placeholder="ที่ตั้งบ้าน" required value="{{ old('location') }}">
                                @error('location')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-building"></i> ประเภทบ้าน</label>
                                <select name="type">
                                    <option value="">เลือกประเภทบ้าน</option>
                                    <option value="บ้านเดี่ยว" {{ old('type') == 'บ้านเดี่ยว' ? 'selected' : '' }}>บ้านเดี่ยว</option>
                                    <option value="ทาวน์โฮม" {{ old('type') == 'ทาวน์โฮม' ? 'selected' : '' }}>ทาวน์โฮม</option>
                                    <option value="ทาวน์เฮ้าส์" {{ old('type') == 'ทาวน์เฮ้าส์' ? 'selected' : '' }}>ทาวน์เฮ้าส์</option>
                                    <option value="คอนโดมิเนียม" {{ old('type') == 'คอนโดมิเนียม' ? 'selected' : '' }}>คอนโดมิเนียม</option>
                                </select>
                                @error('type')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-layer-group"></i> จำนวนชั้น</label>
                                <input type="number" name="floors" placeholder="จำนวนชั้น" min="1" value="{{ old('floors') }}">
                                @error('floors')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-calendar-alt"></i> ปีที่สร้าง</label>
                                <input type="number" name="year_built" placeholder="ปีที่สร้าง" min="1900" max="2030" value="{{ old('year_built') }}">
                                @error('year_built')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-camera"></i> รูปภาพบ้าน</label>
                                <input type="file" name="image" accept="image/*">
                                @error('image')
                                    <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label><i class="fas fa-map-signs"></i> สถานที่ใกล้เคียง</label>
                            <textarea name="nearby_places" placeholder="เช่น โรงเรียน, ห้าง, รถไฟฟ้า (คั่นด้วย ,)" rows="3">{{ old('nearby_places') }}</textarea>
                            @error('nearby_places')
                                <span style="color: var(--error-color); font-size: 0.875rem;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Sanitation System -->
                        <h3 class="section-title">
                            <i class="fas fa-tint"></i> ระบบสุขาภิบาล
                        </h3>
                        <div class="feature-grid">
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_septic_tank" value="1" {{ old('has_septic_tank') ? 'checked' : '' }}> ถังบำบัดน้ำเสีย</label>
                                <input type="text" name="septic_tank_spec" placeholder="รายละเอียดถังบำบัดน้ำเสีย" value="{{ old('septic_tank_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_order_trap" value="1" {{ old('has_order_trap') ? 'checked' : '' }}> บ่อดักกลิ่น</label>
                                <input type="text" name="order_trap_spec" placeholder="รายละเอียดบ่อดักกลิ่น" value="{{ old('order_trap_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_grase_trap" value="1" {{ old('has_grase_trap') ? 'checked' : '' }}> บ่อดักไขมัน</label>
                                <input type="text" name="grase_trap_spec" placeholder="รายละเอียดบ่อดักไขมัน" value="{{ old('grase_trap_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_water_tank" value="1" {{ old('has_water_tank') ? 'checked' : '' }}> ถังเก็บน้ำ</label>
                                <input type="text" name="water_tank_spec" placeholder="รายละเอียดถังเก็บน้ำ" value="{{ old('water_tank_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_water_pump" value="1" {{ old('has_water_pump') ? 'checked' : '' }}> ปั๊มน้ำ</label>
                                <input type="text" name="water_pump_spec" placeholder="รายละเอียดปั๊มน้ำ" value="{{ old('water_pump_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_pipe_termites" value="1" {{ old('has_pipe_termites') ? 'checked' : '' }}> ท่อกำจัดปลวก</label>
                                <input type="text" name="pipe_termites_spec" placeholder="รายละเอียดท่อกำจัดปลวก" value="{{ old('pipe_termites_spec') }}">
                            </div>
                        </div>

                        <!-- Roofing System -->
                        <h3 class="section-title">
                            <i class="fas fa-home"></i> ระบบหลังคา
                        </h3>
                        <div class="feature-grid">
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_solar_roof" value="1" {{ old('has_solar_roof') ? 'checked' : '' }}> Solar Roof</label>
                                <input type="text" name="solar_roof_spec" placeholder="รายละเอียด Solar Roof" value="{{ old('solar_roof_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_insulation" value="1" {{ old('has_insulation') ? 'checked' : '' }}> ฉนวนกันความร้อน</label>
                                <input type="text" name="insulation_spec" placeholder="รายละเอียดฉนวนกันความร้อน" value="{{ old('insulation_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_roof_ventilator" value="1" {{ old('has_roof_ventilator') ? 'checked' : '' }}> พัดลมระบายอากาศ</label>
                                <input type="text" name="roof_ventilator_spec" placeholder="รายละเอียดพัดลมระบายอากาศ" value="{{ old('roof_ventilator_spec') }}">
                            </div>
                        </div>

                        <!-- Electrical System -->
                        <h3 class="section-title">
                            <i class="fas fa-bolt"></i> ระบบไฟฟ้า
                        </h3>
                        <div class="feature-grid">
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_electric_meter" value="1" {{ old('has_electric_meter') ? 'checked' : '' }}> มิเตอร์ไฟฟ้า</label>
                                <input type="text" name="electric_meter_spec" placeholder="รายละเอียดมิเตอร์ไฟฟ้า" value="{{ old('electric_meter_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_main_breaker" value="1" {{ old('has_main_breaker') ? 'checked' : '' }}> เมนเบรกเกอร์</label>
                                <input type="text" name="main_breaker_spec" placeholder="รายละเอียดเมนเบรกเกอร์" value="{{ old('main_breaker_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_rcd" value="1" {{ old('has_rcd') ? 'checked' : '' }}> ระบบ RCD</label>
                                <input type="text" name="rcd_spec" placeholder="รายละเอียดระบบ RCD" value="{{ old('rcd_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_rcd_1st" value="1" {{ old('has_rcd_1st') ? 'checked' : '' }}> RCD ชั้น 1</label>
                                <input type="text" name="rcd_1st_spec" placeholder="รายละเอียด RCD ชั้น 1" value="{{ old('rcd_1st_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_rcd_2nd" value="1" {{ old('has_rcd_2nd') ? 'checked' : '' }}> RCD ชั้น 2</label>
                                <input type="text" name="rcd_2nd_spec" placeholder="รายละเอียด RCD ชั้น 2" value="{{ old('rcd_2nd_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_ev_charger" value="1" {{ old('has_ev_charger') ? 'checked' : '' }}> EV Charger</label>
                                <input type="text" name="ev_charger_spec" placeholder="รายละเอียด EV Charger" value="{{ old('ev_charger_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_emergency_light" value="1" {{ old('has_emergency_light') ? 'checked' : '' }}> ไฟฉุกเฉิน</label>
                                <input type="text" name="emergency_light_spec" placeholder="รายละเอียดไฟฉุกเฉิน" value="{{ old('emergency_light_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_door_automatic" value="1" {{ old('has_door_automatic') ? 'checked' : '' }}> ประตูอัตโนมัติ</label>
                                <input type="text" name="door_automatic_spec" placeholder="รายละเอียดประตูอัตโนมัติ" value="{{ old('door_automatic_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_smoke_detector" value="1" {{ old('has_smoke_detector') ? 'checked' : '' }}> Smoke Detector</label>
                                <input type="text" name="smoke_detector_spec" placeholder="รายละเอียด Smoke Detector" value="{{ old('smoke_detector_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_heat_detector" value="1" {{ old('has_heat_detector') ? 'checked' : '' }}> Heat Detector</label>
                                <input type="text" name="heat_detector_spec" placeholder="รายละเอียด Heat Detector" value="{{ old('heat_detector_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_smart_home" value="1" {{ old('has_smart_home') ? 'checked' : '' }}> ระบบ Smart Home</label>
                                <input type="text" name="smart_home_spec" placeholder="รายละเอียดระบบ Smart Home" value="{{ old('smart_home_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_security_home_system" value="1" {{ old('has_security_home_system') ? 'checked' : '' }}> ระบบรักษาความปลอดภัย</label>
                                <input type="text" name="security_home_system_spec" placeholder="รายละเอียดระบบรักษาความปลอดภัย" value="{{ old('security_home_system_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_cctv_camera" value="1" {{ old('has_cctv_camera') ? 'checked' : '' }}> CCTV</label>
                                <input type="text" name="cctv_camera_spec" placeholder="รายละเอียด CCTV" value="{{ old('cctv_camera_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_door_bell" value="1" {{ old('has_door_bell') ? 'checked' : '' }}> กริ่งประตู</label>
                                <input type="text" name="door_bell_spec" placeholder="รายละเอียดกริ่งประตู" value="{{ old('door_bell_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_plug_switch" value="1" {{ old('has_plug_switch') ? 'checked' : '' }}> ปลั๊กและสวิตช์</label>
                                <input type="text" name="plug_switch_spec" placeholder="รายละเอียดปลั๊กและสวิตช์" value="{{ old('plug_switch_spec') }}">
                            </div>
                            <div class="feature-item">
                                <label><input type="checkbox" name="has_garage_door" value="1" {{ old('has_garage_door') ? 'checked' : '' }}> ประตูโรงรถอัตโนมัติ</label>
                                <input type="text" name="garage_door_spec" placeholder="รายละเอียดประตูโรงรถอัตโนมัติ" value="{{ old('garage_door_spec') }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-full">
                            <i class="fas fa-save"></i> บันทึกข้อมูล
                        </button>
                    </form>
                </div>
            </div>

            <!-- Houses List -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2><i class="fas fa-list"></i> รายการบ้านทั้งหมด</h2>
                </div>
                <div class="card-body">
                    @if($houses->count() > 0)
                        <div class="table-container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-tag"></i> ชื่อบ้าน</th>
                                        <th><i class="fas fa-bed"></i> ห้องนอน</th>
                                        <th><i class="fas fa-bath"></i> ห้องน้ำ</th>
                                        <th><i class="fas fa-ruler-combined"></i> พื้นที่</th>
                                        <th><i class="fas fa-car"></i> ที่จอดรถ</th>
                                        <th><i class="fas fa-map-marker-alt"></i> ที่ตั้ง</th>
                                        <th><i class="fas fa-building"></i> ประเภท</th>
                                        <th><i class="fas fa-layer-group"></i> ชั้น</th>
                                        <th><i class="fas fa-calendar-alt"></i> ปีที่สร้าง</th>
                                        <th><i class="fas fa-map-signs"></i> สถานที่ใกล้เคียง</th>
                                        <th><i class="fas fa-camera"></i> รูปภาพ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($houses as $house)
                                    <tr>
                                        <td>{{ $house->name }}</td>
                                        <td>{{ $house->bedrooms }}</td>
                                        <td>{{ $house->bathrooms }}</td>
                                        <td>{{ $house->area }} ตร.ม.</td>
                                        <td>{{ $house->car_park }}</td>
                                        <td>{{ $house->location }}</td>
                                        <td>{{ $house->type ?? '-' }}</td>
                                        <td>{{ $house->floors ?? '-' }}</td>
                                        <td>{{ $house->year_built ?? '-' }}</td>
                                        <td>
                                            @if($house->nearby_places)
                                                {!! nl2br(e($house->nearby_places)) !!}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($house->image)
                                                <img src="{{ asset('image/' . $house->image) }}" alt="House image">
                                            @else
                                                ไม่มีรูป
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="no-data">
                            <i class="fas fa-home" style="font-size: 3rem; color: var(--text-secondary); margin-bottom: 1rem;"></i>
                            <p>ยังไม่มีข้อมูลบ้านในระบบ</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced checkbox interactions
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const textInput = this.closest('.feature-item').querySelector('input[type="text"]');
                    if (textInput) {
                        textInput.disabled = !this.checked;
                        textInput.style.opacity = this.checked ? '1' : '0.5';
                        if (!this.checked) {
                            textInput.value = '';
                        }
                    }
                });
            });

            // Initialize checkbox states
            checkboxes.forEach(checkbox => {
                const textInput = checkbox.closest('.feature-item').querySelector('input[type="text"]');
                if (textInput) {
                    textInput.disabled = !checkbox.checked;
                    textInput.style.opacity = checkbox.checked ? '1' : '0.5';
                }
            });

            // Form validation enhancements
            const inputs = document.querySelectorAll('input[required]');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        this.style.borderColor = 'var(--error-color)';
                    } else {
                        this.style.borderColor = 'var(--success-color)';
                    }
                });

                input.addEventListener('input', function() {
                    if (this.style.borderColor === 'rgb(239, 68, 68)') {
                        this.style.borderColor = 'var(--border-color)';
                    }
                });
            });

            // Auto-resize textarea
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                });
            });

            // Add fade-in animation to elements as they come into view
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards and feature items
            document.querySelectorAll('.card, .feature-item, .stat-card').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>