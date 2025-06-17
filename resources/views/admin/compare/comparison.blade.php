<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การเปรียบเทียบ - เปรียบเทียบบ้าน</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4A90E2;
            --primary-dark: #357ABD;
            --secondary-color: #2c3e50;
            --accent-gold: #FFD700;
            --success-color: #4CAF50;
            --error-color: #F44336;
            --text-primary: #2c3e50;
            --text-secondary: #7f8c8d;
            --text-light: #ffffff;
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fa;
            --bg-card: #ffffff;
            --border-color: #e9ecef;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.15);
            --shadow-lg: 0 8px 25px rgba(0,0,0,0.2);
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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-image: url('/images/hero-bg.png');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            color: var(--text-light);
            padding: 4rem 0;
            text-align: center;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: var(--bg-primary);
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .breadcrumb-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
        }

        .breadcrumb a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--primary-color);
        }

        .breadcrumb-current {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        /* House Cards */
        .house-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .house-card {
            background: var(--bg-card);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .house-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .house-header {
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }

        .house-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .crown-icon {
            color: var(--accent-gold);
            font-size: 1.5rem;
        }

        .house-image {
            width: 100%;
            height: 200px;
            background: #f0f0f0;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            overflow: hidden;
        }

        .house-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .house-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Comparison Table */
        .comparison-table {
            background: var(--bg-card);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }

        .table-section {
            border-bottom: 1px solid var(--border-color);
        }

        .table-section:last-child {
            border-bottom: none;
        }

        .section-header {
            background: var(--bg-secondary);
            padding: 1rem 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 600;
            transition: var(--transition);
        }

        .section-header:hover {
            background: #e9ecef;
        }

        .section-header.active {
            background: var(--primary-color);
            color: var(--text-light);
        }

        .section-content {
            display: none;
        }

        .section-content.active {
            display: block;
        }

        .comparison-row {
            display: grid;
            grid-template-columns: 250px repeat(auto-fit, minmax(200px, 1fr));
            border-bottom: 1px solid var(--border-color);
            align-items: center;
        }

        .comparison-row:last-child {
            border-bottom: none;
        }

        .row-label {
            padding: 1rem 1.5rem;
            background: var(--bg-secondary);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-right: 1px solid var(--border-color);
        }

        .row-label i {
            color: var(--text-secondary);
            width: 20px;
            text-align: center;
        }

        .row-data {
            padding: 1rem;
            text-align: center;
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.25rem;
        }

        .row-data:last-child {
            border-right: none;
        }

        .feature-status {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .status-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }

        .status-yes {
            background: var(--success-color);
        }

        .status-no {
            background: var(--error-color);
        }

        .feature-spec {
            font-size: 0.85rem;
            color: var(--text-secondary);
            text-align: center;
            margin-top: 0.25rem;
        }

        .chevron-icon {
            transition: var(--transition);
        }

        .section-header.active .chevron-icon {
            transform: rotate(180deg);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .house-cards {
                grid-template-columns: 1fr;
            }

            .comparison-row {
                grid-template-columns: 200px repeat(auto-fit, minmax(150px, 1fr));
            }

            .row-label {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
            }

            .row-data {
                padding: 0.75rem 0.5rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .comparison-row {
                grid-template-columns: 150px repeat(auto-fit, minmax(120px, 1fr));
            }

            .row-label {
                padding: 0.5rem;
                font-size: 0.8rem;
            }

            .row-data {
                padding: 0.5rem 0.25rem;
                font-size: 0.8rem;
            }

            .hero-content {
                padding: 0 0.5rem;
            }

            .main-content {
                padding: 1rem 0.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">ผลลัพธ์การเปรียบเทียบ</h1>
            <p class="hero-subtitle">
                ข้อมูลนี้นำมาจากการเปรียบเทียบเพื่อง่ายต่อการตัดสินใจ โปรดศึกษาข้อมูลเพิ่มเติมหรือปรึกษาผู้เชี่ยวชาญที่<br>
                ดีเตอร์วงษ์ชาติ-ปรีชาพงษ์ ก่อนใดก่อนใดก่อนการตัดสินใจ
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb-content">
            <a href="{{ route('houses.compare') }}">
                <i class="fas fa-home"></i> Home
            </a>
            <span>/</span>
            <span class="breadcrumb-current">Comparison results</span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- House Cards -->
        <div class="house-cards">
            @foreach($houses as $house)
                <div class="house-card">
                    <div class="house-header">
                        <div class="house-name">
                            <i class="fas fa-crown crown-icon"></i>
                            {{ $house->name }}
                        </div>
                        <div class="house-image">
                            @if($house->image)
                                <img src="{{ asset('image/' . $house->image) }}" alt="{{ $house->name }}">
                            @else
                                <i class="fas fa-home" style="font-size: 3rem; color: #ccc;"></i>
                            @endif
                        </div>
                        <div class="house-price">
                            {{ number_format($house->price ?? 0) }} Baht
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Comparison Table -->
        <div class="comparison-table">
            <!-- Basic Information Section -->
            <div class="table-section">
                <div class="section-header active" onclick="toggleSection(this)">
                    <span>ข้อมูลบ้าน (House Information)</span>
                    <i class="fas fa-chevron-down chevron-icon"></i>
                </div>
                <div class="section-content active">
                    <!-- Price Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-tag"></i>
                            ราคาบ้าน (House Price)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ number_format($house->price ?? 0) }} Baht</strong>
                            </div>
                        @endforeach
                    </div>

                    <!-- Usable Area Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-ruler-combined"></i>
                            พื้นที่ใช้สอย (Usable Area)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ $house->area }} m²</strong>
                            </div>
                        @endforeach
                    </div>

                    <!-- Bedrooms Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bed"></i>
                            ห้องนอน (Bedroom)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ $house->bedrooms }}</strong>
                            </div>
                        @endforeach
                    </div>

                    <!-- Bathrooms Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bath"></i>
                            ห้องน้ำ (Bathroom)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ $house->bathrooms }}</strong>
                            </div>
                        @endforeach
                    </div>

                    <!-- Maidroom Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-user-friends"></i>
                            ห้องแม่บ้าน (Maidroom)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ $house->maidroom ?? 0 }}</strong>
                            </div>
                        @endforeach
                    </div>

                    <!-- Parking Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-car"></i>
                            ที่จอดรถ (Parking)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <strong>{{ $house->car_park }}</strong>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sanitation System Section -->
            <div class="table-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <span>งานประปา, สุขาภิบาล (Plumbing Sanitary)</span>
                    <i class="fas fa-chevron-down chevron-icon"></i>
                </div>
                <div class="section-content">
                    <!-- Septic Tank Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-tint"></i>
                            ถังบำบัดน้ำเสีย (Septic Tank)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_septic_tank ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_septic_tank ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->septic_tank_spec)
                                    <div class="feature-spec">{{ $house->septic_tank_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Order Trap Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-filter"></i>
                            บ่อดักกลิ่น (Order Trap)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_order_trap ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_order_trap ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->order_trap_spec)
                                    <div class="feature-spec">{{ $house->order_trap_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Grease Trap Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-oil-can"></i>
                            ดักไขมัน (Grease Trap)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_grase_trap ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_grase_trap ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->grase_trap_spec)
                                    <div class="feature-spec">{{ $house->grase_trap_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Water Tank Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-water"></i>
                            ถังเก็บน้ำ (Water Tank)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_water_tank ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_water_tank ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->water_tank_spec)
                                    <div class="feature-spec">{{ $house->water_tank_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Water Pump Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-pump-soap"></i>
                            ปั๊มน้ำ (Water Pump)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_water_pump ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_water_pump ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->water_pump_spec)
                                    <div class="feature-spec">{{ $house->water_pump_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Pipe Termites Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bug"></i>
                            ระบบกันปลวก (Pipe Termites)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_pipe_termites ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_pipe_termites ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->pipe_termites_spec)
                                    <div class="feature-spec">{{ $house->pipe_termites_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Roofing System Section -->
            <div class="table-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <span>งานประปา, สุขาภิบาล (Plumbing Sanitary)</span>
                    <i class="fas fa-chevron-down chevron-icon"></i>
                </div>
                <div class="section-content">
                    <!-- Solar Roof Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-solar-panel"></i>
                            Solar Roof
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_solar_roof ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_solar_roof ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->solar_roof_spec)
                                    <div class="feature-spec">{{ $house->solar_roof_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Insulation Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-shield-alt"></i>
                            ฉนวนกันความร้อน (Insulation)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_insulation ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_insulation ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->insulation_spec)
                                    <div class="feature-spec">{{ $house->insulation_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Roof Ventilator Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-fan"></i>
                            พัดลมระบายอากาศ (Roof Ventilator)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_roof_ventilator ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_roof_ventilator ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->roof_ventilator_spec)
                                    <div class="feature-spec">{{ $house->roof_ventilator_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Electrical System Section -->
            <div class="table-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <span>งานประปา, สุขาภิบาล (Plumbing Sanitary)</span>
                    <i class="fas fa-chevron-down chevron-icon"></i>
                </div>
                <div class="section-content">
                    <!-- Electric Meter Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bolt"></i>
                            มิเตอร์ไฟฟ้า (Electric Meter)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_electric_meter ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_electric_meter ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->electric_meter_spec)
                                    <div class="feature-spec">{{ $house->electric_meter_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Main Breaker Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-power-off"></i>
                            เมนเบรกเกอร์ (Main Breaker)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_main_breaker ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_main_breaker ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->main_breaker_spec)
                                    <div class="feature-spec">{{ $house->main_breaker_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- EV Charger Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-car-battery"></i>
                            EV Charger
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_ev_charger ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_ev_charger ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->ev_charger_spec)
                                    <div class="feature-spec">{{ $house->ev_charger_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Smart Home & Security Section -->
            <div class="table-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <span>งานประปา, สุขาภิบาล (Plumbing Sanitary)</span>
                    <i class="fas fa-chevron-down chevron-icon"></i>
                </div>
                <div class="section-content">
                    <!-- Smart Home Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-brain"></i>
                            Smart Home
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_smart_home ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_smart_home ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->smart_home_spec)
                                    <div class="feature-spec">{{ $house->smart_home_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Security System Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-shield-alt"></i>
                            ระบบรักษาความปลอดภัย (Security System)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_security_home_system ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_security_home_system ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->security_home_system_spec)
                                    <div class="feature-spec">{{ $house->security_home_system_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- CCTV Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-video"></i>
                            CCTV
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_cctv_camera ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_cctv_camera ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->cctv_camera_spec)
                                    <div class="feature-spec">{{ $house->cctv_camera_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Door Bell Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bell"></i>
                            กริ่งประตู (Door Bell)
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_door_bell ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_door_bell ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->door_bell_spec)
                                    <div class="feature-spec">{{ $house->door_bell_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Smoke Detector Row -->
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-fire"></i>
                            Smoke Detector
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status">
                                    <div class="status-icon {{ $house->has_smoke_detector ? 'status-yes' : 'status-no' }}">
                                        <i class="fas {{ $house->has_smoke_detector ? 'fa-check' : 'fa-times' }}"></i>
                                    </div>
                                </div>
                                @if($house->smoke_detector_spec)
                                    <div class="feature-spec">{{ $house->smoke_detector_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleSection(header) {
            const content = header.nextElementSibling;
            const chevron = header.querySelector('.chevron-icon');
            
            // Toggle active class
            header.classList.toggle('active');
            content.classList.toggle('active');
            
            // Animate chevron
            if (header.classList.contains('active')) {
                chevron.style.transform = 'rotate(180deg)';
            } else {
                chevron.style.transform = 'rotate(0deg)';
            }
        }

        // Initialize - show first section by default
        document.addEventListener('DOMContentLoaded', function() {
            const firstSection = document.querySelector('.section-header');
            if (firstSection && !firstSection.classList.contains('active')) {
                // First section is already active by default
            }
        });
    </script>
</body>
</html>