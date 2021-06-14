@extends('layouts.web')

@section('title', trans('web.title.helps'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="h2 text-white text-center font-weight-bold">@lang('helps.title')</h3>
			</div>
		</div>
	</div>

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-help-center-categories bg-gray-light py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="form-group position-relative col-12">
				<input type="text" class="form-control rounded-0 py-4 pr-4" name="search" required placeholder="@lang('helps.search')" id="autocomplete-helps">
				<div class="position-absolute top bottom right d-flex align-items-center pr-4">
					<i class="fa fa-search text-muted"></i>
				</div>
			</div>

			<div class="col-12">
				<div class="row px-3">
					@foreach($categories as $category)
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 px-0">
						<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.index', ['category' => $category->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="card bg-gray-light rounded-0 border-0 text-decoration-none py-5">
							<div class="card-body d-flex flex-column">
								@if(!is_null($category->icon))
								<img src="{{ asset('/admins/img/categories/'.$category->icon) }}" class="mb-4 mx-auto" width="70" height="70" alt="{{ $category->name }}" title="{{ $category->name }}">
								@endif
								<h5 class="card-title text-muted text-center font-weight-light mb-0">{{ $category->name }}</h5>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/web/js/autocomplete/jquery.autocomplete.js') }}"></script>
@endsection