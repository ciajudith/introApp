<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>IAI Laravel</title>
</head>
<body>
<div class="banner">
    <h1>IAI TOGO LARAVEL</h1>
</div>
<div style="display: flex; flex-grow: 1;">
    <!-- Sidebar menu -->
    <div class="sidebar">
        @include("layouts.menu")
    </div>
    <!-- Page Content -->
    <div class="page-content">
        @yield('content')
    </div>
</div>
</body>
</html>
