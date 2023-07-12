<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Requests\SuperAdminCreateSpecializationRequest;
use App\Http\Requests\SuperAdminUpdateSpecializationRequest;
use Illuminate\Support\Str;

class SuperAdminSpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::orderBy('id','DESC')->get();
        return view('backend.superadmin.specialization.specialization-list',  compact('specializations'));
    }

    public function create()
    {
        return view('backend.superadmin.specialization.specialization-create');
    }

    public function store(SuperAdminCreateSpecializationRequest $request)
    {
        $specializations_image = null;
        if ($request->hasFile('specializations_image')) {
            $specializations_image = $this->savePhoto($request->file('specializations_image'), 'images/specializations', 'specializations');
        }
        $specializations = new Specialization;
        $specializations->specializations_image = $specializations_image;
        $specializations->specializations_name = $request->specializations_name;
        $specializations->status = $request->status;
        $specializations->save();

        return redirect(route('specialization.index'))->with('success', 'Specialization created successfully');
    }

    public function edit($id)
    {
        $specialization = Specialization::find($id);
        return view('backend.superadmin.specialization.specialization-edit',  compact('specialization'));
    }

    public function update(SuperAdminUpdateSpecializationRequest $request)
    {
        $specializations_image = null;
        if ($request->hasFile('specializations_image')) {
            $specializations_image = $this->savePhoto($request->file('specializations_image'), 'images/specializations', 'specializations');
        }else{
            $specializations_image = $request->specializations_old_image;
        }
        $specialization = Specialization::where('id',(int) $request->id)->update(['specializations_name' => $request->specializations_name,'specializations_image' => $specializations_image, 'status' => $request->status]);
        return redirect(route('specialization.index'))->with('success', 'Specialization updated successfully');
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
