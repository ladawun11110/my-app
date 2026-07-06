<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการข้อมูล - รายชื่อสมาชิก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Noto+Sans+Thai:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', 'Noto Sans Thai', sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        .main-container {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .card {
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .03);
            overflow: hidden;
            background: white;
        }

        .card-header-custom {
            background: white;
            padding: 24px;
            border-bottom: 1px solid #f1f5f9;
        }

        .search-box {
            width: 300px;
            border-radius: 12px;
            padding: 10px 16px;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
            transition: all 0.2s ease;
        }

        .search-box:focus {
            background-color: #fff;
            border-color: #818cf8;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .table {
            margin: 0;
        }

        .table thead {
            background: #f8fafc;
        }

        .table thead th {
            padding: 18px 24px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            color: #64748b;
            border-bottom: 1px solid #e2e8f0;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 20px 24px;
            vertical-align: middle;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
        }

        .table-hover tbody tr {
            transition: all 0.2s ease;
        }

        .table-hover tbody tr:hover {
            background-color: #f8fafc;
        }

        .table img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .1);
        }

        .number-circle {
            width: 32px;
            height: 32px;
            background: #e0e7ff;
            color: #4f46e5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .badge-status {
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            display: inline-block;
        }

        .badge-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .badge-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .badge-warning {
            background-color: rgba(245, 158, 11, 0.1);
            color: #d97706;
        }

        .btn {
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .btn-sm {
            padding: 6px 14px;
            font-size: 0.85rem;
            border-radius: 10px;
        }

        .btn-add {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border: none;
            color: white;
        }

        .btn-add:hover {
            color: white;
            opacity: 0.95;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.2);
        }

        .btn-outline-warning {
            border-color: rgba(245, 158, 11, 0.4);
            color: #d97706;
        }

        .btn-outline-warning:hover {
            background: #d97706;
            border-color: #d97706;
            color: white;
        }

        .btn-outline-danger {
            border-color: rgba(239, 68, 68, 0.4);
            color: #ef4444;
        }

        .btn-outline-danger:hover {
            background: #ef4444;
            border-color: #ef4444;
            color: white;
        }

        .navbar-custom {
            background: rgba(15, 23, 42, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar-brand {
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                ✨ Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <span class="navbar-text text-white-50 me-4 fw-semibold">
                    👋 สวัสดี, {{ session('user_logged_in') }}
                </span>
                <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">
                    ออกจากระบบ
                </a>
            </div>
        </div>
    </nav>

    <div class="container main-container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-dark">ตารางรายชื่อสมาชิก</h2>
            <a href="{{ route('add') }}" class="btn btn-add">
                + เพิ่มรายชื่อใหม่
            </a>
        </div>

        <div class="card">
            <div class="card-header-custom d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <h5 class="mb-0 fw-bold text-dark d-flex align-items-center gap-2">
                    👥 รายชื่อสมาชิกทั้งหมด
                </h5>
                <input type="text" class="form-control search-box" placeholder="🔍 ค้นหาสมาชิก...">
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูปโปรไฟล์</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>อีเมล</th>
                            <th>เบอร์โทร</th>
                            <th>สถานะการใช้งาน</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="number-circle">1</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100" alt="avatar">
                            </td>
                            <td class="fw-semibold">
                                สมชาย ใจดี
                            </td>
                            <td>
                                somchai@example.com
                            </td>
                            <td>
                                081-234-5678
                            </td>
                            <td>
                                <span class="badge-status badge-success">
                                    ✔ ใช้งานอยู่
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-outline-warning btn-sm">
                                        ✏️ แก้ไข
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('ยืนยันที่จะลบรายชื่อนี้หรือไม่?')">
                                        🗑 ลบ
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="number-circle">2</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="avatar">
                            </td>
                            <td class="fw-semibold">
                                สมหญิง รักเรียน
                            </td>
                            <td>
                                somying@example.com
                            </td>
                            <td>
                                089-876-5432
                            </td>
                            <td>
                                <span class="badge-status badge-danger">
                                    ✖ ระงับการใช้งาน
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-outline-warning btn-sm">
                                        ✏️ แก้ไข
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('ยืนยันที่จะลบรายชื่อนี้หรือไม่?')">
                                        🗑 ลบ
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="number-circle">3</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" alt="avatar">
                            </td>
                            <td class="fw-semibold">
                                นภา สงบใจ
                            </td>
                            <td>
                                napa@example.com
                            </td>
                            <td>
                                082-999-1122
                            </td>
                            <td>
                                <span class="badge-status badge-success">
                                    ✔ ใช้งานอยู่
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-outline-warning btn-sm">
                                        ✏️ แก้ไข
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('ยืนยันที่จะลบรายชื่อนี้หรือไม่?')">
                                        🗑 ลบ
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="number-circle">4</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100" alt="avatar">
                            </td>
                            <td class="fw-semibold">
                                วิชัย กล้าหาญ
                            </td>
                            <td>
                                wichai@example.com
                            </td>
                            <td>
                                085-444-5566
                            </td>
                            <td>
                                <span class="badge-status badge-warning">
                                    ⏳ รอการตรวจสอบ
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-outline-warning btn-sm">
                                        ✏️ แก้ไข
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('ยืนยันที่จะลบรายชื่อนี้หรือไม่?')">
                                        🗑 ลบ
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="number-circle">5</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100" alt="avatar">
                            </td>
                            <td class="fw-semibold">
                                อรอนงค์ งดงาม
                            </td>
                            <td>
                                onanong@example.com
                            </td>
                            <td>
                                087-111-2233
                            </td>
                            <td>
                                <span class="badge-status badge-danger">
                                    ✖ ระงับการใช้งาน
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-outline-warning btn-sm">
                                        ✏️ แก้ไข
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('ยืนยันที่จะลบรายชื่อนี้หรือไม่?')">
                                        🗑 ลบ
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
