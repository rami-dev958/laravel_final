<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <style>
        body { font-family: Arial; background:#f4f6f9; text-align:center; }

        a {
            text-decoration:none; color:white;
            background:#007bff; padding:8px 12px;
            border-radius:5px;
        }

        table {
            margin:20px auto;
            border-collapse:collapse;
            width:70%;
            background:white;
        }

        th, td {
            padding:10px;
            border:1px solid #ddd;
        }

        th {
            background:#007bff;
            color:white;
        }

        tr:hover { background:#f1f1f1; }
    </style>
</head>
<body>

<h2>Books List</h2>

<a href="/create">Add Book</a>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th>Actions</th>
    </tr>

    @foreach($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year_published }}</td>
        <td>
            <a href="/edit/{{ $book->id }}">Edit</a>
            <a href="/delete/{{ $book->id }}">Hide</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>