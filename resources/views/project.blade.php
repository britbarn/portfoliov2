@include('/partials/header')
@include('partials.top-title', ['title' => 'Blichmann Engineering', 'description' => 'An e-Commerce project'])
<div class="page-container project">
<section class="project-description">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  			<div class="cell small-10 large-9 align-center-middle">
  				<p>While working at SFP, I gained experience working with the e-Commerce platform Magento. At first I just did updates; to stock, styling changes, fixing bugs. Eventually, I started building sites from the ground up. One of these sites is <a href="https://blichmannengineering.com" target="_blank">blichmannengineering.com</a> </p>
  			</div>
  			<div class="cell small-10 large-9 align-center-middle image-cell">
				<img src="{{ asset('img/blichmann.png') }}">
			</div>
			<div class="cell small-10 large-9 align-center-middle">
			<p>Prior to revamp, Blichmann had a content site built with Joomla. It connected to an external website where customers would purchase their items. The client wanted to consolidate down to one website, and SFP reccomended Magento 2.</p>
			<p>To start, I wanted to import all of their products in a clean Magento 2 install. To do this, I first figured out how to export products out of their old control panel. It had a built in data building query, so I was able to export all products into a csv. There were about 2,000 products, and there were various kinds of customizations for each. Hose length, tank size, new and old versions.
				
			</p>
		</div>
		</div>
		
		</div>
	</div>
</section>
@include('/partials/footer')