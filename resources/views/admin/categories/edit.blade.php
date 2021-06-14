@extends('layouts.admin')

@section('title', 'Editar Categoría')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
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
						<h4>Editar Categoría</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('categorias.update', ['category' => $category->slug]) }}" method="POST" class="form" id="formCategoryEdit" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
									<input class="form-control @error('name.es') is-invalid @enderror" type="text" name="name[es]" required placeholder="Introduzca un nombre" value="{{ $category->name }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Nombre (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('name.en') is-invalid @enderror" type="text" name="name[en]" required placeholder="Introduzca una traducción del nombre" value="{{ $category->translate('name', 'en') }}" id="name_en">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Tipo<b class="text-danger">*</b></label>
									<select class="form-control @error('type') is-invalid @enderror" required name="type" id="select_type_help">
										<option value="">Seleccione</option>
										<option value="1" @if("1"==$category->type) selected @endif>Preguntas Frecuentes</option>
										<option value="2" @if("2"==$category->type) selected @endif>Centro de Ayuda</option>
										<option value="3" @if("3"==$category->type) selected @endif>Blog</option>
									</select>
								</div>

								<div class="form-group col-12 @if($category->type!="2") d-none @endif categories_helps">
									<label class="col-form-label">Icono<b class="text-danger">*</b></label>
									<input type="file" name="icon" required accept="image/*" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" @if(!is_null($category->icon)) data-default-file="{{ image_exist('/admins/img/categories/', $category->icon, false, false) }}" @endif />
								</div>

								<div class="form-group col-12 @if($category->type!="2") d-none @endif categories_helps">
									<label class="col-form-label">Descripción<b class="text-danger">*</b></label>
									<textarea class="form-control @error('description.es') is-invalid @enderror" name="description[es]" @if($category->type!="2") disabled @endif required placeholder="Introduzca una descripción">{{ $category->description }}</textarea>
								</div>

								<div class="form-group col-12 @if($category->type!="2") d-none @endif categories_helps">
									<label class="col-form-label">Descripción (Inglés)<b class="text-danger">*</b></label>
									<textarea class="form-control @error('description.en') is-invalid @enderror" name="description[en]" @if($category->type!="2") disabled @endif required placeholder="Introduzca la traducción de la descripción">{{ $category->translate('description', 'en') }}</textarea>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="category">Actualizar</button>
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
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection