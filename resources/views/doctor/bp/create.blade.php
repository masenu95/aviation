@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="form-app">Vision,Audiogram and Special Investigation</h4>
    <div class="row form-application">
        
        <div class="col-lg-4 col-md-4">
            <ul class="app-avs">
            <li><a  href="" >clinical examination</a></li>
                <li><a href="#">Phyical examination</a></li>
                <li><a href="#" class="actives" >Vision,Audiogram and Special Investigation</a></li>
                <li><a href="#" class="disable">Recomendation</a></li>
            </ul>
            
        </div>
        <div class="col-lg-8 col-md-8">
        <form action="{{route('eye.store')}}" method="POST" id="form-appli">
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
                <h4>Distant vision at 6M</h4>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                        <h6>Right Eye</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="right" id="right1" value="Uncorrected" checked>
                            <label class="form-check-label" for="right1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="right" id="right2" value="Glasses">
                            <label class="form-check-label" for="right2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="right" id="right3" value="Contact Lenses">
                            <label class="form-check-label" for="right3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <h6>Left Eye</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="left" id="left1" value="Uncorrected" checked>
                            <label class="form-check-label" for="left1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="left" id="left2" value="Glasses">
                            <label class="form-check-label" for="left2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="left" id="left3" value="Contact Lenses">
                            <label class="form-check-label" for="left3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h6>Both Eyes</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="both" id="both1" value="Uncorrected" checked>
                            <label class="form-check-label" for="both1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="both" id="both2" value="Glasses">
                            <label class="form-check-label" for="both2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="both" id="both3" value="Contact Lenses">
                            <label class="form-check-label" for="both3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>

           
                </div>
                <br><hr><br>
                <h4>Intermediate vision N14 at 100cm</h4>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                        <h6>Right Eye</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rightinterm" id="rightinterm1" value="Uncorrected" checked>
                            <label class="form-check-label" for="rightinterm1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rightinterm" id="rightinterm2" value="Glasses">
                            <label class="form-check-label" for="rightinterm2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rightinterm" id="rightinterm3" value="Contact Lenses">
                            <label class="form-check-label" for="rightinterm3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <h6>Left Eye</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="leftinterm" id="leftinterm1" value="Uncorrected" checked>
                            <label class="form-check-label" for="leftinterm1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="leftinterm" id="leftinterm2" value="Glasses">
                            <label class="form-check-label" for="leftinterm2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="leftinterm" id="leftinterm3" value="Contact Lenses">
                            <label class="form-check-label" for="leftinterm3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h6>Both Eyes</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bothinterm" id="bothinterm1" value="Uncorrected" checked>
                            <label class="form-check-label" for="bothinterm1">
                            Uncorrected
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bothinterm" id="bothinterm2" value="Glasses">
                            <label class="form-check-label" for="bothinterm2">
                              Glasses
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bothinterm" id="bothinterm3" value="Contact Lenses">
                            <label class="form-check-label" for="bothinterm3">
                              Contact Lenses
                            </label>
                        </div>
                     
                    </div>

           
                </div>
                <br><hr><br>
                <h4>Audiogram(db hearing loss)</h4>
                <div class="form-group row">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">250</th>
                            <th scope="col">500</th>
                            <th scope="col">1000</th>
                            <th scope="col">2000</th>
                            <th scope="col">3000</th>
                            <th scope="col">4000</th>
                            <th scope="col">5000</th>
                            <th scope="col">6000</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Right</th>
                            <td  id="ar-250" >
                                <label for="250" class="audio-g" >
                                    <input type="radio" name="audiogram-right" id="r-250" value="250" class="input-hidden" />
                                <i  class="right fas "></i>
                              </label>
                              </td>
                              <td  id="ar-500" >
                                <label for="r-500" class="audio-g" >
                                    <input type="radio" name="audiogram-right" id="r-500" value="500" class="input-hidden" />
                                <i  class="right fas "></i>
                              </label>
                              </td>
                            @for ($i = 1000; $i < 7000; $i+=1000)
                            <td  id="{{'ar-'.$i}}" >
                                <label for="{{'r-'.$i}}" class="audio-g" >
                                    <input type="radio" name="audiogram-right" id="{{'r-'.$i}}" value="{{$i}}" class="input-hidden" />
                                <i  class="right fas "></i>
                              </label>
                              </td>
                           
                            @endfor
                              
                        
                          </tr>
                          <tr>
                            <th scope="row">Left</th>
                            <td  id="al-250" >
                                <label for="l-250" class="audio-g" >
                                    <input type="radio" name="audiogram-left" id="l-250" value="250" class="input-hidden" />
                                <i  class="left fas "></i>
                              </label>
                              </td>
                              <td  id="al-500" >
                                <label for="l-500" class="audio-g" >
                                    <input type="radio" name="audiogram-left" id="l-500" value="500" class="input-hidden" />
                                <i  class="left fas "></i>
                              </label>
                              </td>
                            @for ($i = 1000; $i < 7000; $i+=1000)
                            <td  id="{{'al-'.$i}}" >
                                <label for="{{'l-'.$i}}" class="audio-g" >
                                    <input type="radio" name="audiogram-left" id="{{'l-'.$i}}" value="{{$i}}" class="input-hidden" />
                                <i  class="left fas "></i>
                              </label>
                              </td>
                           
                            @endfor
                              
                          </tr>
                        </tbody>
                      </table>
                      
                </div>
                <br><hr><br>
                <h4>Special test</h4>
                <div class="form-group row">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">TEST</th>
                            <th scope="col">Date performed</th>
                            <th scope="col">Result</th>
                            <th scope="col">Next due</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>1.Resting ECG</th>
                            <td><input type="date" name="egc-date" id="egc-date" class="input-special"></td>
                            <td><input type="text" name="egc-result" id="egc-result" class="input-special"></td>
                            <td><input type="date" name="egc-next" id="egc-next" class="input-special"></td>
                          </tr>
                          <tr>
                            <th>2.Blood grouping</th>
                            <td><input type="date" name="bgroup-date" id="bgroup-date" class="input-special"></td>
                            <td><input type="text" name="bgroup-result" id="bgroup-result" class="input-special"></td>
                            <td><input type="date" name="bgroup-next" id="bgroup-next" class="input-special"></td>
                          </tr>
                          <tr>
                            <th>3.Blood glucose</th>
                            <td><input type="date" name="bglucose-date" id="bglucose-date" class="input-special"></td>
                            <td><input type="text" name="bglucose-result" id="bglucose-result" class="input-special"></td>
                            <td><input type="date" name="bglucose-next" id="bglucose-next" class="input-special"></td>
                          </tr>
                          <tr>
                            <th>4.HIV Serplogy</th>
                            <td><input type="date" name="hiv-date" id="hiv-date" class="input-special"></td>
                            <td><input type="text" name="hiv-result" id="hiv-result" class="input-special"></td>
                            <td><input type="date" name="hiv-next" id="hiv-next" class="input-special"></td>
                          </tr>
                          <tr>
                            <th>5.HB level</th>
                            <td><input type="date" name="hb-date" id="hb-date" class="input-special"></td>
                            <td><input type="text" name="hb-result" id="hb-result" class="input-special"></td>
                            <td><input type="date" name="hb-next" id="hb-next" class="input-special"></td>
                          </tr>
                          <tr>
                            <th>6.UPT</th>
                            <td><input type="date" name="upt-date" id="upt-date" class="input-special"></td>
                            <td><input type="text" name="upt-result" id="upt-result" class="input-special"></td>
                            <td><input type="date" name="upt-next" id="upt-next" class="input-special"></td>
                          </tr>
                      
                        </tbody>
                      </table>
                      
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
