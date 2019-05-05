@extends('layouts.app')
@section('content')
<div class="tepaga">
	
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
		</ul>
		<div class="carousel-inner ">
			<div class="carousel-item active ">
				<img src="{{asset('img/1.jpg')}}" alt="Nonushta" >
				<!--  -->
				<div class="carousel-caption mb-5">
					<h5 class="fontp ">Under the stars</h5>
					
				</div>
			</div>
			<div class="carousel-item ">
				<img src="{{asset('img/2.jpg')}}" alt="Boshqa ishlar uchun joy" >
				<div class="carousel-caption mb-5">
					<h5 class="fontp ">Feel like a home</h5>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row rowli ">
		<div class="row mx-auto">
			<div class="col-md-3 ">
				<h2 class="white-color"> Search rooms </h2>
			</div>
			<div class="col-md-9">
				<!-- <div class="col-md-12"> -->
				<form action="#">
					<div class="row ">
						<div class="col-md-3 col-xs-6">
							<div class="input-group ">
								<div class="input-group-prepend"><span class=" fa fa-calendar input-group-text" id="checkin_span"></span></div>
								<input type="text" class="form-control" id="checkIn" placeholder="Check In" aria-describedby="checkin_span">
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="input-group ">
								<div class="input-group-prepend"><span class=" fa fa-calendar input-group-text" id="checkout_span"></span></div>
								<input type="text" class="form-control" id="checkOut" placeholder="Check Out" aria-describedby="checkout_span">
							</div>
						</div>
						<script >
						$('#checkIn, #checkOut').datepicker({
						format: 'dd/mm/yyyy',
						startDate: 'today',
						todayHighlight: 'true',
						orientation: 'bottom'
						});
						</script>
						
						<div class="col-md-3 ">
							<div class="row">
								<div class="col-xs-6">
									<select class=" form-control">
										<option value="" disabled selected>Adult</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
								<div class="col-xs-6">
									<select class=" form-control">
										<option value="" disabled selected>Child</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 ">
							<button type="submit" class="btn white-back">Check Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container here ">
	<div class="row ">
		<h1 class="fontly mx-auto"> HOTEL FACILITIES </h1>
	</div>
	<div class="row " >
		<div class="col-md-4 "> <h5 ><span class="fa fa-user" id="blink"></span> 24-HOUR RECEPTION</h5>
		<p> We offer our guests 24-reception that you can visit any season and and weather :)</p>
	</div>
	<div class="col-md-4"> <h5><span class="fa fa-cogs" id="blink"></span> ROOM SERVICE</h5> <p>
	You can call our staff any time when you want food or drink. Our staff consists of beautiful girls and handsome boys ;)
</p> </div>
<div class="col-md-4"><h5><span class="fa fa-car" id="blink"></span> CAR HERE</h5> <p>Our cars always ready to serve you to bring you from airport , even to carry you around city</p></div>
</div>
<div class="row">
<div class="col-md-4"><h5><span class="fa fa-phone" id="blink"></span> WAKE-UP CALL</h5> <p>One of the best services we offer is to wake you up on time, so you never be late to your meetings</p></div>
<div class="col-md-4"><h5><span class="fa fa-coffee" id="blink"></span> COFFEE AND TEA</h5><p>
</p></div>
<div class="col-md-4"><h5><span class="fa fa-wifi" id="blink"></span> FREE WI-FI</h5><p>
You can use unlimited freee wi-fi in our hotel. Upload, download do whatever you want
</p></div>
</div>
</div>

<div class="dividercolor"></div> <div class="dividercolor"></div>
<div class="container "> <div class="row"><h1 class="fontly mx-auto">Overlook</h1></div></div>
<div class="container-mx">

<div id="mixedSlider">
	<div class="MS-content">
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">With big TV and sofas</h2>
				<img src="{{asset('img/3.jpg')}}">
			</div>
			<p>Relax as your own home</p>
		</div>
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">With table</h2>
				<img src="{{asset('img/4.jpg')}}">
			</div>
			<p>You can eat around family</p>
		</div>
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">Two bed room</h2>
				<img src="{{asset('img/5.jpg')}}">
			</div>
			<p>Verrryyy comfortable</p>
		</div>
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">Toilet</h2>
				<img src="{{asset('img/6.jpg')}}">
			</div>
			<p>Verrryyy comfortable</p>
		</div>
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">Restaurant</h2>
				<img src="{{asset('img/7.jpg')}}">
			</div>
			<p>Many types of food and drink</p>
		</div>
		<div class="item">
			<div class="imgTitle">
				<h2 class="blogTitle">Swimming pool</h2>
				<img src="{{asset('img/8.jpg')}}">
			</div>
			<p>Different sized pools for you and your family</p>
		</div>
	</div>
</div>
<script src="{{asset('js/multislider.js')}}"></script>
<script type="text/javascript">
$('#mixedSlider').multislider({
duration: 750,
interval: 3000,
hoverPause: false
});</script>
<br><br>
@endsection