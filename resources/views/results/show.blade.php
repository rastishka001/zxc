@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Детали
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Название физического показателя:</strong> {{ $result->name }}</li>
    <li class="list-group-item"><strong>Результат:</strong> {{ $result->result }}</li>
    <li class="list-group-item"><strong>Единица Измерения:</strong> {{ $result->unit }}</li>
    <li class="list-group-item"><strong>Дата измерения:</strong> {{ $result->date_of_measurement }}</li>
  </ul>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('results.edit', $result->id) }}">
        Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('results.index') }}">
        Отмена
      </a>
  </div>
</div>

@endsection
