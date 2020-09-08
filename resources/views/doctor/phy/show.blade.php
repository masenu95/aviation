@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Clinical examination</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="#">clinical examination</a></li>
                <li><a href="#"  class="actives">Phyical examination</a></li>
                <li><a href="#" class="disable" >Alcohol Consumption</a></li>
                <li><a href="#" class="disable" >Tobacco Products</a></li>
                <li><a href="#" class="disable">Medication</a></li>
                <li><a href="#" class="disable">Licence Limitation/Restriction</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="row">
                  <div class="col-7"><h6>Weight:</h6></div>
                  <div class="col-4"> <strong>{{$phy->weight}}</strong></div>
              </div>
        
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"> <h6>Height:</h6></div>
                <div class="col-4"> <strong>{{$phy->height}}</strong></div>
            </div>
          
          </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>BMI:</h6></div>
                <div class="col-4"><strong>{{$phy->bmi}}</strong></div>
            </div>
         
        </div>
        <div class="col-lg-6 col-md-6">
            
                <div class="row">
                    <div class="col-7"><h6>Eyes Color:</h6></div>
                    <div class="col-4"><strong>{{$phy->eyecolor}}</strong></div>
                </div>
             
       
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Hair color:</h6></div>
                <div class="col-4"><strong>{{$phy->haircolor}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Systolic:</h6></div>
                <div class="col-4"><strong>{{$bp->systolic}}</strong></div>
            </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Diastolic</h6></div>
                <div class="col-5"><strong>{{$bp->diastolic}}</strong></div>
            </div>
        </div>
  

      <a href="{{url('eye/create/'.$phy->applicant_id)}}"  class="submitbtn">Next</a>
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
