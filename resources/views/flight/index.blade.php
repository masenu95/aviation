@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Clinical examination</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
           
                <li><a href="#"  class="actives">Flight information</a></li>
               
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="row">
                  <div class="col-7"><h6>Licence Number:</h6></div>
                  <div class="col-4"> <strong>{{$flight->licence_no}}</strong></div>
              </div>
        
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"> <h6>Licence Type:</h6></div>
                <div class="col-4"> <strong>{{$flight->licence_type}}</strong></div>
            </div>
          
          </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Type of flying intended:</h6></div>
                <div class="col-4"><strong>{{$flight->type_of_flight}}</strong></div>
            </div>
         
        </div>
        <div class="col-lg-6 col-md-6">
            
                <div class="row">
                    <div class="col-7"><h6>Flight time last 6 months:</h6></div>
                    <div class="col-4"><strong>{{$flight->last_six}}</strong></div>
                </div>
             
       
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Flight time last 12 months:</h6></div>
                <div class="col-4"><strong>{{$flight->last_twelve}}</strong></div>
            </div>
         
        </div>
        <div class="col-lg-6 col-md-6">
            
                <div class="row">
                    <div class="col-7"><h6>Flight time total:</h6></div>
                    <div class="col-4"><strong>{{$flight->total}}</strong></div>
                </div>
             
       
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Flight intended:</h6></div>
                <div class="col-4"><strong>{{$flight->flying_intended}}</strong></div>
            </div>
         
        </div>
       
      </div>
      <hr>
  

      <a href="{{url('medical/create/')}}"  class="submitbtn">Next</a>
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
