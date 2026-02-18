    @extends('admin.app.panel')
    @section('title', 'لیست برند ها')
    @section('content')
  


          @foreach ($brands as $brand)
   
          <div class="flex flex-row gap-3">
            <a class="flex flex-col justify-between items-center gap-3 w-full h-36 md:h-48 md:px-4 border border-zinc-100 rounded-2xl hover:shadow-lg transition">
              <div class="w-full h-44 flex justify-center items-center">
                <img src="{{ asset('storage/'.$brand->image) }}" alt="brands" class="max-w-24 md:max-w-32 mx-auto rounded-2xl">
                <p class="">{{ $brand->title }}</p>
                <a href="{{ route('brand.edit', [$brand]) }}">edit</a>
                <a href="{{ route('brand.delete', [$brand]) }}">delete</a>
              </div>
            </a>
        
          </div>
          @endforeach
       @endsection