@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Add Another Meal</h3>
    <hr>

    <form action="/users/{{ $user->id }}/meals" method="POST">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name" class="col-md-1" >Name</label>
        <div class="col-md-10">
          <input type="text" name="name" class="form-control" placeholder="Meal Name" required>
        </div>
        <div class="col-md-1">
          <button type="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
</div>
@endsection