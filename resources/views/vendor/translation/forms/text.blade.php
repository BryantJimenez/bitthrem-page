<label for="{{ $field }}">{{ $label }}@if(isset($required))<b class="text-danger">*</b>@endif</label>
<input class="form-control @if($errors->has($field)) error @endif" name="{{ $field }}" id="{{ $field }}" type="text" placeholder="{{ isset($placeholder) ? $placeholder : '' }}" value="{{ old($field) }}" {{ isset($required) ? 'required' : '' }}>
@if($errors->has($field))
@foreach($errors->get($field) as $error)
<p class="error-text">{!! $error !!}</p>
@endforeach
@endif