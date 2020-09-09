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
                            <h5>{{$reco->applicant->user->lname}}</h5>
                        </div>
                    </div>
                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row ">
                        <div class="col-5 item-peso">
                            <h5>First Name:</h5>
                        </div>
                        <div class='col-7 item-peso'>
                            <h5>{{$reco->applicant->user->fname}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row ">
                        <div class="col-5 item-peso">
                            <h5>Gender:</h5>
                        </div>
                        <div class='col-7 item-peso'>
                            <h5>@if ($reco->applicant->user->gender==1)
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
                            <h5>{{$reco->applicant->user->postal_addr}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Postal Code:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->postal_code}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Email:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->email}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Telephone:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->telephone}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Phone:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->phone}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5> Birthday:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->dob}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Nationality:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->nationality}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Identity/Passport:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->id_no}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-6 item-peso">
                            <h5>Occupation:</h5>
                        </div>
                        <div class='col-6 item-peso'>
                            <h5>{{$reco->applicant->user->occupation}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Licence number:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$reco->applicant->user->flightiformation->licence_no}}</h5>
                        </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Licence Type:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$reco->applicant->user->flightiformation->licence_type}}</h5>
                        </div>
                 </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="row ">
                        <div class="col-7 item-peso">
                            <h5>Type of flight intended:</h5>
                        </div>
                        <div class='col-5 item-peso'>
                            <h5>{{$reco->applicant->user->flightiformation->type_of_flight}}</h5>
                        </div>
                 </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="row ">
                        <div class="col-2 item-peso">
                            <h5>flight Time:</h5>
                        </div>
                        <div class='col-10 item-peso'>
                            <h5>Last 6 Month:{{$reco->applicant->user->flightiformation->last_six}} &nbsp;&nbsp;
                                Last 12 Month:{{$reco->applicant->user->flightiformation->last_twelve}}&nbsp;&nbsp;
                                Total:{{$reco->applicant->user->flightiformation->total}}
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
                            <h5>{{$reco->applicant->user->flightiformation->flying_intended}}</h5>
                        </div>
                 </div>
                </div>

                  
                
                </div>
             
               
        </div>
        <div class="row" class="">
            <h5 class="peso">Previous Aviation medical assessment denied</h5>
        </div>
        <div class="row peso-i">
            @if ($reco->applicant->user->denideexam)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso ">
                    <div class="col-6 ">
                        <h5>Medical eximiner:</h5>
                    </div>
                    <div class='col-6'>
                        <h5>{{$reco->applicant->user->denideexam->examiner}}</h5>
                    </div>
                </div>
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Date:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->denideexam->date}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Place:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->denideexam->place}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Description:</h5>
                <div class="row item-peso">
                    
                        <h5>{{$reco->applicant->user->denideexam->detail}}</h5>
                   
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
            @if ($reco->applicant->user->accident)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Date:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->accident->date}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Place:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->accident->place}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Description:</h5>
                <div class="row item-peso">
                    
                        <h5>{{$reco->applicant->user->accident->detail}}</h5>
                   
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
            @if ($reco->applicant->user->alcohol)
            <div class="col-lg-6 col-md-6 col-sm-4">
                Alcohol
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Average week intake:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->alcohol->quantity}}</h5>
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
         
            @if ($reco->applicant->user->alcohol)
          
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>status:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->tobacco->status}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>Date stopped:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->tobacco->datestopped}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="row item-peso">
                    
                    <div class="col-5 ">
                        <h5>state:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->tobacco->state}}</h5>
                    </div>
             </div>
            </div>
           
            <div class="col-lg-4 col-md-4 col-sm-4">
               
                  <div class="row item-peso">
                      
                      <div class="col-5 ">
                          <h5>amount:</h5>
                      </div>
                      <div class='col-7 '>
                          <h5>{{$reco->applicant->user->tobacco->amount}}</h5>
                      </div>
               </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="row item-peso">
                      
                      <div class="col-7 ">
                          <h5>Number of years:</h5>
                      </div>
                      <div class='col-5 '>
                          <h5>{{$reco->applicant->user->tobacco->years}}</h5>
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
            @if ($reco->applicant->user->medication)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-5 ">
                        <h5>Name:</h5>
                    </div>
                    <div class='col-7 '>
                        <h5>{{$reco->applicant->user->medication->name}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-6 ">
                        <h5>Date commenced:</h5>
                    </div>
                    <div class='col-6 '>
                        <h5>{{$reco->applicant->user->medication->date}}</h5>
                    </div>
             </div>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row item-peso">
                    <div class="col-6 ">
                        <h5>Dose:</h5>
                    </div>
                    <div class='col-6 '>
                        <h5>{{$reco->applicant->user->medication->dose}}</h5>
                    </div>
             </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-4">
                <br>
                <h5>Diagnosis:</h5>
                <div class="row item-peso">
                    <div class='col-6 '>
                        <h5>{{$reco->applicant->user->medication->diagnosis}}</h5>
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
            @if ($reco->applicant->user->restriction)
            <div class="col-lg-12 col-md-12 col-sm-4">
                <h5>Detail:</h5>
                <div class="row item-peso">
                    <div class='col-6 '>
                        <h5>{{$reco->applicant->user->restriction->detail}}</h5>
                    </div>
                       
                   
             </div>
            </div>
            @else
            <h4>Doesn't have any licence limitation or restriction</h4>                
            @endif
         
      
        </div>

        
        <div class="row" class="">
            <h5 class="peso">Medical histories</h5>
        </div>
        <div class="row peso-i">
            @if ($reco->applicant->user->medicalhistories)
                <div class="col-lg-12 col-md-12 col-sm-4">
                    <div class="row ">
                @foreach ($reco->applicant->user->medicalhistories as $item)
              
                        <div class='col-2 '>
                            <h5>{{$item->disease->name}}</h5>
                        </div>
                 
                @endforeach
                    </div>
                </div>
                    
            @else
            <h4>Doesn't have any licence limitation or restriction</h4>                
            @endif
         
      
        </div>

        <div class="row" class="">
            <h5 class="peso">Family histories</h5>
        </div>
        <div class="row peso-i">
            @if ($reco->applicant->user->famhistories)
                <div class="col-lg-12 col-md-12 col-sm-4">
                    <div class="row ">
                @foreach ($reco->applicant->user->famhistories as $item)
              
                        <div class='col-2 '>
                            <h5>{{$item->family->name}}</h5>
                        </div>
                 
                @endforeach
                    </div>
                </div>
                    
            @else
            <h4>Doesn't have any licence limitation or restriction</h4>                
            @endif
         
      
        </div>
        <div class="row" class="">
            <h5 class="peso">Clinical examination</h5>
        </div>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">N</th>
                <th scope="col">ABN</th>
                <th scope="col"></th>
                <th scope="col">N</th>
                <th scope="col">ABN</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1.Head and Neck</th>
                <td></td>
                <td></td>
                <th>2.Skin and Lymphatics</th>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>2.Ophthalmology Orbit,adnexa,visual fields,<br>pupils,optic fundi
                ocular motility:Nystagmus,<br>eye muscle balance</th>
                <td>Chest-Lungs & Breasts( Indicate)</td>
                <td><input type="text" name="bgroupresult" id="bgroupresult" class="input-special"></td>
                <td><input type="date" name="bgroupnext" id="bgroupnext" class="input-special"></td>
              </tr>
              <tr>
                <th>3.Blood glucose</th>
                <td><input type="date" name="bglucosedate" id="bglucosedate" class="input-special"></td>
                <td><input type="text" name="bglucoseresult" id="bglucoseresult" class="input-special"></td>
                <td><input type="date" name="bglucosenext" id="bglucosenext" class="input-special"></td>
              </tr>
              <tr>
                <th>4.HIV Serplogy</th>
                <td><input type="date" name="hivdate" id="hivdate" class="input-special"></td>
                <td><input type="text" name="hivresult" id="hivresult" class="input-special"></td>
                <td><input type="date" name="hivnext" id="hivnext" class="input-special"></td>
              </tr>
              <tr>
                <th>5.HB level</th>
                <td><input type="date" name="hbdate" id="hbdate" class="input-special"></td>
                <td><input type="text" name="hbresult" id="hbresult" class="input-special"></td>
                <td><input type="date" name="hbnext" id="hbnext" class="input-special"></td>
              </tr>
              <tr>
                <th>6.UPT</th>
                <td><input type="date" name="uptdate" id="uptdate" class="input-special"></td>
                <td><input type="text" name="uptresult" id="uptresult" class="input-special"></td>
                <td><input type="date" name="uptnext" id="uptnext" class="input-special"></td>
              </tr>
          
            </tbody>
          </table>
          
    



        <div class="appoint-div">
            @if(empty($appointment))
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Make Recommendation
              </button>
              @else
              
               Appointment on: {{$appointment->date.' at:'.$appointment->time}}<br><br><br>
               <a href="{{url('clinical/create/'.$reco->applicant->id)}}">Test Result</a>
           
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
                <input type="hidden" name="applicant" value="{{$reco->applicant->id}}">  
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
