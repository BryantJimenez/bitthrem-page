@extends('translation::layout')

@section('title', 'Lista de Idiomas')

@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/custom_dt_html5.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/dt-global_style.css') }}">
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
                        <h4>Lista de {{ __('translation::translation.languages') }}</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area shadow-none">

                <div class="row">
                    <div class="col-12">
                        @include('translation::notifications')

                        {{-- <div class="text-right">
                            <a href="{{ route('languages.create') }}" class="btn btn-primary">Agregar</a>
                        </div> --}}

                        <div class="table-responsive mb-4 mt-4">
                            <table class="table table-hover table-export">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('translation::translation.language_name') }}</th>
                                        <th>{{ __('translation::translation.locale') }}</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($languages))
                                    @foreach($languages as $language)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $language }}</td>
                                        <td>{{ $language }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('languages.translations.index', $language) }}" class="btn btn-info btn-sm bs-tooltip" title="Lista de Traducciones"><i class="fa fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>                                        
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/jszip.min.js') }}"></script>    
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.print.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection