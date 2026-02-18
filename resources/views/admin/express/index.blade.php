    @extends('admin.app.panel')
    @section('title', 'لیست بنرها')
    @section('content')
<section class="w-[99%] mt-5 md:w-[90%] mx-auto my-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
      @foreach ($footer_expresses as $express)
        <div class="flex justify-center items-center gap-2 bg-white border border-zinc-200 rounded-xl p-5">
          <div>
             <img src="{{ asset('storage/'.$express->icon) }}" alt="expresses">
          </div>
          <div class="flex flex-col gap-y-2">
            <div class="text-sm text-zinc-600">
             {{ $express->title }}
            </div>
            <div class="text-xs text-zinc-400">
            {{ $express->description }}
            </div>
          </div>
        </div>
        <a href="{{ route('express.edit', [$express]) }}">edit</a>
        <a href="{{ route('express.delete', [$express]) }}">delete</a>
        @endforeach
      </section>
    @endsection