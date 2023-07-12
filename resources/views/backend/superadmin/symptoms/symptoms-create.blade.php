@extends('backend.layout.index')

@section('title') Symptom create @endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.specializationlist') }}"">Symptom</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Create Symptom</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Symptom</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Symptom  <a href="{{ route('superadmin.symptomslist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="symptomForm" id="symptomForm" method="post" enctype="multipart/form-data" action="{{ route('symptom.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="symptoms_name" class="mb-2">Symptom Name</label>
                                            <input class="form-control" type="text" id="symptoms_name" name="symptoms_name" placeholder="Enter Symptom Name" value="{{ old('symptoms_name') }}">
                                        </div>
                                        @if ($errors->has('symptoms_name'))
                                            <span class="text-danger">{{ $errors->first('symptoms_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="symptoms_image" class="mb-2">Symptom Image</label>
                                            <input class="form-control" type="file" id="symptoms_image" name="symptoms_image"  value="{{ old('symptoms_image') }}">
                                        </div>
                                        @if ($errors->has('symptoms_image'))
                                            <span class="text-danger">{{ $errors->first('symptoms_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="status" class="mb-2">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option value="1" @if(old('status') =='1') selected @endif >Active</option>
                                                <option value="0" @if(old('status') =='0') selected @endif>InActive</option>
                                                </select>
                                        </div>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div> <!-- end row -->
                                <button type="submit" class="btn btn-primary">Submit form</button>
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