@extends('frontend.layout.index')

@section('title') Details @endsection
@section('css')

@endsection
@section('content')
    <section class="section-padding doctor-details-section">
        <div class="container">
            <div class="row g-5">
            <div class="col-lg-4 col-md-12 col-12 mb-md-0 mb-3">
                <div class="doctor-info-card overflow-hidden bg-light">
                <div class="doctor-image">
                    <img src="{{ url('images/profile').'/'.$doctor->avatar }}" alt="doctor">
                </div>
                <div class="card-details p-4">
                    <div class="doctor-name font-24 font-weight-600 mb-2">{{ $doctor->name }}</div>
                    <div class="doctor-expertise d-flex align-items-center flex-wrap mb-2">
                    <span class="chip font-14">Physiotherapy</span>
                    </div>
                    <div class="doctor-rating d-flex align-items-center flex-wrap mb-2">
                    <span class="font-weight-600  me-2">Rating:</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                        <path
                        d="m5.825 22 1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625 7.2.625-5.45 4.725L18.175 22 12 18.275Z">
                        </path>
                    </svg>
                    </div>
                    <div class="doctor-review d-flex align-items-center flex-wrap mb-2">
                    <span class="font-weight-600 me-2">Reviews:</span>
                    <span>{{ $doctor->rate_count }}</span>
                    </div>

                    <div class="doctor-location   mb-3">
                    <span class="font-weight-600 me-2 d-block">Location:</span>
                    {{ $doctor->landmark }} ,{{ $doctor->address }}, {{ $doctor->city }}.
                    </span>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="doctor-details">

                <div class="details-card mb-4">
                    <div class="about font-24 font-weight-600 mb-2">About Me</div>
                    <p>{{ $doctor->description }}</p>
                </div>
                <div class="details-card mb-4">
                    <div class="about font-24 font-weight-600 mb-2">Work & Experience</div>
                    <div class="step">
                    <div class="v-stepper">
                        <div class="circle"></div>
                        <div class="line"></div>
                    </div>
                    <div class="content">
                        <div class="font-18 font-weight-600 mb-1">Jupiter Hospital</div>
                        <div>10-2018- 10-2020</div>
                    </div>
                    </div>
                    <div class="step">
                    <div class="v-stepper">
                        <div class="circle"></div>
                        <div class="line"></div>
                    </div>
                    <div class="content">
                        <div class="font-18 font-weight-600 mb-1">Jupiter Hospital</div>
                        <div>10-2018- 10-2020</div>
                    </div>
                    </div>
                </div>
                <div class="details-card mb-4">
                    <div class="about font-24 font-weight-600 mb-2">Reviews</div>
                    <p>I am an Occupational Therapist - Neurology FAOT-NeuroRehabilitation With 7 years of experience.</p>
                </div>

                <div class="action-buttons-wrapper align-items-center d-flex">
                    @if ($doctor->is_homevisit == '1')
                        <div class="btn-box">
                            <a href="{{ route('doctoreScheduleDetails',['doctorid' => $doctor->id,'type' => 'homevisit']) }}" class="action-button align-items-center bg-color-blue btn d-flex m-md-2 mb-3 mb-md-0 text-white">
                                <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path d="M4 21V9l8-6 8 6v12h-6v-7h-4v7Z"></path>
                                </svg></span>
                                <div class="text-start line-height-normal">
                                <span class="d-block">Book Home Visit</span>
                                <span>Rs {{ $doctor->homevisit_ammount }}</span>
                                </div>
                            </a>
                        </div>
                    @endif
                    @if ($doctor->is_clinicvisit == '1')
                        <div class="btn-box">
                            <a href="{{ route('doctoreScheduleDetails',['doctorid' => $doctor->id,'type' => 'clinicvisit']) }}" class="action-button align-items-center bg-color-blue btn d-flex m-md-2 mb-3 mb-md-0 text-white">
                                <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path d="M10.5 17h3v-2.5H16v-3h-2.5V9h-3v2.5H8v3h2.5ZM4 21V9l8-6 8 6v12Z"></path>
                                </svg></span>
                                <div class="text-start line-height-normal">
                                <span class="d-block">Book Clinic Visit</span>
                                <span>Rs {{ $doctor->clinicvisit_ammount }}</span>
                                </div>
                            </a>
                        </div>
                    @endif
                    @if ($doctor->is_videoconsultation == '1')
                        <div class="btn-box">
                            <a href="{{ route('doctoreScheduleDetails',['doctorid' => $doctor->id,'type' => 'videovisit']) }}" class="action-button align-items-center bg-color-blue btn d-flex m-md-2 mb-3 mb-md-0 text-white">
                                <span><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path
                                    d="M4 20q-.825 0-1.412-.587Q2 18.825 2 18V6q0-.825.588-1.412Q3.175 4 4 4h12q.825 0 1.413.588Q18 5.175 18 6v4.5l4-4v11l-4-4V18q0 .825-.587 1.413Q16.825 20 16 20Z">
                                    </path>
                                </svg></span>
                                <div class="text-start line-height-normal">
                                <span class="d-block">Book Video Consultation</span>
                                <span>Rs {{ $doctor->videoconsultation_ammount }}</span>
                                </div>
                            </a>
                        </div>
                    @endif
                    </div>

                </div>
            </div>
            </div>
        </div>
    </section>

@endsection