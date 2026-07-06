<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อใหม่ | System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Noto+Sans+Thai:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Outfit', 'Noto Sans Thai', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            min-height: 100vh;
        }

        .main-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .form-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            transition: all 0.2s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #818cf8;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
        }

        .btn-submit {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            opacity: 0.95;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.25);
        }

        .btn-cancel {
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            border: 1px solid #e2e8f0;
            background: white;
            color: #64748b;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            background: #f1f5f9;
            color: #1e293b;
        }
    </style>
</head>
<body>

<div class="container main-container" style="max-width: 650px;">
    
    <div class="alert alert-warning border-0 shadow-sm mb-4 d-flex align-items-center p-3" style="background-color: rgba(245, 158, 11, 0.1); color: #d97706; border-radius: 16px;" role="alert">
        <div>
            <strong>⚠️ หมายเหตุ:</strong> หน้านี้อยู่ระหว่างการพัฒนา (ระบบฟอร์มจำลอง ยังไม่มีการบันทึกข้อมูลลงฐานข้อมูลจริง)
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="color: #0f172a;">เพิ่มสมาชิกใหม่</h2>
        <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary px-3 py-2" style="border-radius: 10px;">
            ← กลับหน้าหลัก
        </a>
    </div>

    <div class="card form-card p-4 p-md-5">
        <form action="#" method="GET" onsubmit="alert('จำลองการส่งข้อมูลสำเร็จ (ยังไม่ลง Database)'); return false;">
            
            <div class="mb-3">
                <label class="form-label fw-semibold small text-secondary">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" placeholder="เช่น สมชาย ใจดี" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-secondary">อีเมล</label>
                <input type="email" class="form-control" placeholder="เช่น somchai@example.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-secondary">เบอร์โทรศัพท์</label>
                <input type="tel" class="form-control" placeholder="เช่น 081-234-5678" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-secondary">สถานะการใช้งาน</label>
                <select class="form-select">
                    <option value="active">ใช้งานอยู่ (Active)</option>
                    <option value="inactive">ระงับการใช้งาน (Inactive)</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold small text-secondary">อัปโหลดรูปโปรไฟล์</label>
                <input type="file" class="form-control" accept="image/*">
            </div>

            <hr class="my-4" style="border-color: #e2e8f0;">

            <div class="d-flex gap-3 justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-cancel">ยกเลิก</a>
                <button type="submit" class="btn btn-submit">💾 บันทึกข้อมูล (จำลอง)</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>