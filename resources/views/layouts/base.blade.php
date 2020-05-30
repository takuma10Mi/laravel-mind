<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<!--a. titleの置き場所 -->
<title>@yield('title')</title>
<!--Bootstrapのインポート-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.m in.css" />
</head>
<body>
<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
<!--b. mainコンテンツの置き場所 --> 
@section('main')
<p>既定のコンテンツです。</p> 
@show
<hr />
<p>Copyright(c) 1998-2019,WINGS Project. All Right Reserved.</p> </body>
</html>