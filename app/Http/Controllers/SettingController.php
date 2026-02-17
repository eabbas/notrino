<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\setting;
use Illuminate\Console\Events\ScheduledTaskStarting;

class SettingController extends Controller
{
    public function createLogo()
    {
        return view('admin.settings.footerLogoCreate');
    }
    public function createDescription()
    {
        return view('admin.settings.footerDescriptionCreate');
    }
 
    public function createHeroBannerRight(){
        return view('admin.settings.footerHeroBannerRightCreate');
    }
    public function createHeroBannerLeft(){
        return view('admin.settings.footerHeroBannerLeftCreate');
    }
    public function upsertLogo(Request $request)
    {
        // dd($request->all());
        $type = request()->footerImage->getClientOriginalExtension();
        $name = $request->footerImage->getClientOriginalName();
        $fullName = Str::uuid() . '_' . $name;
        $path = $request->file('footerImage')->storeAs('logo', $fullName, 'public');
        $logo[] = ['meta_key' => 'footerLogo', 'meta_value' => $path , 'slug'=>'footerLogo'];

        setting::upsert($logo, ['meta_key'], ['meta_value']);
        return 'با موفقیت ثبت شد';
    } 
    public function upsertDescription(Request $request)
    {
        $description[] = ['meta_key' => 'footerDescription' , 'meta_value' => $request->description , 'slug'=>'footerDescription'];
        
        setting::upsert($description , ['meta_key'] , ['meta_value']);

        return 'با موفقیت ثبت شد';
    }

    public function upsertHeroBannerRight(Request $request)
    {
     
        $bannerName = $request->heroBannerRigth->getClientOriginalName();
        $fullNameBanner = Str::uuid() . "_" . $bannerName;
        $bannerPath = $request->heroBannerRigth->storeAs('images', $fullNameBanner, 'public');
        $heroBanner[] = ['meta_key' => 'mainPageRightHeroBanner', 'meta_value' => $bannerPath, 'slug' => 'HeroBannerRight'];

        setting::upsert($heroBanner, ['meta_key'], ['meta_value']);
       

        return 'با موفقیت ثبت شد';
    }
    public function upsertHeroBannerLeft(Request $request)
    {
     
        $bannerName = $request->heroBannerLeft->getClientOriginalName();
        $fullNameBanner = Str::uuid() . "_" . $bannerName;
        $bannerPath = $request->heroBannerLeft->storeAs('images', $fullNameBanner, 'public');
        $heroBannerLeft[] = ['meta_key' => 'mainPageLeftHeroBanner', 'meta_value' => $bannerPath, 'slug' => 'HeroBannerLeft'];

        setting::upsert($heroBannerLeft, ['meta_key'], ['meta_value']);
       

        return 'با موفقیت ثبت شد';
    }
}

