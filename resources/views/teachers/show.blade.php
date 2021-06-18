@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
    <div class="card p-2 mr-1">
    <h3 class="card-header">Детали
</h3>
  <div class="card" style="width: 22rem;">
    <img src="{{ asset('storage/fullmaster.jpg') }}" class="card-img-top" alt="...">
    <a class="btn btn-secondary" href="{{ route('results.index') }}">{{ __('Результаты') }}</a>
       <a class="btn btn-secondary" href="{{ route('CompletePrograms.index') }}">{{ __('Завершённые программы') }}</a>
    <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><strong>Ф.И.О :</strong> {{ $teacher->full_name }}</li>
      <li class="list-group-item"><strong>Дата рождения:</strong> {{ $teacher->date_of_birth }}</li>
      <li class="list-group-item"><strong>Сотовый телефон:</strong> {{ $teacher->cell_phone }}</li>
      <li class="list-group-item"><strong>Спортивная категория:</strong> {{ $teacher->sports_category }}</li>
    </ul>
    </div>
  </div>
    <div class="card-body">
        <a class="btn btn-secondary" href="{{ route('teachers.edit', $teacher->id) }}">
          Редактировать
        </a>
        <a class="btn btn-danger" href="{{ route('teachers.index') }}">
          Отмена
        </a>
    </div>
   </div>
  </div>
</div>
@endsection
