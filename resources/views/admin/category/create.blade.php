<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <title>ایجاد دسته‌بندی جدید</title>
</head>
<body class="bg-gradient-to-br from-purple-50 to-pink-50 min-h-screen py-8 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- هدر -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">ایجاد دسته‌بندی جدید</h1>
            <p class="text-gray-600 mt-2">دسته‌بندی جدید خود را ایجاد کنید</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <form action="{{ route('category.store') }}" method="post" class="p-8" enctype="multipart/form-data">
                @csrf
                
                <!-- بخش اطلاعات دسته‌بندی -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-folder-plus ml-2 text-purple-500"></i>
                        اطلاعات دسته‌بندی
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- عنوان -->
                        <div>
                            <label for="title" class="block text-gray-700 font-medium mb-2">عنوان دسته‌بندی</label>
                            <div class="relative">
                                <input type="text" id="title" name="title" required 
                                       class="w-full px-4 py-3 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50"
                                       placeholder="عنوان دسته‌بندی را وارد کنید">
                                <i class="fas fa-heading absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>

                        <!-- والد -->
                        <div>
                            <label for="parent_id" class="block text-gray-700 font-medium mb-2">دسته‌بندی والد</label>
                            <div class="relative">
                                <select name="parent_id" id="parent_id"
                                        class="w-full px-4 py-3 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50 appearance-none">
                                    <option value="0"> بدون والد (دسته‌بندی اصلی)</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{ $category->title }}
                                        @if($category->parent)
                                            <span class="text-gray-400 text-sm">(زیرمجموعه {{ $category->parent->title }})</span>
                                        @endif
                                    </option>
                                    @endforeach
                                </select>
                                <i class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>
                        <div>
                            <label for="image" class="block text-gray-700 font-medium mb-2">عکس دسته</label>
                            <div class="relative">
                                <input type="file" name="image" 
                                       class="w-full px-4 py-3 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50">
                                <i class="fas fa-heading absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>
                        <!-- توضیحات -->
                        <div class="md:col-span-2">
                            <label for="description" class="block text-gray-700 font-medium mb-2">توضیحات</label>
                            <div class="relative">
                                <textarea id="description" name="description" rows="4"
                                       class="w-full px-4 py-3 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50"
                                       placeholder="توضیحات مربوط به دسته‌بندی را وارد کنید"></textarea>
                                <i class="fas fa-align-left absolute right-4 top-4 text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

             

                <!-- دکمه‌های فرم -->
                <div class="flex flex-col sm:flex-row gap-4 justify-end pt-6 border-t border-gray-200">
                    <button type="submit" 
                            class="px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white rounded-xl transition duration-200 shadow-md font-medium flex items-center justify-center order-1 sm:order-2">
                        <i class="fas fa-save ml-2"></i>
                        ایجاد دسته‌بندی
                    </button>
                </div>
            </form>
        </div>

     
    </div>
    <script>
        // مدیریت انتخاب آیکون
        document.querySelectorAll('.icon-option').forEach(option => {
            option.addEventListener('click', function() {
                // حذف انتخاب قبلی
                document.querySelectorAll('.icon-option').forEach(opt => {
                    opt.classList.remove('border-purple-500', 'bg-purple-50');
                });
                
                // انتخاب جدید
                this.classList.add('border-purple-500', 'bg-purple-50');
            });
        });

        // تنظیم اولین آیکون به عنوان پیشفرض
        document.addEventListener('DOMContentLoaded', function() {
            const firstIcon = document.querySelector('.icon-option');
            if (firstIcon) {
                firstIcon.classList.add('border-purple-500', 'bg-purple-50');
            }
        });

        // انیمیشن برای فیلدها
        document.querySelectorAll('input, select, textarea').forEach(element => {
            element.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-purple-200');
            });
            
            element.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-purple-200');
            });
        });

        // تغییر استایل هنگام انتخاب والد
        const parentSelect = document.getElementById('parent_id');
        parentSelect.addEventListener('change', function() {
            if (this.value !== '0') {
                this.classList.add('border-pink-400', 'bg-pink-50');
            } else {
                this.classList.remove('border-pink-400', 'bg-pink-50');
            }
        });
    </script>

    <style>
        .icon-option {
            transition: all 0.3s ease;
        }
        
        .icon-option:hover {
            transform: translateY(-2px);
        }
        
        input[type="radio"]:checked + .icon-option {
            border-color: #8b5cf6;
            background-color: #faf5ff;
            transform: scale(1.05);
        }
    </style>
</body>
</html>