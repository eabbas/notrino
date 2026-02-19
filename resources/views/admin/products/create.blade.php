@extends('admin.app.panel')
@section('title', 'ایجاد محصول')
@section('content')


<div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent">ایجاد محصول جدید</h1>
    </div>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            
            <!-- بخش اطلاعات محصول -->
            <div class="p-8 border-b border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-cube ml-2 text-orange-500"></i>
                    اطلاعات محصول
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="title" class="block text-gray-700 font-medium mb-2">عنوان محصول</label>
                        <div class="relative">
                            <input type="text" id="title" name="title" required 
                                   class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50">
                            <i class="fas fa-heading absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>

                    <div>
                        <label for="price" class="block text-gray-700 font-medium mb-2"> قیمت محصول</label>
                        <div class="relative">
                            <input type="text" id="price" name="price" required 
                                   class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50">
                            <i class="fas fa-heading absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <div>
                        <label for="discount" class="block text-gray-700 font-medium mb-2"> تخفیف محصول</label>
                        <div class="relative">
                            <input type="text" id="discount" name="discount" 
                                   class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50">
                            <i class="fas fa-heading absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <!-- چک‌باکس نمایش در صفحه اول - اصلاح شده برای تراز -->
                    <div class="flex items-center">
                        <div class="w-full">
                            <label class="block text-gray-700 font-medium mb-2 opacity-0">_</label>
                            <div class="flex items-center p-4 outline-none border-1 border-gray-200 rounded-xl bg-gray-50 hover:bg-gray-100 transition duration-200 h-[58px]">
                                <input type="checkbox" id="show_in_home" name="show_home" value="1"
                                       class="h-5 w-5 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                <label for="show_in_home" class="mr-3 text-gray-700 font-medium flex items-center cursor-pointer">
                                    <i class="fas fa-eye ml-2 text-orange-500"></i>
                                    نمایش در صفحه اول
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="description" class="block text-gray-700 font-medium mb-2">توضیحات محصول</label>
                        <div class="relative">
                            <textarea id="description" name="description" rows="4"
                                   class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50"></textarea>
                            <i class="fas fa-align-left absolute right-4 top-4 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="summary" class="block text-gray-700 font-medium mb-2">توضیح خلاصه محصول</label>
                        <div class="relative">
                            <textarea id="summary" name="summary" rows="2"
                                   class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50"></textarea>
                            <i class="fas fa-align-left absolute right-4 top-4 text-gray-400"></i>
                        </div>
                    </div>
                   
                </div>
            </div>

            <!-- بخش ویژگی‌ها -->
            <div class="p-8 border-b border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-list-alt ml-2 text-orange-500"></i>
                    ویژگی‌های محصول
                </h2>
                
                <div id="attributes-container">
                    <!-- ویژگی‌ها به صورت داینامیک اضافه می‌شوند -->
                    <div class="attribute-group mb-6 p-4 outline-none border-1 border-gray-200 rounded-lg bg-gray-50">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-4">
                            <!-- انتخاب کلید ویژگی -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">کلید ویژگی</label>
                                <input type="text" name="attribute_keys[]" 
                                    class="w-full px-4 py-3 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-white"
                                    placeholder="مثلا:رنگ , جنس">
                            </div>
                        
                            
                            <!-- واحد اندازه‌گیری -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">واحد اندازه‌گیری</label>
                                <input type="text" name="attribute_units[]" 
                                       class="w-full px-4 py-3 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-white"
                                       placeholder="مثلا: سانتی‌متر، کیلوگرم">
                            </div>
                        </div>
                        
                        <!-- دکمه حذف ویژگی -->
                        <div class="flex justify-end">
                            <button type="button" class="remove-attribute bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                                <i class="fas fa-trash ml-2"></i>
                                حذف ویژگی
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- دکمه افزودن ویژگی جدید -->
                <div class="flex justify-center mt-6">
                    <button type="button" id="add-attribute" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg transition duration-200 flex items-center">
                        <i class="fas fa-plus ml-2"></i>
                        افزودن ویژگی جدید
                    </button>
                </div>
            </div>

                             
            <!-- بخش آپلود رسانه -->
            <div class="p-8 border-b border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-images ml-2 text-orange-500"></i>
                    رسانه محصول
                </h2>
                
                <!-- mainImage -->
                <div class="mb-3">
                    <label class="block text-gray-700 font-medium mb-2">عکس اصلی</label>
                    <div class="relative">
                        <input type="file" name="mainImage" class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                        <i class="fas fa-camera absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <!-- پیش‌نمایش عکس‌ها -->
                    <div i3d="imagePreview" class="mt-4 grid grid-cols-3 gap-2 hidden">
                        <!-- پیش‌نمایش عکس‌ها اینجا نمایش داده می‌شود -->
                    </div>
                </div>
                
                <!-- gallery -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">تصاویر محصول</label>
                    <div class="relative">
                        <input type="file" name="gallery[]"  multiple
                            class="w-full px-4 py-3 pr-12 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                        <i class="fas fa-camera absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <!-- پیش‌نمایش عکس‌ها -->
                    <div i3d="imagePreview" class="mt-4 grid grid-cols-3 gap-2 hidden">
                        <!-- پیش‌نمایش عکس‌ها اینجا نمایش داده می‌شود -->
                    </div>
                </div>
            </div>

            <!-- بخش دسته‌بندی‌ها -->
            <div class="p-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-layer-group ml-2 text-orange-500"></i>
                    دسته‌بندی‌ها
                </h2>
                
                <div class="space-y-4">
                    @foreach ($categories as $category)
                        <div class="outline-none border-1 border-gray-200 rounded-lg p-4 bg-orange-50">
                            <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                <input type="checkbox" name="categories[]" value="{{$category->id}}" 
                                       class="h-5 w-5 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                <span class="font-medium text-gray-800">{{$category->title}}</span>
                            </label>
                            <div class="mt-3 pr-6 space-y-3">
                                @foreach($category->grandchild as $child)
                                <div class="outline-none border-1 border-gray-200 rounded-lg p-3 bg-white">
                                    <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                        <input type="checkbox" name="cat_id" value="{{$child->id}}" 
                                               class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                        <span class="text-gray-700">{{$child->title}}</span>
                                    </label>
                                    <div class="mt-2 pr-6 space-y-2">
                                        @foreach($child->grandchild as $grand)
                                        <div class="outline-none border-1 border-gray-200 rounded p-2 bg-orange-50">
                                            <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                                <input type="checkbox" name="cat_id" value="{{$grand->id}}" 
                                                class="h-3 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                                <span class="text-gray-700 text-sm">{{$grand->title}}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- دکمه ارسال با تم نارنجی -->
            <div class="px-8 py-6 bg-gray-50 border-t border-gray-100">
                <button type="submit" class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-medium py-4 px-6 rounded-xl transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center">
                    <i class="fas fa-plus-circle ml-2"></i>
                    ایجاد محصول
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // مدیریت ویژگی‌ها
    document.getElementById('add-attribute').addEventListener('click', function() {
        const container = document.getElementById('attributes-container');
        const newAttribute = document.createElement('div');
        newAttribute.className = 'attribute-group mb-6 p-4 outline-none border-1 border-gray-200 rounded-lg bg-gray-50';
        newAttribute.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">کلید ویژگی</label>
                    <input type="text" name="attribute_keys[]" 
                           class="w-full px-4 py-3 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-white"
                           placeholder="مثلا: رنگ جنس">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2">واحد اندازه‌گیری</label>
                    <input type="text" name="attribute_units[]" 
                           class="w-full px-4 py-3 outline-none border-1 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-white"
                           placeholder="مثلا: سانتی‌متر، کیلوگرم">
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="button" class="remove-attribute bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                    <i class="fas fa-trash ml-2"></i>
                    حذف ویژگی
                </button>
            </div>
        `;
        
        container.appendChild(newAttribute);
        
        // اضافه کردن event listener برای دکمه حذف
        newAttribute.querySelector('.remove-attribute').addEventListener('click', function() {
            newAttribute.remove();
        });
    });

    // مدیریت حذف ویژگی‌ها
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-attribute') || e.target.closest('.remove-attribute')) {
            const removeBtn = e.target.classList.contains('remove-attribute') ? e.target : e.target.closest('.remove-attribute');
            removeBtn.closest('.attribute-group').remove();
        }
    });

    // مدیریت آپلود عکس‌ها
    const imageInput = document.getElementById('images');
    const imagePreview = document.getElementById('imagePreview');
    const mediaPreview = document.getElementById('mediaPreview');

    if (imageInput) {
        imageInput.addEventListener('change', function() {
            // پاک کردن پیش‌نمایش قبلی
            if (mediaPreview) {
                mediaPreview.innerHTML = '';
                
                if (this.files && this.files.length > 0) {
                    Array.from(this.files).forEach(file => {
                        if (file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            
                            reader.onload = function(e) {
                                const imgContainer = document.createElement('div');
                                imgContainer.className = 'relative group';
                                
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.className = 'w-24 h-24 object-cover rounded-lg outline-none border-1 border-gray-200';
                                
                                const removeBtn = document.createElement('button');
                                removeBtn.type = 'button';
                                removeBtn.className = 'absolute -top-2 -left-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity';
                                removeBtn.innerHTML = '×';
                                removeBtn.onclick = function() {
                                    imgContainer.remove();
                                };
                                
                                imgContainer.appendChild(img);
                                imgContainer.appendChild(removeBtn);
                                mediaPreview.appendChild(imgContainer);
                            };
                            
                            reader.readAsDataURL(file);
                        }
                    });
                }
            }
        });
    }


    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const parentDiv = this.closest('div.border');
            if (parentDiv && this.checked) {
                parentDiv.classList.add('bg-orange-50', 'border-orange-300');
            } else if (parentDiv) {
                parentDiv.classList.remove('bg-orange-50', 'border-orange-300');
            }
        });
    });
</script>
@endsection