@extends('layouts.admin')

@section('title', 'Agregar Usuario Top')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link href="{{ asset('/admins/vendor/intltelinput/css/intlTelInput.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>Agregar Usuario Top</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('mejores.store') }}" method="POST" class="form" id="formBest" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Foto (Opcional)</label>
									<input type="file" name="photo" accept="image/*" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
									<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" required placeholder="Introduzca un nombre" value="{{ old('name') }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Apellido<b class="text-danger">*</b></label>
									<input class="form-control @error('lastname') is-invalid @enderror" type="text" name="lastname" required placeholder="Introduzca un apellido" value="{{ old('lastname') }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">País<b class="text-danger">*</b></label>
									<select class="form-control @error('country_id') is-invalid @enderror" name="country_id" required>
										<option value="">Seleccione</option>
										@foreach($countries as $country)
										<option value="{{ $country->iso }}" @if(old('country_id')==$country->iso) selected @endif>{{ $country->nicename." (+".$country->phonecode.")" }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Teléfono (Opcional)</label>
									<div class="row">
										<div class="col-12">
											<input class="form-control number international-phone @error('phone') is-invalid @enderror" type="tel" name="phone_code" required placeholder="Introduzca un teléfono" value="{{ old('phone') }}">
											<input type="hidden" name="phone" value="{{ old('phone') }}" id="international-phone-complete">
											<span id="international-phone-valid-msg" class="text-success d-none">✓ Valido</span>
											<span id="international-phone-error-msg" class="text-danger d-none"></span>
										</div>
									</div>
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Correo Electrónico<b class="text-danger">*</b></label>
									<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required placeholder="Introduzca un correo electrónico" value="{{ old('email') }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Url<b class="text-danger">*</b></label>
									<input class="form-control @error('url') is-invalid @enderror" name="url" placeholder="Introduzca la url de referido" value="{{ old('url') }}">
								</div>
								
								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="best">Guardar</button>
										<a href="{{ route('mejores.index') }}" class="btn btn-secondary">Volver</a>
									</div>
								</div> 
							</div>
						</form>
					</div>                                        
				</div>

			</div>
		</div>
	</div>

</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/intltelinput/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection