{{-- <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشاهده محصول - {{ $product->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .product-image {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            background: white;
        }
        .gallery-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .gallery-image:hover {
            transform: scale(1.1);
            border-color: #007bff;
        }
        .info-box {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .info-label {
            font-weight: bold;
            color: #495057;
            min-width: 120px;
        }
        .price-original {
            text-decoration: line-through;
            color: #dc3545;
            font-size: 0.9rem;
        }
        .price-final {
            color: #28a745;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .discount-badge {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        .attribute-item {
            border-bottom: 1px dashed #dee2e6;
            padding: 10px 0;
        }
        .attribute-item:last-child {
            border-bottom: none;
        }
        .back-btn {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- دکمه بازگشت -->
        <div class="back-btn">
            <a href="{{ route('product.list') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-right"></i> بازگشت به لیست محصولات
            </a>
        </div>

        <div class="row">
            <!-- ستون راست - تصاویر -->
            <div class="col-md-5">
                <div class="info-box">
                    <h4 class="mb-3">تصاویر محصول</h4>
                    
                    <!-- تصویر اصلی -->
                    @if($mainImage)
                        <img src="{{ asset('storage/' . $mainImage->path) }}" 
                             alt="{{ $product->title }}" 
                             class="product-image mb-3"
                             id="mainProductImage">
                    @else
                        <div class="alert alert-secondary text-center">
                            <i class="fa fa-image fa-3x mb-2"></i>
                            <p>تصویر اصلی وجود ندارد</p>
                        </div>
                    @endif

                    <!-- گالری تصاویر -->
                    @if($gallery->count() > 0)
                        <h5 class="mt-3">گالری تصاویر</h5>
                        <div class="d-flex flex-wrap">
                            @foreach($gallery as $image)
                                <img src="{{ asset('storage/' . $image->path) }}" 
                                     alt="گالری" 
                                     class="gallery-image"
                                     onclick="document.getElementById('mainProductImage').src = this.src">
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <!-- ستون چپ - اطلاعات محصول -->
            <div class="col-md-7">
                <!-- عنوان و وضعیت -->
                <div class="info-box">
                    <div class="d-flex justify-content-between align-items-start">
                        <h2>{{ $product->title }}</h2>
                        <div>
                            @if($product->show_home == 1)
                                <span class="badge bg-success">نمایش در صفحه اصلی</span>
                            @else
                                <span class="badge bg-secondary">عدم نمایش در صفحه اصلی</span>
                            @endif
                        </div>
                    </div>
                    
                    <hr>

                    <!-- خلاصه -->
                    @if($product->summary)
                        <div class="mb-3">
                            <span class="info-label">خلاصه:</span>
                            <p class="mt-2">{{ $product->summary }}</p>
                        </div>
                    @endif
                </div>

                <!-- اطلاعات قیمت -->
                <div class="info-box">
                    <h4 class="mb-3">اطلاعات قیمت</h4>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="info-label">قیمت اصلی:</span>
                                <span class="price-original">{{ number_format($product->price) }} تومان</span>
                            </div>
                        </div>
                        
                        @if($product->discount > 0)
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="info-label">درصد تخفیف:</span>
                                <span class="discount-badge">{{ $product->discount }}%</span>
                            </div>
                        </div>
                        @endif
                        
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <span class="info-label">قیمت نهایی:</span>
                                <span class="price-final">{{ number_format($finalPrice) }} تومان</span>
                            </div>
                        </div>
                        
                       
                        
                       
                    </div>
                </div>

                <!-- دسته‌بندی‌ها -->
                @if($categories->count() > 0)
                <div class="info-box">
                    <h4 class="mb-3">دسته‌بندی‌ها</h4>
                    <div>
                        @foreach($categories as $category)
                            <span class="badge bg-info p-2 m-1">{{ $category->title }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- ویژگی‌ها -->
                @if($attributes->count() > 0)
                <div class="info-box">
                    <h4 class="mb-3">ویژگی‌های محصول</h4>
                    <div class="attributes-list">
                        @foreach($attributes as $attribute)
                            <div class="attribute-item d-flex">
                                <span class="info-label">{{ $attribute->key }}:</span>
                                <span>{{ $attribute->value }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- توضیحات -->
                @if($product->description)
                <div class="info-box">
                    <h4 class="mb-3">توضیحات کامل</h4>
                    <div class="description-text">
                        {!! nl2br(e($product->description)) !!}
                    </div>
                </div>
                @endif

             
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html> --}}

<!DOCTYPE html>
<html lang="fe" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <link rel="Icon" href="img/icons8-mobile-phone-48.png" />
    <title>فروشگاه نوترینو</title>
</head>
<body class="overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
  <div class="max-w-[1700px] mx-auto">
    <header class="fixed top-0 w-full z-50">
        <!-- top -->
        <section class="relative z-50 max-w-[1700px] h-20 bg-white flex justify-between items-center px-1 md:px-20 shadow-xl">
          <!-- menu-mobile -->
          <div id="hambeger" class="sticy md:absolute">
            <div class="menu-mobile sticy md:absolute md:hidden" onclick="Hamberger('open',this)">
              <svg class=" sticy md:absolute md:hidden fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
            </div>
            <div class="menu-mobile-slid fixed z-50 top-0 -right-full pt-10 flex flex-col bg-white h-[100vh] w-[70%] gap-10 shadow-2xl overflow-y-auto
            [&::-webkit-scrollbar]:w-1.5
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
              <div class=" w-[90%] h-12 bg-(--color-zinc-100) mx-auto flex justify-between p-3 items-center rounded-2xl">
                <input type="text" name="" placeholder="جستجوی محصول" class="outline-none">
                  <button>
                    <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                      <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </button>
              </div>
              <ul class="flex flex-col justify-start gap-10 px-8">
                <li class="hover:text-(--color-primary-500)">صفحه اصلی</li>
                <div class="labal_3 relative">
                  <li class="svg flex items-center text-center hover:text-(--color-primary-500)">
                    محصولات
                    <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                      <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                  </li>
                  <div class="labal_3-3 absolute z-10 w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">موبایل</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">کاور</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">پاوربانک</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">ایپاد</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">هدفون</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">شارژر</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">LCD</a></li>
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">لوازم جانبی موبایل</a></li>
                  </div>
                </div>
                <li class="hover:text-(--color-primary-500)">درباره ما</li>
                <li class="hover:text-(--color-primary-500)">تماس با ما</li>
                <li class="hover:text-(--color-primary-500)">بلاگ</li>
              </ul>
            </div>
            
            <div id="garah" onclick="Hamberger('close',this)" class="w-full h-dvh absolute bg-black/50 top-0 right-full z-30">
            </div>
          </div>
            <!-- logo -->
          <a href="#" class="relative">
            <img src="img/logo/Screenshot 2025-12-16 063243.png" alt="logo" class="w-35 md:w-50">
            <!-- icon -->
            <div class="absolute -bottom-5.5">
              <svg class="hidden md:flex" width="158" height="19" viewBox="0 0 158 19" fill="white" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4623_10410)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M101.486 -121.419C121.078 -114.984 140.312 -105 160.935 -105H506.5C535.495 -105 559 -81.4949 559 -52.5V-52.5C559 -23.5051 535.495 0 506.5 0H158.936C138.871 0 120.093 9.46189 100.984 15.5822C94.0537 17.8017 86.6668 19 79 19C71.3332 19 63.9463 17.8017 57.0164 15.5822C37.9074 9.46189 19.1287 0 -0.936457 0H-1468.5C-1497.49 0 -1521 -23.5051 -1521 -52.5V-52.5C-1521 -81.4949 -1497.49 -105 -1468.5 -105H-2.93493C17.6877 -105 36.9216 -114.984 56.5145 -121.419C63.5893 -123.743 71.1478 -125 79 -125C86.8522 -125 94.4107 -123.743 101.486 -121.419Z" fill="white"></path>
                </g>
                <defs>
                  <clipPath id="clip0_4623_10410">
                    <rect width="158" height="19" fill="white"></rect>
               </clipPath>
              </defs>
            </svg>
          </div>
        </a>
        <!-- search -->
        <div class=" w-[400px] h-12 bg-(--color-zinc-100) hidden md:flex justify-between p-3 items-center rounded-2xl">
          <input type="text" name="" placeholder="جستجوی محصول" class="outline-none">
          <button>
            <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
          </button>
        </div>
        <!-- buttons -->
        <div class="gap-2 flex">
          <!-- login / register -->
          <div class="labal_1 relative">
            <button class=" relative flex border border-(--color-zinc-200) p-2 px-3 rounded-xl hover:shadow-xl">
              <span class="hidden md:block">حساب کاربری</span>
              <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Iconly/Light/Profile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g class="stroke-gray-800" id="Profile" transform="translate(4.000000, 2.500000)" stroke="#200E32" stroke-width="1.5">
                    <circle id="Ellipse_736" cx="7.57896359" cy="4.77803206" r="4.77803206"></circle>
                    <path d="M5.32907052e-15,16.2013731 C-0.00126760558,15.8654831 0.0738531734,15.5336997 0.219695816,15.2311214 C0.677361723,14.3157895 1.96797958,13.8306637 3.0389178,13.610984 C3.81127745,13.4461621 4.59430539,13.3360488 5.38216724,13.2814646 C6.84083861,13.1533327 8.30793524,13.1533327 9.76660662,13.2814646 C10.5544024,13.3366774 11.3373865,13.4467845 12.1098561,13.610984 C13.1807943,13.8306637 14.4714121,14.270023 14.929078,15.2311214 C15.2223724,15.8479159 15.2223724,16.5639836 14.929078,17.1807781 C14.4714121,18.1418765 13.1807943,18.5812358 12.1098561,18.7917621 C11.3383994,18.9634099 10.5550941,19.0766219 9.76660662,19.1304349 C8.57936754,19.2310812 7.38658584,19.2494317 6.19681255,19.1853548 C5.92221301,19.1853548 5.65676678,19.1853548 5.38216724,19.1304349 C4.59663136,19.077285 3.8163184,18.9640631 3.04807112,18.7917621 C1.96797958,18.5812358 0.686515041,18.1418765 0.219695816,17.1807781 C0.0745982583,16.8746908 -0.000447947969,16.5401098 5.32907052e-15,16.2013731 Z" id="Path_33945"></path>
                  </g>
                </g>
              </svg>
            </button>
            <!-- Modal file -->
          <div id="modal-1" class="Mymodal fixed inset-0 z-50 hidden bg-black/40 flex items-center justify-center">
            <div class="modal-content relative w-full max-w-7xl max-h-[90vh] transform scale-95 opacity-0 transition-all duration-300">
              <div class="bg-white rounded-2xl mx-auto border border-(--color-zinc-200) w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4">
                <img class="w-32 mx-auto" src="./assets/image/logo.png" alt="">
                <div class="mt-5 text-lg font-semibold text-zinc-800">
                  ورود یا ثبت نام
                </div>
                <div class="my-4 text-xs text-zinc-500">
                  لطفا شماره موبایل خود را وارد کنید
                </div>
                <div class="flex flex-col gap-y-1">
                  <input type="tel" placeholder="شماره تلفن" name="" class="placeholder:text-right text-sm block w-full rounded-md border border-gray-300 px-3 py-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-500 focus:outline-none">
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-10 py-3 rounded-lg text-white bg-gradient-to-bl from-primary-600 to-primary-800 hover:opacity-85 transition">
                </a>
              </div>
              <!-- verify -->
              <!-- <div class="bg-white rounded-2xl mx-auto border border-(--color-zinc-200) w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4">
                <img class="w-32 mx-auto" src="./assets/image/logo.png" alt="">
                <div class="mt-5 text-lg font-semibold text-zinc-800">
                  تایید شماره موبایل
                </div>
                <div class="my-4 text-xs text-zinc-500">
                  لطفا کد 6 رقمی ارسال شده به شماره تلفن 09018741677 را وارد کنید.
                </div>
                <div class="input-field mb-5 flex flex-row-reverse gap-x-4 justify-center">
                  <input name="code" class="code-input 213 border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-(--color-zinc-200) focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-10 py-3 rounded-lg text-white bg-gradient-to-bl from-primary-600 to-primary-800 hover:opacity-85 transition">
                  تایید
                </a>
              </div> -->
            </div>
          </div>
            <div class="labal_1-1 absolute left-0 flex flex-col bg-white shadow-xl rounded-2xl w-50 invisible">
              <ul class="p-2">
                <li class="hover:bg-gray-50 rounded-lg">
                  <a href="##">
                    <span class="flex p-2 px-1">
                      <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                      </span>
                      <span class="text-sm">امیر محمد سزاوار</span>
                    </span>
                  </a>
                </li>
                <li class="hover:bg-gray-50 rounded-lg">
                  <a href="##">
                    <span class="flex p-2 px-1">
                      <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg>
                      </span>
                      <span class="text-sm">سفارش ها</span>
                    </span>
                  </a>
                </li>
                <li class="hover:bg-red-200 rounded-lg">
                  <a href="##">
                    <span class="flex p-2 px-1">
                      <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path></svg>
                      </span>
                      <span class="text-sm text-red-500">خروج از حساب کاربری</span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- cart -->
          <div class="labal_2 relative">
            <button class="relative p-2 border border-(--color-zinc-200) rounded-xl hover:shadow-xl hover:bg-(--color-primary-500)">
              <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Iconly/Light/Bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g class="stroke-gray-800" id="Bag" transform="translate(2.500000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                    <path d="M14.01373,20.0000001 L5.66590392,20.0000001 C2.59954235,20.0000001 0.247139589,18.8924486 0.915331812,14.4347827 L1.69336385,8.39359272 C2.10526317,6.16933642 3.52402748,5.31807783 4.76887874,5.31807783 L14.9473685,5.31807783 C16.2105264,5.31807783 17.5469108,6.23340964 18.0228834,8.39359272 L18.8009154,14.4347827 C19.3684211,18.3890161 17.0800916,20.0000001 14.01373,20.0000001 Z" id="Path_33955"></path>
                    <path d="M14.1510298,5.09839819 C14.1510298,2.71232585 12.216736,0.7779932 9.83066366,0.7779932 L9.83066366,0.7779932 C8.68166274,0.773163349 7.57805185,1.22619323 6.76386233,2.03694736 C5.9496728,2.84770148 5.49199087,3.94938696 5.49199087,5.09839819 L5.49199087,5.09839819" id="Path_33956"></path>
                    <line x1="12.7963387" y1="9.60183071" x2="12.7505721" y2="9.60183071" id="Line_192"></line>
                    <line x1="6.96567509" y1="9.60183071" x2="6.9199085" y2="9.60183071" id="Line_193"></line>
                  </g>
                </g>
              </svg>
            </button>
            <div class="labal_2-2 absolute left-0 shadow-2xl bg-white rounded-xl w-70 md:w-100 p-2 h-95  flex flex-col items-center invisible">
              <!-- Head -->
              <div class="w-full border-b border-(--color-zinc-200)">
                <div class="text-sm w-full h-10 p-3 flex items-center"> 2 کالا</div>
              </div>
              <!-- Items -->
              <div class="w-full bg-white h-60 overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
              <ul class="">
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-(--color-zinc-700) outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-(--color-zinc-700) outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-(--color-zinc-700) outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                       </div>
                      </div>
                    </li> 
                  </ul>
                </div>
                <!-- Down Price -->
                <div class="flex items-center justify-between text-center w-[90%] h-23">
                  <div class="">
                    <div class="">مبلغ قابل پرداخت</div>
                    <div class="">87.000.000تومان</div>
                  </div>
                  <a href="###" class="bg-(--color-primary-500) px-4 p-3 rounded-xl">
                    <button class="text-white">ثبت سفارش</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- dawn -->
        <section class="relative max-w-[1700px] z-45 h-20 px-20 bg-(--color-zinc-100) hidden md:flex justify-between items-center">
          <!-- right -->
          <div class="">
            <ul class="flex gap-10">
              <li class="hover:text-(--color-primary-500)">صفحه اصلی</li>
              <div class="labal_3 relative">
                <li class="svg flex items-center justify-center text-center hover:text-(--color-primary-500)">
                  محصولات
                  <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </li>
                <div class="labal_3-3 absolute w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">موبایل</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">کاور</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">پاوربانک</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">ایپاد</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">هدفون</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">شارژر</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">LCD</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">لوازم جانبی موبایل</a></li>
                </div>
              </div>
              <li class="hover:text-(--color-primary-500)">درباره ما</li>
              <li class="hover:text-(--color-primary-500)">تماس با ما</li>
              <li class="hover:text-(--color-primary-500)">بلاگ</li>
            </ul>
          </div>
          <!-- left -->
          <div class="flex gap-3 ">
            <div class="text-(--color-zinc-500) text-sm">تماس با پشتیبانی</div>
            <div class="text-(--color-zinc-500) text-sm">|</div>
            <a href="tel:09018741677" class="flex text-sm">
              901-874-1677
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path class="stroke-(--color-primary-500)" d="M3 18V12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12V18" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke-(--color-primary-500)" d="M21 19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H18C17.4696 21 16.9609 20.7893 16.5858 20.4142C16.2107 20.0391 16 19.5304 16 19V16C16 15.4696 16.2107 14.9609 16.5858 14.5858C16.9609 14.2107 17.4696 14 18 14H21V19ZM3 19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H6C6.53043 21 7.03914 20.7893 7.41421 20.4142C7.78929 20.0391 8 19.5304 8 19V16C8 15.4696 7.78929 14.9609 7.41421 14.5858C7.03914 14.2107 6.53043 14 6 14H3V19Z" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </section>
    </header>
    <main class="relative z-2 pt-24 md:pt-48 px-2 md:px-10"> 
      <section id="top" class="flex flex-col lg:flex-row gap-x-8">
        <!-- photo -->
        <div class="lg:w-4/12">
          <div class="flex gap-x-5 pr-10">
              <a href="#" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                  <svg class="fill-(--color-zinc-700) hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                  <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                    افزودن به علاقه مندی ها
                    <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon></svg>
                  </div>
                </div>
              </a>
              <a href="" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                  <svg class="fill-(--color-zinc-700) hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#000000" viewBox="0 0 256 256"><path d="M112,152a8,8,0,0,0-8,8v28.69L75.72,160.4A39.71,39.71,0,0,1,64,132.12V95a32,32,0,1,0-16,0v37.13a55.67,55.67,0,0,0,16.4,39.6L92.69,200H64a8,8,0,0,0,0,16h48a8,8,0,0,0,8-8V160A8,8,0,0,0,112,152ZM40,64A16,16,0,1,1,56,80,16,16,0,0,1,40,64Zm168,97V123.88a55.67,55.67,0,0,0-16.4-39.6L163.31,56H192a8,8,0,0,0,0-16H144a8,8,0,0,0-8,8V96a8,8,0,0,0,16,0V67.31L180.28,95.6A39.71,39.71,0,0,1,192,123.88V161a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,200,208Z"></path></svg>
                  <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                   افزودن به مقایسه
                    <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon></svg>
                  </div>
                </div>
              </a>
              <a href="#" class="relative" onclick="copyToClipboard(event)">
                <div class="group cursor-pointer relative inline-block text-center">
                    <svg class="fill-(--color-zinc-700) hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                        <path d="M176,160a39.89,39.89,0,0,0-28.62,12.09l-46.1-29.63a39.8,39.8,0,0,0,0-28.92l46.1-29.63a40,40,0,1,0-8.66-13.45l-46.1,29.63a40,40,0,1,0,0,55.82l46.1,29.63A40,40,0,1,0,176,160Zm0-128a24,24,0,1,1-24,24A24,24,0,0,1,176,32ZM64,152a24,24,0,1,1,24-24A24,24,0,0,1,64,152Zm112,72a24,24,0,1,1,24-24A24,24,0,0,1,176,224Z"></path>
                    </svg>
                    <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                        اشتراک گذاری
                        <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div>
                </div>
              </a>
            </div>
          <div class="flex flex-col items-center">
            <div class="">
              <img src="img/products/4.webp" alt="" class="w-full max-w-96 object-cover rounded-lg">
            </div>
            <div class="flex justify-start gap-x-2 mt-4 pb-4 overflow-x-auto
              [&::-webkit-scrollbar]:w-[2px]
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
              <img src="img/products/1.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/4.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/1.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/4.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/1.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/4.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/1.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              <img src="img/products/4.webp" class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
            </div>
          </div>
        </div>
        <!-- info -->
        <div class="lg:w-5/12 mt-5 lg:mt-1">
          <div class="mb-7 text-xs flex flex-wrap space-y-2 md:space-y-0 items-center gap-x-2 opacity-90">
            <a href="" class="text-(--color-zinc-500) hover:text-(--color-primary-500) transition">
              کالای دیجیتال
            </a>
            <svg class="size-3 fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
            <a href="" class="text-(--color-zinc-500) hover:text-(--color-primary-500) transition">
             موبایل
            </a>
            <svg class="size-3 fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
            <a class="text-(--color-primary-500)" href="">
             موبایل آیفون 12pro max
            </a>
          </div>
          <div class="text-(--color-zinc-800) md:text-2xl font-semibold leading-7">
            لپ تاپ 13.3 اینچی ایسوس مدل Zenbook S 13 OLED UX5304VA
          </div>
          <div class="text-xs md:text-sm text-(--color-zinc-400) mt-4">
            Asus Zenbook S 13 OLED UX5304VA-NQ003 13.3 Inch Laptop
          </div>
          <div class="flex gap-x-5 items-center mt-3">
            <a href="" class="flex items-start gap-x-1 text-sm text-(--color-primary-500)">
              <svg class="fill-(--color-primary-400)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path></svg>
              <span>
                <span>
                  2
                </span>
                <span>
                  دیدگاه
                </span>
              </span>
            </a>
            <div class="flex items-start gap-x-1 text-sm text-(--color-zinc-400)">
              <span>
                <span>
                  (72)
                </span>
                <span>
                  4.4
                </span>
              </span>
              <svg class="fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
            </div>
          </div>
          <div class="mt-8 text-(--color-zinc-700)">
            ویژگی های محصول:
          </div>
          <div class="grid grid-cols-2 md:grid-cols-3 max-w-md py-3 mb-5 gap-3">
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                جنس بدنه:
              </div>
              <div class="text-(--color-zinc-700) text-sm">
                تیتانیوم
              </div>
            </div>
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                مقدار حافظه RAM:
              </div>
              <div class="text-(--color-zinc-700) text-sm">
               12 گیگابایت
              </div>
            </div>
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                باتری
              </div>
              <div class="text-(--color-zinc-700) text-sm">
                لیتیوم 6000 میلی 
              </div>
            </div>
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                مقدار حافظه RAM:
              </div>
              <div class="text-(--color-zinc-700) text-sm">
               12 گیگابایت
              </div>
            </div>
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                باتری
              </div>
              <div class="text-(--color-zinc-700) text-sm">
                لیتیوم 6000 میلی 
              </div>
            </div>
            <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
              <div class="text-(--color-zinc-500) text-xs">
                جنس بدنه:
              </div>
              <div class="text-(--color-zinc-700) text-sm">
                تیتانیوم
              </div>
            </div>
          </div>
          <div class="flex gap-x-2 mt-2 pt-2 text-(--color-zinc-500) text-xs md:text-sm border-t border-t-(--color-zinc-200) leading-6">
            <svg class="fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
            درخواست مرجوع کردن کالا در گروه لپ تاپ با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).
          </div>
        </div>
        <!-- buy -->
        <div class="lg:w-3/12 mt-5 lg:mt-1">
          <div class="lg:mt-8 mb-8">
            <div class="text-(--color-zinc-700)"> رنگ: </div>
            <ul class="flex flex-wrap gap-2">
              <li>
                <input type="radio" name="hosting" id="1" class="hidden peer" required>
                <label for="1" class="flex items-center justify-center py-3 px-2 border-2 border-(--color-zinc-300) rounded-2xl bg-white hover:bg-(--color-zinc-100) peer-checked:border-(--color-primary-400)">
                  <div class="flex flex-row gap-x-2">
                    <div class="w-5 h-5 bg-(--color-zinc-400) rounded-full"></div>
                    <div class="text-sm">خاکستری</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" name="hosting" id="3" class="hidden peer" required>
                <label for="3" class="flex items-center justify-center py-3 px-2 border-2 border-(--color-zinc-300) rounded-2xl bg-white hover:bg-(--color-zinc-100) peer-checked:border-(--color-primary-400)">
                  <div class="flex flex-row gap-x-2">
                    <div class="w-5 h-5 bg-black rounded-full"></div>
                    <div class="text-sm">سیاه</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" name="hosting" id="2" class="hidden peer" required>
                <label for="2" class="flex items-center justify-center py-3 px-2 border-2 border-(--color-zinc-300) rounded-2xl bg-white hover:bg-(--color-zinc-100) peer-checked:border-(--color-primary-400)">
                  <div class="flex flex-row gap-x-2">
                    <div class="w-5 h-5 bg-blue-400 rounded-full"></div>
                    <div class="text-sm">ابی روشن</div>
                  </div>
                </label>
              </li>
            </ul>
          </div>
          <div class="p-3 border border-(--color-zinc-300) rounded-xl mx-auto divide-y divide-(--color-zinc-200)">
            <div class="flex text-sm text-(--color-zinc-600) pb-5 pt-3 gap-x-1">
              <svg class="fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path></svg>
              <span>
                گارانتی 12 ماهه
              </span>
            </div>
            <div class="flex text-sm text-(--color-zinc-600) py-5 gap-x-1">
              <svg class="fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
              <span>
                ارسال 3 روز کاری
              </span>
            </div>
            <div class="flex text-sm text-(--color-green-500) py-5 gap-x-1">
              <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
              <span>
                رضایت محصول:
                <span>
                  97%
                </span>
              </span>
            </div>
            <div class="py-5 gap-x-1">
              <div class="text-(--color-zinc-800) text-left">
                <span class="font-yekanBakhExtraBold text-3xl">25,000,000</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-(--color-red-500) text-xs">
                تنها 1 عدد باقی مانده
              </div>
              <div class="quantity-container mt-5 flex h-10 w-full items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                <button class="cursor-pointer">
                  <svg class="fill-(--color-green-500) size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                </button>
                <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm md:text-lg font-yekanBakhExtraBold text-(--color-zinc-600) outline-none">
                <button class="cursor-pointer">
                  <svg class="fill-(--color-red-500) size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                </button>
              </div>
            </div>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-(--color-zinc-100) rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="hidden lg:block mx-auto w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-500) to-(--color-primary-400) opacity-80 cursor-not-allowed transition text-(--color-zinc-100) rounded-lg">
              محصول موجود نیست!
            </button> -->
          </div>
          <div class="flex items-center gap-x-1 mt-4 text-(--color-zinc-600) text-xs">
            <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
            هزینه پست برای سبد خرید بالای 400 هزار تومان رایگان میباشد.
          </div>
          <!-- fixed div buy mobile -->
          <div class="fixed flex bottom-0 right-0 lg:hidden bg-white border-t border-t-zinc-300 w-full px-5 py-3 gap-x-2 z-1000">
            <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-(--color-zinc-100) rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-500) to-(--color-primary-400) opacity-80 cursor-not-allowed transition text-(--color-zinc-100) rounded-lg">
              محصول موجود نیست!
            </button> -->
            <span class="flex flex-col justify-center items-end w-1/2">
              <div class="text-(--color-zinc-700) text-left">
                <span class="font-yekanBakhExtraBold text-xl">23,380,000</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-xs text-(--color-red-500)">
                تنها 1 عدد در انبار باقی مانده
              </div>
            </span>
          </div>
        </div>
      </section>
      <section class="flex flex-col lg:flex-row mt-22 pb-2 gap-x-8 border-b border-(--color-zinc-200)">
        <a href="#details" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">توضیحات</a>
        <a href="#proper" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">مشخصات</a>
        <a href="#comments" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">دیدگاه ها</a>
        <a href="#comments2" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">پرسش ها</a>
      </section>
      <section class="p-4 border-b border-(--color-zinc-200) scroll-mt-36" id="details">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          توضیحات این محصول
        </p>
        <p class="text-(--color-zinc-600) text-xs md:text-sm leading-8 my-2">
          نوترینو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از نوترینو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به نوترینو سر بزنید!
        </p>
        <p class="text-(--color-zinc-600) text-xs md:text-sm leading-8 my-2">
          نوترینو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از نوترینو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به نوترینو سر بزنید!
        </p>
        <img class="rounded-xl w-full" src="./img/heroSlider/1.webp" alt="">
        <p class="text-(--color-zinc-600) text-xs md:text-sm leading-8 my-2">
          نوترینو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از نوترینو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به نوترینو سر بزنید!
        </p>
        <p class="text-(--color-zinc-600) text-xs md:text-sm leading-8 my-2">
          نوترینو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از نوترینو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به نوترینو سر بزنید!
        </p>
      </section>
      <section class="p-4 border-b border-(--color-zinc-200) scroll-mt-36" id="proper">
        <p class="text-(--color-zinc-800) lg:text-lg mt-4 mb-1">مشخصات محصول</p>
        <div class="text-gray-500 text-sm divide-y divide-zinc-200">
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">پردازنده:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              AM32x new product AM32x new product AM32x new product AM32x new product
            </div>
          </div>
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">گرافیک:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              rtx5090
            </div>
          </div>
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">باطری:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              6000mh
            </div>
          </div>
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">بک لایت کیبرد:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              دارد
            </div>
          </div>
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">حافظه:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              ssd 980 ewo samsong
            </div>
          </div>
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
            <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">نمایش گر:</div>
            <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
              ips
            </div>
          </div>
        </div>
      </section>
      <section class="p-4 scroll-mt-36" id="comments">
        <p class="text-(--color-zinc-800) md:text-lg mb-1 mt-4">
          دیدگاه ها
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-(--color-zinc-700)">
              شما هم دیدگاه خود را ثبت کنید
            </div>
            <ul class="grid my-3 gap-5 grid-cols-2">
              <li>
                <input type="radio" id="yes" name="hosting" value="yes" class="hidden peer" required="">
                <label for="yes" class="inline-flex items-center justify-center w-full px-2 py-3 text-(--color-zinc-600) bg-white border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) peer-checked:text-(--color-green-500) hover:text-(--color-zinc-600) hover:bg-(--color-zinc-100)">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    <div class="text-sm">پیشنهاد میشود</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" id="no" name="hosting" value="no" class="hidden peer" required="">
                <label for="no" class="inline-flex items-center justify-center w-full px-2 py-3 text-(--color-zinc-600) bg-white border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) peer-checked:text-(--color-red-500) hover:text-(--color-zinc-600) hover:bg-(--color-zinc-100)">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    <div class="text-sm">پیشنهاد نمیشود</div>
                  </div>
                </label>
              </li>
            </ul>
            <textarea placeholder="متن دیدگاه" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-(--color-zinc-600) w-full bg-white border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-(--color-zinc-300)">
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
                <div class="text-xs text-zinc-50 bg-(--color-green-400) rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                <div class="text-sm text-(--color-green-500)">پیشنهاد میشود</div>
              </div>
              <div class="mt-2 text-(--color-zinc-600) text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="selamm" name="what1" value="selamm" class="hidden peer" required="">
                    <label for="selamm" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad12" name="what1" value="isbad12" class="hidden peer" required="">
                    <label for="isbad12" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  10 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
                <div class="text-xs text-zinc-50 bg-(--color-green-400) rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                <div class="text-sm text-(--color-red-500)">پیشنهاد نمیشود</div>
              </div>
              <div class="mt-2 text-(--color-zinc-600) text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="selamm2" name="what2" value="selamm2" class="hidden peer" required="">
                    <label for="selamm2" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                    <label for="isbad2" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="p-4 scroll-mt-36" id="comments2">
        <p class="text-(--color-zinc-800) md:text-lg mb-1 mt-4">
          پرسش و پاسخ
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-(--color-zinc-700)">
              اگر سوالی دارید بپرسید
            </div>
            <textarea placeholder="متن سوال" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-(--color-zinc-600) w-full bg-white border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-(--color-zinc-300)">
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
              </div>
              <div class="mt-4 text-(--color-zinc-600) text-sm">
                آیا ویندوز به صورت پیش فرض روش نصبه یا باید خودمون نصب کنیم؟
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این سوال برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                    <label for="isgood" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                    <label for="isbad" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- sldier products -->
      <section class="">
        <div class="w-[93%] md:w-full flex justify-between items-center mx-auto">
          <span class="w-48 min-w-fit text-xs md:text-sm md:font-yekanBakhBold text-(--color-zinc-600)">محصولات مرتبط</span>
          <span class="h-[1px] w-full bg-gradient-to-r from-white via-(--color-zinc-500) to-white "></span>
          <div class="w-32 min-w-fit text-left">
            <a href="" class="text-sm hover:text-(--color-primary-500) text-(--color-zinc-600) flex fle items-center gap-x-1 group">
              مشاهده همه
              <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>        
            </a>
          </div>
        </div>
        <div class="overflow-x-auto w-[93%] md:w-full h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
          [&::-webkit-scrollbar]:w-0.5
          [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
          [&::-webkit-scrollbar-thumb]:rounded-full">
          <div class="flex flex-row gap-3">
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/1.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/3.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/2.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/5.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/6.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              <a href="" class="flex items-center justify-center">
                <img src="img/products/4.webp" alt="logo" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
              </a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">lap Top Lenovo Laster 107W</p>
              <a href="" class="mb-3 text-xs md:text-sm">لپتاپ لنوو تک رنگ مدل Laster 107W اصلی</a>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-black rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-600) rounded-full"></div>
                  <div class="w-3 md:w-4 h-3 md:h-4 bg-(--color-zinc-300) rounded-full"></div>
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                     <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  23.000.000
                  <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5">
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative z-1 top-23 mt-20 md:top-50 border-t-1 border-(--color-zinc-300) px-5 md:px-10 py-5">
      <!-- logo, des, go to up -->
      <section class="flex gap-x-8 gap-y-4 items-center md:items-start flex-wrap md:flex-nowrap justify-between mb-12">
      <!-- <section class="w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row justify-between items-center"> -->
        <div class="w-4/12 md:w-1/12 order-1 md:order-none">
          <a href="">
            <img src="img/logo/Screenshot 2025-12-16 063243.png" alt="logo" class="w-full">
          </a>
        </div>
        <div class="md:w-8/12 text-xs text-(--color-zinc-400) leading-7 order-3 md:order-none text-justify flex items-center justify-center">
        فروشگاه نوترینو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از فروشگاه نوترینو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به فروشگاه نوترینو سر بزنید!
        </div>
        <div class="md:w-1/12 order-2 md:order-none">
          <a href="#top" class="flex items-center justify-center cursor-pointer w-28 gap-x-2 p-3 text-(--color-zinc-400) text-xs md:text-sm border border-(--color-zinc-200) rounded-lg" id="btn-back-to-top" style="display: flex;">
            برو به بالا
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2028_6)">
                <path d="M12.707 3.63599C12.5194 3.44852 12.2651 3.3432 12 3.3432C11.7348 3.3432 11.4805 3.44852 11.293 3.63599L5.63598 9.29299C5.54047 9.38523 5.46428 9.49558 5.41188 9.61758C5.35947 9.73959 5.33188 9.87081 5.33073 10.0036C5.32957 10.1364 5.35487 10.268 5.40516 10.3909C5.45544 10.5138 5.52969 10.6255 5.62358 10.7194C5.71747 10.8133 5.82913 10.8875 5.95202 10.9378C6.07492 10.9881 6.2066 11.0134 6.33938 11.0122C6.47216 11.0111 6.60338 10.9835 6.72538 10.9311C6.84739 10.8787 6.95773 10.8025 7.04998 10.707L11 6.75699V20C11 20.2652 11.1053 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21C12.2652 21 12.5195 20.8946 12.7071 20.7071C12.8946 20.5196 13 20.2652 13 20V6.75699L16.95 10.707C17.1386 10.8891 17.3912 10.9899 17.6534 10.9877C17.9156 10.9854 18.1664 10.8802 18.3518 10.6948C18.5372 10.5094 18.6424 10.2586 18.6447 9.99639C18.6469 9.73419 18.5461 9.48159 18.364 9.29299L12.707 3.63599Z" fill="#9f9fa9"></path>
              </g>
              <defs>
                <clipPath id="clip0_2028_6">
                  <rect width="24" height="24" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
      </section>
      <!-- 5 good box -->
      <section class="w-[99%] mt-5 md:w-[90%] mx-auto my-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
        <div class="flex justify-center items-center gap-2 bg-white border border-(--color-zinc-200) rounded-xl p-5">
          <div>
            <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M38.94 39.435C39.365 39.415 39.764 39.395 40.136 39.375C42.413 39.254 44.236 37.539 44.449 35.27C44.694 32.671 44.954 28.86 44.994 24.152C45.001 23.332 44.834 22.518 44.452 21.793C43.462 19.915 41.143 16.1 37.655 13.799C36.917 13.313 36.043 13.1 35.159 13.07C32.623 12.985 29.829 12.922 26.986 12.875" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M3.015 25.75C3.005 26.29 3 26.837 3 27.386C3 30.882 3.21 33.641 3.439 35.603C3.685 37.72 5.419 39.242 7.547 39.359C8.007 39.384 8.511 39.41 9.06 39.436" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M34.336 17.929C36.517 19.166 38.107 21.549 39.038 23.277C39.608 24.337 38.96 25.579 37.76 25.682C36.12 25.824 34.617 25.72 33.558 25.589C32.638 25.475 32 24.674 32 23.747V19.37C32.0003 18.9405 32.1711 18.5287 32.4748 18.2251C32.7786 17.9215 33.1905 17.751 33.62 17.751C33.87 17.751 34.118 17.805 34.336 17.929Z" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M27 25.75H15H3V14.75C3 11.773 3.094 9.487 3.206 7.82C3.349 5.691 4.991 4.085 7.121 3.957C8.962 3.847 11.558 3.75 15 3.75C18.442 3.75 21.038 3.847 22.878 3.957C25.009 4.085 26.651 5.691 26.794 7.821C26.906 9.487 27 11.773 27 14.75V25.75Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M19.9771 39.73C22.6596 39.7569 25.3425 39.7569 28.0251 39.73" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M28 40.25C28 41.7087 28.5795 43.1076 29.6109 44.1391C30.6424 45.1705 32.0413 45.75 33.5 45.75C34.9587 45.75 36.3576 45.1705 37.3891 44.1391C38.4205 43.1076 39 41.7087 39 40.25C39 38.7913 38.4205 37.3924 37.3891 36.3609C36.3576 35.3295 34.9587 34.75 33.5 34.75C32.0413 34.75 30.6424 35.3295 29.6109 36.3609C28.5795 37.3924 28 38.7913 28 40.25Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M9 40.25C9 41.7087 9.57946 43.1076 10.6109 44.1391C11.6424 45.1705 13.0413 45.75 14.5 45.75C15.9587 45.75 17.3576 45.1705 18.3891 44.1391C19.4205 43.1076 20 41.7087 20 40.25C20 38.7913 19.4205 37.3924 18.3891 36.3609C17.3576 35.3295 15.9587 34.75 14.5 34.75C13.0413 34.75 11.6424 35.3295 10.6109 36.3609C9.57946 37.3924 9 38.7913 9 40.25Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="flex flex-col gap-y-2">
            <div class="text-sm text-(--color-zinc-600)">
              ارسال سریع
            </div>
            <div class="text-xs text-(--color-zinc-400)">
              ارسال در سریع ترین زمان
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center gap-2 bg-white border border-(--color-zinc-200) rounded-xl p-5">
          <div>
          <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M44.279 18.75C44.465 18.436 44.596 18.078 44.659 17.678C44.846 16.49 45 14.752 45 12.252C45 9.752 44.846 8.014 44.66 6.826C44.413 5.263 43.124 4.329 41.547 4.209C38.852 4.006 33.575 3.752 24 3.752C14.425 3.752 9.148 4.006 6.453 4.209C4.876 4.329 3.587 5.263 3.341 6.826C3.154 8.014 3 9.752 3 12.252C3 14.752 3.154 16.49 3.34 17.678C3.404 18.078 3.535 18.436 3.721 18.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M36.316 10.713C37.819 10.838 38.961 12.093 38.976 13.602C39.037 19.418 38.999 27.71 38.636 38.214C38.542 40.898 36.646 43.118 33.971 43.359C31.647 43.568 28.355 43.75 23.943 43.75C19.555 43.75 16.295 43.57 13.998 43.362C11.338 43.122 9.45799 40.913 9.36599 38.244C8.99999 27.725 8.96299 19.423 9.02299 13.602C9.03899 12.094 10.181 10.838 11.684 10.712C14.77 10.456 18.842 10.252 24 10.252C29.158 10.252 33.23 10.456 36.316 10.712V10.713Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M25 43.746V10.254" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M32 43.51V10.432" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M17.221 37.75C16.078 37.75 15.123 36.963 15.056 35.822C15.017 35.132 14.9984 34.4411 15 33.75C15 32.915 15.023 32.23 15.056 31.678C15.123 30.537 16.078 29.75 17.22 29.75H17.778C18.921 29.75 19.876 30.537 19.944 31.678C19.976 32.23 19.999 32.915 19.999 33.75C19.999 34.585 19.976 35.27 19.944 35.822C19.877 36.963 18.922 37.75 17.779 37.75H17.221Z" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="flex flex-col gap-y-2">
            <div class="text-sm text-(--color-zinc-600)">
             پرداخت آنی
            </div>
            <div class="text-xs text-(--color-zinc-400)">
             پرداخت سریع و آسان
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center gap-2 bg-white border border-(--color-zinc-200) rounded-xl p-5">
          <div>
          <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.44404 8.207C5.21404 8.373 3.53104 9.969 3.32404 12.197C3.16972 13.9221 3.06168 15.6511 3.00004 17.382C2.96504 18.306 3.60004 19.099 4.40004 19.562C5.31149 20.0871 6.06861 20.8429 6.59524 21.7534C7.12187 22.664 7.39944 23.6971 7.40004 24.749C7.39927 25.8007 7.12161 26.8337 6.59499 27.744C6.06837 28.6544 5.31134 29.41 4.40004 29.935C3.60004 30.399 2.96504 31.192 3.00004 32.116C3.08504 34.316 3.20304 36.013 3.32304 37.303C3.53004 39.53 5.21304 41.126 7.44304 41.293C10.417 41.515 15.553 41.75 24 41.75C32.447 41.75 37.583 41.516 40.556 41.293C42.786 41.127 44.469 39.531 44.676 37.303C44.796 36.014 44.913 34.317 44.998 32.118C45.034 31.193 44.398 30.401 43.598 29.937C42.687 29.4116 41.9304 28.6557 41.4041 27.7452C40.8778 26.8347 40.6005 25.8017 40.6 24.75C40.6007 23.6981 40.8783 22.665 41.405 21.7545C41.9316 20.844 42.6887 20.0881 43.6 19.563C44.4 19.1 45.035 18.307 45 17.383C44.9388 15.6514 44.8311 13.9218 44.677 12.196C44.47 9.969 42.787 8.373 40.557 8.206C37.583 7.985 32.446 7.75 24 7.75C15.553 7.75 10.417 7.984 7.44404 8.207Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.022 33.69C33.674 32.983 34 32 34 30.737C34 29.492 33.674 28.517 33.022 27.81C32.37 27.103 31.529 26.75 30.5 26.75C29.456 26.75 28.609 27.103 27.956 27.81C27.319 28.517 27 29.492 27 30.737C27 31.999 27.319 32.983 27.956 33.69C28.609 34.397 29.456 34.75 30.5 34.75C31.529 34.75 32.37 34.397 33.022 33.69Z" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M20.022 21.69C20.674 20.983 21 20 21 18.737C21 17.492 20.674 16.517 20.022 15.81C19.37 15.103 18.529 14.75 17.5 14.75C16.456 14.75 15.609 15.103 14.957 15.81C14.319 16.517 14 17.492 14 18.737C14 19.999 14.319 20.983 14.957 21.69C15.609 22.397 16.457 22.75 17.5 22.75C18.529 22.75 19.37 22.397 20.022 21.69Z" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M32 16.75L16 32.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
        <div class="flex flex-col gap-y-2">
          <div class="text-sm text-(--color-zinc-600)">
            قیمت های مناسب
          </div>
          <div class="text-xs text-(--color-zinc-400)">
            قیمت های رقابتی در بازار
          </div>
        </div>
        </div>
        <div class="flex justify-center items-center gap-2 bg-white border border-(--color-zinc-200) rounded-xl p-5">
        <div>
          <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 21.563V31.75C6 35.788 6.16 38.79 6.343 40.894C6.553 43.316 8.425 45.114 10.848 45.306C13.63 45.526 17.942 45.75 24 45.75C30.058 45.75 34.369 45.527 37.152 45.306C39.575 45.114 41.448 43.316 41.657 40.894C41.84 38.79 42 35.788 42 31.75V21.562" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M3.29 20.02C3.582 21.038 4.59 21.524 5.647 21.553C8.28 21.627 14.167 21.75 24 21.75C33.833 21.75 39.72 21.627 42.353 21.553C43.411 21.523 44.418 21.038 44.71 20.02C44.873 19.45 45 18.7 45 17.75C45 16.8 44.873 16.05 44.71 15.48C44.418 14.462 43.41 13.976 42.353 13.947C39.72 13.873 33.833 13.75 24 13.75C14.167 13.75 8.28 13.873 5.647 13.947C4.589 13.977 3.582 14.462 3.29 15.48C3.127 16.05 3 16.8 3 17.75C3 18.7 3.127 19.45 3.29 20.02Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 21.75V45.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 13.75C24 10.75 20.5 3.75 15.25 3.75C12.187 3.75 10 6.436 10 9.75C10 11.287 10.505 12.688 11.337 13.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 13.75C24 10.75 27.5 3.75 32.75 3.75C35.813 3.75 38 6.436 38 9.75C38 11.287 37.495 12.688 36.663 13.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
        <div class="flex flex-col gap-y-2">
          <div class="text-sm text-(--color-zinc-600)">
            ضمانت کیفیت
          </div>
          <div class="text-xs text-(--color-zinc-400)">
            تضمین کیفیت اجناس
          </div>
        </div>
        </div>
        <div class="flex justify-center items-center gap-2 bg-white border border-(--color-zinc-200) rounded-xl p-5">
        <div>
          <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 3.75C15 3.75 10.885 3.75 6.734 4.022C5.8344 4.07821 4.98626 4.46087 4.34881 5.09813C3.71137 5.73539 3.32847 6.58342 3.272 7.483C3 11.635 3 15.75 3 15.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33 3.75C33 3.75 37.115 3.75 41.266 4.022C42.1656 4.07821 43.0137 4.46087 43.6512 5.09813C44.2886 5.73539 44.6715 6.58342 44.728 7.483C45 11.635 45 15.75 45 15.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33 45.75C33 45.75 37.115 45.75 41.266 45.478C42.1656 45.4218 43.0137 45.0391 43.6512 44.4019C44.2886 43.7646 44.6715 42.9166 44.728 42.017C45 37.865 45 33.75 45 33.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M15 45.75C15 45.75 10.885 45.75 6.734 45.478C5.8344 45.4218 4.98626 45.0391 4.34881 44.4019C3.71137 43.7646 3.32847 42.9166 3.272 42.017C3 37.865 3 33.75 3 33.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M36 13.75V35.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12 13.75V35.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M30 13.75V29.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M30 35.75V34.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 13.75V29.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 35.75V34.75" stroke="#F28822" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M18 13.75V29.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M18 35.75V34.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
        <div class="flex flex-col gap-y-2">
          <div class="text-sm text-(--color-zinc-600)">
            خرید سریع و آسان
          </div>
          <div class="text-xs text-(--color-zinc-400)">
            خرید سریع و راحت محصولات
          </div>
        </div>
        </div>
      </section>
      <!-- links -->
      <section class="relative w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row gap-y-8">
        <div class="md:w-5/12 grid grid-cols-2 md:grid-cols-3">
          <div class="">
            <div class="text-zinc-500 mb-4 text-sm">دسترسی سریع</div>
            <ul class="flex flex-col gap-y-5">
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">وبلاگ</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">درباره ما</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">تماس با نا</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">سوالات متداول</a>
              </li>
            </ul>
          </div>
          <div class="">
            <div class="text-zinc-500 mb-4 text-sm">محیوب ترین یرند ها</div>
            <ul class="flex flex-col gap-y-4">
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">سامسونگ</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">آیفون</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">شیاورمی</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">هواوی</a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">gbl</a>
              </li>
            </ul>
          </div>
          <div class="">
            <div class="text-zinc-500 mb-4 text-sm">ارتباط مستقیم</div>
            <ul class="flex flex-col gap-y-5">
              <li>
                <a href="" class="text-xs text-(--color-zinc-500) flex ">
                   <svg class="fill-zinc-600 w-12" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,66a38,38,0,1,0,38,38A38,38,0,0,0,128,66Zm0,64a26,26,0,1,1,26-26A26,26,0,0,1,128,130Zm0-112a86.1,86.1,0,0,0-86,86c0,30.91,14.34,63.74,41.47,94.94a252.32,252.32,0,0,0,41.09,38,6,6,0,0,0,6.88,0,252.32,252.32,0,0,0,41.09-38c27.13-31.2,41.47-64,41.47-94.94A86.1,86.1,0,0,0,128,18Zm0,206.51C113,212.93,54,163.62,54,104a74,74,0,0,1,148,0C202,163.62,143,212.93,128,224.51Z"></path></svg>
                   اذربایجان شرقی-خیابان مطهری-روبروی بانک مسکل-فروشگاه نوترینو
                </a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-500) flex">
                  <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,26a102,102,0,0,0,0,204c21.13,0,43.31-6.35,59.32-17a6,6,0,0,0-6.65-10c-13.9,9.25-34.09,15-52.67,15a90,90,0,1,1,90-90c0,29.58-13.78,34-22,34s-22-4.42-22-34V88a6,6,0,0,0-12,0v9a46,46,0,1,0,4.34,56.32C171.76,166.6,182,174,196,174c21.29,0,34-17.2,34-46A102.12,102.12,0,0,0,128,26Zm0,136a34,34,0,1,1,34-34A34,34,0,0,1,128,162Z"></path></svg>
                  amir1677se@gmai.com
                </a>
              </li>
              <li>
                <a href="" class="text-xs text-(--color-zinc-500) flex">
                  <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M176,18H80A22,22,0,0,0,58,40V216a22,22,0,0,0,22,22h96a22,22,0,0,0,22-22V40A22,22,0,0,0,176,18Zm10,198a10,10,0,0,1-10,10H80a10,10,0,0,1-10-10V40A10,10,0,0,1,80,30h96a10,10,0,0,1,10,10ZM138,60a10,10,0,1,1-10-10A10,10,0,0,1,138,60Z"></path></svg>
                  0902-222-6606
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:w-4/12 flex justify-center gap-10">
          <div class="w-[100px] md:w-[30%]">
            <img src="img/service/symbol-02.png" alt="">
          </div>
          <div class="w-[100px] md:w-[30%]">
            <img src="img/service/zarinPal.png" alt="">
          </div>
        </div>
        <div class="md:w-4/12">
          <p class="text-xs text-(--color-zinc-400) pt-6 pb-3 pr-2">
          شبکه های اجتماعی
          </p>
          <div class="grid grid-cols-6">
            <a href="">
              <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Frame" clip-path="url(#clip0_4667_548)">
                    <g id="Isolation Mode">
                        <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.72696 8.16637e-05H21.2724C25.8728 8.16637e-05 29.6361 3.75792 29.6361 8.35796V12.3916C25.512 14.2453 21.3518 23.4008 15.2883 21.4114C14.7889 21.7663 13.6378 23.2288 13.557 24.3385C11.4574 24.0589 9.03679 21.6527 9.32727 19.058C5.83255 16.5301 8.71846 11.8638 11.4897 9.9856C17.4293 5.96007 25.6751 9.42212 21.0884 12.3004C18.2994 14.0505 12.3354 15.2066 12.9554 10.9101C11.3194 11.382 10.2721 14.4326 12.2419 16.0223C10.4172 17.815 10.768 21.1105 12.7185 22.1925C14.6912 17.0814 21.5571 17.7494 24.3311 11.6481C26.4182 7.05861 23.3239 1.82911 17.1373 2.63243C12.4682 3.23879 8.09169 7.17735 5.90294 11.8486C3.68218 16.588 4.01267 22.9345 8.57278 26.1331C13.9393 29.8971 19.6528 26.4118 23.1132 21.8565C25.1529 19.1715 26.935 16.1972 29.6361 14.4792V21.6307C29.6361 26.2306 25.8723 30.0001 21.2724 30.0001H8.72696C4.12692 30.0001 0.363281 26.2364 0.363281 21.6364V8.36368C0.363281 3.76364 4.12692 0 8.72696 0V8.16637e-05Z" fill="#EE7F22"></path>
                    </g>
                </g>
                <defs>
                    <clipPath id="clip0_4667_548">
                        <rect width="30" height="30" fill="white"></rect>
                    </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Frame">
                    <g id="Vector" filter="url(#filter0_f_4667_553)">
                        <path d="M12.4639 31.5463L12.9732 31.848C15.112 33.1174 17.5644 33.7889 20.0653 33.79H20.0706C27.7508 33.79 34.0013 27.5409 34.0044 19.8602C34.0058 16.1383 32.5578 12.6382 29.927 10.0054C28.6367 8.70693 27.1016 7.67732 25.4107 6.97613C23.7198 6.27495 21.9066 5.91612 20.076 5.92043C12.3899 5.92043 6.1392 12.1688 6.13647 19.8491C6.13268 22.4716 6.87121 25.0417 8.26666 27.2623L8.59819 27.789L7.19029 32.929L12.4639 31.5463ZM3.16504 36.9109L5.54359 28.2265C4.07668 25.6851 3.30494 22.8018 3.30585 19.8479C3.30973 10.6071 10.8298 3.08936 20.0708 3.08936C24.5552 3.09163 28.7643 4.83676 31.9298 8.0046C35.0954 11.1724 36.8371 15.3832 36.8355 19.8614C36.8314 29.1015 29.3102 36.6206 20.0706 36.6206H20.0633C17.2577 36.6195 14.5009 35.9156 12.0522 34.5804L3.16504 36.9109Z" fill="#B3B3B3"></path>
                    </g>
                    <path id="Vector_2" d="M2.99219 36.7385L5.37074 28.0542C3.9013 25.5065 3.12945 22.6166 3.133 19.6756C3.13687 10.4348 10.6569 2.91699 19.8979 2.91699C24.3823 2.91927 28.5914 4.66439 31.757 7.83223C34.9226 11.0001 36.6643 15.2108 36.6627 19.689C36.6586 28.9291 29.1374 36.4483 19.8977 36.4483H19.8904C17.0849 36.4471 14.3281 35.7433 11.8794 34.4081L2.99219 36.7385Z" fill="white"></path>
                    <path id="Vector_3" d="M19.9035 5.74809C12.2173 5.74809 5.96662 11.9965 5.96388 19.6767C5.9601 22.2993 6.69862 24.8694 8.09408 27.0899L8.4256 27.6169L7.0177 32.7568L12.2916 31.374L12.8008 31.6757C14.9397 32.945 17.3921 33.6163 19.893 33.6177H19.8982C27.5784 33.6177 33.8291 27.3686 33.8321 19.6879C33.8379 17.8572 33.4805 16.0436 32.7806 14.352C32.0807 12.6604 31.0522 11.1244 29.7547 9.83303C28.4643 8.53456 26.9292 7.50493 25.2383 6.80375C23.5473 6.10256 21.734 5.74375 19.9035 5.74809Z" fill="url(#paint0_linear_4667_553)"></path>
                    <path id="Vector_4" fill-rule="evenodd" clip-rule="evenodd" d="M15.7086 12.6695C15.3946 11.972 15.0643 11.9579 14.766 11.9458L13.963 11.936C13.6837 11.936 13.2298 12.0408 12.8461 12.4601C12.4624 12.8793 11.3799 13.8926 11.3799 15.9535C11.3799 18.0145 12.881 20.0059 13.0901 20.2857C13.2993 20.5655 15.988 24.9296 20.2459 26.6086C23.7842 28.004 24.5042 27.7265 25.2725 27.6567C26.0408 27.587 27.7509 26.6435 28.0997 25.6653C28.4486 24.6871 28.4488 23.8491 28.3442 23.6739C28.2396 23.4986 27.9603 23.3945 27.541 23.1849C27.1218 22.9753 25.0627 21.962 24.6787 21.8221C24.2948 21.6822 24.0157 21.6127 23.7361 22.032C23.4565 22.4512 22.6547 23.3943 22.4102 23.6739C22.1657 23.9534 21.9217 23.9885 21.5025 23.7791C21.0832 23.5697 19.7343 23.1272 18.1339 21.7002C16.8887 20.5899 16.0481 19.2187 15.8034 18.7996C15.5587 18.3806 15.7774 18.1537 15.9875 17.945C16.1755 17.7572 16.4063 17.4558 16.6162 17.2113C16.826 16.9668 16.8951 16.792 17.0345 16.5129C17.174 16.2338 17.1045 15.9886 16.9996 15.7792C16.8948 15.5698 16.0809 13.498 15.7086 12.6695Z" fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_f_4667_553" x="1.55594" y="1.48026" width="36.8891" height="37.04" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feGaussianBlur stdDeviation="0.804548" result="effect1_foregroundBlur_4667_553"></feGaussianBlur>
                    </filter>
                    <linearGradient id="paint0_linear_4667_553" x1="19.6143" y1="7.42052" x2="19.7556" y2="31.2368" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#57D163"></stop>
                        <stop offset="1" stop-color="#23B33A"></stop>
                    </linearGradient>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Livello_1" clip-path="url(#clip0_4667_561)">
                    <path id="Vector" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="url(#paint0_linear_4667_561)"></path>
                    <path id="Vector_2" d="M10.8301 17.1695L12.7283 22.4236C12.7283 22.4236 12.9657 22.9152 13.2198 22.9152C13.4739 22.9152 17.2538 18.9829 17.2538 18.9829L21.4571 10.8643L10.8978 15.8132L10.8301 17.1695Z" fill="#C8DAEA"></path>
                    <path id="Vector_3" d="M13.3473 18.5171L12.9829 22.3899C12.9829 22.3899 12.8304 23.5766 14.0168 22.3899C15.2032 21.2032 16.3388 20.2882 16.3388 20.2882" fill="#A9C6D8"></path>
                    <path id="Vector_4" d="M10.8653 17.3569L6.96047 16.0846C6.96047 16.0846 6.4938 15.8953 6.64407 15.466C6.675 15.3774 6.7374 15.3021 6.92407 15.1726C7.78927 14.5696 22.9382 9.12463 22.9382 9.12463C22.9382 9.12463 23.3659 8.98049 23.6182 9.07636C23.6806 9.09568 23.7368 9.13123 23.7809 9.17937C23.8251 9.22751 23.8557 9.28652 23.8695 9.35036C23.8968 9.46311 23.9082 9.57912 23.9034 9.69503C23.9022 9.79529 23.8901 9.88823 23.8809 10.034C23.7886 11.5226 21.0275 22.633 21.0275 22.633C21.0275 22.633 20.8623 23.2832 20.2705 23.3054C20.125 23.3101 19.9801 23.2855 19.8444 23.233C19.7087 23.1805 19.5849 23.1012 19.4805 22.9998C18.319 22.0008 14.3046 19.3029 13.4175 18.7096C13.3975 18.6959 13.3807 18.6782 13.3681 18.6575C13.3556 18.6368 13.3476 18.6136 13.3447 18.5896C13.3323 18.527 13.4003 18.4496 13.4003 18.4496C13.4003 18.4496 20.3905 12.2362 20.5765 11.584C20.5909 11.5334 20.5365 11.5085 20.4634 11.5306C19.9991 11.7014 11.9509 16.784 11.0626 17.3449C10.9987 17.3642 10.9311 17.3683 10.8653 17.3569Z" fill="white"></path>
                </g>
                <defs>
                    <linearGradient id="paint0_linear_4667_561" x1="16" y1="32" x2="16" y2="0" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#1D93D2"></stop>
                        <stop offset="1" stop-color="#38B0E3"></stop>
                    </linearGradient>
                    <clipPath id="clip0_4667_561">
                        <rect width="32" height="32" fill="white"></rect>
                    </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg width="40" height="40" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint0_linear_1_921)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint1_radial_1_921)"></path>
                <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint2_linear_1_921)"></path>
                <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint3_radial_1_921)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint4_linear_1_921)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint5_radial_1_921)"></path>
                <defs>
                <linearGradient id="paint0_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                <stop stop-color="#4E60D3"></stop>
                <stop offset="0.142763" stop-color="#913BAF"></stop>
                <stop offset="0.761458" stop-color="#D52D88"></stop>
                <stop offset="1" stop-color="#F26D4F"></stop>
                </linearGradient>
                <radialGradient id="paint1_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                <stop stop-color="#FED276"></stop>
                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                <stop offset="0.454081" stop-color="#F6804D"></stop>
                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                </radialGradient>
                <linearGradient id="paint2_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                <stop stop-color="#4E60D3"></stop>
                <stop offset="0.142763" stop-color="#913BAF"></stop>
                <stop offset="0.761458" stop-color="#D52D88"></stop>
                <stop offset="1" stop-color="#F26D4F"></stop>
                </linearGradient>
                <radialGradient id="paint3_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                <stop stop-color="#FED276"></stop>
                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                <stop offset="0.454081" stop-color="#F6804D"></stop>
                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                </radialGradient>
                <linearGradient id="paint4_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                <stop stop-color="#4E60D3"></stop>
                <stop offset="0.142763" stop-color="#913BAF"></stop>
                <stop offset="0.761458" stop-color="#D52D88"></stop>
                <stop offset="1" stop-color="#F26D4F"></stop>
                </linearGradient>
                <radialGradient id="paint5_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                <stop stop-color="#FED276"></stop>
                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                <stop offset="0.454081" stop-color="#F6804D"></stop>
                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                </radialGradient>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </section>
      <!-- copyright -->
       <div class="relative w-[99%] mt-7 m-b10 md:w-[90%] mx-auto border-t-1 border-(--color-zinc-400)">
         <a href="" class="">
           طراحی و توسعه توسط <span class="text-(--color-primary-500)">امیر محمد سزاوار</span>
          </a>
        </div>
    </footer>
  </div>
  <script src="{{ asset('assets/js/hamberger.js') }}"></script>
</body>
</html>