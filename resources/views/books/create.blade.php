<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <style>
        body { font-family: Arial; background:#f4f6f9; text-align:center; }
        form {
            background:white; padding:20px; margin:50px auto;
            width:300px; border-radius:10px; box-shadow:0 0 10px #ccc;
        }
        input { width:90%; padding:10px; margin:5px; }
        button {
            padding:10px; background:#007bff; color:white;
            border:none; border-radius:5px;
        }
    </style>
</head>
<body>

<form method="POST" action="/store">
    @csrf

    <h2>Add Book</h2>

    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="author" placeholder="Author"><br>
    <input type="number" name="year_published" placeholder="Year"><br>

    <button type="submit">Save</button>
</form>

<a href="/">Back</a>

</body>
</html>