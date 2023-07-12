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
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.dashboard') }}">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ route('superadmin.userslist') }}">Users</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Users</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users Details  <a href="{{ route('users.create') }}"><button class="btn btn-outline-light btn-sm px-4 " style="float: right;">+ Add New</button></a></h4>  
                            @include('backend.common.flash-message')
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                      <tr>
                                        <th>Sr No</th>
                                        <th>Users</th>
                                        <th>Image</th>
                                        <th>City</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td> {{ ucwords($user->name) }}</td>
                                            <td><img src="{{ url('doctor/assets/images/users/user-3.jpg') }}" alt="" class="rounded-circle thumb-sm me-1"></td>
                                            <td>{{ ucwords($user->city) }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>+21 123456789</td>
                                            <td><span class="badge badge-soft-success">Active</span></td>
                                            <td>                                                       
                                                <a href="{{ route('users.edit',['user' => $user->id ]) }}"><i class="las la-pen text-secondary font-16"></i>
                                                </a>
                                                <a href="javascript:void(0);" data-url="{{ route('users.destroy', ['user' => $user->id]) }}" ><i class="las la-trash-alt text-secondary font-16 btnDelete" data-title="Delete User Account " title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                    class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer>
        <!-- end Footer -->                
        <!--end footer-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.5.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
    <script>
        //For delete
        $(document).on("click",'.btnDelete',function(event) {
            event.preventDefault();
            var title = $(this).data('title');
            var url = $(this).data('url');
            var form = '';
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this "+title,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
            }).then(function (result) {
                if(result.value)
                {
                    form = $('#deleteForm');
                    form.attr('action', url);
                    form.submit();
                }
            });
        });
    </script>
@endsection