
@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить программу
  </h3>
  <div class="card-body">

    <form action="{{ route('CompletePrograms.store') }}" method="post">
      @csrf

      @include('CompletePrograms.partials.form')
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
  </div>
</div>

@endsection
