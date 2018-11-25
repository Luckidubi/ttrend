@extends('layouts.fine')

@section('content')

<div class="jumbotron text-center text-white bg-info">
    <h1 style="font-size: 50px;" > Our services</h1>

</div>
@if(count($services)>0)
<ul class="list-group text-center">
  @foreach($services as $service)  
  <li class="list-group-item">{{$service}} </li>
  @endforeach
</ul>

@endif



@endsection