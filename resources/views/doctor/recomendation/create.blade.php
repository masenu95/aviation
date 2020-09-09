@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Recommendation</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="" >clinical examination</a></li>
                <li><a href="#">Phyical examination</a></li>
                <li><a href="#" >Vision,Audiogram and Special Investigation</a></li>
                <li><a href="#"  class="actives">Recomendation</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('reco.store')}}" method="POST" id="form-appli">
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
             
                <br><hr><br>
                <h4>Recomentation</h4>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                        <h6>Recommendation</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recom" id="fit" value="Fit" checked>
                            <label class="form-check-label" for="right1">
                            Fit
                            </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="recom" id="unfit" value="Temporary unfit" checked>
                          <label class="form-check-label" for="right1">
                          Temporary unfit
                          </label>
                        </div>
                     
                    </div>

              

                  
                        
         <div class="col-lg-4 col-md-4">
          <div class="form-row">
            <label for="datefrom">Date from</label>
            <div class="form-group col-8">
              
                <input type="date" name="datefrom" id="datefrom" class="form-control @error('datefrom') is-invalid @enderror" name="datefrom" value="{{ old('datefrom') }}" required autocomplete="datefrom" autofocus/>
            </div>
        </div>  
         </div>
         <div class="col-lg-4 col-md-4">
          <div class="form-row">
            <label for="dateto">Date To</label>
            <div class="form-group col-8">
              
                <input type="date" name="dateto" id="dateto" class="form-control @error('dateto') is-invalid @enderror" name="dateto" value="{{ old('dateto') }}" required autocomplete="dateto" autofocus/>
            </div>
        </div>  
         </div>
                </div>

         <div class="form-group">
          <label for="exampleFormControlTextarea1">Comments</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
        </div>

            <input type="hidden" name="applicant" value="{{$applicant}}">  
        
        

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

        $('#ar-250').click(function(e){e.preventDefault();}).click(function () {
            var check = "#r-250";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
            $('.right').removeClass("fa-check")
             $('#ar-250').find('.right').addClass("fa-check");
          }
        });

        $('#ar-500').click(function(e){e.preventDefault();}).click(function () {
            var check = "#r-500";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
             $('.right').removeClass("fa-check")
             $('#ar-500').find('.right').addClass("fa-check");
          }
        });
        
        @for ($i = 1000; $i < 7000; $i+=1000)
        $('{{"#ar-".$i}}').click(function(e){e.preventDefault();}).click(function () {
            var check = "{{'#r-'.$i}}";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
             $('.right').removeClass("fa-check")
             $('{{"#ar-".$i}}').find('.right').addClass("fa-check");
          }
        });        
        @endfor

        $('#al-250').click(function(e){e.preventDefault();}).click(function () {
            var check = "#l-250";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
            $('.left').removeClass("fa-check")
             $('#al-250').find('.left').addClass("fa-check");
          }
        });

        $('#al-500').click(function(e){e.preventDefault();}).click(function () {
            var check = "#l-500";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
             $('.left').removeClass("fa-check")
             $('#al-500').find('.left').addClass("fa-check");
          }
        });
        
        @for ($i = 1000; $i < 7000; $i+=1000)
        $('{{"#al-".$i}}').click(function(e){e.preventDefault();}).click(function () {
            var check = "{{'#l-'.$i}}";
         $(check).prop("checked", true);
     
         if( $(check).is(':checked')) { 
             $('.left').removeClass("fa-check")
             $('{{"#al-".$i}}').find('.left').addClass("fa-check");
          }
        });        
        @endfor
  });

</script>
@endsection
