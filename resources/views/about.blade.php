@include('/partials/header')
@include('partials.top-title', ['title' => 'About Me'])
<div class="page-container about">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  				<div class="cell small-10 large-9 align-center-middle">
  					<p>I'm a software developer who graduated from IUPUI in 2015. Since then, i've gone from iOS development, to a database report writer, to a Hospital EMR programmer, to web development. I love learning how to use different technologies, and understanding how they relate and work together. My strongest point and passion is database design and back end development.</p>
  				</div>
			</div>
		</div>
		<section class="known-technologies cell small-10 large-9 align-center-middle">
			<div class="row column text-center">
                <h2 class="section-header">Technologies used:</h2>
            </div>
			<div class="row logo-row">
                <div class="column">
                	<img src="{{ asset('img/laravel-logo.png') }}">
                </div>
                <div class="column"><img src="{{ asset('img/zurb.png') }}"></div>
                <div class="column"><img src="{{ asset('img/php.png') }}"></div>
                <div class="column"><img src="{{ asset('img/logo-craft-cms.svg') }}"></div>
                <div class="column"><img src="{{ asset('img/magento-logo.svg') }}"></div>
                <div class="column"><img src="{{ asset('img/wordpress-logo.png') }}"></div>
                <div class="column"><img src="{{ asset('img/vagrant.svg') }}"></div>
                <div class="column"><img src="{{ asset('img/sass.svg') }}"></div>
              </div>
		</section>
	</div>

@include('/partials/footer')