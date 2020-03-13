@extends('layout')
@section('title')
    헬로 페이지
@endsection
@section('content')
    헬로 컨텐츠 내용
    <ul>
        //보안성이 더 강하다
        @foreach($books as $book)
            <li>{{$book}}</li>
        @endforeach
    </ul>
@endsection
