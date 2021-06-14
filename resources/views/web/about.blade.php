@extends('layouts.web')

@section('title', trans('web.title.about'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-about-banner overflow-hidden position-relative d-flex align-items-center vh-100">
	<div class="container position-relative">
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

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-team bg-white py-md-5 py-3">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-md-10 col-12">
				<p class="h2 text-primary text-center font-weight-bold">@lang('about.team.title')</p>
				<p class="h5 text-center text-muted">@lang('about.team.subtitle')</p>
			</div>

			<div class="col-12 position-relative team-images">
				<div class="bg-purple-dark d-flex justify-content-center align-items-center rounded-circle dots-sm dots-icon-first px-2">
					<img src="{{ asset('/web/img/about/icono-lideres.png') }}" class="img-fluid" alt="@lang('about.team.dots.first')" title="@lang('about.team.dots.first')">
				</div>

				<div class="bg-purple-dark d-flex justify-content-center align-items-center rounded-circle dots-sm dots-icon-second px-2">
					<img src="{{ asset('/web/img/about/icono-apoyo.png') }}" class="img-fluid" alt="@lang('about.team.dots.second')" title="@lang('about.team.dots.second')">
				</div>

				<div class="bg-pink d-flex justify-content-center align-items-center rounded-circle dots-sm dots-icon-third px-2">
					<img src="{{ asset('/web/img/about/icono-marketing.png') }}" class="img-fluid" alt="@lang('about.team.dots.third')" title="@lang('about.team.dots.third')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image leader-image-first">
					<img src="{{ asset('/web/img/about/team-lideres.png') }}" alt="@lang('about.team.images.leaders.first')" title="@lang('about.team.images.leaders.first')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image leader-image-second">
					<img src="{{ asset('/web/img/about/team-lideres3.png') }}" alt="@lang('about.team.images.leaders.second')" title="@lang('about.team.images.leaders.second')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image leader-image-third">
					<img src="{{ asset('/web/img/about/team-lideres2.png') }}" alt="@lang('about.team.images.leaders.third')" title="@lang('about.team.images.leaders.third')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image leader-image-fourth">
					<img src="{{ asset('/web/img/about/team-lideres4.png') }}" alt="@lang('about.team.images.leaders.fourth')" title="@lang('about.team.images.leaders.fourth')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image support-image-first">
					<img src="{{ asset('/web/img/about/team-apoyo3.png') }}" alt="@lang('about.team.images.support.first')" title="@lang('about.team.images.support.first')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image support-image-second">
					<img src="{{ asset('/web/img/about/team-apoyo.png') }}" alt="@lang('about.team.images.support.second')" title="@lang('about.team.images.support.second')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image support-image-third">
					<img src="{{ asset('/web/img/about/team-apoyo2.png') }}" alt="@lang('about.team.images.support.third')" title="@lang('about.team.images.support.third')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image marketing-image-first">
					<img src="{{ asset('/web/img/about/team-marketing.png') }}" alt="@lang('about.team.images.marketing.first')" title="@lang('about.team.images.marketing.first')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image marketing-image-second">
					<img src="{{ asset('/web/img/about/team-marketing3.png') }}" alt="@lang('about.team.images.marketing.second')" title="@lang('about.team.images.marketing.second')">
				</div>

				<div class="overflow-hidden rounded-circle dots-lg dots-image marketing-image-third">
					<img src="{{ asset('/web/img/about/team-marketing2.png') }}" alt="@lang('about.team.images.marketing.third')" title="@lang('about.team.images.marketing.third')">
				</div>

				<div class="bg-purple-dark d-flex justify-content-center align-items-center rounded-circle dots-md dots-title-first">
					<p class="h5 text-white font-weight-600 mb-0">@lang('about.team.dots.first')</p>
				</div>

				<div class="bg-purple-dark d-flex justify-content-center align-items-center rounded-circle dots-md dots-title-second">
					<p class="h5 text-white font-weight-600 mb-0">@lang('about.team.dots.second')</p>
				</div>

				<div class="bg-pink d-flex justify-content-center align-items-center rounded-circle dots-lg dots-title-third">
					<p class="h4 text-white font-weight-600 mb-0">@lang('about.team.dots.third')</p>
				</div>

				<div class="bg-primary rounded-circle dots-sm dots-first"></div>
				<div class="bg-pink-light rounded-circle dots-xs dots-second"></div>
				<div class="bg-primary rounded-circle dots-sm dots-third"></div>
				<div class="bg-warning rounded-circle dots-xs dots-fourth"></div>
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