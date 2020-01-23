@include('/partials/header')

@include('partials.top-title', ['title' => 'Contact', 'description' => 'This is the contact page!'])

  @if ($errors->any())
  <div class="row">
  	 <div class="alert alert-danger callout alert">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
  </div>
  @endif

@if (session('status'))
  <div class="row">
    <div class="callout success">
        {{ session('status') }}
    </div>
  </div>
@endif

<section class="contact-form">
	<form role="form" method="POST" action="/contact" enctype="multipart/form-data">
  		<input type="hidden" name="_token" value="{{csrf_token()}}" />
  			<div class="grid-container">
  			  <div class="grid-x grid-padding-x">
  			    <div class="medium-6 cell">
  			      <label>Name
  			        <input name="name" type="text" value="{{ old('name') }}">
  			      </label>
  			    </div>
  			    <div class="medium-6 cell">
  			      <label>Email
  			        <input name="email" type="email" value="{{ old('email') }}">
  			      </label>
  			    </div>
  			  </div>
  			  <div class="grid-x grid-padding-x">
  			    <div class="medium-6 cell">
  			      <label>Message
  			        <textarea name="message">{{ old('message') }}</textarea>
  			      </label>
  			    </div>
  			  </div>
  			  <button type="submit" class="success button">Submit</button>
  			</div>
	</form>
</section>


@include('/partials/footer')