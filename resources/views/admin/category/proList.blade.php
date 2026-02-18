<div class="flex flex-row gap-3">
    @if(count($category->products))
        @foreach ($category->products as $product)
            @if($product->show_home == 1)
                <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                    
                    @php
                        $productMedia = $product->medias->where('product_id', $product->id)->first();
                    @endphp
                    
                    @if($productMedia)
                        <a href="" class="flex items-center justify-center">
                            <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
                        </a>
                    @endif
                    
                    <a href="" class="mb-3 text-xs md:text-sm">{{ $product->title }}</a>
                    
                    <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->summary }}</p>
                    
                    <span class="flex flex-row justify-between items-center mb-3">
                        <span class="flex gap-1 mt-4">
                            @foreach ($product->attributes as $attribute)
                                @if($attribute->product_id == $product->id)
                                    <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $attribute->value }};"></div>
                                @endif
                            @endforeach
                        </span>
                        
                        <span class="flex items-center gap-0.5">
                            <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                            <span class="text-xs text-(--color-zinc-500)">4.4</span>
                            <span class="">
                                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                                    <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                </svg>
                            </span>
                        </span>
                    </span>
                    
                    <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                        <span class="flex items-center text-base md:text-base gap-2">
                            {{ number_format($product->price) }}
                            <span>تومان</span>
                        </span>
                    </div>
                    
                </div>
            @endif
        @endforeach
    @else
        {{ "برای این دسته بندی محصولی وجود ندارد" }}
    @endif
</div>