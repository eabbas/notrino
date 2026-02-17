<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>expressForm</title>
</head>
<body>
    <form action="{{ route('express.store') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <label for="expressName">نام سرویس اکسپرس:</label>
        <input type="text" name="expressName">
        <br><br>
        <label for="expressDescription">توضیحات سرویس:</label>
        <input type="text" name="description">
        <br><br>
        <label for="expressImage">عکس سرویس:</label>
        <input type="file" name="expressImage">
        <br><br>
        <button>ثبت</button>
    </form>
</body>
</html>