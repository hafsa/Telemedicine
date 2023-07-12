<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Requests\SuperAdminUpdateDoctorAccountRequest;
use App\Http\Requests\SuperAdminCreateDoctorAccountRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminDoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('id','DESC')->get();
        return view('backend.superadmin.doctor.doctor-list',  compact('doctors'));
    }

    public function create()
    {
        return view('backend.superadmin.doctor.doctor-create');
    }

    public function store(SuperAdminCreateDoctorAccountRequest $request)
    {
        $profile_image = null;
        if ($request->hasFile('avatar')) {
            $profile_image = $this->savePhoto($request->file('avatar'), 'images/profile', 'avatar');
        }
        $doctor = new Doctor;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->gender = $request->gender;
        $doctor->phone_no = $request->phone_no;
        $doctor->description = $request->description;
        $doctor->education = $request->education;
        $doctor->specialization_ids = $request->specialization_ids;
        $doctor->address = $request->address;
        $doctor->landmark = $request->landmark;
        $doctor->city = $request->city;
        $doctor->location_direction = $request->location_direction;
        $doctor->video_link = $request->video_link;
        $doctor->status = $request->status;
        $doctor->is_homevisit = $request->is_homevisit;
        $doctor->homevisit_ammount = $request->homevisit_ammount;
        $doctor->is_clinicvisit = $request->is_clinicvisit;
        $doctor->clinicvisit_ammount = $request->clinicvisit_ammount;
        $doctor->is_videoconsultation = $request->is_videoconsultation;
        $doctor->videoconsultation_ammount = $request->videoconsultation_ammount;
        $doctor->avatar = $profile_image;
        $doctor->save();

        return redirect(route('doctors.index'))->with('success', 'Doctor account created successfully');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('backend.superadmin.doctor.doctor-edit',  compact('doctor'));
    }

    public function update(SuperAdminUpdateDoctorAccountRequest $request)
    {
        $profile_image = null;
        if ($request->hasFile('avatar')) {
            $profile_image = $this->savePhoto($request->file('avatar'), 'images/profile', 'avatar');
        }else{
            $profile_image = $request->avatar_old_image;
        }
        
        $password = !empty($request->password) ? Hash::make($request->password) : $request->old_password;

        $doctor = Doctor::where('id',(int) $request->id)->update(['name' => $request->name,'email' => $request->email,'gender' => $request->gender,'phone_no' => $request->phone_no,'description' => $request->description,'education' => $request->education,'specialization_ids' => $request->specialization_ids,'address' => $request->address,'landmark' => $request->landmark,'city' => $request->city,'location_direction' => $request->location_direction,'status' => $request->status,'video_link' => $request->video_link,'avatar' => $profile_image,'password' => $password,'is_homevisit' => $request->is_homevisit,'homevisit_ammount' => $request->homevisit_ammount,'is_clinicvisit' => $request->is_clinicvisit,'clinicvisit_ammount' => $request->clinicvisit_ammount,'is_videoconsultation' => $request->is_videoconsultation,'videoconsultation_ammount' => $request->videoconsultation_ammount]);
        
        return redirect(route('doctors.index'))->with('success', 'Doctor account updated successfully');
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
