<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Tfbanners;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuperAdminBannerController extends Controller
{
    public function index()
    {
        $banners = Tfbanners::orderBy('id','DESC')->get();
        return view('backend.superadmin.banners.banners-list',  compact('banners'));
    }

    public function create()
    {
        return view('backend.superadmin.banners.banners-create');
    }

    public function store(Request $request)
    {
        $banner_image = null;
        if ($request->hasFile('banner_image')) {
            $banner_image = $this->savePhoto($request->file('banner_image'), 'images/banner_image', 'banner_image');
        }
        $banner = new Tfbanners;
        $banner->banner_image = $banner_image;
        $banner->banner_name = $request->banner_name;
        $banner->banner_url = $request->banner_url;
        $banner->is_fullsize = $request->is_fullsize;
        $banner->status = $request->status;
        $banner->save();

        return redirect(route('banner.index'))->with('success', 'Banner created successfully');
    }

    public function edit($id)
    {
        $banner = Tfbanners::find($id);
        return view('backend.superadmin.banners.banners-edit',  compact('banner'));
    }

    public function update(Request $request)
    {
        $banner_image = null;
        if ($request->hasFile('banner_image')) {
            $banner_image = $this->savePhoto($request->file('banner_image'), 'images/banner_image', 'banner_image');
        }else{
            $banner_image = $request->banner_old_image;
        }
        $specialization = Tfbanners::where('id',(int) $request->id)->update(['banner_name' => $request->banner_name,'banner_image' => $banner_image, 'status' => $request->status,'is_fullsize' => $request->is_fullsize,'banner_url' => $request->banner_url]);
        return redirect(route('banner.index'))->with('success', 'Banner updated successfully');
    }

    private function savePhoto($image, $path, $prefix)
    {
        $destinationPath = public_path($path);
        $fileName = $prefix.'_'.time().'_'.strtolower(Str::random(6) ).'.'.$image->getClientOriginalExtension();

        if($image->move($destinationPath, $fileName)) {
            chmod($destinationPath.'/'.$fileName,0777);
            return $fileName;
        }
    }
}
