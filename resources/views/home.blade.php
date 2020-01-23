@include('/partials/header')
<div class="page-container home">
<section class="top-banner">
  <div class="grid-container">
    <div class="row">
      <div class="grid-x grid-padding-x">
        <div class="cell hero-banner">
          <h1>I'm Brittany Barnes, a developer and database engineer living in Indy.</h1>
        </div>
      </div>
      <div class="grid-x grid-padding-x work-row">
        <div class="small-12 medium-6 cell work1">
          <h3>Current Employer:</h3>
          <a href="https://www.matchbookcreative.com" target="_blank">
        <img src="{{ asset('img/mb-logo.png') }}" class="employer-logo">
      </a>
        </div>
        <div class="small-12 medium-6 cell work2 grid-padding-x">
          <h3>Previous Employers:</h3>
          <div class="grid-x grid-padding-x align-middle employers">
            <a href="https://sfp.net" target="_blank">
              <svg class="svg-logo" xmlns="http://www.w3.org/2000/svg" title="SFP | Web + Development + Design" version="1.1" x="0px" y="0px" viewBox="0.5 190.5 611.6 411" enable-background="new 0.5 190.5 611.6 411" xml:space="preserve" class="svg replaced-svg"><path d="M181.5 469.4c8 10.4 22.8 20.5 36.7 20.5 9.2 0 20.3-4.4 21.3-17.1 0.6-8.3-9.3-13.6-20.3-19 -18.2-9.2-38.3-20.5-36-48 2.8-35.2 36-54.5 64.6-54.5 21.9 0 43.9 9.5 58.1 25.2l-28.5 26.6c-6.7-7.6-19.3-16.8-31.5-16.8 -9.5 0-18.2 6-19 15.1 -0.6 8.6 8.7 13.3 20.3 19.3 18.5 9.5 40.1 21.3 37.8 49.7 -2.9 36.1-37.3 54.8-70.5 54.8 -24.6 0-49.7-11.3-61.8-34.4L181.5 469.4zM438.2 321.2c-6.4-3.2-13.5-4.1-19.4-4.1 -14.4 0-21.7 7.3-26.3 25.6l-2.8 10.9h41.6l-9.5 37.8h-41.9l-34.4 134.3h-46.1l34.4-134.3h-17l9.5-37.8h17.3l3.7-14.4c10.3-39.9 29.5-61 69.8-61 14.7 0 28.9 2.9 40.2 8L438.2 321.2zM486.4 353.5l-1.1 14.4c10.4-9.6 18.1-16.4 35-16.4 37.8 0 62.4 25.7 58.6 75 -4 51.1-32.6 99-84 99 -18.5 0-28.9-7.6-40.7-21.7l-24.8 97.8h-46.1l63-248.2h39.9V353.5zM465.3 460.1c4.6 15.3 13.8 23.7 28.8 23.7 26.5 0 40.2-21.4 42.8-54.5 2-26.2-7-40.9-30-40.9 -6.1 0-11.5 2-16.2 5.2 -6.7 4.6-11.5 11.8-13.5 19.7L465.3 460.1zM595 448.3c0 0 8.3-32.3 1.1-62.7 0 0-7.5-36-42.1-49.9 0 0-32.6-14.4-60.9 2.1 0 0 35.5-41.3 18.5-85.1 0 0-16.4-40.4-71.5-37.8 0 0-52.2-2.9-98.8 40.5 0 0-26.2 23.4-56.8 70.7 0 0 17.4 12.9 23.4 31.4 0 0-27.8-36.1-82.6-26.5 0 0-28.6 3.5-58.1 40.7 0 0-30.3 40.9-79.9 54.2 0 0-38.2 11.2-86.9 1.5 0 0 68.5 6.4 113.1-38.7 0 0 20-20.3 34.3-38.6 0 0 41.5-59.1 111.5-36.1 0 0 45.6-62.6 64.7-77.7 0 0 47.4-47.7 118.6-45.9 0 0 74.2-4.4 97 57.1 0 0 10.6 27.5-1.5 56.5 0 0 40.2 3.1 64.3 42.2C602.1 346.3 628.7 389.1 595 448.3z"></path></svg>
            </a>
      <a href="https://www.riverview.org" target="_blank">
          <img src="{{ asset('img/riverview-logo.jpg') }}" class="employer-logo">
      </a>
          </div>
          <b>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="project-grid">
  <div class="grid-container" id="card-grid">
    <div class="grid-x small-up-1 medium-up-2">
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/blichmann.png') }}">
          <div class="card-section">
            <a href="/projects/blichmann"><h4 class="text-center">Blichmann Engineering</h4></a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/matchbook.png') }}">
          <div class="card-section">
            <a href="/projects/matchbook"><h4 class="text-center">Matchbook</h4></a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/indyhumane.png') }}">
          <div class="card-section">
            <a href="/projects/indyhumane"><h4 class="text-center">IndyHumane</h4></a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/revracing.png') }}">
          <div class="card-section">
            <a href="/projects/revracing"><h4 class="text-center">Rev Racing</h4></a>
          </div>
        </div>
      </div>                                   
    </div>
  </div>
</section>
@include('/partials/technologies')
@include('/partials/footer')