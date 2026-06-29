<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการข้อมูล - รายชื่อสมาชิก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
            background: #eef2f7;
        }

        .main-container {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            overflow: hidden;
        }

        .card-header-custom {
            background: white;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .search-box {
            width: 280px;
        }

        .table {
            margin: 0;
        }

        .table thead {
            background: #212529;
            color: white;
        }

        .table thead th {
            padding: 16px;
            border: none;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .table-hover tbody tr {
            transition: .25s;
        }

        .table-hover tbody tr:hover {
            background: #f4f9ff;
            transform: scale(1.002);
        }

        .table img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .15);
        }

        .number-circle {
            width: 36px;
            height: 36px;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .badge {
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
        }

        .btn {
            border-radius: 10px;
        }

        .btn-warning {
            color: white;
        }

        .navbar {
            box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        }

        h2 {
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                Dashboard
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <span class="navbar-text text-white me-3">
                    สวัสดี, {{ session('user_logged_in') }}
                </span>

                <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">
                    ออกจากระบบ
                </a>

            </div>

        </div>

    </nav>

    <div class="container main-container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1 class="fw-bold">
            ตารางรายชื่อสมาชิก
            </h1>

            <a href="{{ route('add') }}" class="btn btn-success">
                + เพิ่มรายชื่อใหม่
            </a>

        </div>

        <div class="card">

            <div class="card-header-custom d-flex justify-content-between align-items-center">

                <h5 class="mb-0 fw-bold">
                    👥 รายชื่อสมาชิก
                </h5>

                <input type="text" class="form-control search-box" placeholder="🔍 ค้นหาสมาชิก">

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th>ลำดับ</th>

                            <th>รูป</th>

                            <th>ชื่อ-นามสกุล</th>

                            <th>อีเมล</th>

                            <th>เบอร์โทร</th>

                            <th>สถานะ</th>

                            <th class="text-center">
                                จัดการ
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <div class="number-circle">1</div>
                            </td>

                            <td>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100">
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
                                <span class="badge bg-success">
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
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100">
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
                                <span class="badge bg-danger">
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
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100">
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
                                <span class="badge bg-success">
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
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100">
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
                                <span class="badge bg-warning text-dark">
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
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100">
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
                                <span class="badge bg-danger">
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
