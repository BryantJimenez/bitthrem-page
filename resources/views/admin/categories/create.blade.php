@extends('layouts.admin')

@section('title', 'Crear Categoría')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>Crear Categoría</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('categorias.store') }}" method="POST" class="form" id="formCategory">
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
									<input class="form-control @error('name.es') is-invalid @enderror" type="text" name="name[es]" required placeholder="Introduzca un nombre" value="{{ old('name.es') }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Nombre (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('name.en') is-invalid @enderror" type="text" name="name[en]" required placeholder="Introduzca una traducción del nombre" value="{{ old('name.en') }}" id="name_en">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Tipo<b class="text-danger">*</b></label>
									<select class="form-control @error('type') is-invalid @enderror" required name="type">
										<option value="">Seleccione</option>
										<option value="1" @if("1"==old('type')) selected @endif>Preguntas Frecuentes</option>
										<option value="2" @if("2"==old('type')) selected @endif>Centro de Ayuda</option>
										<option value="3" @if("3"==old('type')) selected @endif>Blog</option>
									</select>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="category">Guardar</button>
										<a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
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
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection