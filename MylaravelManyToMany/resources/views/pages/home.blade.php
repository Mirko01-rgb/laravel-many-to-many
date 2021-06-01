@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <h1>Employees:</h1>
        @foreach ($employees as $employee)
          <li>
            <h2>
              [{{$employee -> id}}]
              {{ $employee -> firstname }}
              {{ $employee -> lastname }}
              <h4> Location id -->[{{$employee -> location -> id}}]</h4>
              <h4> Street --> {{$employee -> location -> street}}</h4>
              <h4> State --> {{$employee -> location -> state}}</h4>
              <br>
              <h3>Task: {{$employee -> tasks -> count()}} </h3>
              @foreach ($employee -> tasks as $task)
                <li>
                  <h4>Name --> {{$task -> name}}</h4>
                </li>

              @endforeach
            </h2>
          </li>
        @endforeach
      </div>
    </div>
  </div>
@endsection
