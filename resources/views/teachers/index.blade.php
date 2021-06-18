@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <h3 class="card-header">
    Участники
     <a class="btn btn-sm btn-success float-right btn btn-warning" href="{{ route('teachers.create') }}">
      Добавить участника
    </a>
  </h3>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Ф.И.О</th>
          <th scope="col">Дата рождения</th>
          <th scope="col">Спортивная категория</th>
          <th scope="col">Сотовый телефон</th>
        </tr>
      </thead>
      <tbody>
        @forelse($teachers as $teacher)
        <tr>
          <td>{{ $teacher->full_name }}</td>
          <td>{{ $teacher->date_of_birth }}</td>
          <td class="text-center">{{ $teacher->sports_category }}</td>
          <td>{{ $teacher->cell_phone}}</td>
          <td class="text-right">
            <a class="btn btn-sm btn-secondary" href="{{ route('teachers.edit', $teacher->id) }}">
              <i class="fas fa-user-edit"></i>
            </a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('teachers.show', $teacher->id) }}">
              <i class="fas fa-eye"></i>
            </a>&nbsp;
            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post" class="float-right">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i></a>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3">
            <h3 class="text-center">Текущие мероприятия</h3>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
