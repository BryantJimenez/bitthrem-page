@extends('layouts.web')

@section('title', 'Acerca de Nosotros')

@section('content')

<section class="hero-about-banner d-flex align-items-center vh-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 col-12 order-1 order-md-0">
				<p class="h2 text-warning font-weight-600">@lang('about.banner.title')</p>
				<p class="h4 text-white font-weight-light">@lang('about.banner.subtitle')</p>
			</div>
			<div class="col-lg-6 col-md-6 col-12 d-flex order-0 order-md-1">
				<img src="{{ asset('/web/img/about/sobre-bitthrem.png') }}" class="img-fluid mx-auto mb-md-0 mb-4" alt="@lang('about.banner.image')" title="@lang('about.banner.image')">
			</div>
		</div>
	</div>
</section>

<section class="section-about bg-gray-light py-md-5 py-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-9 col-12">
				<div class="card card-about bg-primary mb-4">
					<div class="card-body py-4">
						<h5 class="card-title text-white font-weight-600">@lang('about.mission.title')</h5>
						<p class="card-text text-white">@lang('about.mission.content')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-9 col-12">
				<div class="card card-about bg-warning mb-4">
					<div class="card-body py-4">
						<h5 class="card-title text-white font-weight-600">@lang('about.vision.title')</h5>
						<p class="card-text text-white">@lang('about.vision.content')</p>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="d-flex align-items-center justify-content-center mt-md-4 mt-2">
					<img src="{{ asset('/web/img/about/transparencia-icono-valores.png') }}" class="mx-sm-3 mx-2" width="80" alt="@lang('about.icons.first')" title="@lang('about.icons.first')">
					<img src="{{ asset('/web/img/about/cooperacion-icono-valores.png') }}" class="mx-sm-3 mx-2" width="80" alt="@lang('about.icons.second')" title="@lang('about.icons.second')">
					<img src="{{ asset('/web/img/about/sinergia-icono-valores.png') }}" class="mx-sm-3 mx-2" width="80" alt="@lang('about.icons.third')" title="@lang('about.icons.third')">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-function bg-gray-light py-md-5 py-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-12">
				<p class="h3 text-purple font-weight-bold text-center">@lang('about.function.title')</p>
				<p class="h5 text-muted text-center mb-3">@lang('about.function.subtitle')</p>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-lg-6 col-12 d-flex justify-content-center align-items-center px-md-0 px-sm-5 px-3">
				<img src="{{ asset('/web/img/about/funcion-del-sistema.png') }}" class="w-75" alt="@lang('about.function.image')" title="@lang('about.function.image')">
			</div>
			<div class="col-lg-6 col-12">
				<p class="h5 text-muted text-content">@lang('about.function.content')</p>
			</div>
		</div>
	</div>
</section>

@endsection