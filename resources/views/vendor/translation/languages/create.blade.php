@extends('translation::layout')

@section('title', 'Agregar Idioma')

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
                        <h4>Agregar Idioma</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="row">
                    <div class="col-12">
                        @include('translation::notifications')

                        @include('admin.partials.errors')

                        <p>Campos obligatorios (<b class="text-danger">*</b>)</p>
                        <form action="{{ route('languages.store') }}" method="POST" class="form" id="formLanguage">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">{{ __('translation::translation.language_name') }}<b class="text-danger">*</b></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" required placeholder="Introduzca un nombre" value="{{ old('name') }}">
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">{{ __('translation::translation.locale') }}<b class="text-danger">*</b></label>
                                    <input class="form-control @error('locale') is-invalid @enderror" type="text" name="locale" required placeholder="Introduzca el lugar" value="{{ old('locale') }}">
                                </div>

                                <div class="form-group col-12">
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn btn-primary" action="language">{{ __('translation::translation.save') }}</button>
                                        <a href="{{ route('languages.index') }}" class="btn btn-secondary">Volver</a>
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