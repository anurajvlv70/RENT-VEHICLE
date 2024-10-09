@extends('layout.app')
@section('content')

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>now the bike is yours</p>
  <hr>
  <p class="mb-0">drive carefully and use helmet</p>
</div>
<a href="{{route('bikeDel',$id)}}" class="btn btn-primary">BACK</a>

@endsection