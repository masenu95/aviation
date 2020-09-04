@extends('layouts.admin')
@section('content')
<section id="main-content" style="background: #f4f7f6">
    <section class="wrapper">
        <div class="block-header">
            <div class="row">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
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

                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Type of flying Intended:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$applicant->user->flightiformation->flying_intended}}</h5>
                        </div>
                 </div>
                </div>

                  
                
                </div>
             
               
        </div>
        <div class="row" class="">
            <h5 class="peso">Previous Aviation medical assessment denied</h5>
        </div>
        <div class="row peso-i">
            @if ($applicant->user->denideexam)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso ">
                    <div class="col-6 ">
                        <h5>Medical eximiner:</h5>
                    </div>
                    <div class='col-6'>
                        <h5>{{$applicant->user->denideexam->examiner}}</h5>
                    </div>
                </div>
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Date:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->denideexam->date}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Place:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->denideexam->place}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Description:</h5>
                <div class="row item-peso">
                    
                        <h5>{{$applicant->user->denideexam->detail}}</h5>
                   
             </div>
            </div>
            @else
            <h4>No ccident or reported incident</h4>                
            @endif
         
      
        </div>
        <div class="row" class="">
            <h5 class="peso">Any aircraft/Vehicle accident or reported incident since last medical</h5>
        </div>
        <div class="row peso-i">
            @if ($applicant->user->accident)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Date:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->accident->date}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Place:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->accident->place}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Description:</h5>
                <div class="row item-peso">
                    
                        <h5>{{$applicant->user->accident->detail}}</h5>
                   
             </div>
            </div>
            @else
            <h4>No denied Medical Examination</h4>                
            @endif
         
      
        </div>
        <div class="row" class="">
            <h5 class="peso">Alcohol and tobacco products</h5>
        </div>
        <div class="row peso-i">
            @if ($applicant->user->alcohol)
            <div class="col-lg-6 col-md-6 col-sm-4">
                Alcohol
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Average week intake:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->alcohol->quantity}}</h5>
                    </div>
             </div>
            </div>
            @else
            <h4>Doesn't take alcohol</h4>                
            @endif
        </div>
      
        <div class="row peso-i">
            
         <div class="col-12">
            <h4>  Tobacco Product</h4>
         </div>
         
            @if ($applicant->user->alcohol)
          
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>status:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->tobacco->status}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>Date stopped:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->tobacco->datestopped}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>state:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->tobacco->state}}</h5>
                    </div>
             </div>
            </div>
           
            <div class="col-lg-4 col-md-4 col-sm-4">
               
                  <div class="row item-peso">
                      
                      <div class="col-5 ">
                          <h5>amount:</h5>
                      </div>
                      <div class='col-7 '>
                          <h5>{{$applicant->user->tobacco->amount}}</h5>
                      </div>
               </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="row item-peso">
                      
                      <div class="col-7 ">
                          <h5>Number of years:</h5>
                      </div>
                      <div class='col-5 '>
                          <h5>{{$applicant->user->tobacco->years}}</h5>
                      </div>
               </div>
              </div>
            @else
                      
            @endif
        </div>

        <div class="row" class="">
            <h5 class="peso">Any medication including non-prescribed medication</h5>
        </div>
        <div class="row peso-i">
            @if ($applicant->user->medication)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Name:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$applicant->user->medication->name}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-6 ">
                        <h5>Date commenced:</h5>
                    </div>
                    <div class='col-6 '>
                        <h5>{{$applicant->user->medication->date}}</h5>
                    </div>
             </div>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-6 ">
                        <h5>Dose:</h5>
                    </div>
                    <div class='col-6 '>
                        <h5>{{$applicant->user->medication->dose}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Diagnosis:</h5>
                <div class="row item-peso">
                    <div class='col-6 '>
                        <h5>{{$applicant->user->medication->diagnosis}}</h5>
                    </div>
                       
                   
             </div>
            </div>
            @else
            <h4>Doesn't use any medication</h4>                
            @endif
         
      
        </div>
         
      
      

           <div class="row" class="">
            <h5 class="peso">Any limitation on licence/Restriction</h5>
        </div>
        <div class="row peso-i">
            @if ($applicant->user->restriction)
            <div class="col-lg-12 col-md-12 col-sm-4">
                <h5>Detail:</h5>
                <div class="row item-peso">
                    <div class='col-6 '>
                        <h5>{{$applicant->user->restriction->detail}}</h5>
                    </div>
                       
                   
             </div>
            </div>
            @else
            <h4>Doesn't have any licence limitation or restriction</h4>                
            @endif
         
      
        </div>


        <div class="appoint-div">
            @if(empty($appointment))
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Make Appointment
              </button>
              @else
              
               Appointment on: {{$appointment->date.' at:'.$appointment->time}}<br><br><br>
               <a href="{{url(/clinical)}}">Test Result</a>
           
              @endif


        </div>
         
           
    </div>
    </section>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Applicant schedule</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('appointment.store')}}" method="POST" >
                @csrf
                <div class="modal-body">
                <input type="hidden" name="applicant" value="{{$applicant->id}}">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Choose date</label>
                        <input type="date" class="form-control" id="exampleInputDate" name="date" >    
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Time</label>
                        <div class="row">
                            <div class="col-2">
                                <select class="form-control" id="exampleFormControlSelect1" style="width: 80px" name="hr">
                                    <option>Hr</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        @if ($i<10)
                                            <option value="{{'0'.$i}}">{{'0'.$i}}</option> 
                                            @else
                                            <option value="{{$i}}">{{$i}}</option> 
                                        @endif
                                            
                                    @endfor
                                  </select>
                            </div> 
                            <div class="col-2">
                                <select class="form-control" id="exampleFormControlSelect1" style="width: 80px" name="min">
                                    <option>Min</option>
                                    @for ($i = 0; $i < 60; $i=$i+5)
                                        @if ($i<10)
                                            <option value="{{'0'.$i}}">{{'0'.$i}}</option> 
                                            @else
                                            <option value="{{$i}}">{{$i}}</option> 
                                        @endif
                                            
                                    @endfor
                                  </select>
                            </div> 
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm appointment</button>
                </div>
            </form>
        </div>
    </div>
  </div>

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
