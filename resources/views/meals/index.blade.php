@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h3>All Meals</h3>
    <hr>
  </div>

  @if (!$meals->isEmpty())

      <ul class="list-group">
    @foreach($meals as $meal)
        <li class="list-group-item">{{ $meal->name }}</li>
    @endforeach
      </ul>
    @else

    <h4>You have no meals <a href="meals/create">Create One Now!</a></h4>

</div>
@endif
@endsection