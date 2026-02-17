<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('brand.store') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <label for="title">اسم برند:</label>
        <input type="text" name="title">
    </br></br>
        <label for="image">تصویر برند:</label>
        <input type="file" name="brandImage">
</br></br>
        <button>ثبت</button>
    </form>
</body>
</html>