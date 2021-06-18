
@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить участника
  </h3>
  <div class="card-body">

    <form action="{{ route('teachers.store') }}" method="post">
      @csrf

      @include('teachers.partials.form')
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
  </div>
</div>

@endsection
