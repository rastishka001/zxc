
@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить результат
  </h3>
  <div class="card-body">

    <form action="{{ route('results.store') }}" method="post">
      @csrf

      @include('results.partials.form')
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
  </div>
</div>

@endsection
