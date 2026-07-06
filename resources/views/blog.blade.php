@extends('layout')

@section('title', 'บทความ')

@section('content')
    <style>
        .blog-header {
            margin-bottom: 3rem;
        }

        .blog-card {
            border: 1px solid rgba(226, 232, 240, 0.8) !important;
            border-radius: 20px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            background: white;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05) !important;
            border-color: rgba(99, 102, 241, 0.3) !important;
        }

        .badge-status {
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 50px;
        }

        .badge-published {
            background-color: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .badge-draft {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .blog-icon-box {
            font-size: 2.5rem;
            background: #f8fafc;
            border-radius: 16px;
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <div class="blog-header text-center">
        <h1 class="fw-bold mb-2">บทความทั้งหมด</h1>
        <p class="text-muted">แบ่งปันความรู้ ประสบการณ์ และเรื่องราวดี ๆ สำหรับนักพัฒนา</p>
        <hr class="mx-auto" style="max-width: 100px; height: 3px; background: var(--primary-gradient); border: none; border-radius: 5px; opacity: 1;">
    </div>

    <div class="row g-4">
        @foreach ($blog as $item)
            <div class="col-md-6">
                <div class="card blog-card border-0 shadow-sm h-100 p-4">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="blog-icon-box">
                                📝
                            </div>
                            <div>
                                @if ($item['status'] == true)
                                    <span class="badge-status badge-published">✔ เผยแพร่</span>
                                @else
                                    <span class="badge-status badge-draft">✖ ไม่เผยแพร่</span>
                                @endif
                            </div>
                        </div>

                        <h4 class="fw-bold text-dark mb-3">{{ $item['title'] }}</h4>
                        <p class="text-muted flex-grow-1 mb-4" style="line-height: 1.6;">
                            {{ $item['content'] }}
                        </p>
                        
                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="text-muted small">โดย ผู้ดูแลระบบ</span>
                            <a href="#" class="text-decoration-none fw-bold" style="color: #4f46e5;">อ่านเพิ่มเติม →</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
