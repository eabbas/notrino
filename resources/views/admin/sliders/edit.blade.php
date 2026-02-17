<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('slider.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $slider->id }}">
        <label for="title">
            SliderName : 
        </label>
        <input type="text" name="title" value={{ $slider->title }}>
    </br></br>
        <label for="slider">
            slider : 
        </label>
        <input type="file" name="sliders[]" multiple>
        </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
</body>
</html>