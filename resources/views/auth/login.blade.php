<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('login-process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" required>
            @error('email')
                <small>{{ $message }}</small>
            @enderror
            <label for="password">Password</label>
            <input type="password" name="password" required>
            @error('password')
                <small>{{ $message }}</small>
            @enderror
            <input type="submit">
        </form>
    </div>
</body>
</html>
