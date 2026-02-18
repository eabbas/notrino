    @extends('admin.app.panel')
    @section('title', 'ایجاد اسلایدر')
    @section('content')
    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">
            SliderName : 
        </label>
        <input type="text" name="title">
    </br></br>
        <label for="slider">
            slider : 
        </label>
        <input type="file" name="sliders[]" multiple>
        </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
@endsection