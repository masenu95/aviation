@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Phyisical examination</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="{{url('clinical/create/'.$applicant)}}" >clinical examination</a></li>
                <li><a href="#" class="actives">Phyical examination</a></li>
                <li><a href="#" class="disable" >Vision & Audiogram</a></li>
                <li><a href="#" class="disable">Special Investigation</a></li>
                <li><a href="#" class="disable">Recomendation</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('phy.store')}}" method="POST" id="form-appli">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @csrf        
            <div id="detail-form">
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        					
                      <input type="text" class="form-control" placeholder="Weight" name="weight" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="BMI" name="bmi" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Height" name="height" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Eye Color" name="eyecolor" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Hair color" name="haircolor" required>
                    </div>
                  
                </div>
                <br><hr><br>
                <h4>Blood pressure(Seated)</h4>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Systolic" name="systolic" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Diastolic" name="diastolic" required>
                      </div>
                </div>
                <br><hr><br>
                <h4>Resting Pulse</h4>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        	
                      <input type="text" class="form-control" placeholder="Rate bpm" name="ratebpm" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Rhythm Regular" name="rythm_reg" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Rhythm Irregular" name="rythm_irreg" required>
                    </div>
                </div>
                <br><hr><br>
                <h4>Urinalysis</h4>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        	
                      <input type="text" class="form-control" placeholder="pH" name="ph" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Sugar" name="sugar" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        	
                      <input type="text" class="form-control" placeholder="Protein" name="protein" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Appearence" name="appearance" required>
                      </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        	
                      <input type="text" class="form-control" placeholder="Blood" name="blood" required>
                    </div>
                  
                </div>
                <br><hr><br>

                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        <h6>Mental health aspects of fitness discussed</h6>
                            <input class="form-check-input" type="radio" name="mental" id="mental1" value="YES" checked>
                            <label class="form-check-label" for="mental1">
                             YES
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="mental" id="mental2" value="NO">
                            <label class="form-check-label" for="mental2">
                              NO
                            </label>
                     
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>Behavioral aspects of fitness discussed</h6>
                            <input class="form-check-input" type="radio" name="behavior" id="behavior1" value="YES" checked>
                            <label class="form-check-label" for="behavior1">
                             YES
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="behavior" id="behavior2" value="NO">
                            <label class="form-check-label" for="behavior2">
                              NO
                            </label>
                     
                    </div>
                </div>
                <br><hr><br>
                
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                        <h6>Physical aspects of fitness discussed</h6>
                            <input class="form-check-input" type="radio" name="physical" id="physical1" value="YES" checked>
                            <label class="form-check-label" for="physical1">
                             YES
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="physical" id="physical2" value="NO">
                            <label class="form-check-label" for="physical2">
                              NO
                            </label>
                     
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>Preventive health advice given</h6>
                            <input class="form-check-input" type="radio" name="advice" id="advice1" value="YES" checked>
                            <label class="form-check-label" for="advice1">
                             YES
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="advice" id="advice2" value="NO">
                            <label class="form-check-label" for="advice2">
                              NO
                            </label>
                     
                    </div>
                </div>
            </div>
            @if (session()->has('applicant'))
            <input type="hidden" name="applicant" value="{{session()->get('applicant')}}">   
            @else
            <input type="hidden" name="applicant" value="{{$applicant}}">  
            @endif
        

            <hr />
            <input type="submit" class="submitbtn" value="Next">
         
        
            </form> 
        </div>
    </div>
  
 
    
    

</div>

<script>
    $(function () {
        $("#checkYes").click(function () {
            if ($(this).is(":checked")) {
                $("#detail-form").show();
              
            } else {
                $("#detail-form").hide();
              
            }
        });

        $("#checkNo").click(function () {
            if ($(this).is(":checked")) {
                $("#detail-form").hide();
        
            } else {
                $("#detail-form").show();
            
            }
        });
        $(".disable").on("click", function(event){
   
        event.preventDefault();
        alert('Please complete this step to go to next step')
    
        });
  });
</script>
@endsection
