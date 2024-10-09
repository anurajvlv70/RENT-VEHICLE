@extends('layout.app')
@section('content')
  <style>
    /* .gradient-custom {
/* fallback for old browsers */
background: #f093fb;
    } */
    .card{
        align:center;
    }
  </style>
 <form action="/carHave" method="post">
  @csrf
  <section class="vh-100 gradient-custom">
  <div class="d-flex justify-content-center">
<div class="card" style="width: 28rem;">
  <img class="card-img-top" src="car7.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">REGISTERATION</h5>
    <p class="card-text">"I have a bike available and ready for rent—perfect for your next ride!"</p>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name='name' />
                <label class="form-label" for="form3Example1q">Name</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name='brand'/>
                <label class="form-label" for="form3Example1q">Brand</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name='rate'/>
                <label class="form-label" for="form3Example1q">Rate</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name='phone' />
                <label class="form-label" for="form3Example1q">Phone Number</label>
              </div>
  <div class="card-body">
  <button type="submit" class="btn btn-primary">Submit</button>
    <a href="#" class="card-link">terms & conditions</a>
  </div>
</div>
</div>
</section>
  </form>

@endsection