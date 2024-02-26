<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAI Laravel</title>
    <!-- Add your CSS links here -->
</head>
<body>
<div style="display: flex;">
    <!-- Sidebar menu -->
    <div style="width: 200px; border-right: 1px solid #000;">
        <ul>
            <li><a href="{{ url('/page1') }}">Page 1</a></li>
            <li><a href="{{ url('/page2') }}">Page 2</a></li>
            <li><a href="{{ url('/page3') }}">Page 3</a></li>
        </ul>
    </div>
    <!-- Page Content -->
    <div style="flex-grow: 1; padding: 20px;">
        @yield('content')
    </div>
</div>
</body>
</html>
