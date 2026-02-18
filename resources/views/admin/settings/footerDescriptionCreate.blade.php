    @extends('admin.app.panel')
    @section('title', 'توضیحات فوتر')
    @section('content')
    <form action="{{ route('setting.upsertDescription') }}" method="post">
        @csrf
        <label for="description">
            Description : 
        </label>
        {{-- <input type="textarea" name="description"> --}}
        <textarea name="description" cols="40" rows="10"></textarea>
        <br><br>
        <button>ذخیره اطلاعات</button>
    </form>
    @endsection