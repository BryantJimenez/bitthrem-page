@extends('layouts.web')

@section('title', trans('web.title.faq'))
@section('og:description', 'Earn through our investment plans or totally free. Come and meet us!')
@section('twitter:card', 'summary_large_image')

@section('content')

<section class="hero-banner-secondary overflow-hidden position-relative pt-md-5 pt-3">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="h2 text-white text-center font-weight-bold">@lang('home.question.title')</h3>
				<p class="h5 text-center text-white mb-3">@lang('home.question.subtitle')</p>
			</div>
		</div>
	</div>

    <div class="light-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</section>

<section class="section-questions py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills align-items-center flex-nowrap overflow-auto mb-4" role="tablist">
                    @foreach($categories as $category)
                    @if($category['questions']->count()>0)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link @if($loop->first) active @endif py-md-3 py-2 mr-md-4 mr-2" data-toggle="tab" href="{{ '#question-frecuently-'.$category->slug }}" role="tab" aria-controls="{{ 'question-frecuently-'.$category->slug }}" aria-selected="true">{{ $category->name }}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-12">
                <div class="tab-content">
                    @foreach($categories as $category)
                    @if($category['questions']->count()>0)
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="{{ 'question-frecuently-'.$category->slug }}" role="tabpanel">

                        <div class="accordion" id="{{ 'question-accordion-'.$category->slug }}">
                            @foreach($category['questions'] as $question)
                            <div class="card border-0 mb-3">
                                <div class="card-header bg-white border-0 d-flex justify-content-between p-4" data-toggle="collapse" data-target="{{ '#question-collapse-'.$question->slug }}" aria-expanded="false" aria-controls="{{ 'question-collapse-'.$question->slug }}" id="{{ 'question-heading-'.$question->slug }}">
                                    <p class="text-muted collapsed w-100 mb-0 mr-3">{{ $question->question }}</p>
                                    <img src="{{ asset('/web/img/btn-angle-down.png') }}" width="30" height="30">
                                </div>

                                <div id="{{ 'question-collapse-'.$question->slug }}" class="collapse" aria-labelledby="{{ 'question-heading-'.$question->slug }}" data-parent="{{ '#question-accordion-'.$category->slug }}">
                                    <div class="card-body p-4">
                                        <p class="text-muted mb-0">{{ $question->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection