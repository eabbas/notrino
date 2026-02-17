<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <input type="text" id="description" name="description"  value="{{$category->description}}" required>
        </div>
        <select name="parent_id">
            
            <option value="0" @if(!$category->parent) selected @endif>بدون والد</option>
            @foreach($categories as $cat)
                <option value="{{$cat->id}}" @if($cat->id == $category->parent_id) selected @endif >{{$cat->title}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>