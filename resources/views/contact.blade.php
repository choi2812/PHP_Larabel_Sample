@extends('layout')

@section('content')
    컨텍트 컨텐츠 내용
    <ul>
        //보안성이 더 강하다
        @foreach($books as $book)
            <li>{{$book}}</li>
        @endforeach
    </ul>
@endsection
