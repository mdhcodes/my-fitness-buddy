@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    <p>Here's what you've eaten today.</p>

                      <ul class="list-group">
                        <li class="list-group-item">Breakfast</li>
                        <li class="list-group-item">Lunch</li>
                        <li class="list-group-item">Dinner</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection