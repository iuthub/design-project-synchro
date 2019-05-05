<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >


</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-primary ">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/dashboard">Home</a>
    </li>
   </ul >
    <!-- <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link " href="#">Logout</a>
    </li>
  </ul> -->
</nav>
<br>
<div class="container">

	<div class="row ">
		<div class="col-md-4 mx-auto">
			<h2 >Guest registration</h2>
			<br>
			<form action="#">
				<label for="name_reg">Name</label>
				<input type="text" id="name_reg" class="form-control" placeholder="Enter name">
				<label for="surname_reg">Surname</label>
				<input type="text" id="surname_reg" class="form-control" placeholder="Enter surname">
				<label for="passport_reg">Passport</label>
				<input type="text" id="passport_reg" class="form-control" placeholder="Enter Passport number">
				<label for="room_reg">Room</label>
				<input type="text" id="room_reg" class="form-control" placeholder="Enter room">
				<label for="arrive_reg">Arrival</label>
				<input type="text" id="room_reg" class="form-control" placeholder="Enter arrival">
				<label for="leave_reg">Leaving</label>
				<input type="text" id="room_reg" class="form-control" placeholder="Enter leaving">
				<br>
				<button class="btn btn-primary" type="submit" >Submit</button>

			</form>
		</div>
	</div>
</div>

</body>
</html>