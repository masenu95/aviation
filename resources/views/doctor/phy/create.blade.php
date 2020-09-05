@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Medication</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="" >clinical examination</a></li>
                <li><a href="#" class="actives">Phyical examination</a></li>
                <li><a href="#" class="disable" >Alcohol Consumption</a></li>
                <li><a href="#" class="disable" >Tobacco Products</a></li>
                <li><a href="#" class="disable">Medication</a></li>
                <li><a href="#" class="disable">Licence Limitation/Restriction</a></li>
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
                        			eyecolor	haircolor	
                      <input type="text" class="form-control" placeholder="Weight" name="weight" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="BMI" name="bmi" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Ophthalmology" name="opthalmology" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Chest-Lungs & Breast" name="chest" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Cardio-Vascular System" name="cardio" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Abdomen Hernia/Liver/Spleen" name="abdomen" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Anus & Rectum" name="anus" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Endocrine system" name="endocrine" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Anus & Rectum" name="anus" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Endocrine system" name="endocrine" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Psychiatric" name="psychiatric" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Neurological System Reflaxes,etc" name="neurological" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="Skin and lymphatic" name="skin" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Musculoskeletal spine,Upper and Lower limbs" name="musculoskeletal" required>
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6">
                      <input type="text" class="form-control" placeholder="General" name="general" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Identifying marks/tattoos/scars" name="identifying" required>
                      </div>
                </div>
            </div>
        <input type="hidden" name="applicant" value="{{session()->get('applicant')}}">

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
