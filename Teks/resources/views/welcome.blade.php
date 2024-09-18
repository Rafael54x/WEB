<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>{{ $text->content ?? 'Welcome to the simple Laravel app' }}</h1>
    <a href="{{ route('login') }}">Login to edit text</a>
</body>
</html>
