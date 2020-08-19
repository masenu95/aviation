@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Medical assessment status</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
                <li><a class="actives" href="">Medical Assessment status</a></li>
                <li><a href="#" class="disable">Accident/Incident</a></li>
                <li><a href="#" class="disable">Alcohol Consumption</a></li>
                <li><a href="#" class="disable">Tobacco Products</a></li>
                <li><a href="#" class="disable">Medication</a></li>
                <li><a href="#" class="disable">Licence Limitation/Restriction</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('medical.store')}}" method="POST" id="form-appli">
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
                            Have you ever had an aviation Medical Assessment denied,suspended or revoked by any licence authority?  
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="med" id="checkYes" value="1" required>
                            <label class="form-check-label" for="checkYes">Yes</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="med" id="checkNo" value="0">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                          </div>
                        
              
                 
            
            <div id="detail-form" style="display: none">
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                      <input type="text" class="form-control" placeholder="Medical Examiner" name="examiner">
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <input type="date" class="form-control" placeholder="Date" name="date">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" class="form-control" placeholder="Place" name="place">
                      </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Details"></textarea>
                  </div>

            </div>
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
