@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-md-3 col-12">
          <div class="card-top bg-three">
              234
              <h6>Visitor's</h6>
          </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-two">
            234
            <h6>Registered user's</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-one">
            234
            <h6>Accesor's</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card-top bg-four">
            234
            <h6>Doctor's</h6>
        </div>
    </div>
  </div>
</div>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@endsection
