@extends('layouts.app')
@section('content')
<div class="container">
	<br><br>
	<div class="row">
		<div class="col-md-5 px-4">
			<div class="card">
				<img src="{{asset('img/10.jpg')}}">
			</div>
		</div>
		<div class="col-md-7">
			<h2 >Basic , Business</h2>
			<br>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-bed"></span> 1 Bed </h4> </div>
				<div class="col-6"><h4><span class="fa fa-space-shuttle"></span> Gym </h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-coffee"></span> Breakfast </h4> </div>
				<div class="col-6"><h4><span class="fa fa-tv"></span> OLED Smart TV </h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-certificate"></span> Air conditioning</h4> </div>
				<div class="col-6"><h4><span class="fa fa-wifi"></span> Free Wi-Fi service</h4></div>
			</div>
			<div class="row">
				<button class="btn bg-fiolet ml-auto"><a href="book.html" class="white-color">Book</a></button>
			</div>
		</div>
	</div>
	
	<div class="dividercolor"></div>

	<div class="row">
		<div class="col-md-5 px-4">
			<div class="card">
				<img src="{{asset('img/11.jpg')}}">
			</div>
		</div>
		<div class="col-md-7">
			<h2 >Double , Family</h2>
			<br>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-bed"></span> 2 Bed </h4> </div>
				<div class="col-6"><h4><span class="fa fa-space-shuttle"></span> Gym </h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-coffee"></span> Breakfast </h4> </div>
				<div class="col-6"><h4><span class="fa fa-tv"></span> OLED Smart TV </h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-certificate"></span> Air conditioning</h4> </div>
				<div class="col-6"><h4><span class="fa fa-wifi"></span> Free Wi-Fi service</h4></div>
			</div>
			<div class="row">
				<button class="btn bg-fiolet ml-auto"><a href="book.html" class="white-color">Book</a></button>
			</div>
		</div>
	</div>
	
	<div class="dividercolor"></div>

	<div class="row">
		<div class="col-md-5 px-4">
			<div class="card">
				<img src="{{asset('img/12.jpg')}}">
			</div>
		</div>
		<div class="col-md-7">
			<h2 >Luxury , Presidential</h2>
			<br>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-bed"></span> 1 bed + 2 bed </h4> </div>
				<div class="col-6"><h4><span class="fa fa-space-shuttle"></span> Gym</h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-coffee"></span> Breakfast </h4> </div>
				<div class="col-6"><h4><span class="fa fa-tv"></span> OLED Smart TV </h4></div>
			</div>
			<div class="row">
				<div class="col-6"> <h4><span class="fa fa-certificate"></span> Air conditioning</h4> </div>
				<div class="col-6"><h4><span class="fa fa-wifi"></span> Free Wi-Fi service</h4></div>
			</div>
			<div class="row">
				<button class="btn bg-fiolet ml-auto"><a href="book.html" class="white-color">Book</a></button>
			</div>
		</div>
	</div>
</div>
<br><br>
@endsection