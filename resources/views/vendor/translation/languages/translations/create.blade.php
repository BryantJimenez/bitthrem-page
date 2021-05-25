@extends('translation::layout')

@section('title', 'Agregar Traducción')

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
                        <h4>Agregar Traducción</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="row">
                    <div class="col-12">
                        @include('translation::notifications')

                        @include('admin.partials.errors')

                        <p>Campos obligatorios (<b class="text-danger">*</b>)</p>
                        <form action="{{ route('languages.translations.store', $language) }}" method="POST" class="form" id="formTranslation">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    @include('translation::forms.text', ['field' => 'group', 'label' => __('translation::translation.group_label'), 'placeholder' => __('translation::translation.group_placeholder')])
                                </div>

                                <div class="form-group col-12">
                                    @include('translation::forms.text', ['field' => 'key', 'label' => __('translation::translation.key_label'), 'placeholder' => __('translation::translation.key_placeholder'), 'required' => true])
                                </div>

                                <div class="form-group col-12">
                                    @include('translation::forms.text', ['field' => 'value', 'label' => __('translation::translation.value_label'), 'placeholder' => __('translation::translation.value_placeholder'), 'required' => true])
                                </div>

                                <div class="form-group col-12">
                                    <button v-on:click="toggleAdvancedOptions" class="btn btn-secondary">{{ __('translation::translation.advanced_options') }}</button>
                                </div>

                                <div class="form-group col-12" v-show="showAdvancedOptions">
                                    @include('translation::forms.text', ['field' => 'namespace', 'label' => __('translation::translation.namespace_label'), 'placeholder' => __('translation::translation.namespace_placeholder')])
                                </div>

                                <div class="form-group col-12">
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn btn-primary" action="translation">{{ __('translation::translation.save') }}</button>
                                        <a href="{{ route('languages.translations.index', $language) }}" class="btn btn-secondary">Volver</a>
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