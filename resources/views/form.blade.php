@extends('layout')

@section('title', 'เขียนบทความใหม่')

@section('content')
    <div class="container" style="max-width: 600px;">
        <h2 class="text-center my-4">เขียนบทความใหม่</h2>

        <div class="card p-4 shadow-sm">
            <form method="post" action="/insert">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">ชื่อบทความ</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">เนื้อหา</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" cols="50"
                        rows="12">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    <a href="{{ route('blog') }}" class="btn btn-secondary">บทความทั้งหมด</a>
                </div>
            </form>
        </div>
    </div>
@endsection
