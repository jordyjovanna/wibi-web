<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

	<!-- FOnts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<title>Wibi Digital Technology</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
		<div class="container">
			<img src="{{ URL::asset('images/enforce.svg'); }}" width="150" alt="">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link " href="{{ url('/') }}">Home </a>
					<a class="nav-item nav-link active" href="#">Product</a>
					<a class="nav-item nav-link" href="services.html">Services</a>
					<a class="nav-item nav-link" href="aboutus.html">About us <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="career.html">Career</a>

				</div>
			</div>
		</div>
	</nav>
	<!-- akhir navbar -->

	<!-- Jumbotron -->
	<div class="jumbotron">
		<h1 class="display-4">The largest Lorem ipsum dolor sit amet</h1>
		<p class="lead">The largest Lorem ipsum dolor sit amet <br>the best of our talent</p>

			</div>
	<!-- akhir jumbotron -->



	<div class="row ukmdesk">
		<div class="col-5">
			<img src="{{ URL::asset('images/ukmdesk-phonedisplay.png'); }}" alt="creative" class="img-fluid">
		</div>
		<div class="col">
			<h3>
				UKMDesk
			</h3>

			<p>
				Do you having trouble to consult your tax problem? EnforceA app
				helps connecting
				you to EnforceA’s experts and solve your tax
				problems. EnforceA also gives you insights of
				trending tax related news.
			</p>
			<img class="img-fluid iconed" src="{{ URL::asset('images/get-it-on-google-play-badge-logo-8CDE582776-seeklogo.com.png'); }}" alt="google play">
			<img class="img-fluid iconed" src="{{ URL::asset('images/download-on-the-app-store-flat-badge-logo-4582694404-seeklogo.com.png'); }}" alt="app store">

		</div>

	</div>



	 <!-- Footer  -->

	 <footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h5><i class="fa fa-road"></i> WIBI DIGITAL</h5>
					<div class="row">
						<div class="col-6">
							<ul class="list-unstyled">
								<li><a href="">Product</a></li>
								<li><a href="">Benefits</a></li>
								<li><a href="">Partners</a></li>
								<li><a href="">Team</a></li>
							</ul>
						</div>
						<div class="col-6">
							<ul class="list-unstyled">
								<li><a href="">Documentation</a></li>
								<li><a href="">Support</a></li>
								<li><a href="">Legal Terms</a></li>
								<li><a href="">About</a></li>
							</ul>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
						<li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
					</ul>
					<br>
				</div>
				<div class="col-md-2">
					<h5 class="text-md-right">Contact Us</h5>

				</div>
				<div class="col-md-5">
					<form>
						<fieldset class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</fieldset>
						<fieldset class="form-group">
							<textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
						</fieldset>
						<fieldset class="form-group text-xs-right">
							<button type="button" class="btn btn-secondary btn-lg">Send</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</footer>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
</body>

</html>
