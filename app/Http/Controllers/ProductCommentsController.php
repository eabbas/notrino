<?php

namespace App\Http\Controllers;

use App\Models\product_comments;
use App\Models\product_purchases;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class productCommentsController extends Controller
{
    public function store(Request $request, $productId)
    {
        // dd($productId);
        // چک کن کاربر لاگین هست یا نه
        if (!Auth()->check()) {
            return to_route('login')->with('error', 'برای نظر دادن باید وارد شوید.');
        }

        $hasPurchased = product_purchases::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->exists();
        // dd($hasPurchased);
        if (!$hasPurchased) {
            return back()->with('error', 'فقط کاربرانی که این محصول رو خریداری کردن میتونن نظر بدن.');
        }

        $alreadyCommented = product_comments::where('user_id', Auth()->id())
            ->where('product_id', $productId)
            ->exists();

        if ($alreadyCommented) {
            return back()->with('error', 'شما قبلاً برای این محصول نظر دادید.');
        }

        // ثبت نظر
        product_comments::create([
            'product_id' => $productId,
            'user_id' => Auth()->id(),
            'text' => $request->comment,
            'flag' => false,
        ]);

        return back()->with('success', 'نظر شما با موفقیت ثبت شد.');
    }
}
