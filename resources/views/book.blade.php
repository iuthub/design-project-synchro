@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row ">
		<br>
		<h1 class="mx-auto font_awe"> Booking </h1>
		<br>
	</div>
	<div class="dividercolor"></div>
	
	{!! Form::open(['url' => 'book/submit']) !!}
    	<h2>Personal info</h2>
    	<div class="row">
			<div class="col-md-6">
				{{Form::label('name', 'Name')}}
				{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
				</div>
				<div class="col-md-6">

				{{Form::label('surname', 'Surname')}}
				{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Surname'])}}
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				{{Form::label('country', 'Country')}}
				{{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Enter Country'])}}
				</div>
				<div class="col-md-6">

				{{Form::label('city', 'City')}}
				{{Form::text('city', '', ['class' => 'form-control' ,'placeholder' => 'Enter City'])}}
			</div>
		</div>
		<br>
		<div class="dividercolor"></div>
		<h2>Account info</h2>
		<div class="row">
			<div class="col-md-6">
				{{Form::label('phone', 'Phone')}}
				{{Form::text('phone', '+998', ['class' => 'form-control' ,'placeholder' => '9xxxxxxxx '])}}
				</div>
				<div class="col-md-6">

				{{Form::label('email', 'E-Mail Address')}}
				{{Form::text('email', '', ['class' => 'form-control','placeholder' => 'example@gmail.com'])}}
			</div>
		</div> 
<br>
		<div class="dividercolor"></div>
		<h2>Card info</h2>

		<div class="row">
			<div class="col-md-6">
				{{Form::label('cardnum', 'Card number')}}
				{{Form::text('cardnum', '', ['class' => 'form-control','placeholder' => 'Enter Card number'])}}
				</div>
				<div class="col-md-6">

				{{Form::label('cvv', 'CVV')}}
				{{Form::text('cvv', '', ['class' => 'form-control','placeholder' => 'Enter CVV'])}}
			</div>
		</div>

		{{Form::label('expire', 'Expire')}}
		<div class="row">
			
			<div class="col-md-6">
				<select class="form-control" id="sel1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
			</div>
			<div class="col-md-6">
				<select class="form-control" id="sel1">
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					
				</select>
			</div>
		</div>
		
		<br>
		<div>
			
			{{Form::submit('Book', ['class' => 'btn bg-fiolet mx-auto white-color widt-btn'])}}
			
		</div>

	{!! Form::close() !!}
</div>
<script type="text/javascript ">
$(document).ready(function () {
	var $regexname=/^([a-zA-Z]{3,16})$/;
	var $regint=/^(\+[0-9]{1,3}|0)[0-9]{3}( ){0,1}[0-9]{7,8}\b/gm;
	var $regmail=/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
	var $regcard=/\b4(?:\d[ -]*?){15}\b/g;
	$('#name-book, #surname-book, #country-book, #city-book').on('keypress keydown keyup', function(){
		if (!$(this).val().match($regexname)) {
				$(this).addClass('border-danger');
			}
		else
		{
				$(this).removeClass('border-danger');
		}
	});
$('#phone-book').on('keypress keydown keyup', function(){
		if (!$(this).val().match($regint)) {
				$(this).addClass('border-danger');
			}
		else
		{
				$(this).removeClass('border-danger');
		}
	});
$('#email-book').on('keypress keydown keyup', function(){
		if (!$(this).val().match($regmail)) {
				$(this).addClass('border-danger');
			}
		else
		{
				$(this).removeClass('border-danger');
		}
	});
$('#cardnum-book, #cvv-book').on('keypress keydown keyup', function(){
		if (!$(this).val().match($regcard)) {
				$(this).addClass('border-danger');
			}
		else
		{
				$(this).removeClass('border-danger');
		}
	});
});
</script>
<br><br>
@endsection