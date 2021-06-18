<div class="form-group col-md-4">
  <label for="unit">Единица Измерения</label>
  <input type="text" class="form-control @if($errors->has('unit')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="unit" name="unit" value="{{ $result->unit ?? old('unit')}}">
  @error('unit')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
 <div class="form-group col-md-4">
      <label for="result">Результат</label>
      <input type="number" class="form-control @if($errors->has('result')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="result" name="result" value="{{ $result->result ?? old('result')}}">
      @error('result')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="form-group col-md-4">
  <label for="name">Название физического показателя</label>
  <input type="text" class="form-control @if($errors->has('name')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="name" name="name" value="{{ $result->name ?? old('name')}}">
  @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group col-md-4">
  <label for="date_of_measurement">Дата измерения</label>
  <input type="date" class="form-control @if($errors->has('date_of_measurement')) is-invalid @elseif(count($errors->all()) > 0)) is-valid @endif" id="date_of_measurement" name="date_of_measurement" value="{{ $result->date_of_measurement ?? old('date_of_measurement')}}">
  @error('date_of_measurement')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
