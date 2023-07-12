<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\Symptom;
use App\Models\Tfbanners;
use View;

class FrontEndHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors = Doctor::where('status',1)->limit(10)->orderBy('rate_count','DESC')->get();
        $specializations = Specialization::where('status',1)->limit(10)->orderBy('id','DESC')->get();
        $symptoms = Symptom::where('status',1)->limit(10)->orderBy('id','DESC')->get();
        $fullBanners = Tfbanners::where('status',1)->limit(10)->where('is_fullsize','1')->orderBy('id','DESC')->get();
        $halfbannersDesc = Tfbanners::where('status',1)->limit(10)->where('is_fullsize','0')->orderBy('id','DESC')->get();
        $halfbannersAsc = Tfbanners::where('status',1)->limit(10)->where('is_fullsize','0')->orderBy('id','ASC')->get();
        return view('frontend.home.home',compact('doctors','specializations','symptoms','fullBanners','halfbannersDesc','halfbannersAsc'));
    }

    public function doctoreDetails($id)
    {
        $doctor = Doctor::find($id);
        return view('frontend.home.doctor-details',compact('doctor'));
    }

    public function alldoctores()
    {
        $doctors = Doctor::get();
        return view('frontend.home.all-doctors',compact('doctors'));
    }

    public function renderalldoctores(Request $request)
    {
        $doctors = Doctor::where('status',1);

        if(!empty($request->cityName)){
            $doctors = $doctors->where('city','like','%'.$request->cityName.'%');
        }

        if(!empty($request->gender)){
            $doctors = $doctors->whereIn('gender',$request->gender);
        }

        if(!empty($request->services)){
            if(in_array('is_homevisit',$request->services)){
                $doctors = $doctors->where('is_homevisit',1);
            }
            if(in_array('is_clinicvisit',$request->services)){
                $doctors = $doctors->where('is_clinicvisit',1);
            }
            if(in_array('is_videoconsultation',$request->services)){
                $doctors = $doctors->where('is_videoconsultation',1);
            }
        }

        $doctors = $doctors->get();
        return view('frontend.home.render-all-doctors',compact('doctors'))->render();
    }

    public function doctoreScheduleDetails($id,$visiteType)
    {
        $doctor = Doctor::find($id);
        return view('frontend.home.doctor-schedule-details',compact('doctor','visiteType'));
    }
}
