<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MyHotel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
		
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style_.css')}}"/>
	</head>

	<body>

		@section('sidebar')
		
		<header class="navli  ">
			<nav class=" navbar navbar-expand-lg" style="background: red;">
				<a class="navbar-brand" href="/" ><span class="fa fa-home"> </span> MyHotel</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto font-weight-bold ">
						<h4><a class="nav-item nav-link active" href="/rooms">Rooms </a></h4>
						<h4><a class="nav-item nav-link active" href="/events">Events</a></h4>
						<h4><a class="nav-item nav-link active" href="/restaurant">Restaurant</a></h4>
						<h4><a class="nav-item nav-link active" href="/book">Book</a></h4>
					</div>
					<div class="navbar-nav ml-auto">
						
						<a class="nav-item nav-link active" href="/login" ><span class="fa fa-user"></span> Admin</a>
					</div>
				</div>
			</nav>
		</header>
		
		
		

		@yield('content')
		
		<footer>
			<div class="container-fluid bg-fiolet ">
				<div class="row card_mar">
					<div class="col-md-6 " >
						<div class="card ">
							<div class="jojo " id="map">
							</div>
						</div>
						<script>
						function myMap() {
						var mapCanvas = document.getElementById("map");
						var mapOptions = {
						center: new google.maps.LatLng(41.338341, 69.334471),
						zoom: 17
						};
						var map = new google.maps.Map(mapCanvas, mapOptions);
						}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASXXz1qu4Hyh-h45qJ4S6hiYdqRCA4Jd4&callback=myMap"></script>
					</div>
					<div class="col-md-6 ">
						
						<ul class="white-color mt-md-4 font-size-">
							<li>
								<b>Office: </b> 9,Ziyolilar str., M.Ulugbek district, Tashkent city
							</li>
							<li>
								<b>Phone: </b> +998 91 290 69 55
							</li>
							<li>
								<b>Fax: </b> +998 74 290 69 55
							</li>
							<li>
								<b>Email: </b> UzbekWolf@gmail.com
							</li>
						</ul>
						
						<div class="ml-5">
							<a href="#" class="fa fa- fa-facebook"></a>
							<a href="#" class="fa fa- fa-twitter"></a>
							<a href="#" class="fa fa- fa-google"></a>
							<a href="#" class="fa fa- fa-linkedin"></a>
							<a href="#" class="fa fa- fa-youtube"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center" id="footer"><p >Copyright 2018 &copy; My Hotel </p></div>
		</footer>
		
	</body>
</html>