<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav ">
    
    <li class="nav-item">
    	<h5>
      <a class="nav-link active" href="/">Home</a></h5>
    </li>
   
  </ul>
</nav>
			<br>
            <div class="card h-100 border-primary justify-content-center col-md-4 mx-auto ">
                <div>
                    <div class="card-body">
                        <h3 class="card-title">Admin side</h3>
                        
                        <form  action="#" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
					</div>
					<div class="form-check">
				      <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="remember"> Remember me
				      </label>
				  </div>
				  <div class="text-center">
				   <button type="submit" class="btn btn-primary">Login</button>
				</div>
				</form>
                    </div>
                </div>
            </div>	
		
	<script type="text/javascript">
		$(document).ready(function () {
			 
			//write script here
		});

	</script>



	



</body>
</html>