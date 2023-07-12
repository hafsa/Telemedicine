@extends('backend.layout.index')

@section('title') Doctor Account create @endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.dashboard') }}"">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.doctorlist') }}"">Doctors</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Create Doctor</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Doctor</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Doctor  <a href="{{ route('superadmin.doctorlist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="doctorForm" id="doctorForm" method="post" enctype="multipart/form-data" action="{{ route('doctors.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="name" class="mb-2">Doctor Name</label>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Enter Doctor Name" value="{{ old('name') }}">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="email" class="mb-2">Email</label>
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="password" class="mb-2">Password</label>
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter password" value="{{ old('password') }}">
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
                                                <input class="form-control" type="text" id="education" name="education" placeholder="Enter Education" value="{{ old('education') }}">
                                            </div>
                                            @if ($errors->has('education'))
                                                <span class="text-danger">{{ $errors->first('education') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="gender" class="mb-2">Select Specializations</label>
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
                                                <label for="address" class="mb-2">Address</label>
                                                <input class="form-control" type="text" id="address" name="address" placeholder="Enter Doctor Address" value="{{ old('address') }}">
                                            </div>
                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="landmark" class="mb-2">landmark</label>
                                                <input class="form-control" type="text" id="landmark" name="landmark" placeholder="Enter Adress landmark" value="{{ old('landmark') }}">
                                            </div>
                                            @if ($errors->has('landmark'))
                                                <span class="text-danger">{{ $errors->first('landmark') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="city" class="mb-2">City</label>
                                                <input class="form-control" type="text" id="city" name="city" placeholder="Enter Adress city" value="{{ old('city') }}">
                                            </div>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="location_direction" class="mb-2">location Direction Link</label>
                                                <input class="form-control" type="text" id="location_direction" name="location_direction" placeholder="Enter location direction map link" value="{{ old('location_direction') }}">
                                            </div>
                                            @if ($errors->has('location_direction'))
                                                <span class="text-danger">{{ $errors->first('location_direction') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="video_link" class="mb-2">Video link</label>
                                                <input class="form-control" type="text" id="video_link" name="video_link" placeholder="Enter Video Call Link" value="{{ old('video_link') }}">
                                            </div>
                                            @if ($errors->has('video_link'))
                                                <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="avatar" class="mb-2">Pofile Image</label>
                                                <input class="form-control" type="file" id="avatar" name="avatar"  value="{{ old('avatar') }}">
                                            </div>
                                            @if ($errors->has('avatar'))
                                                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_homevisit" class="mb-2">Enable Home Visit</label>
                                                <select class="form-select" name="is_homevisit" aria-label="Default select example">
                                                    <option value="1" @if( old('is_homevisit') =='1') selected @endif >Enable</option>
                                                    <option value="0" @if( old('is_homevisit') =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="homevisit_ammount" class="mb-2">Home Visit Charge</label>
                                                <input class="form-control" type="number" id="homevisit_ammount" name="homevisit_ammount" placeholder="Enter Home Visit Charge" value="{{ old('homevisit_ammount') }}" step="any">
                                            </div>
                                            @if ($errors->has('homevisit_ammount'))
                                                <span class="text-danger">{{ $errors->first('homevisit_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_clinicvisit" class="mb-2">Enable Clinic Visit</label>
                                                <select class="form-select" name="is_clinicvisit" aria-label="Default select example">
                                                    <option value="1" @if(old('is_clinicvisit') =='1') selected @endif >Enable</option>
                                                    <option value="0" @if(old('is_clinicvisit') =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('is_clinicvisit'))
                                                <span class="text-danger">{{ $errors->first('is_clinicvisit') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="clinicvisit_ammount" class="mb-2">Clinic Visit Charge</label>
                                                <input class="form-control" type="number" id="clinicvisit_ammount" name="clinicvisit_ammount" placeholder="Enter Clinic Visit Charge" value="{{ old('clinicvisit_ammount') }}" step="any">
                                            </div>
                                            @if ($errors->has('clinicvisit_ammount'))
                                                <span class="text-danger">{{ $errors->first('clinicvisit_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="is_videoconsultation" class="mb-2">Enable Video Consultation</label>
                                                <select class="form-select" name="is_videoconsultation" aria-label="Default select example">
                                                    <option value="1" @if(old('is_videoconsultation') =='1') selected @endif >Enable</option>
                                                    <option value="0" @if(old('is_videoconsultation') =='0') selected @endif>Desable</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('is_videoconsultation'))
                                                <span class="text-danger">{{ $errors->first('is_videoconsultation') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label for="videoconsultation_ammount" class="mb-2">Video Consultation Charge</label>
                                                <input class="form-control" type="number" id="videoconsultation_ammount" name="videoconsultation_ammount" placeholder="Enter Video Consultation Charge" value="{{ old('videoconsultation_ammount') }}" step="any">
                                            </div>
                                            @if ($errors->has('videoconsultation_ammount'))
                                                <span class="text-danger">{{ $errors->first('videoconsultation_ammount') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label for="gender" class="mb-2">Active Status</label>
                                                <select class="form-select" name="status" aria-label="Default select example">
                                                    <option value="1" @if(old('status') =='1') selected @endif >Active</option>
                                                    <option value="2" @if(old('status') =='0') selected @endif>DeActive</option>
                                                  </select>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-2">
                                                    <label for="description" class="mb-2">About Doctor</label>
                                                    <textarea class="form-control" name="description" role="15">{{ old('description') }}</textarea> 
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