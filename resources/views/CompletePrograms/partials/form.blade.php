<div class="form-group col-md-4">
  <label for="deadlines">Сроки</label>
  <input type="date" class="form-control @if($errors->has('deadlines')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="deadlines" name="deadlines" value="{{ $completeProgram->deadlines ?? old('deadlines')}}">
  @error('deadlines')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
 <div class="form-group col-md-4">
      <label for="shape">Форма</label>
      <input type="text" class="form-control @if($errors->has('shape')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="shape" name="shape" value="{{ $completeProgram->shape ?? old('shape')}}">
      @error('shape')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="form-group col-md-4">
  <label for="naming">Наименование</label>
  <input type="text" class="form-control @if($errors->has('naming')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="naming" name="naming" value="{{ $completeProgram->naming ?? old('naming')}}">
  @error('naming')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group col-md-4">
  <label for="coach">Тренер</label>
  <input type="text" class="form-control @if($errors->has('coach')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="coach" name="coach" value="{{ $completeProgram->coach ?? old('coach')}}">
  @error('coach')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group col-md-4">
  <label for="volume_in_hours">Обьём в часах</label>
  <input type="integer" class="form-control @if($errors->has('volume_in_hours')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="volume_in_hours" name="volume_in_hours" value="{{ $completeProgram->volume_in_hours ?? old('volume_in_hours')}}">
  @error('volume_in_hours')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group col-md-4">
  <label for="description">Описание</label>
  <input type="text" class="form-control @if($errors->has('description')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="description" name="description" value="{{ $completeProgram->description ?? old('description')}}">
  @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
