<option value=""></option>
@if (!empty($cities))
    @foreach($cities as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option> 
    @endforeach
@endif

@if (!empty($subdistricts))
    @foreach($subdistricts as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option> 
    @endforeach
@endif