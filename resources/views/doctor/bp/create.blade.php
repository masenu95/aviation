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
                            <th scope="col">6000</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Right</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Left</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
  });
</script>
@endsection
