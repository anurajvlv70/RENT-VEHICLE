@extends('layout.app')
@section('content')

@foreach($details as $detail)
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$detail->name}}</h5>
    <p class="card-text">
        <h2>{{$detail->name}}</h2>
        <h2>{{$detail->brand}}</h2>
        <h2>{{$detail->rate}}</h2>
        <h2>{{$detail->phone}}</h2>
    </p>
    <a class="btn btn-success" href="{{route('carTake',$detail->id)}}">CONFIRM</a>
    <a class="btn btn-danger" href="{{route('carEdit',$detail->id)}}">EDIT</a>
    <a class="btn btn-warning" href="{{route('carDel',$detail->id)}}">DELETE</a>
  </div>
</div>
@endforeach
@endsection