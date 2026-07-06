@extends('layout')

@section('title', 'หน้าแรกเว็บ')

@section('content')
    <style>
        .hero-section {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
            border-radius: 24px;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -30%;
            width: 80%;
            height: 180%;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.08) 0%, transparent 60%);
            pointer-events: none;
        }

        .welcome-badge {
            background: rgba(99, 102, 241, 0.1);
            color: #4f46e5;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .hover-card {
            border: 1px solid rgba(226, 232, 240, 0.8) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 20px !important;
        }

        .hover-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02) !important;
            border-color: rgba(99, 102, 241, 0.3) !important;
        }

        .icon-circle {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .hover-card:hover .icon-circle {
            background: var(--primary-gradient);
            color: white;
            transform: rotate(5deg) scale(1.1);
        }
    </style>

    <div class="hero-section shadow-sm mb-5 text-center text-md-start">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="welcome-badge mb-3">
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" style="animation-duration: 1.5s; width: 8px; height: 8px;"></span>
                    ยินดีต้อนรับเข้าสู่เว็บไซต์อย่างเป็นทางการ
                </span>
                <h1 class="fw-bold display-4 mb-3 text-dark">
                    สวัสดี! ยินดีต้อนรับสู่ <span style="background: linear-gradient(to right, #4f46e5, #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">เว็บไซต์</span>
                </h1>
                <p class="lead text-muted mb-4">
                    ที่นี่คือศูนย์รวมข้อมูลและเนื้อหาความรู้เชิงลึกเกี่ยวกับไอที เทคโนโลยี และบทความที่เป็นประโยชน์ต่อการพัฒนาตนเองอย่างสร้างสรรค์
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                    <a href="{{ route('blog') }}" class="btn btn-primary btn-lg px-4 shadow-sm" style="background: var(--primary-gradient); border: none; border-radius: 12px;">อ่านบทความ</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-secondary btn-lg px-4" style="border-radius: 12px;">เกี่ยวกับเรา</a>
                </div>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block">
                <span style="font-size: 8rem; display: inline-block; animation: float 3s ease-in-out infinite;">🚀</span>
            </div>
        </div>
    </div>

    <div class="row mt-4 g-4">
        <div class="col-md-4">
            <div class="card hover-card border-0 shadow-sm h-100 p-4">
                <div class="card-body text-center">
                    <div class="icon-circle">📚</div>
                    <h4 class="fw-bold mb-2">บทความ</h4>
                    <p class="text-muted mb-3">
                        อ่านข้อมูล แหล่งเรียนรู้ และเทคนิคการเขียนโค้ดต่าง ๆ ที่เราตั้งใจเรียบเรียง
                    </p>
                    <a href="{{ route('blog') }}" class="text-decoration-none fw-semibold" style="color: #4f46e5;">ไปหน้าบทความ →</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card hover-card border-0 shadow-sm h-100 p-4">
                <div class="card-body text-center">
                    <div class="icon-circle">💻</div>
                    <h4 class="fw-bold mb-2">บริการของเรา</h4>
                    <p class="text-muted mb-3">
                        รวมบริการด้านเทคโนโลยีสารสนเทศ ออกแบบ และพัฒนาเว็บแอปพลิเคชัน
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold" style="color: #4f46e5;">ดูรายละเอียด →</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card hover-card border-0 shadow-sm h-100 p-4">
                <div class="card-body text-center">
                    <div class="icon-circle">📞</div>
                    <h4 class="fw-bold mb-2">ติดต่อเรา</h4>
                    <p class="text-muted mb-3">
                        มีคำถามหรือข้อสงสัยใด ๆ สามารถพูดคุยติดต่อทีมงานได้ตลอดเวลา
                    </p>
                    <a href="{{ route('about') }}" class="text-decoration-none fw-semibold" style="color: #4f46e5;">ช่องทางติดต่อ →</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
@endsection
