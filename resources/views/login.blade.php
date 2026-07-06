<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Noto+Sans+Thai:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Outfit', 'Noto Sans Thai', sans-serif;
            background: radial-gradient(circle at 10% 20%, rgb(242, 235, 243) 0%, rgb(228, 237, 246) 90.7%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 450px;
            padding: 15px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .login-card:hover {
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.08);
        }

        .btn-submit {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            opacity: 0.95;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.25);
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background: #fff;
            border-color: #818cf8;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
        }

        .brand-logo {
            font-size: 2.5rem;
            display: inline-block;
            margin-bottom: 1rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card p-4 p-md-5">
        <div class="text-center mb-4">
            <span class="brand-logo">🔒</span>
            <h3 class="fw-bold text-dark mb-1">เข้าสู่ระบบ</h3>
            <p class="text-muted small">เข้าใช้งานแผงควบคุมระบบสมาชิก</p>
        </div>
        
        @if(request()->has('error'))
            <div class="alert alert-danger text-center border-0 small py-3" style="background-color: rgba(239, 68, 68, 0.1); color: #ef4444; border-radius: 12px;" role="alert">
                ⚠️ {{ request()->query('error') }}
            </div>
        @endif

        <form action="{{ url('/login-process') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold small text-secondary">ชื่อผู้ใช้ หรือ อีเมล</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username @ email" required autocomplete="username">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-semibold small text-secondary">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" style="cursor: pointer;">
                    <label class="form-check-label small text-secondary" for="remember" style="cursor: pointer; user-select: none;">จดจำฉันไว้</label>
                </div>
                <a href="#" class="text-decoration-none small fw-semibold" style="color: #4f46e5;">ลืมรหัสผ่าน?</a>
            </div>

            <div class="d-grid">
                <button type="submit" name="login_btn" class="btn btn-submit">ลงชื่อเข้าใช้งาน</button>
            </div>
        </form>

        <div class="text-center mt-4">
            <p class="mb-0 text-muted small">ยังไม่มีบัญชีผู้ใช้? <a href="#" class="text-decoration-none fw-semibold" style="color: #4f46e5;">สมัครสมาชิก</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>