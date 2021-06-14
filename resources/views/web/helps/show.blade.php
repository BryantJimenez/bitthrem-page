@extends('layouts.web')

@section('title', $help->title)
@section('og:type', 'article')
@section('og:description', Str::limit($description, 200))
@section('keywords', $help->keywords)
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12 d-flex flex-column">
                @if(!is_null($category->icon))
                <img src="{{ asset('/admins/img/categories/'.$category->icon) }}" class="mb-2 mx-auto" width="70" height="70" alt="{{ $category->name }}" title="{{ $category->name }}">
                @endif
                <h1 class="h2 text-white text-center font-weight-bold">{{ $help->title }}</h1>
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

<section class="section-help-center py-md-5 py-3">
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
                            @if($category->slug==$menu_category->slug)
                            <ul class="pl-3">
                                @foreach($menu_category['helps'] as $menu_help)
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.show', ['category' => $menu_category->slug, 'help' => $menu_help->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="font-weight-light @if($help->slug==$menu_help->slug) active @endif">{{ $menu_help->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-12 order-2 order-md-1">
                <article class="help-center-content pb-md-4 pb-3">
                    {!! $help->content !!}
                </article>

                <hr>

                <div class="row related-helps pt-md-4 pt-3">
                    <div class="col-12">
                        <p class="h5 text-dark">@lang('helps.related')</p>
                    </div>

                    @foreach($relateds as $related)
                    <div class="col-lg-6 col-md-6 col-12 py-2">
                        <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.show', ['category' => $related['category']->slug, 'help' => $related->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="font-weight-light">{{ $related->title }}</a>
                    </div>
                    @endforeach
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
                        @if($category->slug==$menu_category->slug)
                        <ul class="pl-3">
                            @foreach($menu_category['helps'] as $menu_help)
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.helps.show', ['category' => $menu_category->slug, 'help' => $menu_help->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="font-weight-light @if($help->slug==$menu_help->slug) active @endif">{{ $menu_help->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
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