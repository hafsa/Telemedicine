@extends('frontend.layout.index')

@section('title') Details @endsection
@section('css')

@endsection
@section('content')
<section class="section-padding doctor-details-section doctor-schedule-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="bg-light doctor-info-card overflow-hidden p-3 p-md-4 p-lg-5 ">
            <div class="row align-items-center">
              <div class="doctor-image col-sm-12 col-md-12 col-lg-4  p-3 p-lg-0">
                <img src="{{ url('images/profile').'/'.$doctor->avatar }}" alt="doctor" class="rounded-3">
              </div>
              <div class="card-details p-0 p-lg-5 p-3 col-sm-12 col-md-12 col-lg-8">
                <div class="doctor-name font-24 font-weight-600 mb-2">{{ $doctor->name }}</div>
                <div class="doctor-booking-info">
                  <div class="icon font-16">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M21 17v-6.9L12 15 1 9l11-6 11 6v8Zm-9 4-7-3.8v-5l7 3.8 7-3.8v5Z"/></svg>  {{ $doctor->education }}
                  </div>
                  <div class="icon font-16">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.683" viewBox="0 0 24 18.683"><path id="capsules-solid" d="M2.666,36.666a2,2,0,1,1,4,0v4.666h-4ZM0,36.666V46a4.666,4.666,0,0,0,9.332,0V38.566a4.793,4.793,0,0,0,.825,2.283l5.353,7.8a4.608,4.608,0,0,0,6.5,1.171,4.823,4.823,0,0,0,1.146-6.632l-5.353-7.8a4.605,4.605,0,0,0-6.5-1.171,4.781,4.781,0,0,0-1.971,3.458V36.666a4.666,4.666,0,0,0-9.332,0Zm12.357,2.675a2.164,2.164,0,0,1,.5-2.958,1.943,1.943,0,0,1,2.75.508l2.791,4.066L15.064,43.29Zm8.1,8.311c-.033.025-.067.046-.1.067l.167-.117c-.021.017-.042.033-.067.05Z" transform="translate(0 -32)"/></svg> Orthopaedics
                  </div>
                  <div class="icon font-16">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z"/></svg> {{ $doctor->address }}, Landmark :{{ $doctor->landmark }}
                    , {{ $doctor->city }}
                  </div>
                  <div class="icon font-16">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15 21-6-2.1-4.65 1.8q-.5.2-.925-.113Q3 20.275 3 19.75v-14q0-.325.188-.575.187-.25.512-.375L9 3l6 2.1 4.65-1.8q.5-.2.925.112.425.313.425.838v14q0 .325-.188.575-.187.25-.512.375Zm-1-2.45V6.85l-4-1.4v11.7Z"/></svg> <a href="{{ $doctor->location_direction }}" target="_blank">Get Direction</a>
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">

          <div class="doctor-info-card doctor-details p-3 p-md-4 p-lg-5 bg-light mt-5">
            <div class="details-card">
              <div class="about font-24 font-weight-600 mb-2">@if ($visiteType =='homevisit')
                    Book Home Visit
                @elseif ($visiteType =='clinicvisit')
                    Book Clinic Visit
                @elseif ($visiteType =='videovisit')
                    Book Video Consultation
              @endif </div>
              <div class="ticket-book-detail">                
                  <nav>
                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="mon-tab" data-bs-toggle="tab" data-bs-target="#mon" type="button" role="tab" aria-controls="mon" aria-selected="true">Mon<br>23 Jan 2023</button>
                      <button class="nav-link" id="tue-tab" data-bs-toggle="tab" data-bs-target="#tue" type="button" role="tab" aria-controls="tue" aria-selected="false">Tue<br>24 Jan 2023</button>
                      <button class="nav-link" id="wed-tab" data-bs-toggle="tab" data-bs-target="#wed" type="button" role="tab" aria-controls="wed" aria-selected="false">Wed<br>25 Jan 2023</button>
                      <button class="nav-link" id="Thu-tab" data-bs-toggle="tab" data-bs-target="#Thu" type="button" role="tab" aria-controls="Thu" aria-selected="false">Thu<br>25 Jan 2023</button>
                      <button class="nav-link" id="fri-tab" data-bs-toggle="tab" data-bs-target="#fri" type="button" role="tab" aria-controls="fri" aria-selected="false">Fri<br>20 Jan 2023</button>                      
                      <button class="nav-link" id="sat-tab" data-bs-toggle="tab" data-bs-target="#sat" type="button" role="tab" aria-controls="sat" aria-selected="false">Sat<br>25 Jan 2023</button>
                      <button class="nav-link" id="sun-tab" data-bs-toggle="tab" data-bs-target="#sun" type="button" role="tab" aria-controls="sun" aria-selected="false">Sun<br>25 Jan 2023</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade active show" id="mon" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="font-20 font-weight-600 mb-2">Select Time Slots</div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio1"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:00 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio2"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:15 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio3"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:30 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio4"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:45 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio5"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio6"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:15 PM</span></label>
                          </div>

                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio7"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio8"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio9"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio10"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio11"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio12"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio13" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio13"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="monradio" id="monradio14" autocomplete="off">
                            <label class="btn btn-outline-primary" for="monradio14"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>02:00 PM</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="font-20 font-weight-600 mb-2">Select Time Slots</div>
                       <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio1"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:00 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio2"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:15 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio3"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:30 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio4"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:45 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio5"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio6"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:15 PM</span></label>
                          </div>

                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio7"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio8"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio9"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio10"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio11"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="tueradio" id="tueradio12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="tueradio12"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:30 PM</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="font-20 font-weight-600 mb-2">Select Time Slots</div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio1"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:00 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio2"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:15 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio3"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:30 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio4"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:45 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio5"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio6"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:15 PM</span></label>
                          </div>

                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio7"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio8"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio9"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio10"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio11"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:25 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio12"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:35 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="wedradio" id="wedradio13" autocomplete="off">
                            <label class="btn btn-outline-primary" for="wedradio13"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:45 PM</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="Thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="font-20 font-weight-600 mb-2">Select Time Slots</div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio1"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:00 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio2"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:15 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio3"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:30 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio4"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:45 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio5"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio6"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:15 PM</span></label>
                          </div>

                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio7"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio8"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio9"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio10"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio11"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio12"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio13" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio13"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="thuradio" id="thuradio14" autocomplete="off">
                            <label class="btn btn-outline-primary" for="thuradio14"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>02:00 PM</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="fri" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="font-20 font-weight-600 mb-2">Select Time Slots</div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio3"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:30 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio4"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>11:45 AM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio5"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:00 PM</span></label>
                          </div>                        
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio7"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio8"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>12:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio9"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:00 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio10"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio11"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:15 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio12"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:30 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio13" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio13"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>01:45 PM</span></label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" class="btn-check" name="friradio" id="friradio14" autocomplete="off">
                            <label class="btn btn-outline-primary" for="friradio14"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m15.3 16.7 1.4-1.4-3.7-3.7V7h-2v5.4ZM12 22q-2.075 0-3.9-.788-1.825-.787-3.175-2.137-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175 1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138 1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg> <span>02:00 PM</span></label>
                          </div>
                        </div>
                      </div>                    
                      <div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="text-center p-4 close-img">
                          <img src="images/close.svg" alt="close">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="sun" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="text-center p-4 close-img">
                          <img src="images/close.svg" alt="close">
                        </div>
                      </div>
                  </div>
              </div>
            </div>         
            <div class="submit-btn btn-box pt-1 p-md-4 text-center">
              <button class="bg-color-blue btn m-auto text-white" type="submit" id="submit"> Submit</button>
            </div>
          </div>

        </div>
      </div>


    </div>
  </section>
@endsection