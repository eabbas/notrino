
        <table border=1>
        <thead>
               <tr>
                <th>ID</th>
                <th>Title</th>
                <th>slider_img</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td>{{ $slider->title }}</td>
                <td>
                    <img src="{{ asset('storage/'.$slider->slider_img) }}" style="max-width: 300px; max-height : 300px" alt="">
                </td>
                <td>
                    <a href="{{ route('slider.edit', [$slider]) }}">edit</a>
                    <a href="{{ route('slider.delete', [$slider]) }}">delete</a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
</html>