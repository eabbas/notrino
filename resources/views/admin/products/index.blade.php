@extends('admin.app.panel')
@section('title', 'لیست محصولات')
@section('content')

<div class="container-fluid py-4" dir="rtl">
    <!-- هدر ساده -->
    <div class="flex flex-row justify-between items-center mb-4">
        <div>
            <h4 class="mb-1" style="color: #f97316; font-weight: 600;">لیست محصولات</h4>
            <p class="text-muted small mb-0">مدیریت و مشاهده تمام محصولات فروشگاه</p>
        </div>
        <a href="{{ route('product.create') }}" class="btn text-white px-4 py-2" style="background: linear-gradient(135deg, #f97316, #fb923c); border-radius: 10px; box-shadow: 0 4px 10px rgba(249, 115, 22, 0.3);">
            <i class="fa fa-plus ms-1"></i>
            محصول جدید
        </a>
    </div>

    <!-- کارت اصلی -->
    <div class="card border-0 rounded-4 shadow">
    

        <!-- بدنه کارت -->
        <div class="card-body p-4 bg-white">
            <!-- جدول -->
            <div class="table-responsive">
                <table class="table align-middle w-full">
                    <thead>
                        <tr class="border-bottom" style="border-bottom-width: 2px; border-bottom-color: #f97316 !important;">
                            <th class="text-center pb-3 text-muted fw-semibold">ردیف</th>
                            <th class="text-center pb-3 text-muted fw-semibold">تصویر</th>
                            <th class="text-center pb-3 text-muted fw-semibold">عنوان</th>
                            <th class="text-center pb-3 text-muted fw-semibold">قیمت</th>
                            <th class="text-center pb-3 text-muted fw-semibold">تخفیف</th>
                            <th class="text-center pb-3 text-muted fw-semibold">قیمت نهایی</th>
                            <th class="text-center pb-3 text-muted fw-semibold">دسته‌بندی</th>
                            <th class="text-center pb-3 text-muted fw-semibold">نمایش</th>
                            <th class="text-center pb-3 text-muted fw-semibold">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $index => $product)
                        @php
                            $mainImage = $medias->where('product_id', $product->id)->where('is_main', 1)->first();
                            
                            $productCategories = $proCats->where('product_id', $product->id);
                            $categoriesNames = [];
                            foreach($productCategories as $proCat) {
                                $category = $categories->where('id', $proCat->category_id)->first();
                                if($category) {
                                    $categoriesNames[] = $category->title;
                                }
                            }
                            
                            $finalPrice = (int)$product->price - ((int)$product->price * (int)$product->discount / 100);
                        @endphp
                        <tr class="border-bottom">
                            <td class="text-center py-3">
                                <span class="fw-medium">{{ $index + 1 }}</span>
                            </td>
                            
                            <td class="text-center py-3">
                                @if($mainImage)
                                    <div class="d-inline-block" style="width: 45px; height: 45px; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                        <img src="{{ asset('storage/' . $mainImage->path) }}" 
                                             alt="{{ $product->title }}"
                                             style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @else
                                    <div style="width: 45px; height: 45px; background: #f1f5f9; border-radius: 10px; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa fa-image" style="color: #94a3b8; font-size: 18px;"></i>
                                    </div>
                                @endif
                            </td>
                            
                            <td class="py-3">
                                <span class="fw-medium">{{ $product->title }}</span>
                            </td>
                            
                            <td class="text-center py-3">
                                <span class="text-muted">{{ number_format($product->price) }}</span>
                                <small class="text-muted d-block">تومان</small>
                            </td>
                            
                            <td class="text-center py-3">
                                @if($product->discount > 0)
                                    <span class="badge rounded-pill px-3 py-2" style="background: linear-gradient(135deg, #f97316, #fb923c); color: white;">
                                        <i class="fa fa-percent ms-1" style="font-size: 10px;"></i>
                                        {{ $product->discount }}%
                                    </span>
                                @else
                                    <span class="badge rounded-pill px-3 py-2 bg-light text-muted">بدون تخفیف</span>
                                @endif
                            </td>
                            
                            <td class="text-center py-3">
                                <span style="color: #f97316; font-weight: 600;">{{ number_format($finalPrice) }}</span>
                                <small class="text-muted d-block">تومان</small>
                            </td>
                            
                            <td class="py-3">
                                @if(!empty($categoriesNames))
                                    <div class="d-flex flex-wrap gap-1 justify-content-center">
                                        @foreach(array_slice($categoriesNames, 0, 2) as $catName)
                                            <span class="badge px-3 py-2" style="background-color: #f1f5f9; color: #334155;">
                                                {{ $catName }}
                                            </span>
                                        @endforeach
                                        @if(count($categoriesNames) > 2)
                                            <span class="badge px-3 py-2" style="background-color: #f97316; color: white;">
                                                +{{ count($categoriesNames) - 2 }}
                                            </span>
                                        @endif
                                    </div>
                                @else
                                    <span class="badge px-3 py-2" style="background-color: #fff7ed; color: #f97316;">بدون دسته</span>
                                @endif
                            </td>
                            
                            <td class="text-center py-3">
                                @if($product->show_home == 1)
                                    <span class="badge rounded-pill px-3 py-2" style="background-color: #dcfce7; color: #166534;">
                                        <i class="fa fa-check-circle ms-1" style="font-size: 11px;"></i>
                                        فعال
                                    </span>
                                @else
                                    <span class="badge rounded-pill px-3 py-2" style="background-color: #f1f5f9; color: #64748b;">
                                        <i class="fa fa-times-circle ms-1" style="font-size: 11px;"></i>
                                        غیرفعال
                                    </span>
                                @endif
                            </td>
                            
                            <td class="text-center py-3">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('product.show', [$product]) }}" 
                                       class="btn btn-sm" 
                                       style="background-color: #f8fafc; color: #475569; border: none; width: 32px; height: 32px; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center;"
                                       title="مشاهده">
                                        <i class="fa fa-eye" style="font-size: 14px;"></i>
                                    </a>
                                    
                                    <a href="{{ route('product.edit', $product->id) }}" 
                                       class="btn btn-sm"
                                       style="background-color: #fff7ed; color: #f97316; border: none; width: 32px; height: 32px; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center;"
                                       title="ویرایش">
                                        <i class="fa fa-edit" style="font-size: 14px;"></i>
                                    </a>
                                    
                                    <a href="{{ route('product.delete', $product->id) }}" 
                                       class="btn btn-sm"
                                       style="background-color: #fee2e2; color: #dc2626; border: none; width: 32px; height: 32px; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center;"
                                       title="حذف"
                                       onclick="return confirm('آیا از حذف این محصول اطمینان دارید؟')">
                                        <i class="fa fa-trash" style="font-size: 14px;"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center py-5">
                                <div class="d-flex flex-column align-items-center">
                                    <div style="width: 80px; height: 80px; background-color: #fff7ed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                        <i class="fa fa-box-open" style="font-size: 35px; color: #f97316;"></i>
                                    </div>
                                    <h6 class="mb-2" style="color: #334155;">هیچ محصولی یافت نشد</h6>
                                    <p class="text-muted small mb-3">اولین محصول خود را ایجاد کنید</p>
                                    <a href="{{ route('product.create') }}" class="btn text-white px-4" style="background-color: #f97316;">
                                        <i class="fa fa-plus ms-1"></i>
                                        ایجاد محصول جدید
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

           
    </div>
</div>

<!-- فونت‌آسوم -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- استایل‌ها -->
<style>
    .table th {
        background-color: transparent;
        font-size: 0.85rem;
        letter-spacing: 0.3px;
    }
    
    .table td {
        vertical-align: middle;
        font-size: 0.9rem;
    }
    
    .table tbody tr:hover {
        background-color: #fff7ed;
        transition: all 0.2s ease;
    }
    
    .btn {
        transition: all 0.2s ease;
    }
    
    .btn:hover {
        transform: translateY(-2px);
    }
    
    .badge {
        font-weight: 500;
    }
    
    .card {
        transition: all 0.3s ease;
    }
    
    /* RTL fixes */
    .ms-1, .ms-2, .ms-3, .ms-4 {
        margin-left: 0 !important;
        margin-right: 0.25rem;
    }
    .ms-2 { margin-right: 0.5rem; }
    .ms-3 { margin-right: 1rem; }
    .ms-4 { margin-right: 1.5rem; }
</style>

@endsection