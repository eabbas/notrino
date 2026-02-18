    @extends('admin.app.panel')
    @section('title', 'ایجاد برندها')
    @section('content')


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
    @endsection