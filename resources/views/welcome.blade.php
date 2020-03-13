@extends('layout')

@section('title')
    웰컴 페이지
@endsection

@section('content')
    라라벨 메인 컨텐츠 내용
    <?php var_dump($books);?>
    <br>
    <ul>
    <?php
        foreach ($books as $book){
            echo '<li>'.$book.'</li>';
        }
    ?>
    </ul>
    <ul>
    //보안성이 더 강하다
    @foreach($books as $book)
            <li>{{$book}}</li>
    @endforeach
    </ul>
@endsection
