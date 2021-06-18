@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Детали
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Сроки:</strong> {{ $completeProgram->deadlines }}</li>
    <li class="list-group-item"><strong>Форма:</strong> {{ $completeProgram->shape }}</li>
    <li class="list-group-item"><strong>Наименование:</strong> {{ $completeProgram->naming }}</li>
    <li class="list-group-item"><strong>Тренер:</strong> {{ $completeProgram->coach }}</li>
    <li class="list-group-item"><strong>Обьём в часах:</strong> {{ $completeProgram->volume_in_hours }}</li>
    <li class="list-group-item"><strong>Описание:</strong> {{ $completeProgram->description }}</li>
  </ul>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('CompletePrograms.edit', $completeProgram->id) }}">
        Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('CompletePrograms.index') }}">
        Отмена
      </a>
  </div>
</div>

@endsection
