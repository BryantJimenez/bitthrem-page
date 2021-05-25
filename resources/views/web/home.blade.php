@extends('layouts.web')

@section('title', 'Bitthrem')

@section('links')
<link href="{{ asset('/web/css/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('/web/css/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<section class="hero-banner position-relative vh-100">
    <div class="banner-illustration">
        <img src="{{ asset('/web/img/banner-illustration.png') }}" class="vw-50 vh-100">
    </div>

    <div class="container">
        <div class="row vh-100 align-items-center justify-content-start">
            <div class="col-lg-8 col-md-10 col-12">
            	<h1 class="text-white font-weight-bold">@lang('home.banner.title')</h1>
                <h4 class="text-white font-weight-light mb-3">@lang('home.banner.subtitle')</h4>
                <a href="javascript:void(0);" class="btn btn-warning text-primary font-weight-600 rounded-pill px-4">@lang('home.banner.button')</a>
            </div>
        </div>
    </div>

    {{-- <div class="light-animation">
        <div></div>
        <div></div>
    </div> --}}
</section>

<section class="section-tutorial py-md-5 py-3">
	<div class="container">
        <div class="row">
        	<div class="col-12 mb-md-5 mb-3">
        		<p class="h2 text-pink text-center font-weight-600">@lang('home.tutorial.how to start?')</p>
        	</div>
            <div class="text-center col-4 mb-sm-0 mb-3">
            	<img src="{{ asset('/web/img/icon-create-an-account.png') }}" class="mb-2" width="90" height="90" alt="@lang('home.tutorial.create an account')" title="@lang('home.tutorial.create an account')">
            	<p class="h5 text-purple font-weight-bold">@lang('home.tutorial.create an account')</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-purple rounded-pill">@lang("home.tutorial.let's do it")</a>
            </div>

            <div class="text-center col-4 mb-sm-0 mb-3">
            	<img src="{{ asset('/web/img/icon-make-your-first-deposit.png') }}" class="mb-2" width="90" height="90" alt="@lang('home.tutorial.make your first deposit')" title="@lang('home.tutorial.make your first deposit')">
            	<p class="h5 text-purple font-weight-bold">@lang('home.tutorial.make your first deposit')</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-purple rounded-pill">@lang('home.tutorial.know how')</a>
            </div>

            <div class="text-center col-4 mb-sm-0 mb-3">
            	<img src="{{ asset('/web/img/icon-invest-in-a-plan.png') }}" class="mb-2" width="90" height="90" alt="@lang('home.tutorial.invest in a plan')" title="@lang('home.tutorial.invest in a plan')">
            	<p class="h5 text-purple font-weight-bold">@lang('home.tutorial.invest in a plan')</p>
            	<a href="javascript:void(0);" class="btn btn-sm btn-warning text-primary rounded-pill">@lang('home.tutorial.see more')</a>
            </div>
        </div>
    </div>
</section>

<section class="section-advantage py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2 text-primary text-center font-weight-bold">@lang('home.advantage.title')</p>
                <p class="text-center text-muted">@lang('home.advantage.subtitle')</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="advantage-carousel owl-carousel">
                    <div class="item first-advantage">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
                                <img src="{{ asset('/web/img/ilustracion-ingresos-pasivos.png') }}" class="img-fluid" alt="" title="">
                            </div>
                            <div class="col-lg-8 col-md-7 col-12 d-flex align-items-center">
                                <p class="text-md-left text-center mt-3 mt-md-0 mb-0">@lang('home.advantage.first card')</p>
                            </div>
                        </div>
                    </div>

                    <div class="item second-advantage">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
                                <img src="{{ asset('/web/img/ilustracion-retorno-de-la-inversion.png') }}" class="img-fluid" alt="" title="">
                            </div>
                            <div class="col-lg-8 col-md-7 col-12 d-flex align-items-center">
                                <p class="text-md-left text-center mt-3 mt-md-0 mb-0">@lang('home.advantage.second card')</p>
                            </div>
                        </div>
                    </div>

                    <div class="item third-advantage">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
                                <img src="{{ asset('/web/img/ilustracion-retiros-diarios.png') }}" class="img-fluid" alt="" title="">
                            </div>
                            <div class="col-lg-8 col-md-7 col-12 d-flex align-items-center">
                                <p class="text-md-left text-center mt-3 mt-md-0 mb-0">@lang('home.advantage.third card')</p>
                            </div>
                        </div>
                    </div>

                    <div class="item fourth-advantage">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
                                <img src="{{ asset('/web/img/ilustracion-smart-investment.png') }}" class="img-fluid" alt="" title="">
                            </div>
                            <div class="col-lg-8 col-md-7 col-12 d-flex align-items-center">
                                <p class="text-md-left text-center mt-3 mt-md-0 mb-0">@lang('home.advantage.fourth card')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-features position-relative py-md-5 py-4">
    <div class="container pt-md-5 pt-4">
        <div class="row">
            <div class="col-12">
                <h2 class="text-warning text-center font-weight-bold">@lang('home.features.title')</h2>
                <p class="h5 text-white text-center">@lang('home.features.subtitle')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pb-md-5 pb-4 px-0">
                <div class="features-carousel owl-carousel">
                    <div class="row item position-relative">
                        <div class="position-absolute bg-white rounded-pill title-feature">
                            <p class="h4 text-primary font-weight-bold px-xl-5 px-3 py-2 mb-0">@lang('home.features.trading title')</p>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12 position-relative">
                            <img src="{{ asset('/web/img/imagen-trading.png') }}" class="img-feature w-100 mx-auto" alt="@lang('home.features.trading title')" title="@lang('home.features.trading title')">
                            <img src="{{ asset('/web/img/iconos-trading.png') }}" class="position-absolute icons-image" alt="" title="">
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 col-12 d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <p class="h4 text-white text-md-left text-center">@lang('home.features.trading description')</p>
                            </div>
                        </div>
                    </div>

                    <div class="row item position-relative">
                        <div class="position-absolute bg-white rounded-pill title-feature">
                            <p class="h4 text-primary font-weight-bold px-xl-5 px-3 py-2 mb-0">@lang('home.features.mining title')</p>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12 position-relative">
                            <img src="{{ asset('/web/img/imagen-mineria.png') }}" class="img-feature w-100 mx-auto" alt="@lang('home.features.mining title')" title="@lang('home.features.mining title')">
                            <img src="{{ asset('/web/img/iconos-mineria.png') }}" class="position-absolute icons-image" alt="" title="">
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 col-12 d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <p class="h4 text-white text-md-left text-center">@lang('home.features.mining description')</p>
                            </div>
                        </div>
                    </div>

                    <div class="row item position-relative">
                        <div class="position-absolute bg-white rounded-pill title-feature">
                            <p class="h4 text-primary font-weight-bold px-3 py-2 mb-0">@lang('home.features.real estate title')</p>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12 position-relative">
                            <img src="{{ asset('/web/img/imagen-bienes-raices.png') }}" class="img-feature w-100 mx-auto" alt="@lang('home.features.real estate title')" title="@lang('home.features.real estate title')">
                            <img src="{{ asset('/web/img/iconos-bienes-raices.png') }}" class="position-absolute icons-image" alt="" title="">
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 col-12 d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <p class="h4 text-white text-md-left text-center">@lang('home.features.real estate description')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-card-guide py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <h3 class="text-purple font-weight-bold">@lang('home.card-guide.title')</h3>
                <p class="h5 text-muted mb-3">@lang('home.card-guide.subtitle')</p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                        <div class="card card-guide bg-primary" data-element="1" data-active="true">
                            <div class="card-body">
                                <p class="card-text text-white">@lang('home.card-guide.card one')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                        <div class="card card-guide bg-purple-light" data-element="2" data-active="false">
                            <div class="card-body">
                                <p class="card-text text-white">@lang('home.card-guide.card two')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                        <div class="card card-guide bg-white border-0" data-element="3" data-active="false">
                            <div class="card-body">
                                <p class="card-text text-primary font-weight-bold">@lang('home.card-guide.card three')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                        <div class="card card-guide bg-warning" data-element="4" data-active="false">
                            <div class="card-body">
                                <p class="card-text text-white">@lang('home.card-guide.card four')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-guide py-md-5 py-3">
    <div class="container">
        <div class="row align-items-center info-guide" data-element="1" data-show="true">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center px-md-0 px-5">
                <img src="{{ asset('/web/img/respuestas-ilustracion-1.png') }}" class="img-fluid mb-4" alt="" title="">
            </div>
            <div class="col-lg-6 col-12">
                <h5 class="text-primary font-weight-bold">@lang('home.guide.first question')</h5>
                <p class="text-primary">@lang('home.guide.first answer')</p>
            </div>
        </div>

        <div class="row align-items-center info-guide" data-element="2" data-show="false">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center px-md-0 px-5">
                <img src="{{ asset('/web/img/respuestas-ilustracion-2.png') }}" class="img-fluid mb-4" alt="" title="">
            </div>
            <div class="col-lg-6 col-12">
                <h5 class="text-primary font-weight-bold">@lang('home.guide.second question')</h5>
                <p class="text-primary">@lang('home.guide.second answer')</p>
            </div>
        </div>

        <div class="row align-items-center info-guide" data-element="3" data-show="false">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center px-md-0 px-5">
                <img src="{{ asset('/web/img/respuestas-ilustracion-3.png') }}" class="img-fluid mb-4" alt="" title="">
            </div>
            <div class="col-lg-6 col-12">
                <h5 class="text-primary font-weight-bold">@lang('home.guide.third question')</h5>
                <p class="text-primary">@lang('home.guide.third answer')</p>
            </div>
        </div>

        <div class="row align-items-center info-guide" data-element="4" data-show="false">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center px-md-0 px-5">
                <img src="{{ asset('/web/img/respuestas-ilustracion-4.png') }}" class="img-fluid mb-4" alt="" title="">
            </div>
            <div class="col-lg-6 col-12">
                <h5 class="text-primary font-weight-bold">@lang('home.guide.fourth question')</h5>
                <p class="text-primary">@lang('home.guide.fourth answer')</p>
            </div>
        </div>
    </div>
</section>

<section class="section-counter bg-warning py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center align-items-center my-md-0 my-3">
                <img src="{{ asset('/web/img/icon-personas.png') }}" width="80" height="80" alt="@lang('home.counter.people')" title="@lang('home.counter.people')">
                <div class="ml-3">
                    <p class="h5 text-white font-weight-bold count mb-0">3000</p>
                    <p class="text-white mb-0">@lang('home.counter.people')</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center align-items-center my-md-0 my-3">
                <img src="{{ asset('/web/img/icon-inversion.png') }}" width="80" height="80" alt="@lang('home.counter.investments')" title="@lang('home.counter.investments')">
                <div class="ml-3">
                    <p class="h5 text-white font-weight-bold count mb-0">35000</p>
                    <p class="text-white mb-0">@lang('home.counter.investments')</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center align-items-center my-md-0 my-3">
                <img src="{{ asset('/web/img/icon-retiros.png') }}" width="80" height="80" alt="@lang('home.counter.retreats')" title="@lang('home.counter.retreats')">
                <div class="ml-3">
                    <p class="h5 text-white font-weight-bold count mb-0">32000</p>
                    <p class="text-white mb-0">@lang('home.counter.retreats')</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center align-items-center my-md-0 my-3">
                <img src="{{ asset('/web/img/icon-pais.png') }}" width="65" height="80" alt="@lang('home.counter.country')" title="@lang('home.counter.country')">
                <div class="ml-3">
                    <p class="h5 text-white font-weight-bold count mb-0">01</p>
                    <p class="text-white mb-0">@lang('home.counter.country')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-referrals position-relative overflow-hidden py-md-5 py-3">
    <img src="{{ asset('/web/img/referidos-ilustracion.png') }}" class="position-absolute d-none d-md-block" width="500" alt="" title="">
    <div class="container py-md-5 py-3">
        <div class="row">
            <div class="col-lg-7 col-12 text-center text-md-left">
                <h3 class="text-primary font-weight-bold"><span class="text-warning">@lang('home.referrals.featured')</span> @lang('home.referrals.title')</h3>
                <p class="h5 text-muted">@lang('home.referrals.subtitle')</p>
                <a href="javascript:void(0);" class="btn btn-purple-light rounded-pill px-4">@lang('home.referrals.button')</a>
            </div>
        </div>
    </div>
</section>

<section class="section-blog bg-light py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2 text-primary text-center font-weight-bold">@lang('home.blog.title')</p>
            </div>

            <div class="col-12 py-md-5 py-3">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-blog border-0 mb-lg-0 mb-4">
                            <div class="card-body position-relative p-3">
                                <img src="{{ asset('/web/img/blog-1.jpg') }}" class="w-100 h-100 mb-3">
                                <h5 class="h4 card-title">Ultimas noticias del Bitcoin</h5>
                                <p class="text-right text-muted mb-3">20/01/2021 13:15</p>
                                <a href="javascript:void(0);" class="btn btn-warning text-primary rounded-pill position-absolute px-3">@lang('home.blog.button')</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-blog border-0 mb-lg-0 mb-4">
                            <div class="card-body position-relative p-3">
                                <img src="{{ asset('/web/img/blog-2.jpg') }}" class="w-100 h-100 mb-3">
                                <h5 class="h4 card-title">05 Preguntas a nuestro CEO</h5>
                                <p class="text-right text-muted mb-3">20/01/2021 13:15</p>
                                <a href="javascript:void(0);" class="btn btn-warning text-primary rounded-pill position-absolute px-3">@lang('home.blog.button')</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-blog border-0 mb-lg-0 mb-4">
                            <div class="card-body position-relative p-3">
                                <img src="{{ asset('/web/img/blog-3.jpg') }}" class="w-100 h-100 mb-3">
                                <h5 class="h4 card-title">Haz trading sin ser tarder</h5>
                                <p class="text-right text-muted mb-3">20/01/2021 13:15</p>
                                <a href="javascript:void(0);" class="btn btn-warning text-primary rounded-pill position-absolute px-3">@lang('home.blog.button')</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-blog border-0 mb-lg-0 mb-4">
                            <div class="card-body position-relative p-3">
                                <img src="{{ asset('/web/img/blog-4.jpg') }}" class="w-100 h-100 mb-3">
                                <h5 class="h4 card-title">Como ganar dinero con inversiones</h5>
                                <p class="text-right text-muted mb-3">20/01/2021 13:15</p>
                                <a href="javascript:void(0);" class="btn btn-warning text-primary rounded-pill position-absolute px-3">@lang('home.blog.button')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-questions py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2 text-primary text-center font-weight-bold">@lang('home.question.title')</p>
                <p class="h5 text-center text-muted mb-3">@lang('home.question.subtitle')</p>
            </div>

            <div class="col-12">
                <ul class="nav nav-pills mb-4" role="tablist">
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

<section class="section-crypto bg-primary py-md-5 py-3">
    <div class="container">
        <div class="row position-relative">
            <div class="col-12 mb-md-5 mb-3">
                <p class="h2 text-white text-center font-weight-bold">@lang('home.crypto.title')</p>
            </div>

            <div class="col-12 d-flex justify-content-between align-items-center crypto-logos pb-md-4 pb-0">
                <img src="{{ asset('/web/img/logo-bitcoin.png') }}" width="250" alt="@lang('home.crypto.bitcoin')" title="@lang('home.crypto.bitcoin')">
                <img src="{{ asset('/web/img/logo-litecoin.png') }}" width="250" alt="@lang('home.crypto.litecoin')" title="@lang('home.crypto.litecoin')">
                <img src="{{ asset('/web/img/logo-ethereum.png') }}" width="250" alt="@lang('home.crypto.ethereum')" title="@lang('home.crypto.ethereum')">
            </div>

            <div class="col-12 crypto-message">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                        <p class="h5 text-white bg-purple-extra-light my-md-0 my-3 py-3 px-4">@lang('home.crypto.subtitle')</p>
                    </div>

                    <div class="col-xl-5 col-lg-4 col-md-3 col-12 d-flex justify-content-center align-items-center">
                        <a href="javascript:void(0);" class="btn btn-primary rounded-pill px-lg-4 px-md-3 px-4">@lang('home.crypto.button')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-contact py-md-5 py-3">
    <div class="container pt-md-5 pt-0">
        <div class="row">
            <div class="col-12 mb-md-5 mb-3">
                <p class="h2 text-primary text-center font-weight-bold mb-0">@lang('home.contact.title')</p>
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
<!-- counterUp -->
<script type="text/javascript" src="{{ asset('/web/js/waypoints/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/web/js/counterup/jquery.counterup.min.js') }}"></script>
<!-- OwlCarousel -->
<script type="text/javascript" src="{{ asset('/web/js/owlcarousel/owl.carousel.min.js') }}"></script>
<!-- Jquery Validate -->
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
@if(app()->getLocale()=="es")
<script type="text/javascript" src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
@endif
<script type="text/javascript" src="{{ asset('/admins/js/validate.js') }}"></script>
@endsection