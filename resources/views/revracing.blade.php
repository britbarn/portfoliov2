@include('/partials/header')
@include('partials.top-title', ['title' => 'Rev Racing', 'description' => 'A ground up WordPress project'])
<div class="page-container project">
<section class="project-description">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  			<div class="cell small-10 large-9 align-center-middle">
  				<p>Shortly after starting my job at Matchbook, I was tasked with the job of building the new website for our long time client, <a href="https://revracing.net/" target="_blank">Rev Racing.</a> Their site was outdated, and they wanted to have a new site for the season. This project turned out to be pretty interesting, it was fun bulding the driver profile pages and learning about their backgrounds. Rev Racing is sponsored by NASCAR, they give the team funds every year to bring in young minority drivers in hopes of making NASCAR a more diverse program. Hence, they call the program "Drive for Diversity" </p>
  			</div>
  			<div class="cell small-10 large-9 align-center-middle image-cell">
				<img src="{{ asset('img/revracing-interior.png') }}">
			</div>
			<div class="cell small-10 large-9 align-center-middle">
			<p> 
				This project was to be built in WordPress. Because of more difficult requirements, I leveraged advanced custom fields for this project. These are used on the <a href="https://revracing.net/drivers/" target="_blank">individual driver pages</a> and the <a href="https://revracing.net/race-results/" target="_blank">race results page</a>.</p>
			<p>	
				For the Drivers pages, we wanted to use a custom template file but needed to add data fields to them. We decided to go with advanced custom fields. This was my first time using ACF, and enjoyed learning how to use it. It was my favorite part of the project; learning how to create the fields and pull them into template files. I enjoy using PHP and working on back end functionality and this was a good opportunity for practice.
			</p>
		</div>
		</div>
		
		</div>
	</div>
</section>
@include('/partials/footer')