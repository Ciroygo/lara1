<!DOCTYPE html>
<html lang="zh">
<head>
  <title>@yield('title', 'lara1 App') - 菜鸟磨砺计划</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')
<div class="container">
  <div class="offset-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
