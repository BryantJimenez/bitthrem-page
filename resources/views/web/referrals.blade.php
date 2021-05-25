@extends('layouts.web')

@section('title', 'Programa de Referidos')

@section('content')

<section class="hero-referrals-banner d-flex align-items-center vh-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 col-12 order-1 order-md-0">
				<p class="h4 text-white font-weight-600 mb-3">@lang('referrals.banner.title')</p>
				<p class="h5 text-white font-weight-light mb-4">@lang('referrals.banner.subtitle')</p>
				<div class="text-md-left text-center">
					<a href="javascript:void(0);" class="btn btn-primary rounded-pill px-4">@lang('referrals.banner.button')</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12 d-flex order-0 order-md-1">
				<img src="{{ asset('/web/img/referrals/ilustracion-banner-referidos.png') }}" class="img-fluid mx-auto mb-md-0 mb-4" alt="@lang('referrals.banner.image')" title="@lang('referrals.banner.image')">
			</div>
		</div>
	</div>
</section>

<section class="section-card-steps overflow-hidden py-md-5 py-3">
	<div class="container-fluid pt-md-5 pt-3">
		<div class="row">
			<div class="col-lg-3 col-12 d-flex justify-content-center pr-lg-0">
				<div class="card card-step first rounded-0 border-0 mb-3">
					<div class="card-body position-relative pt-lg-5 pb-lg-4 pb-5 pr-lg-5">
						<p class="h5 card-title text-primary font-weight-600 pt-0">@lang('referrals.card-steps.card one title')</p>
						<p class="card-text text-primary pb-lg-0 pb-4 mb-0">@lang('referrals.card-steps.card one description')</p>

						<div class="position-absolute d-flex align-items-center icon-center">
							<img src="{{ asset('/web/img/referrals/obten-codigo.png') }}" class="mx-auto mb-lg-0 mb-5" width="70" height="73" alt="@lang('referrals.card-steps.image one')" title="@lang('referrals.card-steps.image one')">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-12 d-flex justify-content-center px-lg-0">
				<div class="card card-step rounded-0 border-0 mb-3">
					<div class="card-body position-relative pt-5 pb-lg-4 pb-5">
						<p class="h5 card-title text-primary font-weight-600 pt-lg-0 pt-4">@lang('referrals.card-steps.card two title')</p>
						<p class="card-text text-primary pb-lg-0 pb-4 mb-0">@lang('referrals.card-steps.card two description')</p>

						<div class="position-absolute d-flex align-items-center icon-center">
							<img src="{{ asset('/web/img/referrals/invita-a-tus-amigos.png') }}" class="mx-auto mb-lg-0 mb-5" width="70" height="73" alt="@lang('referrals.card-steps.image two')" title="@lang('referrals.card-steps.image two')">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-12 d-flex justify-content-center px-lg-0">
				<div class="card card-step rounded-0 border-0 mb-3">
					<div class="card-body position-relative pt-5 pb-lg-4 pb-5">
						<p class="h5 card-title text-primary font-weight-600 pt-lg-0 pt-4">@lang('referrals.card-steps.card three title')</p>
						<p class="card-text text-primary pb-lg-0 pb-4 mb-0">@lang('referrals.card-steps.card three description')</p>

						<div class="position-absolute d-flex align-items-center icon-center">
							<img src="{{ asset('/web/img/referrals/ganancias.png') }}" class="mx-auto mb-lg-0 mb-5" width="70" height="73" alt="@lang('referrals.card-steps.image three')" title="@lang('referrals.card-steps.image three')">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-12 d-flex justify-content-center pl-lg-0">
				<div class="card card-step last rounded-0 border-0 mb-3">
					<div class="card-body position-relative pt-5 pb-lg-4 pb-5">
						<p class="h5 card-title text-primary font-weight-600 pt-lg-0 pt-4">@lang('referrals.card-steps.card four title')</p>
						<p class="card-text text-primary pb-lg-0 pb-4 mb-0">@lang('referrals.card-steps.card four description')</p>

						<div class="position-absolute d-flex align-items-center icon-center">
							<img src="{{ asset('/web/img/referrals/expande-tu-red.png') }}" class="mx-auto mb-lg-0 mb-5" width="70" height="73" alt="@lang('referrals.card-steps.image four')" title="@lang('referrals.card-steps.image four')">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-card-levels py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="h2 text-purple font-weight-bold text-center">@lang('referrals.card-levels.title')</p>
				<p class="h5 text-muted text-center mb-3">@lang('referrals.card-levels.subtitle')</p>
			</div>

			<div class="col-12 py-lg-5 py-3">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-primary">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-white">@lang('referrals.card-levels.card one title')</p>
								</div>
								<p class="h1 card-text text-white font-weight-600 mb-0">10%</p>
								<p class="card-text text-white font-weight-light mb-0">@lang('referrals.card-levels.card condition')</p>

								<div class="position-absolute rounded-circle bg-primary icon-right p-3">
									<img src="{{ asset('/web/img/referrals/angle-right-white.png') }}" width="29" height="32" alt="@lang('referrals.card-levels.image angle')" title="@lang('referrals.card-levels.image angle')">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-purple-light">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-white">@lang('referrals.card-levels.card two title')</p>
								</div>
								<p class="h1 card-text text-white font-weight-600 mb-0">5%</p>
								<p class="card-text text-white font-weight-light mb-0">@lang('referrals.card-levels.card condition')</p>

								<div class="position-absolute rounded-circle bg-purple-light icon-right p-3">
									<img src="{{ asset('/web/img/referrals/angle-right-white.png') }}" width="29" height="32" alt="@lang('referrals.card-levels.image angle')" title="@lang('referrals.card-levels.image angle')">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-white border-0">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-primary">@lang('referrals.card-levels.card three title')</p>
								</div>
								<p class="h1 card-text text-primary font-weight-600 mb-0">4%</p>
								<p class="card-text text-primary mb-0">@lang('referrals.card-levels.card condition')</p>

								<div class="position-absolute rounded-circle bg-white icon-right p-3">
									<img src="{{ asset('/web/img/referrals/angle-right.png') }}" width="29" height="32" alt="@lang('referrals.card-levels.image angle')" title="@lang('referrals.card-levels.image angle')">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-warning">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-primary">@lang('referrals.card-levels.card four title')</p>
								</div>
								<p class="h1 card-text text-primary font-weight-600 mb-0">3%</p>
								<p class="card-text text-primary mb-0">@lang('referrals.card-levels.card condition')</p>

								<div class="position-absolute rounded-circle bg-warning icon-right p-3">
									<img src="{{ asset('/web/img/referrals/angle-right.png') }}" width="29" height="32" alt="@lang('referrals.card-levels.image angle')" title="@lang('referrals.card-levels.image angle')">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-gray-middle">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-primary">@lang('referrals.card-levels.card five title')</p>
								</div>
								<p class="h1 card-text text-primary font-weight-600 mb-0">2%</p>
								<p class="card-text text-primary mb-0">@lang('referrals.card-levels.card condition')</p>

								<div class="position-absolute rounded-circle bg-gray-middle icon-right p-3">
									<img src="{{ asset('/web/img/referrals/angle-right.png') }}" width="29" height="32" alt="@lang('referrals.card-levels.image angle')" title="@lang('referrals.card-levels.image angle')">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">
						<div class="card card-level bg-warning">
							<div class="card-body">
								<div class="title pr-4">
									<p class="h4 card-text text-white">@lang('referrals.card-levels.card six title')</p>
								</div>
								<p class="h1 card-text text-white font-weight-600 mb-0">1%</p>
								<p class="card-text text-white mb-0">@lang('referrals.card-levels.card condition')</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-12">
						<p class="h4 text-muted text-level font-italic mb-0 py-lg-0 py-4">@lang('referrals.card-levels.text')</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-bonus bg-gray-light py-md-5 py-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-12 order-1 order-lg-0">
				<p class="h3 text-purple font-weight-bold">@lang('referrals.bonus.title')</p>
				<p class="h5 text-muted">@lang('referrals.bonus.subtitle')</p>
			</div>
			<div class="col-lg-6 col-12 d-flex justify-content-center align-items-center order-0 order-lg-1 px-md-5">
				<img src="{{ asset('/web/img/referrals/ilustracion-bonificaciones.png') }}" class="img-fluid mb-lg-0 mb-4" alt="@lang('referrals.bonus.image')" title="@lang('referrals.bonus.image')">
			</div>
		</div>
	</div>
</section>

<section class="section-timeline overflow-hidden position-relative py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="timeline mt-4">
					<div class="item">
						<p class="h2 text-primary font-italic font-weight-bold">@lang('referrals.timeline.title first')</p>
						<div class="requirements">
							<p class="text-muted small mb-1">@lang('referrals.timeline.requirements title')</p>
							<p class="text-primary mb-2">@lang('referrals.timeline.requirements first')</p>
						</div>
						<div class="d-flex">
							<p class="h5 text-white bg-primary font-weight-600 rounded-pill">10 USD</p>
						</div>
					</div>
					<div class="item">
						<p class="h2 text-primary font-italic font-weight-bold">@lang('referrals.timeline.title second')</p>
						<div class="requirements">
							<p class="text-muted small mb-1">@lang('referrals.timeline.requirements title')</p>
							<p class="text-primary mb-2">@lang('referrals.timeline.requirements second')</p>
						</div>
						<div class="d-flex">
							<p class="h5 text-white bg-primary font-weight-600 rounded-pill">50 USD</p>
						</div>
					</div>
					<div class="item">
						<p class="h2 text-primary font-italic font-weight-bold">@lang('referrals.timeline.title third')</p>
						<div class="requirements">
							<p class="text-muted small mb-1">@lang('referrals.timeline.requirements title')</p>
							<p class="text-primary mb-2">@lang('referrals.timeline.requirements third')</p>
						</div>
						<div class="d-flex">
							<p class="h5 text-white bg-primary font-weight-600 rounded-pill">500 USD</p>
						</div>
					</div>
					<div class="item">
						<p class="h2 text-primary font-italic font-weight-bold">@lang('referrals.timeline.title fourth')</p>
						<div class="requirements">
							<p class="text-muted small mb-1">@lang('referrals.timeline.requirements title')</p>
							<p class="text-primary mb-2">@lang('referrals.timeline.requirements fourth')</p>
						</div>
						<div class="d-flex">
							<p class="h5 text-white bg-primary font-weight-600 rounded-pill">10.000 USD</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection