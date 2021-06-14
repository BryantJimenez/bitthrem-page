<nav class="navbar navbar-expand-lg fixed-navbar px-lg-0 py-3">
	<div class="container-fluid">
		<a class="navbar-brand py-0" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('home'), [], true) }}" hreflang="{{ app()->getLocale() }}">
			<img src="{{ asset('/web/img/logo-white.png') }}" class="logo-white" width="140" height="40" title="Logo Bitthrem" alt="Logo Bitthrem">
			<img src="{{ asset('/web/img/logo.png') }}" class="logo-color" width="140" height="40" title="Logo Bitthrem" alt="Logo Bitthrem">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav" aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-2x fa-bars @if(Route::current()->getName()=='home') text-purple-light @else text-white @endif"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-lg-center px-lg-0 pb-lg-0 pt-lg-0 p-3" id="mobile-nav">
			<ul class="navbar-nav nav">
				<li class="nav-item">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('home'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="nav-link @if(Route::current()->getName()=='home') active @endif"><span>@lang('web.menu.about')</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.about'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="nav-link @if(Route::current()->getName()=='web.about') active @endif"><span>@lang('web.menu.business')</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.prices'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="nav-link @if(Route::current()->getName()=='web.prices') active @endif"><span>@lang('web.menu.prices')</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.referrals'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="nav-link @if(Route::current()->getName()=='web.referrals') active @endif"><span>@lang('web.menu.referral program')</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.leaders'), [], true) }}" hreflang="{{ app()->getLocale() }}" class="nav-link @if(Route::current()->getName()=='web.leaders') active @endif"><span>@lang('web.menu.top')</span></a>
				</li>
				<li class="nav-item d-lg-none d-block">
					<a href="https://app.bitthrem.com/register" class="nav-link"><span>@lang('web.menu.sign up')</span></a>
				</li>
				<li class="nav-item d-lg-none d-block">
					<a href="https://app.bitthrem.com/login" class="nav-link"><span>@lang('web.menu.sign in')</span></a>
				</li>
				<li class="nav-item d-lg-none d-block">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle" id="dropdownNavbarMenuLanguages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('web.menu.languages')</a>
					<div class="dropdown">
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownNavbarMenuLanguages">
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<a class="dropdown-item py-0" rel="alternate" hreflang="{{ $localeCode }}" href="{{ str_replace(['en/centro-de-ayuda', 'es/help-center'], ['en/help-center', 'es/centro-de-ayuda'], LaravelLocalization::getLocalizedURL($localeCode, null, [], true)) }}">{{ $properties['native'] }}</a>
							@endforeach
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="d-lg-flex d-none">
			<div class="d-flex align-items-center mr-2">
				<a href="https://app.bitthrem.com/register" class="btn btn-white rounded-pill px-3">@lang('web.menu.sign up')</a>
			</div>

			<div class="d-flex align-items-center mr-2">
				<a href="https://app.bitthrem.com/login" class="btn btn-warning rounded-pill px-3">@lang('web.menu.sign in')</a>
			</div>

			<div class="d-flex align-items-center">
				<a href="javascript:void(0);" class="dropdown-toggle after-none @if(Route::current()->getName()=='home') icon-color @endif" id="dropdownMenuLanguages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="{{ asset('/web/img/icon-language-white.png') }}" class="icon-language-white" width="25" height="25" alt="@lang('web.menu.languages')" title="@lang('web.menu.languages')">
					<img src="{{ asset('/web/img/icon-language.png') }}" class="icon-language-color" width="25" height="25" alt="@lang('web.menu.languages')" title="@lang('web.menu.languages')">
				</a>
				<div class="dropdown">
					<div class="dropdown-menu dropdown-menu-right mt-4" aria-labelledby="dropdownMenuLanguages">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<a class="dropdown-item py-0" rel="alternate" hreflang="{{ $localeCode }}" href="{{ str_replace(['en/centro-de-ayuda', 'es/help-center'], ['en/help-center', 'es/centro-de-ayuda'], LaravelLocalization::getLocalizedURL($localeCode, null, [], true)) }}">{{ $properties['native'] }}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>