<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Symptom;
use Illuminate\Http\Request;
use App\Http\Requests\SuperAdminCreateSymptomRequest;
use App\Http\Requests\SuperAdminUpdateSymptomRequest;
use Illuminate\Support\Str;

class SuperAdminSymptomsController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::orderBy('id','DESC')->get();
        return view('backend.superadmin.symptoms.symptoms-list',  compact('symptoms'));
    }

    public function create()
    {
        return view('backend.superadmin.symptoms.symptoms-create');
    }

    public function store(SuperAdminCreateSymptomRequest $request)
    {
        $symptoms_image = null;
        if ($request->hasFile('symptoms_image')) {
            $symptoms_image = $this->savePhoto($request->file('symptoms_image'), 'images/symptoms', 'symptoms');
        }
        $symptom = new Symptom;
        $symptom->symptoms_image = $symptoms_image;
        $symptom->symptoms_name = $request->symptoms_name;
        $symptom->status = $request->status;
        $symptom->save();
        return redirect(route('symptom.index'))->with('success', 'Symptom created successfully');
    }

    public function edit($id)
    {
        $symptom = Symptom::find($id);
        return view('backend.superadmin.symptoms.symptoms-edit',  compact('symptom'));
    }

    public function update(SuperAdminUpdateSymptomRequest $request)
    {
        if ($request->hasFile('symptoms_image')) {
            $symptoms_image = $this->savePhoto($request->file('symptoms_image'), 'images/symptoms', 'symptoms');
        }else{
            $symptoms_image = $request->symptoms_old_image;
        }
        $symptom = Symptom::where('id',(int) $request->id)->update(['symptoms_name' => $request->symptoms_name,'symptoms_image' =>$symptoms_image,'status' => $request->status]);
        return redirect(route('symptom.index'))->with('success', 'Symptom updated successfully');
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
