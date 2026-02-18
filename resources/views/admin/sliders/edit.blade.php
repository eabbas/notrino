    @extends('admin.app.panel')
    @section('title', 'ادیت اسلایدر')
    @section('content')
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
    @endsection