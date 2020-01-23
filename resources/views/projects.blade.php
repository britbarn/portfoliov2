@include('/partials/header')
@include('partials.top-title', ['title' => 'Projects', 'description' => 'List of projects!'])
<section class="project-grid">
  <div class="grid-container" id="card-grid">
    <div class="grid-x small-up-1 medium-up-2">
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/gunsafetyinfo.png') }}">
          <div class="card-section">
            <a href="/projects/gunsafetyinfo"><h4 class="text-center">gunsafetyinfo.net</h4></a>
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
      <div class="column">
        <div class="card">
          <img src="{{ asset('img/blichmann.png') }}">
          <div class="card-section">
            <a href="/projects/blichmann"><h4 class="text-center">Blichmann Engineering</h4></a>
          </div>
        </div>
      </div>                                  
    </div>
  </div>
</section>
@include('/partials/footer')