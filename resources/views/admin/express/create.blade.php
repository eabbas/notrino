    @extends('admin.app.panel')
    @section('title', 'ایجاد بنر های فوتر')
    @section('content')
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
    @endsection