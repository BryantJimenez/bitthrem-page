@extends('layouts.web')

@section('title', trans('web.title.helps').' | '.$category->name)
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12 d-flex flex-column">
				@if(!is_null($category->icon))
				<img src="{{ asset('/admins/img/categories/'.$category->icon) }}" class="mb-2 mx-auto" width="70" height="70" alt="{{ $category->name }}" title="{{ $category->name }}">
				@endif
				<h3 class="h2 text-white text-center font-weight-bold">{{ $category->name }}</h3>
				@if(!is_null($category->description))
				<p class="h5 text-white text-center">{{ $category->description }}</p>
				@endif
			</div>
		</div>
	</div>

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-help-center-list bg-gray-light py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="form-group position-relative col-12 order-0 mb-md-5">
				<input type="text" class="form-control rounded-0 py-4 pr-4" name="search" required placeholder="@lang('helps.search')" id="autocomplete-helps">
				<div class="position-absolute top bottom right d-flex align-items-center pr-4">
					<i class="fa fa-search text-muted"></i>
				</div>
			</div>

			<div class="form-group col-12 d-block d-md-none">
				<div class="position-relative">
					<a href="javascript:void(0);" class="btn btn-white dropdown-toggle border rounded-0 w-100 py-2" id="dropdownMenuCategories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('helps.categories')</a>

					<div class="dropdown dropdown-menu menu-categories rounded-0 border-0 shadow w-100 pl-0 mt-3" aria-labelledby="dropdownMenuCategories">
						<ul class="pl-4 mb-0">
							@foreach($categories as $menu_category)
							<li>
								<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.index', ['category' => $menu_category->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" @if($category->slug==$menu_category->slug) class="active" @endif>{{ $menu_category->name }}</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-9 col-md-8 col-12 order-2 order-md-1">
				<div class="row pr-lg-5">
					@forelse($helps as $help)
					<div class="col-12">
						<div class="card card-help bg-transparent border-0 mb-4">
							<div class="card-body pl-0">
								<h2 class="h5 card-title mb-3"><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.show', ['category' => $category->slug, 'help' => $help->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}">{{ $help->title }}</a></h2>
								@if(!is_null($help->content))
								<p class="card-text text-muted font-weight-light">{{ Str::limit($help->content, 350) }}</p>
								@endif
								<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.show', ['category' => $category->slug, 'help' => $help->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="btn btn-primary rounded-pill px-4">@lang('helps.see more')</a>
							</div>
						</div>

						@if(!$loop->last)
						<hr>
						@endif
					</div>
					@empty
					<div class="col-12">
						<p class="h3 text-center text-danger">@lang('helps.no results')</p>
					</div>
					@endforelse
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-12 d-none d-md-block position-relative order-3 order-md-2">
				<div class="menu-categories border-left py-3">
					<p class="h6 text-dark text-uppercase py-2 mb-0">@lang('helps.categories')</p>
					<ul class="pl-0">
						@foreach($categories as $menu_category)
						<li>
							<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.index', ['category' => $menu_category->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" @if($category->slug==$menu_category->slug) class="active" @endif>{{ $menu_category->name }}</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/web/js/autocomplete/jquery.autocomplete.js') }}"></script>
@endsection