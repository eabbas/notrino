    @extends('admin.app.panel')
    @section('title', 'ادیت بنرهای فوتر')
    @section('content')
    <form action="{{ route('express.update') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <input type="hidden" name="id" value="{{ $express->id }}">
        <label for="expressName">نام سرویس اکسپرس:</label>
        <input type="text" name="expressName" value="{{ $express->title }}">
        <br><br>
        <label for="expressDescription">توضیحات سرویس:</label>
        <input type="text" name="description" value="{{ $express->description }}">
        <br><br>
        <label for="expressImage">عکس سرویس:</label>
        <input type="file" name="expressImage">
        <br><br>
        <button>ثبت</button>
    </form>
    @endsection