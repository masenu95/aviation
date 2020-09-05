@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Clinical examination</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="#" class="actives">clinical examination</a></li>
                <li><a href="#" class="disable">Phyical examination</a></li>
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
                  <div class="col-7"><h6>Head and Neck:</h6></div>
                  <div class="col-4"> <strong>{{$clinics->headneck}}</strong></div>
              </div>
        
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"> <h6>ENT System:</h6></div>
                <div class="col-4"> <strong>{{$clinics->entsystem}}</strong></div>
            </div>
          
          </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Ophthalmology Orbit,adnexa,visual fields,pupils,optic fundi,ocular motility:Nystagmus,eye muscle balance:</h6></div>
                <div class="col-4"><strong>{{$clinics->ophthalmology}}</strong></div>
            </div>
         
        </div>
        <div class="col-lg-6 col-md-6">
            
                <div class="row">
                    <div class="col-7"><h6>Chest-Lungs & Breasts:</h6></div>
                    <div class="col-4"><strong>{{$clinics->chest}}</strong></div>
                </div>
             
       
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Cardio-Vascular:</h6></div>
                <div class="col-4"><strong>{{$clinics->cardio}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Abdomen Hernia/Liver/Spleen:</h6></div>
                <div class="col-4"><strong>{{$clinics->abdomen}}</strong></div>
            </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Anus & Rectum</h6></div>
                <div class="col-5"><strong>{{$clinics->anus}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Endocrine System:</h6></div>
                <div class="col-4"><strong>{{$clinics->endocrine}}</strong></div>
            </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Psychiatric</h6></div>
                <div class="col-5"><strong>{{$clinics->psychlatric}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Neurological System Reflaxes:</h6></div>
                <div class="col-4"><strong>{{$clinics->neurological}}</strong></div>
            </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>Skin and Lymphatics</h6></div>
                <div class="col-5"><strong>{{$clinics->skin}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Musculoskeletal Spine,Upper and Lower limbs</h6></div>
                <div class="col-4"><strong>{{$clinics->musculoskeletal}}</strong></div>
            </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6">     
            <div class="row">
                <div class="col-7"><h6>General</h6></div>
                <div class="col-5"><strong>{{$clinics->general}}</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-7"><h6>Identifying marks/tattoos/scars:</h6></div>
                <div class="col-4"><strong>{{$clinics->identifying}}</strong></div>
            </div>
      
        </div>
      </div>

      <a href="{{url('phy/create/'.$clinics->applicant_id)}}">Next</a>
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
