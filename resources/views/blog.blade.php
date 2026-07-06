@extends('layout')

@section('title', 'บทความ')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">บทความทั้งหมด</h2>
        <hr>
        @foreach ($blog as $item)
            <h4>{{ $item['title'] }}</h4>
            <p>{{ $item['content'] }}</p>
            @if ($item['status'] == true)
                <p class="text-success">สถานะ : เผยแพร่</p>
            @else
                <p class="text-danger">สถานะ : ไม่เผยแพร่</p>
            @endif
            <hr>
        @endforeach
    </div>
@endsection
