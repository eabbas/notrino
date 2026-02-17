<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('setting.upsertHeroBannerRight') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="heroBanner">
            heroBannerRight : 
        </label>
        <input type="file" name="heroBannerRigth">
        </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
</body>
</html>