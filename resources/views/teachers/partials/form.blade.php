<div class="form-group col-md-4">
  <label for="sports_category">Спортивная категория</label>
  <input min='1' max='3' type="number" class="form-control @if($errors->has('sports_category')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="sports_category" name="sports_category" value="{{ $teacher->sports_category ?? old('sports_category')}}">
@error('sports_category')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
 <div class="form-group col-md-4">
      <label for="cell_phone">Сотовый телефон</label>
      <input type="text" class="form-control @if($errors->has('cell_phone')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="cell_phone" name="cell_phone" value="{{ $teacher->cell_phone ?? old('cell_phone')}}">
    @error('cell_phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="form-group col-md-4">
  <label for="full_name">Фамилия Имя Отчество студента</label>
  <input type="text" class="form-control @if($errors->has('full_name')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="full_name" name="full_name" value="{{ $teacher->full_name ?? old('full_name')}}">
  @error('full_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group col-md-4">
  <label for="date_of_birth">Дата рождения</label>
  <input type="date" class="form-control @if($errors->has('date_of_birth')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="date_of_birth" name="date_of_birth" value="{{ $teacher->date_of_birth ?? old('date_of_birth')}}">
  @error('date_of_birth')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
