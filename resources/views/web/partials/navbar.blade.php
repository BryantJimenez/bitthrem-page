<nav class="navbar navbar-expand-lg @if(request()->is('finalizar-compra') || is_int(strpos(request()->path(), 'viviendas/'))) header-absolute @else fixed-navbar @endif">
	<div class="container-fluid">
		<a class="navbar-brand py-0" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('home'), [], true) }}" hreflang="{{ app()->getLocale() }}">
			<img src="{{ asset('/web/img/logo-white.png') }}" width="150" height="40" title="Logo" alt="Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav" aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-2x fa-bars"></span>
		</button>

		<div class="collapse navbar-collapse px-lg-0 pb-lg-0 pt-lg-2 p-3" id="mobile-nav">
			<ul class="navbar-nav nav ml-auto">
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link"><span>@lang('web.menu.about')</span></a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link"><span>@lang('web.menu.business')</span></a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link"><span>@lang('web.menu.prices')</span></a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link"><span>@lang('web.menu.referral program')</span></a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link">@lang('web.menu.sign up')</a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" hreflang="{{ app()->getLocale() }}" class="nav-link">@lang('web.menu.sign in')</a>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle" id="dropdownMenuLanguages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i></a>
					<div class="dropdown mt-2">
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLanguages">
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<a class="dropdown-item py-0" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
							@endforeach
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>