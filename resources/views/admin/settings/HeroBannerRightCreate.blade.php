 @extends('admin.app.panel')
    @section('title', 'ایجاد بنر سمت راست')
    @section('content')
    <form action="{{ route('setting.upsertHeroBannerRight') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="heroBanner">
            heroBannerRight : 
        </label>
        <input type="file" name="heroBannerRigth">
        </br></br>
        <button>ذخیره اطلاعات</button>
    </form>
    @endsection