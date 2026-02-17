<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>ویرایش محصول</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">عنوان محصول</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $product->title }}" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">قیمت (تومان)</label>
                                    <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="discount" class="form-label">درصد تخفیف</label>
                                    <input type="number" name="discount" id="discount" class="form-control" value="{{ $product->discount }}" min="0" max="100">
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="form-check mt-4">
                                        <input type="checkbox" name="show_home" id="show_home" class="form-check-input" value="1" {{ $product->show_home ? 'checked' : '' }}>
                                        <label class="form-check-label" for="show_home">نمایش در صفحه اصلی</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label for="summary" class="form-label">خلاصه توضیحات</label>
                                    <textarea name="summary" id="summary" rows="3" class="form-control">{{ $product->summary }}</textarea>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">توضیحات کامل</label>
                                    <textarea name="description" id="description" rows="5" class="form-control">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            
                            <hr>
                            <h5 class="mt-4">تصاویر محصول</h5>
                            
                            {{-- تصویر اصلی --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">تصویر اصلی فعلی</label>
                                    @if($mainImage)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $mainImage->path) }}" alt="تصویر اصلی" style="max-width: 200px; max-height: 200px;">
                                            <div class="mt-2">
                                                <label>
                                                    <input type="checkbox" name="remove_main_image" value="1"> حذف تصویر اصلی
                                                </label>
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-muted">تصویر اصلی وجود ندارد</p>
                                    @endif
                                    
                                    <label for="mainImage" class="form-label mt-2">تصویر اصلی جدید</label>
                                    <input type="file" name="mainImage" id="mainImage" class="form-control" accept="image/*">
                                </div>
                                
                                {{-- گالری تصاویر --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">گالری تصاویر فعلی</label>
                                    @if($gallery->count() > 0)
                                        <div class="row">
                                            @foreach($gallery as $image)
                                                <div class="col-md-4 mb-2">
                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="گالری" style="max-width: 100%; max-height: 100px;">
                                                    <div class="mt-1">
                                                        <label>
                                                            <input type="checkbox" name="remove_gallery[]" value="{{ $image->id }}"> حذف
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">تصویر گالری وجود ندارد</p>
                                    @endif
                                    
                                    <label for="gallery" class="form-label mt-2">افزودن تصاویر جدید به گالری</label>
                                    <input type="file" name="gallery[]" id="gallery" class="form-control" accept="image/*" multiple>
                                </div>
                            </div>
                            
                            <hr>
                            <h5 class="mt-4">ویژگی‌های محصول</h5>
                            
                            <div id="attributes-container">
                                @foreach($attributes as $index => $attribute)
                                <div class="row attribute-row mb-2">
                                    <div class="col-md-5">
                                        <input type="text" name="attribute_keys[]" class="form-control" placeholder="عنوان ویژگی" value="{{ $attribute->key }}" required>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="attribute_units[]" class="form-control" placeholder="مقدار ویژگی" value="{{ $attribute->value }}" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger btn-sm remove-attribute">حذف</button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                            <button type="button" class="btn btn-success btn-sm mb-3" id="add-attribute">افزودن ویژگی جدید</button>
                            
                            <hr>
                            <h5 class="mt-4">دسته‌بندی</h5>
                                <div class="space-y-4">
                                @foreach ($categories as $category)
                                <div class="border border-gray-200 rounded-lg p-4 bg-[#FFF0F5]">
                                <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="{{$category->id}}" id="category_{{ $category->id }}" {{ in_array($category->id, $productCategories) ? 'checked' : '' }} 
                                           class="h-5 w-5 rounded border-gray-300 text-pink-600 focus:ring-pink-500">
                                    <span class="font-medium text-gray-800">{{$category->title}}</span>
                                </label>
                                <div class="mt-3 pr-6 space-y-3">
                                    @foreach($category->grandchild as $child)
                                    <div class="border border-gray-200 rounded-lg p-3 bg-white">
                                        <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                            <input type="checkbox" name="cat_id" value="{{$child->id}}" 
                                                   class="h-4 w-4 rounded border-gray-300 text-pink-600 focus:ring-pink-500">
                                            <span class="text-gray-700">{{$child->title}}</span>
                                        </label>
                                        <div class="mt-2 pr-6 space-y-2">
                                            @foreach($child->grandchild as $grand)
                                            <div class="border border-gray-200 rounded p-2 bg-[#F8F8FF]">
                                                <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                                                    <input type="checkbox" name="cat_id" value="{{$grand->id}}" 
                                                    class="h-3 w-4 rounded border-gray-300 text-pink-600 focus:ring-pink-500">
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
                            
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('product.list') }}" class="btn btn-secondary">بازگشت</a>
                                <button type="submit" class="btn btn-primary">بروزرسانی محصول</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('add-attribute').addEventListener('click', function() {
            const container = document.getElementById('attributes-container');
            const newRow = document.createElement('div');
            newRow.className = 'row attribute-row mb-2';
            newRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" name="attribute_keys[]" class="form-control" placeholder="عنوان ویژگی" required>
                </div>
                <div class="col-md-5">
                    <input type="text" name="attribute_units[]" class="form-control" placeholder="مقدار ویژگی" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger btn-sm remove-attribute">حذف</button>
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
</body>
</html>