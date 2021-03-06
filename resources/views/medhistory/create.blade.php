@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Family history</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a class="" href="{{url('medical')}}">Medical Assessment status</a></li>
                <li><a href="{{url('accident')}}" class="">Accident/Incident</a></li>
                <li><a href="{{url('alcohol')}}" class="">Alcohol Consumption</a></li>
                <li><a href="{{url('tobacco')}}" class="">Tobacco Products</a></li>
                <li><a href="#" class="actives">Medication</a></li>
                <li><a href="#" class="disable">Licence Limitation/Restriction</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('medhistory.store')}}" method="POST" id="form-appli">
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
        
                        <div>
                           Do you have or have you ever had,any of the following? if yes check before each question
                        </div>
                        
              
                 
            
            <div id="detail-form" style="">
              @foreach ($diseases as $disease)
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="disease[]" value="{{$disease->id}}">
                <label class="form-check-label" for="exampleCheck1">{{$disease->name}}</label>
             
                
              </div>
              @endforeach
            </div>

            <hr />
            <input type="submit" class="submitbtn" value="Next">
         
        
            </form> 
        </div>
    </div>
  
 
    
    

</div>

<script>
        $(".disable").on("click", function(event){
   
        event.preventDefault();
        alert('Please complete this step to go to next step')
    
        });
  });
</script>
@endsection
