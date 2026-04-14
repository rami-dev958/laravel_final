<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background:#f4f6f9; text-align:center; }
        form {
            background:white; padding:20px; margin:100px auto;
            width:300px; border-radius:10px; box-shadow:0 0 10px #ccc;
        }
        input { width:90%; padding:10px; margin:5px; }
        button {
            padding:10px; background:#28a745; color:white;
            border:none; border-radius:5px;
        }
    </style>
</head>
<body>

<form method="POST" action="/login">
    @csrf
    <h2>Login</h2>

    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif
</form>

</body>
</html>