@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <h3 class="card-header">
    Законченые программы
     <a class="btn btn-sm btn-success float-right btn btn-warning" href="{{ route('CompletePrograms.create') }}">
      Добавить программу
    </a>
  </h3>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Сроки</th>
          <th scope="col">Форма</th>
          <th scope="col">Наименование</th>
          <th scope="col">Тренер</th>
          <th scope="col">Обьём в часах</th>
          <th scope="col">Описание</th>
        </tr>
      </thead>
      <tbody>
        @forelse($completePrograms as $completeProgram)
        <tr>
          <td>{{ $completeProgram->deadlines}}</td>
          <td>{{ $completeProgram->shape}}</td>
          <td>{{ $completeProgram->naming}}</td>
          <td>{{ $completeProgram->coach}}</td>
          <td class="text-center">{{ $completeProgram->volume_in_hours}}</td>
          <td>{{ Str::limit($completeProgram->description, 50)}}</td>
          <td class="text-right">
            <a class="btn btn-sm btn-secondary" href="{{ route('CompletePrograms.edit', $completeProgram->id) }}">
              <i class="fas fa-edit"></i>
            </a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('CompletePrograms.show', $completeProgram->id) }}">
              <i class="fas fa-eye"></i>
            </a>&nbsp;
            <form action="{{ route('CompletePrograms.destroy', $completeProgram->id) }}" method="post" class="float-right">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i></a>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3">
            <h3 class="text-center">Данные отсутствуют</h3>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
