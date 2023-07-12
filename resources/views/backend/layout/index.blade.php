<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head section start -->
        @include('backend.common.head')
         <!-- head section end -->
    </head>
    <body id="body" class="dark-sidebar">
        <!-- leftbar-tab-menu -->
        @include('backend.common.sidebar')
        <!-- end left-sidenav-->

        <!-- Top Bar Start -->
        @include('backend.common.topbar')
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Page Content-->
            @yield('content')
            <!-- end page content -->
        </div>

        <!-- end page-wrapper -->
        @include('backend.common.footer')
        
    </body>
    <!--end body-->
</html>