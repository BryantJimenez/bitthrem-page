@extends('layouts.web')

@section('title', trans('web.title.prices'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<section class="hero-plans-banner overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="h2 text-white text-center font-weight-bold">@lang('prices.banner.title')</h3>
			</div>
		</div>
	</div>

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-plans bg-gray-dark pb-md-5 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan first border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/bronce.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.bronze')" title="@lang('prices.plans.bronze')">
						</div>
						<h5 class="h2 card-title font-weight-bold">@lang('prices.plans.bronze')</h5>
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">20$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">200$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration bronze')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan second border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/bronce-2.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.bronze two')" title="@lang('prices.plans.bronze two')">
						</div>
						<h5 class="h2 card-title font-weight-bold">@lang('prices.plans.bronze two')</h5>
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">300$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">500$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration bronze two')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan third border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/plata.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.silver')" title="@lang('prices.plans.silver')">
						</div>
						<h5 class="h2 card-title font-weight-bold">@lang('prices.plans.silver')</h5>
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">600$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">800$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration silver')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan fourth border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/plata.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.silver two')" title="@lang('prices.plans.silver two')">
						</div>
						<h5 class="h2 card-title font-weight-bold">@lang('prices.plans.silver two')</h5>
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">900$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">2000$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration silver two')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan fifth border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/oro.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.gold')" title="@lang('prices.plans.gold')">
						</div>
						<h5 class="h2 card-title font-weight-bold">@lang('prices.plans.gold')</h5>
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">2000$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">5000$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration gold')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="card card-plan sixth border-0 mb-4">
					<div class="card-body">
						<div class="d-flex px-0 px-lg-3">
							<img src="{{ asset('/web/img/prices/ultra.png') }}" class="w-75 mx-auto" alt="@lang('prices.plans.ultra')" title="@lang('prices.plans.ultra')">
						</div>
						<img src="{{ asset('/web/img/prices/ultra-title.png') }}" height="34" class="ultra mt-1 mb-3" alt="@lang('prices.plans.ultra')" title="@lang('prices.plans.ultra')">
						{{-- <h5 class="h4 card-title font-weight-bold">Ultra</h5> --}}
						<div class="row">
							<div class="col-sm-12 col-6">
								<div class="row">
									<div class="col-md-5 col-12">
										<p class="h6 card-text text-white">@lang('prices.plans.min')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text text-white font-weight-600">1000$</p>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-6">
								<div class="row">	
									<div class="col-md-5 col-12">
										<p class="h6 card-text">@lang('prices.plans.max')</p>
									</div>
									<div class="col-md-7 col-12">
										<p class="h1 card-text font-weight-600">10000$</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-center font-weight-bold mb-3">@lang('prices.plans.duration ultra')</p>
						<div class="text-center">
							<a href="https://app.bitthrem.com/dashboard/mplans" class="btn rounded-pill px-4">@lang('prices.plans.buy')</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-questions bg-gray-dark py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="h2 text-gray text-center font-weight-bold mb-4">@lang('prices.question.title')</p>
			</div>

			<div class="col-12">
				<div class="accordion" id="question-accordion">
					@foreach($questions->take(3) as $question)
					<div class="card border-0 mb-4">
						<div class="card-header bg-white border-0 d-flex justify-content-between p-4" data-toggle="collapse" data-target="{{ '#question-collapse-'.$question->slug }}" aria-expanded="false" aria-controls="{{ 'question-collapse-'.$question->slug }}" id="{{ 'question-heading-'.$question->slug }}">
							<p class="text-muted collapsed w-100 mb-0 mr-3">{{ $question->question }}</p>
							<img src="{{ asset('/web/img/btn-angle-down.png') }}" width="30" height="30">
						</div>

						<div id="{{ 'question-collapse-'.$question->slug }}" class="collapse" aria-labelledby="{{ 'question-heading-'.$question->slug }}" data-parent="#question-accordion">
							<div class="card-body p-4">
								<p class="text-muted mb-0">{{ $question->answer }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<div class="col-12 text-right">
				<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.faq'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="btn btn-transparent rounded-pill px-4">@lang('prices.question.button')</a>
			</div>
		</div>
	</div>
</section>

<section class="section-contact bg-gray-dark py-md-5 py-3">
	<div class="container pt-md-5 pt-0">
		<div class="row">
			<div class="col-12 mb-md-5 mb-3">
				<p class="h2 text-primary text-center font-weight-bold mb-0">@lang('prices.contact.title')</p>
			</div>

			<div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-lg-0 mb-3">
				<img src="{{ asset('/web/img/icon-mail.png') }}" class="mr-3" width="50" height="50">
				<p class="text-muted mb-0">{{ $setting->email }}</p>
			</div>

			@if(!is_null($setting->phone) && !empty($setting->phone))
			<div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-lg-0 mb-3">
				<img src="{{ asset('/web/img/icon-phone.png') }}" class="mr-3" width="50" height="50">
				<p class="text-muted mb-0">{{ $setting->phone }}</p>
			</div>
			@endif

			@if(!is_null($setting->address) && !empty($setting->address))
			<div class="col-lg-4 col-12 d-flex align-items-center mb-lg-0 mb-3">
				<img src="{{ asset('/web/img/icon-address.png') }}" class="mr-3" width="50" height="50">
				<p class="text-muted mb-0">{{ $setting->address }}</p>
			</div>
			@endif

			<div class="col-12">
				<form action="{{ route('web.contact.send') }}" method="POST" class="card border-0 mt-3 mb-4" id="formContactWeb">
					@csrf
					<div class="card-body p-4">
						<div class="row">
							<div class="col-12">
								@include('admin.partials.errors')
							</div>

							<div class="form-group col-lg-6 col-md-6 col-12">
								<input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" name="name" required placeholder="@lang('web.contact.name')" value="{{ old('name') }}">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-12">
								<input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" required placeholder="@lang('web.contact.email')" value="{{ old('email') }}">
							</div>

							<div class="form-group col-12">
								<input type="text" class="form-control rounded-0 @error('subject') is-invalid @enderror" name="subject" required placeholder="@lang('web.contact.subject')" value="{{ old('subject') }}">
							</div>

							<div class="form-group col-12">
								<textarea class="form-control rounded-0 @error('message') is-invalid @enderror" name="message" required rows="4" placeholder="@lang('web.contact.message')">{{ old('message') }}</textarea>
							</div>

							<div class="form-group col-12 text-right">
								<button type="submit" class="btn btn-warning text-primary rounded-pill px-4" action="contact">@lang('web.contact.send')</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<!-- Jquery Validate -->
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
@if(app()->getLocale()=="es")
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
@endif
<script type="text/javascript" src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection