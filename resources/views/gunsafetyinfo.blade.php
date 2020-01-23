@include('/partials/header')
@include('partials.top-title', ['title' => 'Gun Safety Info', 'description' => 'A port from WordPress to Craft 3'])
<div class="page-container project">
<section class="project-description">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  			<div class="cell small-10 large-9 align-center-middle">
  				<p>With my new co-worker starting at Matchbook, we have decided to switch over to using Craft CMS to build new applications. Historically, Matchbook has used WordPress, but we want to steer away from this and move on to a less bloated framework. My first project using Craft was to convert <a href="https://gunsafetyinfo.net" target="_blank">gunsafetyinfo.net</a> from WP to Craft. The client did not want any new styling changes, they just wanted the same functionality in something more accessible. So, I started studying and dove into the world of Craft.</p>
  			</div>
  			<div class="cell small-10 large-9 align-center-middle image-cell">
				<img src="{{ asset('img/gunsafetyinfo.png') }}">
			</div>
			<div class="cell small-10 large-9 align-center-middle">
			<p>One of the first things I needed to do was become comfortable using TWIG. I had never used it before, and was glad to learn how to use another templating system. I'm a Laravel junkie, so blade is what i'm accustomed to. They are both PHP based, so it was mostly just getting used to syntax differences. 	
			</p>
			<p>
			It didn't take me long to start appreciating how Craft works. The dynamic fields are super accessible and easily customizable. For example, on the home page of this site, there are two blocks where youtube videos are pulled in. First, I created the template file in TWIG to lay out the basic HTML structure of this block. When it was time to add in the data, I logged into the Craft admin panel, and created a field "youtubeVideos". It was created as a matrix, which allows for multiple fields to be stored in each iteration of videos. Each entry has "tubeTitle" and "tubeUrl". Now, when a user goes to add this block to their web page of choice, they just enter in the URL as well as the title they would like to be displayed with the video. I set it to allow them to add up to six videos.
			</p>
			<p>After this matrix was set up, I went back into the template file and added in the spots where the data should be output. It loops through each instance of YouTube videos and outputs the URL in an iFrame and the title right below it. After checking that the data successfully output to the screen, I then styled it using a SASS partial made only for this matrix.</p>
			<p>An important thing I learned about Craft as I was going through this project was the use of modules. I made one "Module" matrix, and added basic page blocks to it. I added the youtubeVideos matrix to the Module matrix, along with a basic image block, a text block that I used <a href="https://imperavi.com/redactor/" target="_blank">Redactor</a> for, and a section that has text on the left and an image on the right. Then, whenever I created a new page, I would make the Module matrix accessible so that the user can select these blocks when building content for the page.</p>
		</div>
		</div>
		
		</div>
	</div>
</section>
@include('/partials/footer')