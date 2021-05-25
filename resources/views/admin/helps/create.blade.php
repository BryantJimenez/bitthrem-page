@extends('layouts.admin')

@section('title', 'Crear Artículos del Centro de Ayuda')

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
						<h4>Crear Artículos del Centro de Ayuda</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('ayudas.store') }}" method="POST" class="form" id="formHelp">
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Categoría<b class="text-danger">*</b></label>
									<select class="form-control @error('category_id') is-invalid @enderror" required name="category_id">
										<option value="">Seleccione</option>
										@foreach($categories as $category)
										<option value="{{ $category->slug }}" @if($category->slug==old('category_id')) selected @endif>{{ $category->name }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Título<b class="text-danger">*</b></label>
									<input class="form-control @error('title.es') is-invalid @enderror" type="text" name="title[es]" required placeholder="Introduzca el título" value="{{ old('title.es') }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Título (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('title.en') is-invalid @enderror" type="text" name="title[en]" required placeholder="Introduzca la traducción del título" value="{{ old('title.en') }}" id="title_en">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Contenido<b class="text-danger">*</b></label>
									<textarea class="form-control @error('content.es') is-invalid @enderror" name="content[es]" required placeholder="Introduzca el contenido" id="content_article">{{ old('content.es') }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Contenido (Inglés)<b class="text-danger">*</b></label>
									<textarea class="form-control @error('content.en') is-invalid @enderror" name="content[en]" required placeholder="Introduzca la traducción del contenido" id="content_article_en">{{ old('content.en') }}</textarea>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="help">Guardar</button>
										<a href="{{ route('ayudas.index') }}" class="btn btn-secondary">Volver</a>
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
<script src="{{ asset('/admins/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection