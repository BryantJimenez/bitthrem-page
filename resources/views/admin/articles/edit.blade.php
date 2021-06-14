@extends('layouts.admin')

@section('title', 'Editar Artículos')

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
						<h4>Editar Artículos</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('articulos.update', ['article' => $article->slug]) }}" method="POST" class="form" id="formArticleEdit" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Categoría<b class="text-danger">*</b></label>
									<select class="form-control @error('category_id') is-invalid @enderror" required name="category_id">
										<option value="">Seleccione</option>
										@foreach($categories as $category)
										<option value="{{ $category->slug }}" @if($category->id==$article->category_id) selected @endif>{{ $category->name }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Imagen Principal<b class="text-danger">*</b></label>
									<input type="file" name="image" accept="image/*" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ image_exist('/admins/img/articles/', $article->image) }}" />
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Título<b class="text-danger">*</b></label>
									<input class="form-control @error('title.es') is-invalid @enderror" type="text" name="title[es]" required placeholder="Introduzca el título" value="{{ $article->title }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Título (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('title.en') is-invalid @enderror" type="text" name="title[en]" required placeholder="Introduzca la traducción del título" value="{{ $article->translate('title', 'en') }}" id="title_en">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Contenido<b class="text-danger">*</b></label>
									<textarea class="form-control @error('content.es') is-invalid @enderror" name="content[es]" required placeholder="Introduzca el contenido" id="content_article">{{ $article->content }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Contenido (Inglés)<b class="text-danger">*</b></label>
									<textarea class="form-control @error('content.en') is-invalid @enderror" name="content[en]" required placeholder="Introduzca la traducción del contenido" id="content_article_en">{{ $article->translate('content', 'en') }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Keywords<b class="text-danger">*</b></label>
									<input class="form-control @error('keywords.es') is-invalid @enderror" type="text" name="keywords[es]" required placeholder="Introduzca las palabras clave" value="{{ $article->keywords }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Keywords (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('keywords.en') is-invalid @enderror" type="text" name="keywords[en]" required placeholder="Introduzca la traducción de las palabras clave" value="{{ $article->translate('keywords', 'en') }}" id="keywords_en">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Estado<b class="text-danger">*</b></label>
									<select class="form-control @error('state') is-invalid @enderror" name="state" required>
										<option value="">Seleccione</option>
										<option value="1" @if($article->state=='1') selected @endif>Publicado</option>
										<option value="0" @if($article->state=='0') selected @endif>Borrador</option>
									</select>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="article">Actualizar</button>
										<a href="{{ route('articulos.index') }}" class="btn btn-secondary">Volver</a>
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
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection