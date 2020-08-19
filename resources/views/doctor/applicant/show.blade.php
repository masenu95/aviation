@extends('layouts.admin')
@section('content')
<section id="main-content" style="background: #f4f7f6">
    <section class="wrapper">
        <div class="block-header">
            <div class="row">
                <h6>Online Aviation application form for medical assessment</h6>
                <div class="col-lg-9 col-md-9 col-sm-6">
                   
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <img src="{{asset('images/user.jpg')}}" alt="" class="form-image">
                </div>
           
            </div>
            <div class="row" class="">
                <h5 class="peso">PERSONAL INFORMATION</h5>
            </div>
            <div class="row peso-i">
                
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row ">
                        <div class="col-5 item-peso">
                            <h5>Surname:</h5>
                        </div>
                        <div class='col-7 item-peso'>
                            <h5>{{$applicant->user->lname}}</h5>
                        </div>
                    </div>
                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row ">
                        <div class="col-5 item-peso">
                            <h5>First Name:</h5>
                        </div>
                        <div class='col-7 item-peso'>
                            <h5>{{$applicant->user->fname}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row ">
                        <div class="col-5 item-peso">
                            <h5>Gender:</h5>
                        </div>
                        <div class='col-7 item-peso'>
                            <h5>@if ($applicant->user->gender==1)
                                M
                            @else
                                F
                            @endif
                               </h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-4 item-peso">
                            <h5>Address:</h5>
                        </div>
                        <div class='col-8 item-peso'>
                            <h5>{{$applicant->user->postal_addr}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Postal Code:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->postal_code}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Email:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->email}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Telephone:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->telephone}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Phone:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->phone}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5> Birthday:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->dob}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Nationality:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->nationality}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Identity/Passport:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->id_no}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Occupation:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$applicant->user->occupation}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Licence number:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$applicant->user->flightiformation->licence_no}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Licence Type:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$applicant->user->flightiformation->licence_type}}</h5>
                        </div>
                 </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Type of flight intended:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$applicant->user->flightiformation->type_of_flight}}</h5>
                        </div>
                 </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="row ">
                        <div class="col-2 item-peso">
                            <h5>flight Time:</h5>
                        </div>
                        <div class='col-10 item-peso'>
                            <h5>Last 6 Month:{{$applicant->user->flightiformation->last_six}} &nbsp;&nbsp;
                                Last 12 Month:{{$applicant->user->flightiformation->last_twelve}}&nbsp;&nbsp;
                                Total:{{$applicant->user->flightiformation->total}}
                            </h5>
                        </div>
                 </div>
                </div>
             
               
        </div>
    </section>
</section>

<script>
    function visibility(ids,name){
        event.preventDefault();
       
        id='#'+ids;
        if($(id).children().hasClass('fa-eye')){
           var action = 'visible';
        }else {
            var action = 'hidden';
        }
        var status ='#status-'+ids;
       

        var result=confirm('Are you sure you want to ' + name+' '+ action );
        if(result){
            var token = '{{ Session::token() }}';
            var url = '{{ url('/visibility') }}';

            $.ajax({
                    method:'POST',
                    url:url,
                    data:{category:ids,_token: token,action:action},
                    success:
                    function(result){
                        $(status).empty();
                        var actions =$(id).children();
                        if(result['success']=='hide'){
                           actions.removeClass('fa-eye-slash');
                           actions.addClass('fa-eye');
                           $(status).text('hidden');
                        }else if(result['success']=='visible'){
                           actions.removeClass('fa-eye');
                           actions.addClass('fa-eye-slash');
                           $(status).text('visible');
                        }                     
                    }
            });

        }
    }

</script>
@endsection
