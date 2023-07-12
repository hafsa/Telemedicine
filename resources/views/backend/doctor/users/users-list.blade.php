@extends('backend.layout.index')

@section('title') User List @endsection
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
                                <li class="breadcrumb-item"><a href="#">Unikit</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Analytics</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customers Details </h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Ext.</th>
                                        <th>City</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Completion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unity Pugh</td>
                                            <td>9958</td>
                                            <td>Curicó</td>
                                            <td>2005/02/11</td>
                                            <td>37%</td>
                                        </tr>
                                        <tr>
                                            <td>Theodore Duran</td><td>8971</td><td>Dhanbad</td><td>1999/04/07</td><td>97%</td>
                                        </tr>
                                        <tr>
                                            <td>Kylie Bishop</td><td>3147</td><td>Norman</td><td>2005/09/08</td><td>63%</td>
                                        </tr>
                                        <tr>
                                            <td>Willow Gilliam</td><td>3497</td><td>Amqui</td><td>2009/29/11</td><td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>Blossom Dickerson</td><td>5018</td><td>Kempten</td><td>2006/11/09</td><td>17%</td>
                                        </tr>
                                        <tr>
                                            <td>Elliott Snyder</td><td>3925</td><td>Enines</td><td>2006/03/08</td><td>57%</td>
                                        </tr>
                                        <tr>
                                            <td>Castor Pugh</td><td>9488</td><td>Neath</td><td>2014/23/12</td><td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Pearl Carlson</td><td>6231</td><td>Cobourg</td><td>2014/31/08</td><td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>Deirdre Bridges</td><td>1579</td><td>Eberswalde-Finow</td><td>2014/26/08</td><td>44%</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Baldwin</td><td>6095</td><td>Moircy</td><td>2000/11/01</td><td>33%</td>
                                        </tr>  
                                        <tr>
                                            <td>Pearl Carlson</td><td>6231</td><td>Cobourg</td><td>2014/31/08</td><td>100%</td>
                                        </tr>                                                                                        
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
@endsection