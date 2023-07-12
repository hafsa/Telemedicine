@extends('backend.layout.index')

@section('title')Edit Doctor Account @endsection
@section('css')

@endsection
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.dashboard') }}">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.doctorlist') }}">Doctors</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Edit Doctor Account</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Doctor Account</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Doctor Account <a href="{{ route('superadmin.doctorlist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="doctorForm" id="doctorForm" method="POST" enctype="multipart/form-data" action="{{ route('doctors.update',$doctor->id) }}">
                                {{ csrf_field() }}
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $doctor->id }}">
                                <input type="hidden" name="avatar_old_image" value="{{ $doctor->avatar }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="name" class="mb-2">Doctor Name</label>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Enter Doctor Name" value="{{ $doctor->name }}">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="email" class="mb-2">Email</label>
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Enter email" value="{{ $doctor->email }}">
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="password" class="mb-2">Password</label>
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter password" value="">
                                                <input class="form-control" type="hidden" name="old_password" value="{{ $doctor->password }}">
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="gender" class="mb-2">Select Gender</label>
                                                <select class="form-select" name="gender" aria-label="Default select example">
                                                    <option value="1" @if(old('gender') =='1') selected @endif >Male</option>
                                                    <option value="2" @if(old('gender') =='2') selected @endif>Female</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('gender'))
                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="education" class="mb-2">Education</label>
                                                <input class="form-control" type="text" id="education" name="education" placeholder="Enter Education" value="{{ $doctor->education }}">
                                            </div>
                                            @if ($errors->has('education'))
                                                <span class="text-danger">{{ $errors->first('education') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="gender" class="mb-2">Select Specializations</label>
                                                <select class="form-select" name="gender" aria-label="Default select example">
                                                    <option value="1" @if($doctor->gender =='1') selected @endif >Male</option>
                                                    <option value="2" @if($doctor->gender =='2') selected @endif>Female</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('gender'))
                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="address" class="mb-2">Address</label>
                                                <input class="form-control" type="text" id="address" name="address" placeholder="Enter Doctor Address" value="{{ $doctor->address }}">
                                            </div>
                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="landmark" class="mb-2">landmark</label>
                                                <input class="form-control" type="text" id="landmark" name="landmark" placeholder="Enter Adress landmark" value="{{ $doctor->landmark }}">
                                            </div>
                                            @if ($errors->has('landmark'))
                                                <span class="text-danger">{{ $errors->first('landmark') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="city" class="mb-2">City</label>
                                                <input class="form-control" type="text" id="city" name="city" placeholder="Enter Adress city" value="{{ $doctor->city }}">
                                            </div>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="location_direction" class="mb-2">location Direction Link</label>
                                                <input class="form-control" type="text" id="location_direction" name="location_direction" placeholder="Enter location direction map link" value="{{ $doctor->location_direction }}">
                                            </div>
                                            @if ($errors->has('location_direction'))
                                                <span class="text-danger">{{ $errors->first('location_direction') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="video_link" class="mb-2">Video link</label>
                                                <input class="form-control" type="text" id="video_link" name="video_link" placeholder="Enter Video Call Link" value="{{ $doctor->video_link }}">
                                            </div>
                                            @if ($errors->has('video_link'))
                                                <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-2">
                                                <label for="avatar" class="mb-2">Pofile Image</label>
                                                <input class="form-control" type="file" id="avatar" name="avatar"  value="{{ $doctor->avatar }}">
                                            </div>
                                            @if ($errors->has('avatar'))
                                                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="mb-2">
                                                <label for="avatar" class="mb-2"> </label>
                                                <img src="{{ url('images/profile').'/'.$doctor->avatar }}" alt="" class="rounded-circle thumb-sm me-1">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_homevisit" class="mb-2">Enable Home Visit</label>
                                                <select class="form-select" name="is_homevisit" aria-label="Default select example">
                                                    <option value="1" @if($doctor->is_homevisit =='1') selected @endif >Enable</option>
                                                    <option value="0" @if($doctor->is_homevisit =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="homevisit_ammount" class="mb-2">Home Visit Charge</label>
                                                <input class="form-control" type="number" id="homevisit_ammount" name="homevisit_ammount" placeholder="Enter Home Visit Charge" value="{{ $doctor->homevisit_ammount }}" step="any">
                                            </div>
                                            @if ($errors->has('homevisit_ammount'))
                                                <span class="text-danger">{{ $errors->first('homevisit_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_clinicvisit" class="mb-2">Enable Clinic Visit</label>
                                                <select class="form-select" name="is_clinicvisit" aria-label="Default select example">
                                                    <option value="1" @if($doctor->is_clinicvisit =='1') selected @endif >Enable</option>
                                                    <option value="0" @if($doctor->is_clinicvisit =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('is_clinicvisit'))
                                                <span class="text-danger">{{ $errors->first('is_clinicvisit') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="clinicvisit_ammount" class="mb-2">Clinic Visit Charge</label>
                                                <input class="form-control" type="number" id="clinicvisit_ammount" name="clinicvisit_ammount" placeholder="Enter Clinic Visit Charge" value="{{ $doctor->clinicvisit_ammount }}" step="any">
                                            </div>
                                            @if ($errors->has('clinicvisit_ammount'))
                                                <span class="text-danger">{{ $errors->first('clinicvisit_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_videoconsultation" class="mb-2">Enable Video Consultation</label>
                                                <select class="form-select" name="is_videoconsultation" aria-label="Default select example">
                                                    <option value="1" @if($doctor->is_videoconsultation =='1') selected @endif >Enable</option>
                                                    <option value="0" @if($doctor->is_videoconsultation =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('is_videoconsultation'))
                                                <span class="text-danger">{{ $errors->first('is_videoconsultation') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="videoconsultation_ammount" class="mb-2">Video Consultation Charge</label>
                                                <input class="form-control" type="number" id="videoconsultation_ammount" name="videoconsultation_ammount" placeholder="Enter Video Consultation Charge" value="{{ $doctor->videoconsultation_ammount }}" step="any">
                                            </div>
                                            @if ($errors->has('videoconsultation_ammount'))
                                                <span class="text-danger">{{ $errors->first('videoconsultation_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="gender" class="mb-2">Account Status</label>
                                                <select class="form-select" name="status" aria-label="Default select example">
                                                    <option value="1" @if($doctor->status =='1') selected @endif >Active</option>
                                                    <option value="0" @if($doctor->status =='0') selected @endif>DeActive</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-2">
                                                    <label for="description" class="mb-2">About Doctor </label>
                                                    <textarea class="form-control" name="description" role="15">{!! $doctor->description  !!}</textarea> 
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit form</button>
                                </div> <!-- end row -->
                            </form><!--end form-->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

        <!--Start Footer-->
            @include('backend.common.page-footer-section')              
        <!--end footer-->
    </div>
@endsection