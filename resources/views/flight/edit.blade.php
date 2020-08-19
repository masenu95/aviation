@extends('layouts.admin')

@section('content')

<div class="signup-form">
    <form method="POST" action="{{ route('flightinfo.update',$flight->id) }}" id="register-form">
        {{ method_field('PUT') }}
        @csrf
        <h2>Flight Information</h2>
        <div class="form-row">
            <div class="form-group col-4 ">
                <input type="text" name="licence_no" id="licence_no" placeholder="Licence no" class="form-control @error('licence_no') is-invalid @enderror" name="licence_no" value="{{ $flight->licence_no }}" required autocomplete="licence_no" autofocus>
            </div>
            <div class="form-group col-4">
                <select name="licence_type" id="licence_type" class="form-control @error('licence_type') is-invalid @enderror"  value="{{ $flight->licence_type }}" required autocomplete="licence_type" autofocus/>
                <option value="ATPL">ATPL</option>
                <option value="CPL">CPL</option>
                <option value="SPL">SPL</option>
                <option value="CABIN_CREW">CABIN_CREW</option>
            
               
            </select>
            </div>
        </div>
      
        
        <div class="form-radio">
            <div class="row">
                <div class="col-2">
                    <label for="gender" class="radio-label">Type of flight Intended :</label>
                </div>
                <div class="col-2">
                    <div class="form-radio-item col-1">
                        <input type="radio" name="type_of_flight" id="Single-Crew" value="single crew" checked>
                        <label for="Single-Crew">Single-Crew</label>
                        <span class="check"></span>
                    </div>
                </div>
                <div class="col-2">
                    
                <div class="form-radio-item col-1">
                    <input type="radio" name="type_of_flight" id="Multi-Crew" value="Multi crew">
                    <label for="Multi-Crew">Multi-Crew</label>
                    <span class="check"></span>
                </div>
                </div>
            </div>
        
        </div>
        <div class="form-row">
            <div class="form-group col-8">
                <input type="text" name="last_six" id="last_six" placeholder="Flight time('hours') last six month" class="form-control @error('last_six') is-invalid @enderror" name="last_six" value="{{ $flight->last_six }}" required autocomplete="last_six" autofocus/>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-8">
            <input type="text" name="last_twelve" id="last_twelve" placeholder="Flight time('hours') last twelve month" class="form-control @error('last_twelve') is-invalid @enderror" name="last_twelve" value="{{ $flight->last_twelve }}" required autocomplete="last_twelve" autofocus/>
        </div>
        </div>
      
        <div class="form-row">
            <div class="form-group col-3">
                <div class="form-select">
                    <select name="flying_intended" id="flying_intended"  class="form-control @error('flying_intended') is-invalid @enderror" name="flying_intended" value="{{ $flight->flying_intended }}" required autocomplete="flying_intended" autofocus >
                    <option value="{{$flight->flying_intended}}">{{$flight->flying_intended}}</option>
                        <option value="Recreation">Recreation</option>
                        <option value="Bussiess">Bussiess</option>
                        <option value="career">career</option>
                    
                       
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
            </div>

    </div>
        <div class="form-submit">
            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
        </div>
    </form>
</div>

@endsection