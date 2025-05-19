<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>Welcome to your dashboard, {{ auth()->user()->first_name ?? auth()->user()->email }}!</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
