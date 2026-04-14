<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <style>
        body { font-family: Arial; background:#f4f6f9; text-align:center; }
        form {
            background:white; padding:20px; margin:50px auto;
            width:300px; border-radius:10px; box-shadow:0 0 10px #ccc;
        }
        input { width:90%; padding:10px; margin:5px; }
        button {
            padding:10px; background:#ffc107;
            border:none; border-radius:5px;
        }
    </style>
</head>
<body>

<form method="POST" action="/update/<?php echo e($book->id); ?>">
    <?php echo csrf_field(); ?>

    <h2>Edit Book</h2>

    <input type="text" name="title" value="<?php echo e($book->title); ?>"><br>
    <input type="text" name="author" value="<?php echo e($book->author); ?>"><br>
    <input type="number" name="year_published" value="<?php echo e($book->year_published); ?>"><br>

    <button type="submit">Update</button>
</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\resources\views/books/edit.blade.php ENDPATH**/ ?>