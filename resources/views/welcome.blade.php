@extends('layout.app')
@section('content')

<div class="container mt-4">
<div class="row">
<div class="col-sm-6">
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="bike.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">BIKE</h5>
    <h6 class="card-subtitle mb-2 text-muted">HAVE/WANT</h6>
    <p class="card-text">"Passionate bike seller offering quality rides for every journey."</p>
    <a href="bikeHave" class="btn btn-primary">HAVE</a>
    <a href="bikeWant" class="btn btn-danger">WANT</a>
    
  </div>
</div>
</div>
<div class="col-sm-6">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="car2.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">CAR</h5>
    <h6 class="card-subtitle mb-2 text-muted">HAVE/WANT</h6>
    <p class="card-text">"Trusted car seller with top-quality vehicles for every driver."</p>
    <a href="carHave" class="btn btn-primary">HAVE</a>
    <a href="carWant" class="btn btn-danger">WANT</a>
  </div>
</div>
</div>



</div>
</div>







@endsection