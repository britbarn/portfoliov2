@include('/partials/header')
@include('partials.top-title', ['title' => 'Projects', 'description' => 'List of projects!'])
<section class="project-grid">
  <div class="grid-container" id="card-grid">
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
</section>
@include('/partials/footer')