<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','페이지 제목 없음')</title>
</head>
<body>
<div class="links">
    <a href="/hello">hello</a>
    <a href="/contact">contact</a>
</div>
@yield('content')
</body>
</html>
