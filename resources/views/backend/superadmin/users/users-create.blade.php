@extends('backend.layout.index')

@section('title') Users List @endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.userslist') }}"">Users</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Create User</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create User</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create User  <a href="{{ route('superadmin.userslist') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">- Back</button></a></h4>  
                        </div>
                        <div class="card-body">
                            <form class="form" name="doctorForm" id="doctorForm" method="post" enctype="multipart/form-data" action="{{ route('users.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="name" class="mb-2">User Name</label>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Enter User Name" value="{{ old('name') }}">
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

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-2">
                                                    <label for="description" class="mb-2">About User</label>
                                                    <textarea class="form-control" name="description" role="15">
                                                        {{ old('description') }}
                                                    </textarea> 
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