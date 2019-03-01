@include('/partials/header')

<div class="grid-container" id="hero-grid">
  <div class="row">
    <div class="grid-x grid-padding-x">
    <div class="cell hero-banner">
      <h1>Hello, this is a foundation and sass practice project!</h1>
    </div>
  </div>
  <div class="grid-x grid-padding-x work-row">
    <div class="small-12 medium-6 cell work1">
      <h3>Framework</h3>
      <img src="{{ asset('img/zurb.png') }}">
    </div>
    <div class="small-12 medium-6 cell work2">
      <h3>Compiler</h3>
      <img src="{{ asset('img/sass.png') }}">
    </div>
  </div>
  </div>
  
</div>

<div class="grid-container full" id="card-grid">
  <div class="grid-x small-up-1 medium-up-2">
  <div class="column">
    <div class="card">
      <img src="http://fillmurray.com/700/500">
      <div class="card-section">
        <h4>This is a card.</h4>
        <p>It has an easy to override visual style, and is appropriately subdued.</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="http://fillmurray.com/700/500">
      <div class="card-section">
        <h4>This is a card.</h4>
        <p>It has an easy to override visual style, and is appropriately subdued.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="http://fillmurray.com/700/500">
      <div class="card-section">
        <h4>This is a card.</h4>
        <p>It has an easy to override visual style, and is appropriately subdued.</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="http://fillmurray.com/700/500">
      <div class="card-section">
        <h4>This is a card.</h4>
        <p>It has an easy to override visual style, and is appropriately subdued.</p>
      </div>
    </div>
  </div>
  
</div>
</div>





@include('/partials/footer')