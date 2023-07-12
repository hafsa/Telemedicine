
    {{-- <meta charset="utf-8" />
    <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    App favicon
    <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}
    <meta charset="utf-8" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('doctor/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ url('doctor/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('doctor/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('doctor/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('doctor/assets/plugins/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert -->
    <link href="{{ url('doctor/assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('doctor/assets/plugins/animate/animate.min.css') }}" rel="stylesheet" type="text/css">
@yield('css')