@extends('layouts.admin')

@section('title', 'Editar Pregunta')

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
						<h4>Editar Pregunta</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('preguntas.update', ['question' => $question->slug]) }}" method="POST" class="form" id="formQuestion">
							@csrf
							@method('PUT')
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Pregunta<b class="text-danger">*</b></label>
									<input class="form-control @error('question.es') is-invalid @enderror" type="text" name="question[es]" required placeholder="Introduzca la preguna" value="{{ $question->question }}">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Pregunta (Inglés)<b class="text-danger">*</b></label>
									<input class="form-control @error('question.en') is-invalid @enderror" type="text" name="question[en]" required placeholder="Introduzca la traducción de la preguna" value="{{ $question->translate('question', 'en') }}" id="question_en">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Respuesta<b class="text-danger">*</b></label>
									<textarea class="form-control @error('answer.es') is-invalid @enderror" name="answer[es]" required placeholder="Introduzca la respuesta">{{ $question->answer }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Respuesta (Inglés)<b class="text-danger">*</b></label>
									<textarea class="form-control @error('answer.en') is-invalid @enderror" name="answer[en]" required placeholder="Introduzca la traducción de la respuesta" id="answer_en">{{ $question->translate('answer', 'en') }}</textarea>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="question">Actualizar</button>
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
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection