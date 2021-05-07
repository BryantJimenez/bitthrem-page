@extends('layouts.admin')

@section('title', 'Editar Ajustes')

@section('links')
<link href="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/vendor/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>Editar Ajustes</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('ajustes.update') }}" method="POST" class="form" id="formSetting">
							@csrf
							@method('PUT')
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Telefono<b class="text-danger">*</b></label>
									<input class="form-control number @error('phone') is-invalid @enderror" type="text" name="phone" required placeholder="Introduzca un telefono" value="{{ $setting->phone }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Email<b class="text-danger">*</b></label>
									<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required placeholder="Introduzca un email" value="{{ $setting->email }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Dirección<b class="text-danger">*</b></label>
									<input class="form-control @error('address') is-invalid @enderror" type="text" name="address" required placeholder="Introduzca una dirección" value="{{ $setting->address }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Facebook (Opcional)</label>
									<input class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="Introduzca la url de facebook" value="{{ $setting->facebook }}">
								</div>
								
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Twitter (Opcional)</label>
									<input class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Introduzca la url de twitter" value="{{ $setting->twitter }}">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Instagram (Opcional)</label>
									<input class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="Introduzca la url de instagram" value="{{ $setting->instagram }}">
								</div>
								
								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="setting">Actualizar</button>
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
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection