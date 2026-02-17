<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <table border=1>
        <thead>
               <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Parent</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    @if($category->description) {{ $category->description }}
                    @else
                        بدون توضیحات
                    @endif
                </td>
               
                {{-- <td>{{ $category->image }}</td> --}}
                <td>
                    @if($category->parent){{ $category->parent->title}} 
                    @else
                      دسته اصلی  
                    @endif
                </td>
                 <td>
                    <img src="{{ asset('storage/'.$category->image) }}" alt="">
                </td>
                <td>
                    <a href="{{ route('category.show', [$category]) }}">show</a>
                    <a href="{{ route('category.edit', [$category]) }}">edit</a>
                    <a href="{{ route('category.delete', [$category]) }}">delete</a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
</html>