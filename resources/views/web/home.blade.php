@extends('layouts.web')

@section('title', 'Inicio')

@section('content')

<section class="hero-banner vh-100" style="background-image: url('{{ asset('/web/img/banner-background.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-start">
            <div class="col-md-8 mt-5">
            	
            </div>
        </div>
    </div>
</section>

<section class="py-5">
	<div class="container">
        <div class="row">
        	<div class="col-12">
        		<h2></h2>
        	</div>
            <div class="text-center col-lg-4 col-md-4 col-sm-4 col-12">
            	<img src="{{ asset('/web/img/icon-create-an-account.png') }}" width="90" height="100">
            	<p class="h5 text-primary font-weight-bold">Crea una cuenta</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill">Hagamoslo</a>
            </div>

            <div class="text-center col-lg-4 col-md-4 col-sm-4 col-12">
            	<img src="{{ asset('/web/img/icon-make-your-first-deposit.png') }}" class="mb-2" width="90" height="90">
            	<p class="h5 text-primary font-weight-bold">Haz tu primer deposito</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill">Saber Como</a>
            </div>

            <div class="text-center col-lg-4 col-md-4 col-sm-4 col-12">
            	<img src="{{ asset('/web/img/icon-invest-in-a-plan.png') }}" class="mb-2" width="90" height="90">
            	<p class="h5 text-primary font-weight-bold">Invierte en un plan</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-warning text-primary rounded-pill">Ver Mas</a>
            </div>
        </div>
    </div>
</section>

@endsection