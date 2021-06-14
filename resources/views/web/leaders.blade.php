@extends('layouts.web')

@section('title', trans('web.title.leaders'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<section class="hero-top-banner overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="h2 text-white text-center font-weight-bold">@lang('leaders.title')</h3>
			</div>
		</div>
	</div>

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-leaders bg-gray-light pb-md-5 py-0">
	@foreach($countries as $country)
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 position-relative">
				<div class="d-flex justify-content-end align-items-center position-absolute country-container px-5">
					<div class="shadow-country">
						<div class="overflow-hidden rounded-circle country-flag mr-4">
							<img src="{{ 'https://flagcdn.com/w80/'.mb_strtolower($country->iso, 'UTF-8').'.png' }}" class="w-100 h-100" alt="{{ $country->nicename }}" title="{{ $country->nicename }}">
						</div>
					</div>
					<p class="h4 mb-0">{{ $country->nicename }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-lg-4 py-2">
		<div class="row py-5">
			@foreach($country['bests'] as $best)
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 user-elements px-3 px-sm-0 px-md-3" data-show="@if($loop->iteration<=3){{ 'true' }}@else{{ 'false' }}@endif" country="{{ $country->nicename }}">
				<div class="card card-user-top bg-transparent border-0">
					<div class="card-body px-2 px-sm-0 px-md-2">
						<div class="poligon d-flex justify-content-center">
							<div class="outside">
								<img src="{{ image_exist('/admins/img/bests/', $best->photo, true) }}" class="img-fluid" alt="{{ $best->name.' '.$best->lastname }}" title="{{ $best->name.' '.$best->lastname }}">
							</div>
						</div>

						<div class="content mx-auto">
							<p class="h4 card-text font-weight-bold mb-0">{{ $best->name }}</p>
							<p class="h4 card-text mb-0">{{ $best->lastname }}</p>

							<div class="d-flex justify-content-end position-relative socials mb-2">
								@if(!is_null($best->phone) && !empty($best->phone))
								<a href="https://api.whatsapp.com/send?phone={{ str_replace('+', '', $best->phone) }}" class="btn btn-black-light d-flex justify-content-center align-items-center rounded-circle social mr-3">
									<i class="fab fa-whatsapp text-white"></i>
								</a>
								@endif
								@if(!is_null($best->email) && !empty($best->email))
								<a href="mailto:{{ $best->email }}" class="btn btn-purple-light d-flex justify-content-center align-items-center rounded-circle social mr-3">
									<i class="fa fa-envelope text-white"></i>
								</a>
								@endif
								<div class="line-black"></div>
							</div>

							<a href="{{ $best->url }}" class="btn btn-sm btn-purple-light rounded-pill px-3">@lang('leaders.link')</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach

			@if($country['bests']->count()>3)
			<div class="col-12 text-center py-3">
				<a href="javascript:void(0);" class="btn btn-primary rounded-pill px-4" data-active="false" country="{{ $country->nicename }}">@lang('leaders.see more')</a>
			</div>
			@endif
		</div>
	</div>
	@endforeach
</section>

<div class="bg-purple-light py-sm-5 py-4">
</div>

<section class="section-contact bg-gray-light py-md-5 py-3">
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