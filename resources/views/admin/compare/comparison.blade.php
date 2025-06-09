<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปรียบเทียบบ้าน - รายละเอียด</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color:rgb(0, 238, 255);
            --primary-dark:rgb(0, 255, 242);
            --secondary-color: #2c3e50;
            --accent-blue: #3498db;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --text-primary: #2c3e50;
            --text-secondary: #7f8c8d;
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fa;
            --border-color: #e9ecef;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 8px 25px rgba(0,0,0,0.15);
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
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .header {
            background: var(--bg-primary);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .back-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            background: var(--bg-secondary);
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            text-decoration: none;
            color: var(--text-primary);
            transition: var(--transition);
        }

        .back-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .comparison-table {
            background: var(--bg-primary);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .table-header {
            display: grid;
            grid-template-columns: 200px repeat({{ $houses->count() }}, 1fr);
            background: var(--primary-color);
            color: white;
        }

        .header-cell {
            padding: 1.5rem 1rem;
            text-align: center;
        }

        .header-cell:first-child {
            background: var(--primary-dark);
            font-weight: 600;
        }

        .house-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .house-header img {
            width: 500px;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .house-header h3 {
            font-size: 1rem;
            font-weight: 600;
        }

        .house-header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .table-body {
            display: grid;
            grid-template-columns: 200px repeat({{ $houses->count() }}, 1fr);
        }

        .row-header {
            padding: 1rem;
            background: var(--bg-secondary);
            font-weight: 500;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .data-cell {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            border-right: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        .data-cell:last-child {
            border-right: none;
        }

        .feature-status {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            justify-content: center;
        }

        .feature-yes {
            color: var(--success-color);
        }

        .feature-no {
            color: var(--text-secondary);
        }

        .feature-spec {
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-top: 0.25rem;
            text-align: center;
        }

        .section-title {
            background: var(--bg-secondary);
            padding: 0.75rem 1rem;
            font-weight: 600;
            color: var(--text-primary);
            border-bottom: 2px solid var(--primary-color);
            grid-column: 1 / -1;
        }

        @media (max-width: 768px) {
            .table-header,
            .table-body {
                grid-template-columns: 150px repeat({{ $houses->count() }}, 1fr);
            }

            .header-cell,
            .row-header,
            .data-cell {
                padding: 0.75rem 0.5rem;
                font-size: 0.9rem;
            }

            .house-header img {
                width: 60px;
                height: 45px;
            }

            .house-header h3 {
                font-size: 0.9rem;
            }

            .house-header p {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-content">
                <a href="{{ route('admin.compare.compare_frontend') }}" class="back-btn">
                    <i class="fas fa-arrow-left"></i>
                    กลับ
                </a>
                <h1 class="page-title">เปรียบเทียบบ้าน</h1>
                <div></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="comparison-table">
            <!-- Table Header -->
            <div class="table-header">
                <div class="header-cell">รายการ</div>
                @foreach($houses as $house)
                    <div class="header-cell">
                        <div class="house-header">
                            <img src="{{ $house->image ? asset('image/' . $house->image) : '/placeholder.svg?height=60&width=80' }}" alt="{{ $house->name }}">
                            <h3>{{ $house->name }}</h3>
                            <p>{{ $house->location }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Table Body -->
            <div class="table-body">
                <!-- Basic Information Section -->
                <div class="section-title">ข้อมูลพื้นฐาน</div>
                
                <div class="row-header">
                    <i class="fas fa-bed"></i> ห้องนอน
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->bedrooms }} ห้อง</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-bath"></i> ห้องน้ำ
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->bathrooms }} ห้อง</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-ruler-combined"></i> พื้นที่ใช้สอย
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->area }} ตร.ม.</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-car"></i> ที่จอดรถ
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->car_park }} คัน</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-layer-group"></i> จำนวนชั้น
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->floors ?? '-' }} ชั้น</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-building"></i> ประเภทบ้าน
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->type ?? '-' }}</div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-calendar-alt"></i> ปีที่สร้าง
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">{{ $house->year_built ?? '-' }}</div>
                @endforeach

                <!-- Sanitation System Section -->
                <div class="section-title">ระบบสุขาภิบาล</div>
                
                <div class="row-header">
                    <i class="fas fa-tint"></i> ถังบำบัดน้ำเสีย
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_septic_tank ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_septic_tank ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->septic_tank_spec)
                            <div class="feature-spec">{{ $house->septic_tank_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-tint"></i> บ่อดักกลิ่น
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_order_trap ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_order_trap ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->order_trap_spec)
                            <div class="feature-spec">{{ $house->order_trap_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-tint"></i> บ่อดักไขมัน
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_grase_trap ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_grase_trap ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->grase_trap_spec)
                            <div class="feature-spec">{{ $house->grase_trap_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-tint"></i> ถังเก็บน้ำ
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_water_tank ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_water_tank ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->water_tank_spec)
                            <div class="feature-spec">{{ $house->water_tank_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-tint"></i> ปั๊มน้ำ
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_water_pump ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_water_pump ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->water_pump_spec)
                            <div class="feature-spec">{{ $house->water_pump_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <!-- Roofing System Section -->
                <div class="section-title">ระบบหลังคา</div>
                
                <div class="row-header">
                    <i class="fas fa-solar-panel"></i> Solar Roof
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_solar_roof ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_solar_roof ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->solar_roof_spec)
                            <div class="feature-spec">{{ $house->solar_roof_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-shield-alt"></i> ฉนวนกันความร้อน
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_insulation ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_insulation ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->insulation_spec)
                            <div class="feature-spec">{{ $house->insulation_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-fan"></i> พัดลมระบายอากาศ
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_roof_ventilator ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_roof_ventilator ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->roof_ventilator_spec)
                            <div class="feature-spec">{{ $house->roof_ventilator_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <!-- Electrical System Section -->
                <div class="section-title">ระบบไฟฟ้า</div>
                
                <div class="row-header">
                    <i class="fas fa-bolt"></i> มิเตอร์ไฟฟ้า
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_electric_meter ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_electric_meter ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->electric_meter_spec)
                            <div class="feature-spec">{{ $house->electric_meter_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-bolt"></i> เมนเบรกเกอร์
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_main_breaker ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_main_breaker ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->main_breaker_spec)
                            <div class="feature-spec">{{ $house->main_breaker_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-car-battery"></i> EV Charger
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_ev_charger ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_ev_charger ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->ev_charger_spec)
                            <div class="feature-spec">{{ $house->ev_charger_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <!-- Smart Home & Security Section -->
                <div class="section-title">Smart Home & ความปลอดภัย</div>
                
                <div class="row-header">
                    <i class="fas fa-brain"></i> Smart Home
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_smart_home ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_smart_home ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->smart_home_spec)
                            <div class="feature-spec">{{ $house->smart_home_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-shield-alt"></i> ระบบรักษาความปลอดภัย
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_security_home_system ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_security_home_system ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->security_home_system_spec)
                            <div class="feature-spec">{{ $house->security_home_system_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-video"></i> CCTV
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_cctv_camera ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_cctv_camera ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->cctv_camera_spec)
                            <div class="feature-spec">{{ $house->cctv_camera_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-bell"></i> กริ่งประตู
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_door_bell ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_door_bell ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->door_bell_spec)
                            <div class="feature-spec">{{ $house->door_bell_spec }}</div>
                        @endif
                    </div>
                @endforeach

                <div class="row-header">
                    <i class="fas fa-fire"></i> Smoke Detector
                </div>
                @foreach($houses as $house)
                    <div class="data-cell">
                        <div class="feature-status">
                            <i class="fas {{ $house->has_smoke_detector ? 'fa-check feature-yes' : 'fa-times feature-no' }}"></i>
                            <span>{{ $house->has_smoke_detector ? 'มี' : 'ไม่มี' }}</span>
                        </div>
                        @if($house->smoke_detector_spec)
                            <div class="feature-spec">{{ $house->smoke_detector_spec }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>