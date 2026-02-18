    @extends('admin.app.panel')
    @section('title', 'ویرایش دسته ')
    @section('content')
    <form action="{{ route('category.update') }}" method="post">
        @csrf
        <div>
            <input type="hidden"  name="id" value="{{$category->id}}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"  value="{{$category->title}}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description"  value="{{$category->description}}">
        </div>
        <select name="parent_id">
            
            <option value="0" @if(!$category->parent) selected @endif>بدون والد</option>
            @foreach($categories as $cat)
                <option value="{{$cat->id}}" @if($cat->id == $category->parent_id) selected @endif >{{$cat->title}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>
    @endsection