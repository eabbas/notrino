    @extends('admin.app.panel')
    @section('title', 'ایجاد بنر سمت چپ')
    @section('content')
    <form action="{{ route('setting.upsertHeroBannerLeft') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="heroBanner">
            heroBannerLeft : 
        </label>
        <input type="file" name="heroBannerLeft">
        </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
    @endsection
