@extends('backend.layout.index')

@section('title')Edit Banner @endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.specializationlist') }}">Banner</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Edit Banner</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Banner</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Banner <a href="{{ route('superadmin.bannerlist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="doctorForm" id="doctorForm" method="POST" enctype="multipart/form-data" action="{{ route('banner.update',$banner->id) }}">
                                {{ csrf_field() }}
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $banner->id }}">
                                <input type="hidden" name="banner_old_image" value="{{ $banner->banner_image }}">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label for="banner_name" class="mb-2">Banner Name</label>
                                            <input class="form-control" type="text" id="banner_name" name="banner_name" placeholder="Enter Banner Name" value="{{ $banner->banner_name }}">
                                        </div>
                                        @if ($errors->has('banner_name'))
                                            <span class="text-danger">{{ $errors->first('banner_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label for="is_fullsize" class="mb-2">Banner Type</label>
                                            <select class="form-select" name="is_fullsize" aria-label="Default select example">
                                                <option value="1" @if($banner->is_fullsize =='1') selected @endif >Full size Banner</option>
                                                <option value="0" @if($banner->is_fullsize =='0') selected @endif>Half size Banner</option>
                                                </select>
                                        </div>
                                        @if ($errors->has('is_fullsize'))
                                            <span class="text-danger">{{ $errors->first('is_fullsize') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="mb-2">
                                            <label for="banner_image" class="mb-2">Banner Image</label>
                                            <input class="form-control" type="file" id="banner_image" name="banner_image"  value="{{ $banner->banner_image }}">
                                        </div>
                                        @if ($errors->has('banner_image'))
                                            <span class="text-danger">{{ $errors->first('banner_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-1">
                                        <div class="mb-2">
                                            <img src="{{ url('images/banner_image').'/'.$banner->banner_image }}" alt="" class="rounded-circle thumb-sm me-1">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="banner_url" class="mb-2">Banner url</label>
                                            <input class="form-control" type="text" id="banner_url" name="banner_url" placeholder="Enter Banner URL" value="{{ $banner->banner_url }}">
                                        </div>
                                        @if ($errors->has('banner_url'))
                                            <span class="text-danger">{{ $errors->first('banner_url') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="status" class="mb-2">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option value="1" @if($banner->status =='1') selected @endif >Active</option>
                                                <option value="0" @if($banner->status =='0') selected @endif>InActive</option>
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