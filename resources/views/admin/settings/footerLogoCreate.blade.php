    @extends('admin.app.panel')
    @section('title', 'لوگوی فوتر')
    @section('content')
    <form action="{{ route('setting.upsertLogo') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <label for="footer_logo">
            Logo : 
        </label>
        <input type="file" name="footerImage">
    </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
    @endsection