@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <h3 class="card-header">
    Результаты
     <a class="btn btn-sm btn-success float-right btn btn-warning" href="{{ route('results.create') }}">
      Добавить результат
    </a>
  </h3>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Название физического показателя</th>
          <th scope="col">Дата измерения</th>
          <th scope="col">Результат</th>
          <th scope="col">Единица Измерения</th>
        </tr>
      </thead>
      <tbody>
        @forelse($results as $result)
        <tr>
          <td>{{ $result->name}}</td>
          <td>{{ $result->date_of_measurement }}</td>
          <td>{{ $result->result}}</td>
          <td class="text-center">{{ $result->unit }}</td>
          <td class="text-right">
            <a class="btn btn-sm btn-secondary" href="{{ route('results.edit', $result->id) }}">
              <i class="fas fa-edit"></i>
            </a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('results.show', $result->id) }}">
              <i class="fas fa-eye"></i>
            </a>&nbsp;
            <form action="{{ route('results.destroy', $result->id) }}" method="post" class="float-right">
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
