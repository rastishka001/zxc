@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Редактировать
  </h3>
  <div class="card-body">

    <form action="{{ route('CompletePrograms.update', $completeProgram->id) }}" method="post">
      @csrf
      @method('put')

      @include('CompletePrograms.partials.form')
            <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
  </div>
</div>

@endsection
