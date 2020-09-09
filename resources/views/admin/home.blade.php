@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-md-3 col-12">
          <div class="card-top bg-three">
             
              <h6>Visitor's</h6>
          </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-two">
            {{$reguser}}
            <h6>Registered user's</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-one">
            {{$accesor}}
            <h6>Accesor's</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-four">
            {{$doctor}}
            <h6>Doctor's</h6>
        </div>
    </div>
  </div>
</div>
@endsection
