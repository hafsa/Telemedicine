@extends('frontend.layout.index')

@section('title') Home @endsection
@section('css')

@endsection
@section('content')

<div class="headerbanner_web">
    <div class="slidercovermin mainbannersilderbox">
        <div class="owl-carousel owl-theme mainbannercoverset">
            @foreach($fullBanners as $fullBanner)
                <div class="item"><a href="{{ $fullBanner->banner_url }}"><img src="{{ url('images/banner_image').'/'.$fullBanner->banner_image }}" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

<div class="headerbanner_resp">
    <div class="slidercovermin mainbannersilderbox">
        <div class="owl-carousel owl-theme mainbannercoverset">
            @foreach($fullBanners as $fullBanner)
                <div class="item"><a href="{{ $fullBanner->banner_url }}"><img src="{{ url('images/banner_image').'/'.$fullBanner->banner_image }}" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>


<div class="offerandrefer_cover section-padding">
    <div class="row">
        <div class="col-md-6">
            <div class="brand-logo-active-block owl-carousel owl-theme" id="offerSliderFirst">
                @foreach($halfbannersDesc as $halfbannerDesc)
                    <div class="item">
                        <div class="single-brand-logo text-center">
                            <a href="{{ $halfbannerDesc->banner_url }}" alt="">
                                <div class="offerslider_coverboxset">
                                    <img alt="" src="{{ url('images/banner_image').'/'.$halfbannerDesc->banner_image }}">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-4">
            <div class="brand-logo-active-block owl-carousel owl-theme" id="offerSliderSecond">
                @foreach($halfbannersAsc as $halfbannerAsc)
                    <div class="item">
                        <div class="single-brand-logo text-center">
                            <a href="{{ $halfbannerAsc->banner_url }}" alt="">
                                <div class="offerslider_coverboxset">
                                    <img alt="" src="{{ url('images/banner_image').'/'.$halfbannerAsc->banner_image }}">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="referandearn-section ">
    <div class="referandearnbox_cover">
        <div class="referandearn_set">
            <img src="{{ url('frontend/assets/svg/refer-earn-img.svg') }}" alt="referandearn">
            <h3>Invite your friend and family and get your cashback in your wallet!!</h3>
            <a href="javascript:;">Refer Now</a>
        </div>
    </div>
</div>

<section class="homvidclnisetain-section overflow-hidden section-padding">
    <div class="overflow-hidden">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="vidclnisetain-info text-center">
                        <a href="video-consultation.html" class="icon">
                            <img src="{{ url('frontend/assets/images/video-consultation-icon.png') }}" alt="">
                        </a>
                        <div class="font-18 font-weight-500 mt-1"><a href="#" class="color-light-black">Video
                                Consultation</a></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="vidclnisetain-info text-center">
                        <a href="video-consultation.html" class="icon">
                            <img src="{{ url('frontend/assets/images/clinic-visit-icon.png') }}" alt="">
                        </a>
                        <div class="font-18 font-weight-500 mt-1"><a href="#" class="color-light-black">Clinic
                                Visit</a></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="vidclnisetain-info text-center">
                        <a href="video-consultation.html" class="icon">
                            <img src="{{ url('frontend/assets/images/home-visit-icon.png') }}" alt="">
                        </a>
                        <div class="font-18 font-weight-500 mt-1"><a href="#" class="color-light-black">Home
                                Visit</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specialities-section overflow-hidden section-padding bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title-boder font-18 font-weight-600 text-uppercase">Consult Our Doctor with
                    Specialization</div>
                <div class="specialities-slider allcustomerreviewcover owl-carousel owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @if(!empty($specializations))
                                @foreach($specializations as $specialization)
                                <div class="owl-item">
                                    <div class="specialities-info text-center">
                                        <a href="video-consultation.html" class="img-box">
                                            <img src="{{ url('images/specializations').'/'.$specialization->specializations_image }}"
                                                title="{{  $specialization->specializations_name }}" alt="{{  $specialization->specializations_name }}">
                                        </a>
                                        <div class="title font-18 font-weight-600">
                                            <a href="video-consultation.html" class="color-light-black">{{  $specialization->specializations_name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center btn-box pt-4">
                    <a href="video-consultation.html" class="btn bg-color-blue text-white"> See All
                        Specializations</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specialities-section overflow-hidden section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title-boder font-18 font-weight-600 text-uppercase">Our Top Doctors</div>
                <div class="top-doctors-slider allcustomerreviewcover owl-carousel owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @if(!empty($doctors))
                                @foreach($doctors as $doctor)
                                    <div class="owl-item">
                                        <div class="doctor-list-slider">
                                            <div class="doctor-list-main bg-light">
                                                <a href="{{ route('doctoreDetails',['doctorid' => $doctor->id]) }}" class="img-box">
                                                    <img src="{{ url('images/profile').'/'.$doctor->avatar }}" alt="">
                                                </a>
                                                <div class="content-box">
                                                    <h3 class="font-weight-500 font-24"><a href="{{ route('doctoreDetails',['doctorid' => $doctor->id]) }}"
                                                            class="color-light-black">{{ $doctor->name }}</a></h3>
                                                    <div class="font-14 mb-2">{{ $doctor->education }} 
                                                        - Dietitian/Nutritionist
                                                    </div>
                                                    <div class="rating mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                                            <path
                                                                d="m5.825 22 1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625 7.2.625-5.45 4.725L18.175 22 12 18.275Z" />
                                                        </svg> <span class="d-inline-block average-rating">{{ $doctor->rate_count }}</span>
                                                    </div>
                                                    <div class="location font-14 mb-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                                            <path
                                                                d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
                                                        </svg> {{ $doctor->landmark }},{{ $doctor->city }}</div>
                                                    <div class="btn-box">
                                                        <a href="{{ route('doctoreDetails',['doctorid' => $doctor->id]) }}"
                                                            class="btn bg-color-blue text-white">View Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center btn-box pt-4">
                    <a href="{{ route('alldoctores') }}" class="btn bg-color-blue text-white"> See All Doctors</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specialities-section overflow-hidden section-padding bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title-boder font-18 font-weight-600 text-uppercase">Symptoms</div>
                <div class="symptoms-slider allcustomerreviewcover owl-carousel owl-theme">
                    
                    @if(!empty($symptoms))
                        @foreach($symptoms as $symptom)
                            <div class="item">
                                <div class="symptoms-list-slider bg-white rounded-3 overflow-hidden">
                                    <div class="symptoms-list-main">
                                        <a href="doctor-details.html" class="img-box">
                                            <img src="{{ url('images/symptoms').'/'.$symptom->symptoms_image }}"" alt="symptoms">
                                        </a>
                                        <div class="content-box">
                                            <h3 class="font-weight-500 font-20 text-center p-3"><a
                                                    href="doctor-details.html" class="color-light-black">{{ $symptom->symptoms_name }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection