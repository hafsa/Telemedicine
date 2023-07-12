@extends('frontend.layout.index')

@section('title') Details @endsection
@section('css')

@endsection
@section('content')
    <section class="doctcoverSection section-padding">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 col-xl-2 sidebar-col">
                <div class="sidebar-main">
                <div class="sidebar-info">
                    <div class="searchFilter">
                    <h6 class="font-16">Search for a city</h6>
                    <div class="search-input">
                        <div class="input-group">
                        <label for="search" class="d-none">Search</label>
                        <input type="text" class="form-control" value="" id="search" placeholder="All Cities" onkeypress="return searchFilter()">
                        </div>
                    </div>
                    </div>
                </div>

                <div class="sidebar-info">
                    <h6 class="font-16">Gender</h6>
                    <div class="checkbox-main">
                    <div class="custom_check">
                        <input type="checkbox" name="gender" value="1" id="male" class="gender" onclick="return genderFilter()">
                        <label for="male">Male</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" name="gender" value="2" id="female" class="gender" onclick="return genderFilter()">
                        <label for="female">Female</label>
                    </div>
                    </div>
                </div>

                <div class="sidebar-info">
                    <h6 class="font-16">Services</h6>
                    <div class="checkbox-main">
                    <div class="custom_check">
                        <input type="checkbox" name="service" class="service" id="Clinic" value="is_clinicvisit" onclick="return servicesFilter()">
                        <label for="Clinic">Clinic Visit</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" name="service" class="service" id="Home" value="is_homevisit" onclick="return servicesFilter()">
                        <label for="Home">Home Visit</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" name="service" id="Consultation" class="service" value="is_videoconsultation" onclick="return servicesFilter()">
                        <label for="Consultation">Video Consultation</label>
                    </div>
                    </div>
                </div>

                <div class="sidebar-info">
                    <h6 class="font-16">Specialization</h6>
                    <div class="checkbox-main">
                    <div class="custom_check">
                        <input type="checkbox" id="medicine">
                        <label for="medicine">Alternative medicine specialist</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Bariatrician">
                        <label for="Bariatrician">Bariatrician</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Cardiologist">
                        <label for="Cardiologist">Cardiologist</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Dentist">
                        <label for="Dentist">Dentist</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="dermatologists">
                        <label for="dermatologists">DERMATOLOGISTS</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Diabetologists">
                        <label for="Diabetologists">Diabetologists</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Physician">
                        <label for="Physician">General Physician</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Hematologist">
                        <label for="Hematologist">Hematologist</label>
                    </div>
                    <div class="custom_check">
                        <input type="checkbox" id="Nephrologist">
                        <label for="Nephrologist">Nephrologist</label>
                    </div>

                    </div>
                </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-10 doctor-list-colum">
                <div id="apendHtml"></div>
            </div>

        </div>
        </div>
    </section>

@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    geTFilteredDoctorsList();
    function genderFilter(){
        geTFilteredDoctorsList()
    }

    function servicesFilter(){
        geTFilteredDoctorsList()
    }

    function searchFilter(){
        geTFilteredDoctorsList()
    }

    function geTFilteredDoctorsList(){
        var cityName = $('#search').val();
        var specialization = '1';
        var gender = new Array();
        $("input[name='gender']:checked").each(function() {
            gender.push($(this).val());
        });
        var services = new Array();
        $("input[name='service']:checked").each(function() {
            services.push($(this).val());
        });

        $.ajax({
            type:'GET',
            url:'{{ route('renderalldoctores') }}',
            data:{'cityName':cityName,'specialization':specialization,'services':services,'gender':gender},
            success: function(html){
                $('#apendHtml').html(html);
            }
        })    
    };
    
</script>