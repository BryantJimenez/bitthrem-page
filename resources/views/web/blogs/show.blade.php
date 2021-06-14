@extends('layouts.web')

@section('title', $article->title)
@section('og:type', 'article')
@section('og:description', Str::limit($description, 200))
@section('og:image', image_exist('/admins/img/articles/', $article->image))
@section('keywords', $article->keywords)
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h1 class="h2 text-white text-center font-weight-bold">{{ $article->title }}</h1>
				<div class="d-flex justify-content-center align-items-center">
					@if(!is_null($article['user']))
                    <img src="{{ image_exist('/admins/img/users/', $article['user']->photo, true) }}" class="rounded-circle mr-2" width="45" height="45" alt="{{ $article['user']->name." ".$article['user']->lastname }}" title="{{ $article['user']->name." ".$article['user']->lastname }}">
					<p class="h5 text-white mb-0">@lang('blog.by', ['name' => $article['user']->name." ".$article['user']->lastname, 'date' => $article->created_at->format('d/m/Y')])</p>
					@endif
				</div>
			</div>
		</div>
	</div>

    <div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-article py-md-5 py-3">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <img src="{{ image_exist('/admins/img/articles/', $article->image) }}" class="w-100" alt="{{ $article->title }}" title="{{ $article->title }}">
                <article class="article-content">
                    {!! $article->content !!}
                </article>

                <hr>

                <div class="row related-articles pt-md-4 pt-3">
                    <div class="col-12">
                        <p class="h5 text-dark">@lang('blog.related')</p>
                    </div>

                    @foreach($relateds as $related)
                    <div class="col-lg-6 col-md-6 col-12 py-2">
                        <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('web.blog.show', ['article' => $related->slug]), [], true) }}" hreflang="{{ app()->getLocale() }}" class="font-weight-light">{{ $related->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection