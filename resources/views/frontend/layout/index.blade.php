<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head section start -->
        @include('frontend.common.head')
         <!-- head section end -->
    </head>
    <body>

        <!-- Top Bar Start -->
        @include('frontend.common.topbar')
        <!-- Top Bar End -->

        <div>
            <!-- Page Content-->
            @yield('content')
            <!-- end page content -->
        </div>

        <!-- end page-wrapper -->
        @include('frontend.common.footer')
        
    </body>
    <!--end body-->
</html>