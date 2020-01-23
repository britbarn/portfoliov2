<section class="top-banner">
  <div class="grid-container">
    <div class="row">
      <div class="grid-x grid-padding-x">
        <div class="cell hero-banner align-center-middle text-center">
          <h1>{{$title}}</h1>
          @php
            if (isset($description)) {
              echo "<p>" . $description . "</p>";
            }
          @endphp
          
        </div>
      </div>
    </div>
  </div>
</section>