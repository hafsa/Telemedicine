@extends('backend.layout.index')

@section('title') Specialization create @endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.specializationlist') }}"">Specializations</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Create Specialization</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Specialization</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Specialization  <a href="{{ route('superadmin.specializationlist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="specializationForm" id="specializationForm" method="post" enctype="multipart/form-data" action="{{ route('specialization.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="specializations_name" class="mb-2">Specialization Name</label>
                                            <input class="form-control" type="text" id="specializations_name" name="specializations_name" placeholder="Enter Specialization Name" value="{{ old('specializations_name') }}">
                                        </div>
                                        @if ($errors->has('specializations_name'))
                                            <span class="text-danger">{{ $errors->first('specializations_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="specializations_image" class="mb-2">Specialization Image</label>
                                            <input class="form-control" type="file" id="specializations_image" name="specializations_image"  value="{{ old('specializations_image') }}">
                                        </div>
                                        @if ($errors->has('specializations_image'))
                                            <span class="text-danger">{{ $errors->first('specializations_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="status" class="mb-2">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option value="1" @if(old('status') =='1') selected @endif >Active</option>
                                                <option value="2" @if(old('status') =='0') selected @endif>InActive</option>
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