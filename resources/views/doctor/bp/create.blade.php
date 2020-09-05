@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Blood pressure(seated) & resting Pulse</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="#" >clinical examination</a></li>
                <li><a href="#" >Phyical examination</a></li>
                <li><a href="#" class="actives" >Blood pressure(seated) & resting Pulse</a></li>
                <li><a href="#" class="disable" >Tobacco Products</a></li>
                <li><a href="#" class="disable">Medication</a></li>
                <li><a href="#" class="disable">Licence Limitation/Restriction</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('clinical.store')}}" method="POST" id="form-appli">
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
                      <input type="text" class="form-control" placeholder="Systolic" name="systolic" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Diastolic" name="diastolic" required>
                      </div>
                </div>
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
            </div>
            @if (session())
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
