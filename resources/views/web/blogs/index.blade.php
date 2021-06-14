@extends('layouts.web')

@section('title', trans('web.title.blog'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="h2 text-white text-center font-weight-bold">@lang('blog.title')</h3>
			</div>
		</div>
	</div>

	<div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-blog bg-white py-md-5 py-3">
	<div class="container">
		<div class="row">
			<div class="form-group position-relative col-12 order-0">
				<input type="text" class="form-control rounded-0 py-4 pr-4" name="search" required placeholder="@lang('helps.search')" id="autocomplete-articles">
				<div class="position-absolute top bottom right d-flex align-items-center pr-4">
					<i class="fa fa-search text-muted"></i>
				</div>
			</div>

			@forelse($articles as $article)
			@if($loop->first)
			<div class="col-lg-8 col-md-8 col-12 order-1">
				<div class="card card-blog first rounded-0 mb-4">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}">
						<img src="{{ image_exist('/admins/img/articles/', $article->image) }}" class="rounded-0 w-100" alt="{{ $article->title }}" title="{{ $article->title }}">
					</a>
					<div class="card-body">
						<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}">
							<h3 class="h4 card-title font-weight-light">{{ $article->title }}</h3>
						</a>
						<div class="d-flex justify-content-between align-items-center">
							<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="btn btn-primary rounded-pill px-3">@lang('blog.see more')</a>
							<p class="text-muted mb-0">{{ $article->created_at->diffForHumans() }}</p>
						</div>
					</div>
				</div>
			</div>
			@else
			<div class="col-lg-4 col-md-4 col-sm-6 col-12 order-3">
				<div class="card card-blog rounded-0 mb-4">
					<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}">
						<img src="{{ image_exist('/admins/img/articles/', $article->image) }}" class="rounded-0 w-100" alt="{{ $article->title }}" title="{{ $article->title }}">
					</a>
					<div class="card-body">
						<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}">
							<h3 class="h5 card-title font-weight-light">{{ $article->title }}</h3>
						</a>
						<div class="d-flex justify-content-between align-items-center">
							<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $article->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="btn btn-primary rounded-pill px-3">@lang('blog.see more')</a>
							<p class="text-muted mb-0">{{ $article->created_at->diffForHumans() }}</p>
						</div>
					</div>
				</div>
			</div>
			@endif
			@empty
			<div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center align-items-center">
				<p class="h3 text-center text-danger py-5">@lang('blog.no results')</p>
			</div>
			@endforelse

			<div class="col-lg-4 col-md-4 col-12 order-2">
				<div class="card card-blog-categories rounded-0 mb-4">
					<div class="card-body">
						<div class="d-flex border-bottom mb-2">
							<p class="h6 card-title text-uppercase font-weight-light border-bottom px-2 pb-2 mb-0">@lang('blog.categories')</p>
						</div>
						<div class="d-flex flex-column">
							@foreach($categories as $category)
							<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.index', ['category' => $category->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="font-weight-light py-2 mb-0">{{ $category->name }}</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 d-flex justify-content-center order-5">
				@if((empty($search) || isset($search['page'])) && !isset($search['search']))
				{{ $pagination->onEachSide(0)->links() }}
				@else
				{{ $pagination->onEachSide(0)->appends($search)->links() }}
				@endif
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/web/js/autocomplete/jquery.autocomplete.js') }}"></script>
@endsection