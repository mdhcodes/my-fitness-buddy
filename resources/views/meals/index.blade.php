@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h3>All Meals</h3>
    <hr>
  </div>

  @if (!$meals->isEmpty())

    @foreach($meals as $meal)
      <div class="well well-sm">
        <p>{{ $meal->name }}</p>
      </div>
    @endforeach
    @else

    <h4>You have no meals <a href="meals/create">Create One Now!</a></h4>

</div>
@endif
@endsection