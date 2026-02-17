<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <title>Footer Configuration</title>
     
    <style>
        .column-card {
            transition: all 0.3s ease;
        }
        .column-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        .section-title {
            position: relative;
            padding-bottom: 10px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            border-radius: 2px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen p-4 md:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- هدر فرم -->
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-3">ستون های فوتر</h1>
            <p class="text-gray-600 max-w-3xl mx-auto">ویرایش و مدیریت محتوای پاورقی</p>
        </div>
        
        <!-- بخش ستون‌های فوتر -->
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 mb-10">
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                </div>
                <h2 class="section-title text-2xl font-bold text-gray-800">ستون های فوتر</h2>
            </div>
            
            <!-- ردیف اول: ۳ ستون -->
            <div class="mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- ستون ۱ -->
                    <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="id" value="1">
                        <div class="column-card bg-gradient-to-br from-blue-50 to-white border border-blue-100 rounded-xl p-6">
                            <div class="space-y-5">
                                <div class="flex items-center mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">ستون اول</h3>
                                </div>
                                                    
                                <div>
                                    <label for="column1_title" class="block text-sm font-medium text-gray-700 mb-2">
                                        عنوان ستون
                                    </label>
                                    <input type="text" id="column1_title" name="column_title" required
                                        class="w-full p-2 border border-gray-300 rounded-lg"
                                        placeholder="دسترسی سریع"
                                        value="<?php 
                                        foreach($allFooters as $footer){
                                            if($footer->column_id == 1 && $footer->key == null){
                                                echo $footer->column_title;
                                                break;
                                            }
                                        }
                                        ?>">
                                </div>
                            </div>
                            
                            <!-- لینک‌های ستون ۱ -->
                            <div class="w-full flex flex-col items-center mt-4" id="columnOne">
                                <?php
                                $i = 0;
                                foreach($allFooters as $footer){
                                    if($footer->column_id == 1 && $footer->key != null){
                                        echo '
                                        <div class="flex flex-row justify-center items-center gap-3 mb-3">
                                            <input type="text" name="footerLinks[1]['.$i.'][title]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->key.'" placeholder="عنوان">
                                            <input type="text" name="footerLinks[1]['.$i.'][link]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->value.'" placeholder="لینک">
                                        </div>';
                                        $i++;
                                    }
                                }
                                ?>
                            </div>
                            
                            <div class="w-full mb-5">
                                <button type="button" onclick="addLink(1)" 
                                    class="w-[160px] py-2 bg-blue-500 rounded-lg text-white mt-5 flex items-center cursor-pointer justify-center hover:bg-blue-600 transition">
                                    + افزودن زیرعنوان
                                </button>
                            </div>
                            
                         <div class="flex justify-end">
                                <button type="submit"
                                    class="px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    ذخیره
                                </button>      
                            </div>
                        </div>
                    </form>
                    
                    <!-- ستون ۲ -->
                    <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="id" value="2">
                        <div class="column-card bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-xl p-6">
                            <div class="flex items-center mb-6">
                                <h3 class="text-xl font-bold text-gray-800">ستون دوم</h3>
                            </div>
                            
                            <div class="space-y-5">
                                <div>
                                    <label for="column2_title" class="block text-sm font-medium text-gray-700 mb-2">
                                        عنوان ستون
                                    </label>
                                    <input type="text" id="column2_title" name="column_title" required
                                        class="w-full p-2 border border-gray-300 rounded-lg"
                                        placeholder="محبوب ترین برند ها"
                                        value="<?php 
                                        foreach($allFooters as $footer){
                                            if($footer->column_id == 2 && $footer->key == null){
                                                echo $footer->column_title;
                                                break;
                                            }
                                        }
                                        ?>">
                                </div>
                            </div>
                            
                            <!-- لینک‌های ستون ۲ -->
                            <div class="w-full flex flex-col items-center mt-4" id="columnTwo">
                                <?php
                                $j = 0;
                                foreach($allFooters as $footer){
                                    if($footer->column_id == 2 && $footer->key != null){
                                        echo '
                                        <div class="flex flex-row justify-center items-center gap-3 mb-3">
                                            <input type="text" name="footerLinks[2]['.$j.'][title]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->key.'" placeholder="عنوان">
                                            <input type="text" name="footerLinks[2]['.$j.'][link]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->value.'" placeholder="لینک">
                                        </div>';
                                        $j++;
                                    }
                                }
                                ?>
                            </div>
                            
                            <div class="w-full mb-5">
                                <button type="button" onclick="addLink(2)" 
                                    class="w-[160px] py-2 bg-blue-500 rounded-lg text-white mt-5 flex items-center cursor-pointer justify-center hover:bg-blue-600 transition">
                                    + افزودن زیرعنوان
                                </button>
                            </div>
                            
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    ذخیره
                                </button>      
                            </div>
                        </div>
                    </form>
                    
                    <!-- ستون ۳ -->
                    <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="id" value="3">
                        <div class="column-card bg-gradient-to-br from-green-50 to-white border border-green-100 rounded-xl p-6">
                            <div class="flex items-center mb-6">
                                <h3 class="text-xl font-bold text-gray-800">ستون سوم</h3>
                            </div>
                            
                            <div class="space-y-5">
                                <div>
                                    <label for="column3_title" class="block text-sm font-medium text-gray-700 mb-2">
                                        عنوان ستون
                                    </label>
                                    <input type="text" id="column3_title" name="column_title" required
                                        class="w-full p-2 border border-gray-300 rounded-lg"
                                        placeholder="ارتباط مستقیم "
                                        value="<?php 
                                        foreach($allFooters as $footer){
                                            if($footer->column_id == 3 && $footer->key == null){
                                                echo $footer->column_title;
                                                break;
                                            }
                                        }
                                        ?>">
                                </div>
                            </div>
                            
                            <!-- لینک‌های ستون ۳ -->
                            <div class="w-full flex flex-col items-center mt-4" id="columnThree">
                                <?php
                                $k = 0;
                                foreach($allFooters as $footer){
                                    if($footer->column_id == 3 && $footer->key != null){
                                        echo '
                                        <div class="flex flex-row justify-center items-center gap-3 mb-3">
                                            <input type="text" name="footerLinks[3]['.$k.'][title]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->key.'" placeholder="عنوان">
                                            <input type="text" name="footerLinks[3]['.$k.'][link]" 
                                                class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded" 
                                                value="'.$footer->value.'" placeholder="لینک">
                                        </div>';
                                        $k++;
                                    }
                                }
                                ?>
                            </div>
                            
                            <div class="w-full mb-5">
                                <button type="button" onclick="addLink(3)" 
                                    class="w-[160px] py-2 bg-blue-500 rounded-lg text-white mt-5 flex items-center cursor-pointer justify-center hover:bg-blue-600 transition">
                                    + افزودن زیرعنوان
                                </button>
                            </div>
                            
                           <div class="flex justify-end mt-5">
                                <button type="submit"
                                    class="px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    ذخیره
                                </button>      
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
<div class="mb-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- ستون ۴ -->
        <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="id" value="4">
            <div class="column-card bg-gradient-to-br from-yellow-50 to-white border border-yellow-100 rounded-xl p-6">
                <div class="flex items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">ستون چهارم</h3>
                </div>
                
                <div class="space-y-5">
                    <div>
                        <label for="column4_title" class="block text-sm font-medium text-gray-700 mb-2">
                            عنوان ستون
                        </label>
                        <input type="text" id="column4_title" name="column_title"
                               class="w-full p-2 border border-gray-300 rounded-lg"
                               placeholder="عنوان ستون چهارم"
                               value="<?php 
                               foreach($allFooters as $footer){
                                   if($footer->column_id == 4 && $footer->key == null){
                                       echo $footer->column_title;
                                       break;
                                   }
                               }?>">
                    </div>
                    
                    <div>
                        <label for="column4_image" class="block text-sm font-medium text-gray-700 mb-2">
                            تصویر
                        </label>
                        <input type="file" id="column4_image" name="column_image" class="w-full p-2 border border-gray-300 rounded-lg">
                        
                        
                    </div>
                </div>
                
                <div class="flex justify-end mt-5">
                    <button type="submit"
                        class="px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        ذخیره
                    </button>      
                </div>
            </div>
        </form>
        
        <!-- ستون ۵ -->
        <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="id" value="5">
            <div class="column-card bg-gradient-to-br from-red-50 to-white border border-red-100 rounded-xl p-6">
                <div class="flex items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">ستون پنجم</h3>
                </div>
                
                <div class="space-y-5">
                    <div>
                        <label for="column5_title" class="block text-sm font-medium text-gray-700 mb-2">
                            عنوان ستون
                        </label>
                        <input type="text" id="column5_title" name="column_title"
                               class="w-full p-2 border border-gray-300 rounded-lg"
                               placeholder="عنوان ستون پنجم"
                               value="<?php 
                               foreach($allFooters as $footer){
                                   if($footer->column_id == 5 && $footer->key == null){
                                       echo $footer->column_title;
                                       break;
                                   }
                               }?>">
                    </div>
                    
                    <div>
                        <label for="column5_image" class="block text-sm font-medium text-gray-700 mb-2">
                            تصویر
                        </label>
                        <input type="file" id="column5_image" name="column_image" class="w-full p-2 border border-gray-300 rounded-lg">
                        
                       
                    </div>
                </div>
                
                <div class="flex justify-end mt-5">
                    <button type="submit"
                        class="px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        ذخیره
                    </button>      
                </div>
        </form>
    </div>
    {{-- <form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
    @csrf
    <input type="hidden" name="id" value="6">
    
    <div class="column-card bg-gradient-to-br from-indigo-50 to-white border border-indigo-100 rounded-xl p-6">
        <div class="flex items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">ستون ششم</h3>
        </div>
        
        <div class="space-y-5">
            <!-- عنوان ستون -->
            <div>
                <label for="column6_title" class="block text-sm font-medium text-gray-700 mb-2">
                    عنوان ستون
                </label>
                <input type="text" id="column6_title" name="column_title"
                    value="{{ old('column_title', $mainFooter->column_title ?? '') }}"
                    class="w-full p-2 border border-gray-300 rounded-lg"
                    placeholder="شبکه های اجتماعی">
            </div>

            @php
        
                $existingLinks = [];
                foreach($allFooters as $footer){
                    if($footer->column_id == 6 && $footer->key !== null){
                        $existingLinks[] = [
                            'title' => $footer->key,
                            'link' => $footer->value
                        ];
                    }
                }
                
                
                if(empty($existingLinks)){
                    $existingLinks = array_fill(0, 4, ['title' => '', 'link' => '']);
                }
                
                $socialPlatforms = ['Eitaa', 'Instagram', 'WhatsApp', 'Telegram'];
            @endphp
            
            <div id="socialLinksContainer">
                @foreach($existingLinks as $index => $link)
                <div class="flex items-center gap-3 mb-3">
                    <input type="text" 
                        name="footerLinks[6][{{ $index }}][title]"
                        value="{{ old("footerLinks.6.$index.title", $link['title'] ?? $socialPlatforms[$index] ?? '') }}"
                        class="w-1/3 p-2 border border-gray-300 rounded-lg"
                        placeholder="نام شبکه اجتماعی">
                    
                    <input type="text" 
                        name="footerLinks[6][{{ $index }}][link]"
                        value="{{ old("footerLinks.6.$index.link", $link['link'] ?? '') }}"
                        class="w-2/3 p-2 border border-gray-300 rounded-lg"
                        placeholder="لینک شبکه اجتماعی">
                </div>
                @endforeach
            </div>
            
            <!-- دکمه اضافه کردن لینک جدید -->
            <button type="button" id="addSocialLink" 
                class="px-3 py-1 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                + افزودن شبکه اجتماعی جدید
            </button>
            
            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl">
                    ذخیره
                </button>      
            </div>
        </div>
    </div>
</form> --}}
<form action="{{ route('footer.store') }}" method="post" enctype='multipart/form-data'>
    @csrf
    <input type="hidden" name="id" value="6">
    
    <div class="column-card bg-gradient-to-br from-indigo-50 to-white border border-indigo-100 rounded-xl p-6">
        <div class="flex items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">ستون ششم </h3>
        </div>
        
        <div class="space-y-5">
            <!-- عنوان ستون -->
            <div>
                <label for="column6_title" class="block text-sm font-medium text-gray-700 mb-2">
                    عنوان ستون
                </label>
                 <input type="text" id="column6_title" name="column_title"
            class="w-full p-2 border border-gray-300 rounded-lg"
            placeholder="عنوان ستون ششم"
            value="<?php 
            foreach($allFooters as $footer){
                if($footer->column_id == 6 && $footer->key == null){
                    echo $footer->column_title;
                    break;
                }
            }?>">
            </div>

            @php
     
                $socialLinks = [];
                
           
                foreach($allFooters as $footer) {
                    if($footer->column_id == 6 && $footer->key !== null) {
                        $socialLinks[$footer->key] = $footer->value;
                    }
                }
   
                $socialPlatforms = [
                    'Eitaa' => 'آدرس ایتا',
                    'Instagram' => 'آدرس اینستاگرام',
                    'WhatsApp' => 'آدرس واتساپ', 
                    'Telegram' => 'آدرس تلگرام'
                ];
                
                $index = 0;
            @endphp
           
            <div id="socialLinksContainer">
                @foreach($socialPlatforms as $platform => $placeholder)
                {{-- @dd($platform) --}}
                <div class="flex items-center gap-3 mb-3">
                    <span class="w-1/4 text-gray-700 font-medium">{{ $platform }}</span>
                    <input type="hidden" 
                        name="footerLinks[6][{{ $index }}][title]" 
                        value="{{ $platform }}">
                    
                    <input type="text" 
                        name="footerLinks[6][{{ $index }}][link]"
                        value="{{ $socialLinks[$platform] ?? '' }}"
                        class="w-3/4 p-2 border border-gray-300 rounded-lg"
                        placeholder="{{ $placeholder }}">
                </div>
                @php $index++; @endphp
                @endforeach
            </div>
            
          

            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl">
                    ذخیره
                </button>      
            </div>
        </div>
    </div>
</form>


</div>
        </div>
    </div>
   
    <script>
    let counters = {
        1: <?php echo $i; ?>,
        2: <?php echo $j; ?>,
        3: <?php echo $k; ?>
    };
    
    function addLink(columnId) {
        const container = document.getElementById(`column${columnId === 1 ? 'One' : columnId === 2 ? 'Two' : 'Three'}`);
        const index = counters[columnId]++;
        
        const newLink = document.createElement('div');
        newLink.className = 'flex flex-row justify-center items-center gap-3 mb-3';
        newLink.innerHTML = `
            <input type="text" 
                   name="footerLinks[${columnId}][${index}][title]" 
                   class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded"
                   placeholder="عنوان">
            <input type="text" 
                   name="footerLinks[${columnId}][${index}][link]" 
                   class="w-[150px] outline-none border-1 border-gray-300 p-2 rounded"
                   placeholder="لینک">
        `;
        
        container.appendChild(newLink);
    }
    
    // تابع‌های قدیمی برای سازگاری
    function openDropdown() {
        addLink(1);
    }
    function openDropdownSecound() {
        addLink(2);
    }
    function openDropdownThird() {
        addLink(3);
    } 
document.getElementById('addSocialLink').addEventListener('click', function() {
    const container = document.getElementById('socialLinksContainer');
    const index = container.children.length;
    
    const newLinkDiv = document.createElement('div');
    newLinkDiv.className = 'flex items-center gap-3 mb-3';
    newLinkDiv.innerHTML = `
        <input type="text" 
            name="footerLinks[6][${index}][title]"
            class="w-1/3 p-2 border border-gray-300 rounded-lg"
            placeholder="نام شبکه اجتماعی">
        
        <input type="text" 
            name="footerLinks[6][${index}][link]"
            class="w-2/3 p-2 border border-gray-300 rounded-lg"
            placeholder="لینک شبکه اجتماعی">
    `;
    
    container.appendChild(newLinkDiv);
});

    </script>
    
</body>
</html>
