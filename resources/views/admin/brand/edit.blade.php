    @extends('admin.app.panel')
    @section('title', 'ویرایش برند')
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

    <form action="{{ route('brand.update') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <input type="hidden" name="id" value={{ $brand->id }}>
        <label for="title">اسم برند:</label>
        <input type="text" name="title" value={{ $brand->title }}>
    </br></br>
        <label for="image">تصویر برند:</label>
        <input type="file" name="brandImage">
</br></br>
        <button>ثبت</button>
    </form>
</body>
</html>