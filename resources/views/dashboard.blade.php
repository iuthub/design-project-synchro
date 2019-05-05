<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="css/dataTables.min.css">  
<script type="text/javascript" charset="utf8" src="js/dataTables.min.js"></script>



<link rel="stylesheet" type="text/css" href="css/style_.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-primary ">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Home</a>
    </li>
   </ul >
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link " href="/">Logout</a>
    </li>
  </ul>
</nav>

<div class="container">
  <br>
  
  <div class="row">
  <div class="col-md-3">
    <h4 class="info-color">Guests available</h4>
    <h2 id="guest_number" class="info-color"> <span class="fa fa-users">  </span> 12</h2>
  
  </div>
  <div class="col-md-3">
    <h4 class="info-color">number of free rooms</h4>
    <h2 id="free_rooms_count" class="info-color"> <span class="fa fa-home"> </span> 25 </h2>
  
  </div>
  </div>

  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Guests</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Rooms</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Staff</a>
    </li>
  </ul>

 
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
     <div class="row mb-4"> 
     
        <!-- -->
      <a class="btn btn-primary" href="/add_guest" >Add guest</a> 

   </div>
    <table id="guest_table" class="display table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Passport</th>
            <th>Room</th>
            <th>Arrive</th>
            <th>Leave</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       

<!-- here will be guest table -->

    </tbody>
</table>
<script >
$(document).ready( function () {
    $('#guest_table').DataTable();
} );
</script>

    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <div class="row mb-4"> 
      
        <form action="#">
          <input type="text" >
          <input class="btn btn-primary " type="submit" value="Check">

        </form>
      
   </div>
     
 <table id="room_table" class="display table">
    <thead>
        <tr>
            <th>Room #</th>
            <th>Type</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       
  <!-- here will be room data -->

  
    </tbody>
</table>
<script >
$(document).ready( function () {
    $('#room_table').DataTable();
} );
</script>

    </div>


    <div id="menu2" class="container tab-pane fade"><br>
       <div class="row mb-4">
      
            <a class="btn btn-primary" href="/add_staff" >Add staff</a>
     
     </div>
<table id="staff_table" class="display table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Tel. </th>
            <th>Address</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
       
  <!-- here will be staff data -->

  
    </tbody>
</table>
<script >
$(document).ready( function () {
    $('#staff_table').DataTable();
} );
</script>



    </div>
  </div>
</div>

</body>
</html>