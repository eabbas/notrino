<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footer;

class FooterController extends Controller
{
    public function create()
    {
        $allFooters = footer::all();
        return view('admin.footerColumn.create', ['allFooters' => $allFooters]);
    }

    // public function store(Request $request)
    // {
    //     dd($request->all());
    //     $columnId = $request->id;

    //     $mainFooter = Footer::updateOrCreate(
    //         [
    //             'column_id' => $columnId,
    //             'key' => null
    //         ],
    //         [
    //             'column_title' => $request->column_title,
    //             'value' => null
    //         ]
    //     );

    //     if ($request->hasFile('column_image')) {
    //         $name = $request->column_image->getClientOriginalName();
    //         $fullName = time() . '_' . $name;
    //         $path = $request->file('column_image')->storeAs('images', $fullName, 'public');
    //         $mainFooter->update([
    //             'value' => $path
    //         ]);
    //     }
    //     if ($request->has('footerLinks')) {
    //         foreach ($request->footerLinks as $columnKey => $links) {
    //             Footer::where('column_id', $columnKey)
    //                 ->whereNotNull('key')
    //                 ->delete();

    //             foreach ($links as $link) {
    //                 if (!empty($link['title']) && !empty($link['link'])) {
    //                     Footer::create([
    //                         'column_id' => $columnKey,
    //                         'column_title' => $request->column_title,
    //                         'key' => $link['title'],
    //                         'value' => $link['link']
    //                     ]);
    //                 }
    //             }
    //         }
    //     }

    //     return redirect()->route('footer.footerCreate');
    // }
    public function store(Request $request)
    {
        $columnId = $request->id;

        $mainFooter = Footer::updateOrCreate(
            [
                'column_id' => $columnId,
                'key' => null
            ],
            [
                'column_title' => $request->column_title,
                'value' => null
            ]
        );

 
        if ($request->hasFile('column_image')) {
            $name = $request->column_image->getClientOriginalName();
            $fullName = time() . '_' . $name;
            $path = $request->file('column_image')->storeAs('images', $fullName, 'public');
            $mainFooter->update(['value' => $path]);
        }
        if ($request->has('footerLinks') && isset($request->footerLinks[$columnId])) {
        
            Footer::where('column_id', $columnId)
                ->whereNotNull('key')
                ->delete();

            $links = $request->footerLinks[$columnId];

            foreach ($links as $link) {
         
                if (!empty($link['title'] ?? '') && !empty($link['link'] ?? '')) {
                    Footer::create([
                        'column_id' => $columnId,
                        'column_title' => $request->column_title,
                        'key' => trim($link['title']),
                        'value' => trim($link['link'])
                    ]);
                }
            }
        }

        return redirect()->route('footer.footerCreate')
            ->with('success', 'اطلاعات ستون با موفقیت ذخیره شد.');
    }

    // public function index()
    // {
    //     $footers = Footer::all();
    //     $groupedFooters = $footers->groupBy('column_title');
    //     return view('admin.footerColumn.index', ['groupedFooters' => $groupedFooters]);
    // }
}
