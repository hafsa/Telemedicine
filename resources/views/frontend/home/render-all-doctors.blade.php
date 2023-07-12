<div class="doctor-list-row row">
@if(!empty($doctors))
    @foreach($doctors as $doctor)
        <div class="doctor-list-col col-sm-6 col-md-4 col-xl-3">
            <div class="doctor-list-main bg-light">
                <a href="{{ route('doctoreDetails',['doctorid' => $doctor->id]) }}" class="img-box">
                    <img src="{{ url('images/profile').'/'.$doctor->avatar }}" alt="">
                </a>
                <div class="content-box">
                    <h3 class="font-weight-500 font-24"><a href="doctor-details.html" class="color-light-black">{{ $doctor->name }}</a></h3>
                    <div class="font-14 mb-2">{{ $doctor->education }},Medical Oncology- Fellowship - Oncologist</div>
                        <div class="rating mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m5.825 22 1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625 7.2.625-5.45 4.725L18.175 22 12 18.275Z"/></svg> <span class="d-inline-block average-rating">{{ $doctor->rate_count }}</span>
                        </div>
                        <div class="location font-14 mb-2"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z"/></svg>{{ $doctor->landmark }},{{ $doctor->city }}
                        </div>
                    <div class="btn-box">
                        <a href="{{ route('doctoreDetails',['doctorid' => $doctor->id]) }}" class="btn bg-color-blue text-white">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
</div>