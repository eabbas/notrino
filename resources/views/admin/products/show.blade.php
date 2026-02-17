{{-- resources/views/admin/products/show.blade.php --}}
<!DOCTYPE html>
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
</html>