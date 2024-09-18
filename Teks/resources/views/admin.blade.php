<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Edit Text</h1>
    @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <form method="POST" action="/admin/update">
    @csrf
        <textarea name="content">{{ $text->content ?? '' }}</textarea>
        <br>
        <button type="submit">Update Text</button>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    <button type="submit">Logout</button>
    </form>
</body>
</html>
