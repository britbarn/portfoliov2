@include('/partials/header')
@include('partials.top-title', ['title' => 'Matchbook', 'description' => 'A Laravel Project'])
<div class="page-container project">
<section class="project-description">
	<div class="grid-container">
		<div class="row">
			<div class="grid-x grid-margin-x grid-padding-y">
  			<div class="cell small-10 large-9 align-center-middle">
  				<p>When I came onboard to Matchbook in November 2018, they were beginning to make plans for the new company website. The previous iteration was built in WordPress, and I really wanted to rebuild in a more interesting framework. I am a Laravel fanatic, so of course I pushed for that. Suprisingly to me, it didn't take a whole lot of convincing, and I was put in charge of a lot of the back end, as well as a few pages and partials of the front end. <a href="https://www.matchbookcreative.com/blog/new-brand-new-kind-of-website" target="_blank">You can read more about the website here.</a></p>
  			</div>
  			<div class="cell small-10 large-9 align-center-middle image-cell">
				<img src="{{ asset('img/matchbook.png') }}">
			</div>
			<div class="cell small-10 large-9 align-center-middle">
			<p>The other developer handled most of the front end design elements, while I foucsed more on the data structures, routing, and generally moving data around the site. On this project, I also became interested in trying out PHPUnit. I wrote a few simple tests, making sure blog posts, employees, and case studies could be created. I utilized these with bitbucket, and made sure these tests passed before pushing the new code to the production site.
			</p>
		</div>
		</div>
		
		</div>
	</div>
</section>
@include('/partials/footer')