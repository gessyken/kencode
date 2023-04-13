<!doctype html>
<html lang="fr" class="h-100">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name')}} @yield('title') </title>
    {{-- Bootstrap CDN (CSS) --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	{{-- Custom CCSS --}}
	<style type="text/css">
		.coverLink{
			text-decoration: none;
			color:#fff;
		}
.errors
{
	color:red;
}
	</style>
  </head>

  <body class="d-flex h-100 text-center text-bg-dark">

		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		  <header class="mb-auto">
		    <div>
		      <h3 class="float-md-start mb-0">{{ config('app.name') }}</h3>
		      <nav class="nav nav-masthead justify-content-center float-md-end">
		        <a class="nav-link active coverLink" aria-current="page" href={{ route('welcome') }}>Acceuil</a>
		        <a class="nav-link coverLink" href={{ route('contact') }}>Contacts</a>
		        <a class="nav-link coverLink" href={{ route('about') }}>A propos</a>
		      </nav>
		    </div>
		  </header>

		  @yield('content')

		  <footer class="mt-auto text-white-50">
		    <p> &copy; GESSY KEN &middot; {{ date('Y') }}</p>
		  </footer>
		</div>


    
  </body>
  {{-- Bootstrap CDN (JS) --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>