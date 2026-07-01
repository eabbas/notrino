@extends('admin.app.panel')
@section('title', 'ویرایش محصول')
@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-l from-orange-500 to-orange-600 px-6 py-4">
            <h3 class="text-xl font-bold text-white">ویرایش محصول</h3>
        </div>
        
        <div class="p-6">
            <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                
                <!-- اطلاعات اصلی محصول -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">عنوان محصول</label>
                        <input type="text" name="title" id="title" 
                               class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                               value="{{ $product->title }}" required>
                    </div>
                    
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">قیمت (تومان)</label>
                        <input type="number" name="price" id="price" 
                               class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                               value="{{ $product->price }}" required>
                    </div>
                    
                    <div>
                        <label for="discount" class="block text-sm font-medium text-gray-700 mb-1">درصد تخفیف</label>
                        <input type="number" name="discount" id="discount" 
                               class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                               value="{{ $product->discount }}" min="0" max="100">
                    </div>

                    <!-- بخش برند -->
                    <div>
                        <label for="brand_id" class="block text-sm font-medium text-gray-700 mb-1">برند محصول</label>
                        <select name="brand_id" id="brand_id" 
                                class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50">
                            <option value="">-- انتخاب برند --</option>
                            @if(isset($brands) && count($brands) > 0)
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->title }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>هیچ برندی یافت نشد</option>
                            @endif
                        </select>
                        <small class="text-gray-500 text-xs mt-1 block">برای افزودن برند جدید به بخش مدیریت برندها مراجعه کنید.</small>
                    </div>
                    
                    <div class="flex items-center mt-6">
                        <input type="checkbox" name="not_show_home" id="not_show_home" 
                               class="w-5 h-5 rounded border-gray-300 text-orange-500 focus:ring-orange-300"
                               value="1" {{ $product->not_show_home ? 'checked' : '' }}>
                        <label class="mr-2 text-sm text-gray-700" for="not_show_home">عدم نمایش در صفحه اصلی</label>
                    </div>
                </div>
                
                <!-- توضیحات -->
                <div class="mt-4">
                    <label for="summary" class="block text-sm font-medium text-gray-700 mb-1">خلاصه توضیحات</label>
                    <textarea name="summary" id="summary" rows="3" 
                              class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50">{{ $product->summary }}</textarea>
                </div>
                
                <div class="mt-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">توضیحات کامل</label>
                    <textarea name="description" id="description" rows="5" 
                              class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50">{{ $product->description }}</textarea>
                </div>
                
                <hr class="my-6 border-gray-200">
                
                <!-- تصاویر محصول -->
                <h5 class="text-lg font-bold text-gray-800 mb-4">تصاویر محصول</h5>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- تصویر اصلی -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">تصویر اصلی فعلی</label>
                        @if($mainImage)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $mainImage->path) }}" alt="تصویر اصلی" 
                                     class="max-w-xs max-h-48 rounded-lg shadow-md">
                                <div class="mt-2">
                                    <label class="inline-flex items-center text-sm text-red-600 hover:text-red-700 cursor-pointer">
                                        <input type="checkbox" name="remove_main_image" value="1" class="mr-1">
                                        حذف تصویر اصلی
                                    </label>
                                </div>
                            </div>
                        @else
                            <p class="text-gray-500 text-sm">تصویر اصلی وجود ندارد</p>
                        @endif
                        
                        <label for="mainImage" class="block text-sm font-medium text-gray-700 mt-3 mb-1">تصویر اصلی جدید</label>
                        <input type="file" name="mainImage" id="mainImage" 
                               class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                               accept="image/*">
                    </div>
                    
                    <!-- گالری تصاویر -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">گالری تصاویر فعلی</label>
                        @if($gallery->count() > 0)
                            <div class="grid grid-cols-3 gap-2 mb-3">
                                @foreach($gallery as $image)
                                    <div class="relative group">
                                        <img src="{{ asset('storage/' . $image->path) }}" alt="گالری" 
                                             class="w-full h-24 object-cover rounded-lg shadow-sm">
                                        <div class="absolute top-1 left-1">
                                            <label class="inline-flex items-center text-xs text-red-600 bg-white px-2 py-1 rounded shadow cursor-pointer hover:bg-red-50 transition-colors">
                                                <input type="checkbox" name="remove_gallery[]" value="{{ $image->id }}" class="ml-1">
                                                حذف
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500 text-sm">تصویر گالری وجود ندارد</p>
                        @endif
                        
                        <label for="gallery" class="block text-sm font-medium text-gray-700 mt-3 mb-1">افزودن تصاویر جدید به گالری</label>
                        <input type="file" name="gallery[]" id="gallery" 
                               class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                               accept="image/*" multiple>
                    </div>
                </div>
                
                <hr class="my-6 border-gray-200">
                
                <!-- ویژگی‌های محصول -->
                <h5 class="text-lg font-bold text-gray-800 mb-4">ویژگی‌های محصول</h5>
                
                <div id="attributes-container" class="space-y-2">
                    @foreach($attributes as $index => $attribute)
                    <div class="attribute-row grid grid-cols-1 md:grid-cols-5 gap-2 items-center">
                        <div class="md:col-span-2">
                            <input type="text" name="attribute_keys[]" 
                                   class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                   placeholder="عنوان ویژگی" value="{{ $attribute->key }}" required>
                        </div>
                        <div class="md:col-span-2">
                            <input type="text" name="attribute_units[]" 
                                   class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                   placeholder="مقدار ویژگی" value="{{ $attribute->value }}" required>
                        </div>
                        <div class="md:col-span-1">
                            <button type="button" 
                                    class="remove-attribute w-full md:w-auto px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-xl transition-colors duration-200 text-sm">
                                حذف
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <button type="button" id="add-attribute" 
                        class="mt-3 px-6 py-2 bg-green-500 hover:bg-green-600 text-white rounded-xl transition-colors duration-200 text-sm">
                    افزودن ویژگی جدید
                </button>
                
                <hr class="my-6 border-gray-200">
                
                <!-- دسته‌بندی -->
                <h5 class="text-lg font-bold text-gray-800 mb-4">دسته‌بندی</h5>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($categories as $category)
                    <div class="border border-gray-200 rounded-xl p-4" style="background-color: #FFF0F5;">
                        <!-- دسته اصلی -->
                        <div class="flex items-center gap-2 mb-3">
                            <input type="checkbox" name="categories[]" value="{{$category->id}}" 
                                   id="category_{{ $category->id }}" 
                                   {{ in_array($category->id, $productCategories) ? 'checked' : '' }} 
                                   class="w-4 h-4 rounded border-gray-300 text-orange-500 focus:ring-orange-300">
                            <label for="category_{{ $category->id }}" class="font-medium text-gray-800 text-sm">
                                {{$category->title}}
                            </label>
                        </div>
                        
                        <!-- زیردسته‌ها -->
                        <div class="mr-4 space-y-2">
                            @foreach($category->grandchild as $child)
                            <div class="border border-gray-200 rounded-lg p-3 bg-white">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="categories[]" value="{{$child->id}}" 
                                           id="child_{{ $child->id }}"
                                           class="w-4 h-4 rounded border-gray-300 text-orange-500 focus:ring-orange-300">
                                    <label for="child_{{ $child->id }}" class="text-gray-700 text-sm">
                                        {{$child->title}}
                                    </label>
                                </div>
                                
                                <!-- زیرزیردسته‌ها -->
                                @if($child->grandchild->count() > 0)
                                <div class="mr-4 mt-2 space-y-1">
                                    @foreach($child->grandchild as $grand)
                                    <div class="border border-gray-200 rounded p-2" style="background-color: #F8F8FF;">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" name="categories[]" value="{{$grand->id}}" 
                                                   id="grand_{{ $grand->id }}"
                                                   class="w-3 h-4 rounded border-gray-300 text-orange-500 focus:ring-orange-300">
                                            <label for="grand_{{ $grand->id }}" class="text-gray-700 text-xs">
                                                {{$grand->title}}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <hr class="my-6 border-gray-200">
                
                <!-- دکمه‌ها -->
                <div class="flex flex-col sm:flex-row justify-between gap-3">
                    <a href="{{ route('product.list') }}" 
                       class="px-6 py-2.5 bg-gray-500 hover:bg-gray-600 text-white rounded-xl transition-colors duration-200 text-center">
                        بازگشت
                    </a>
                    <button type="submit" 
                            class="px-6 py-2.5 bg-gradient-to-l from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-xl transition-all duration-300 shadow-lg shadow-orange-200">
                        بروزرسانی محصول
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('add-attribute').addEventListener('click', function() {
        const container = document.getElementById('attributes-container');
        const newRow = document.createElement('div');
        newRow.className = 'attribute-row grid grid-cols-1 md:grid-cols-5 gap-2 items-center';
        newRow.innerHTML = `
            <div class="md:col-span-2">
                <input type="text" name="attribute_keys[]" 
                       class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                       placeholder="عنوان ویژگی" required>
            </div>
            <div class="md:col-span-2">
                <input type="text" name="attribute_units[]" 
                       class="w-full px-4 py-2 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                       placeholder="مقدار ویژگی" required>
            </div>
            <div class="md:col-span-1">
                <button type="button" 
                        class="remove-attribute w-full md:w-auto px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-xl transition-colors duration-200 text-sm">
                    حذف
                </button>
            </div>
        `;
        container.appendChild(newRow);
    });
    
    document.addEventListener('click', function(e) {
        if(e.target.classList.contains('remove-attribute')) {
            e.target.closest('.attribute-row').remove();
        }
    });
</script>

@endsection