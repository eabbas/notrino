{{-- resources/views/admin/products/index.blade.php --}}
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت محصولات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
        .badge {
            padding: 5px 10px;
            margin: 2px;
            display: inline-block;
        }
        .actions {
            display: flex;
            gap: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>لیست محصولات</h3>
                        <a href="{{ route('product.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> افزودن محصول جدید
                        </a>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>تصویر</th>
                                    <th>عنوان</th>
                                    <th>قیمت</th>
                                    <th>تخفیف</th>
                                    <th>قیمت نهایی</th>
                                    <th>دسته‌بندی</th>
                                    <th>نمایش در خانه</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $index => $product)
                                @php
                                    // پیدا کردن تصویر اصلی محصول
                                    $mainImage = $medias->where('product_id', $product->id)->where('is_main', 1)->first();
                                    
                                    // پیدا کردن دسته‌بندی‌های محصول
                                    $productCategories = $proCats->where('product_id', $product->id);
                                    $categoriesNames = [];
                                    foreach($productCategories as $proCat) {
                                        $category = $categories->where('id', $proCat->category_id)->first();
                                        if($category) {
                                            $categoriesNames[] = $category->title;
                                        }
                                    }
                                    
                                    // محاسبه قیمت نهایی با تخفیف
                                    $finalPrice = $product->price - ($product->price * $product->discount / 100);
                                @endphp
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($mainImage)
                                            <img src="{{ asset('storage/' . $mainImage->path) }}" alt="{{ $product->title }}">
                                        @else
                                            <span class="badge bg-secondary">فاقد تصویر</span>
                                        @endif
                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ number_format($product->price) }} تومان</td>
                                    <td>
                                        @if($product->discount > 0)
                                            <span class="badge bg-success">{{ $product->discount }}%</span>
                                        @else
                                            <span class="badge bg-secondary">ندارد</span>
                                        @endif
                                    </td>
                                    <td>{{ number_format($finalPrice) }} تومان</td>
                                    <td>
                                        @if(!empty($categoriesNames))
                                            @foreach($categoriesNames as $catName)
                                                <span class="badge bg-info">{{ $catName }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-warning">بدون دسته</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->show_home == 1)
                                            <span class="badge bg-success">فعال</span>
                                        @else
                                            <span class="badge bg-secondary">غیرفعال</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <a href="{{ route('product.show', [$product]) }}" class="btn btn-sm btn-info" title="مشاهده">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary" title="ویرایش">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('product.delete', $product->id) }}" class="btn btn-sm btn-primary" title="ویرایش">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center">هیچ محصولی یافت نشد</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>