@extends('layouts.admin')

@section('title', 'Crear Preguntas')

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
						<h4>Crear Preguntas</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('preguntas.store') }}" method="POST" class="form" id="formQuestion">
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Pregunta<b class="text-danger">*</b></label>
									<input class="form-control @error('question.es') is-invalid @enderror" type="text" name="question[es]" required placeholder="Introduzca la preguna" value="{{ old('question.es') }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Pregunta (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('question.en') is-invalid @enderror" type="text" name="question[en]" required placeholder="Introduzca la traducción de la preguna" value="{{ old('question.en') }}" id="question_en">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Respuesta<b class="text-danger">*</b></label>
									<textarea class="form-control @error('answer.es') is-invalid @enderror" name="answer[es]" required placeholder="Introduzca la respuesta">{{ old('answer.es') }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Respuesta (Inglés)<b class="text-danger">*</b></label>
									<textarea class="form-control @error('answer.en') is-invalid @enderror" name="answer[en]" required placeholder="Introduzca la traducción de la respuesta" id="answer_en">{{ old('answer.en') }}</textarea>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="question">Guardar</button>
										<a href="{{ route('preguntas.index') }}" class="btn btn-secondary">Volver</a>
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