@extends('layout')

@section('title', 'เกี่ยวกับเรา')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">เกี่ยวกับเรา</h2>
        <hr>
        <p>
            ผู้พัฒนาระบบ : {{ $name }}

        </p>
        <p>
            วันที่ก่อตั้ง : {{ $date }}
        </p>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas est quisquam quam laudantium, eveniet,
            molestiae laborum reiciendis in asperiores eligendi perferendis maiores tempora eaque error molestias porro
            et tenetur voluptatem?</p>
    </div>
@endsection
