@extends('layout')

@section('title', 'เกี่ยวกับเรา')

@section('content')
    <style>
        .profile-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            overflow: hidden;
        }

        .profile-header {
            background: var(--primary-gradient);
            padding: 3rem 2rem;
            color: white;
            position: relative;
        }

        .avatar-container {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: white;
            padding: 5px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: -55px;
            position: relative;
            z-index: 2;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            background: #e2e8f0;
        }

        .info-pill {
            background: #f1f5f9;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 500;
            color: #475569;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="profile-card shadow-sm text-center mb-4">
                <div class="profile-header d-flex flex-column align-items-center">
                    <h2 class="fw-bold mb-1">เกี่ยวกับเรา</h2>
                    <p class="mb-0 text-white-50">ข้อมูลส่วนตัวและประวัติผู้พัฒนาเว็บแอปพลิเคชัน</p>
                </div>
                
                <div class="avatar-container">
                    <div class="avatar-img d-flex align-items-center justify-content-center fw-bold text-primary" style="font-size: 2.2rem; background: #e0e7ff;">
                        {{ mb_substr($name, 0, 1) }}
                    </div>
                </div>

                <div class="card-body px-4 pb-5 pt-3">
                    <h3 class="fw-bold text-dark mb-1">{{ $name }}</h3>
                    <p class="text-primary fw-semibold mb-4">Developer & Designer</p>

                    <div class="d-flex flex-wrap gap-3 justify-content-center mb-4">
                        <span class="info-pill">
                            📅 วันที่ก่อตั้ง: {{ $date }}
                        </span>
                        <span class="info-pill">
                            📍 พิกัด: กรุงเทพฯ, ประเทศไทย
                        </span>
                        <span class="info-pill">
                            ⚡ สถานะ: พร้อมใช้งาน
                        </span>
                    </div>

                    <hr class="my-4 mx-auto" style="max-width: 80%; border-color: #e2e8f0;">

                    <div class="px-md-5">
                        <p class="text-muted leading-relaxed mb-3">
                            สวัสดีครับ! ยินดีที่ได้รู้จักกับทุกท่านที่เข้ามาเยี่ยมชมเว็บไซต์นี้ ผมมีความเชี่ยวชาญและหลงใหลในการพัฒนาเว็บแอปพลิเคชันที่ทันสมัย รวดเร็ว และใช้งานง่าย โดยใช้เครื่องมือและเฟรมเวิร์กสมัยใหม่ เช่น Laravel และการดีไซน์ UI/UX ที่ตอบโจทย์การใช้งานจริง
                        </p>
                        <p class="text-muted leading-relaxed mb-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas est quisquam quam laudantium, eveniet, molestiae laborum reiciendis in asperiores eligendi perferendis maiores tempora eaque error molestias porro et tenetur voluptatem?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
