<section class="section-footer bg-gray-light pt-md-5 pt-3 pb-4">
	<div class="container pb-md-0 pb-3">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12 order-1 order-md-0">
				<ul class="list-unstyled text-center text-sm-left mb-0">
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.privacy policy')</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.terms and conditions')</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.help center')</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-12 order-2 order-md-1">
				<ul class="list-unstyled text-center text-sm-left mb-0">
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.facebook community')</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.whatsapp community')</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="text-dark text-decoration-none"><i class="fa fa-angle-right"></i> @lang('web.footer.blog')</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-4 col-md-4 col-12 order-0 order-md-2 d-flex justify-content-center align-items-center">
				<img src="{{ asset('/web/img/logo.png') }}" class="w-100" alt="Logo de Bitthrem" title="Logo de Bitthrem">
			</div>
		</div>
	</div>
</section>

<footer class="bg-primary py-4">
	<div class="container">
		<div class="row">
			@if(!is_null(($setting->youtube) || !empty($setting->youtube)) && (!is_null($setting->facebook) || !empty($setting->facebook)) && (!is_null($setting->instagram) || !empty($setting->instagram)))
			<div class="offset-md-8 col-md-4 col-12 d-flex justify-content-center social-media">
				@if(!is_null($setting->facebook) && !empty($setting->facebook))
				<a href="{{ $setting->facebook }}" target="_blank" class="btn btn-white text-primary rounded-circle d-flex justify-content-center align-items-center mx-2 p-0">
					<i class="fab fa-facebook-f"></i>
				</a>
				@endif

				@if(!is_null($setting->instagram) && !empty($setting->instagram))
				<a href="{{ $setting->instagram }}" target="_blank" class="btn btn-white text-primary rounded-circle d-flex justify-content-center align-items-center mx-2 p-0">
					<i class="fab fa-instagram"></i>
				</a>
				@endif

				@if(!is_null($setting->youtube) && !empty($setting->youtube))
				<a href="{{ $setting->youtube }}" target="_blank" class="btn btn-white text-primary rounded-circle d-flex justify-content-center align-items-center mx-2 p-0">
					<i class="fab fa-youtube"></i>
				</a>
				@endif
			</div>
			@endif

			<div class="col-12">
				<p class="text-white text-center mb-0">@lang('web.footer.copyright')</p>
			</div>
		</div>
	</div>
</footer>