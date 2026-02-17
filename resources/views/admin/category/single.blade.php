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
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    @if($category->parent){{ $category->parent->title}} 
                    @else
                     بدون والد  
                    @endif
                </td>
                 <td>
                    <img src="{{ asset('storage/'.$category->image) }}" alt="">
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>