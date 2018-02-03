<!DOCTYPE html>

<html lang="en">

	<head>

		<!--meta tags and stuff-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--Other and custom CSS-->

		<!--Optional Javascript links-->
		<!--link to Bootstrap javascript dependencies-->
		<!--(Put it here, but if it is a heavy site, put this block just below the closing body tag)-->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		<title>Anna's first Bootstrap website</title>

	</head>
	<body>
		<header>
			<!--this is the navigation bar that has to have a little dropdown menu icon when small, but horizontal menu words when big-->
		<div class="container-flex">
			<nav class="navbar navbar-expand-lg navbar-light bg-light border rounded">
				<a class="navbar-brand" href="#">Anna Khamsamran</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">Portfolio</a>
						<a class="nav-item nav-link" href="#">Tech</a>
						<a class="nav-item nav-link disabled" href="#">The Adventure</a>
					</div>
				</div>
			</nav>
		</div>
			<main>
			<!--this is the jumbotron hero box that sits beneath the navbar and has a button in it-->
				<div class="container-fluid">
					<div class="jumbotron">
						<h1 class="display-4">Digital Designer and Developer</h1>
						<p class="lead">Building systems and tools that remove obstacles.</p>
						<hr class="my-4">
						<p>Are you ready to provide a better experience for your customers and improve your business?</p>
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Get Started!</a>
						</p>
					</div>
				</div>
				<!--this is the container for the gray area that fills horizontal and had an image with text under. the image should stack above the text when screen is small-->
				<div class="container-flex p-3 mb-2 bg-secondary text-dark">
					<div class="container">
						<div class="row">
							<div class="col-lg-6"><img src="images/dive-advert.jpg" alt="advert for diving"/></div>
							<div class="col-lg-6">My approach is to let the project speak to me and is based in empowerment, clarity, and flexibility.  Clearing obstacles from the path requires focusing on the end product, learning the systems used by the team to reach them and discovering how to streamline this for the best outcome.</div>

						</div>
					</div>
					</div>

					<!--this is the container for the sets of round images with text beneath them that should stack when small
					so...I am making sets of rows and cols so the images and text stay together-->
					<div class="container">
						<div class="row">
							<div class="col 3 text-center">
								<div class="row"><img src="images/anemonefish_yellow-round.png"</div>
								<div class="row">this is a cute anemonefish!</div>
							</div>
							<div class="col 3 text-center">
								<div class="row"><img src="images/anemonefish_yellow-round.png"</div>
								<div class="row">this is a cute anemonefish!</div>
							</div>
							<div class="col 3 text-center">cc</div>
							<div class="col 3 text-center">dd</div>
						</div>


					</div>
				</div>
			</main>
		</header>
		<footer>
			<div class="container-fluid">

			</div>

		</footer>
	</body>
</html>