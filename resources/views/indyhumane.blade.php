@include('/partials/header')
@include('partials.top-title', ['title' => 'IndyHumane', 'description' => 'Upkeep on a WordPress project'])
<div class="page-container project">
<section class="project-description">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  			<div class="cell small-10 large-9 align-center-middle">
  				<p>Starting at Matchbook, the first project I worked on was the exising website for <a href="https://indyhumane.org/" target="_blank">IndyHumane</a>. They have in instagram plugin that pulls in the most recent projects, and it needed the token refreshed. Since then, I have built out a few new pages, redid the navigation, and added content blocks. One update in particular i'm fond of was adding a new block to the home page that included the below image. </p>
  			</div>
  			<div class="cell small-10 large-9 align-center-middle image-cell">
				<img src="{{ asset('img/kittyhumane.png') }}">
			</div>
			<div class="cell small-10 large-9 align-center-middle">
			<p>The chalenge here was using two background images. This is where I learned about placing multiple background images with one CSS rule. It works out great, as a comma seperated list. The pawprint was placed at the top left, and the kitten at the bottom right. This section can be found on the home page, which I recently re-built according to a new design provided by the creative department. 
				
			</p>
		</div>
		</div>
		
		</div>
	</div>
</section>
@include('/partials/footer')