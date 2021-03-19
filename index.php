<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- bootstrap style link end -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container-fluid d-flex align-items-center justify-content-center" style="background:url('https://www.hrimaging.com/images/bg0.jpg');background-size: cover ">
	<form method="post" action="main.php">
		<div class="card-header d-flex align-items-center justify-content-center flex-column">
			<h1>Students Information System</h1>
			<div class="row">
				<div class="col">
					<a href="update_details.php" class="btn btn-info">UPDATE</a>
				</div>
				<div class="col">
					<a class="btn btn-warning">DELETE</a>
				</div>
			</div>	
		</div>
		<div class="card p-5" style="background-color: rgba(0,0,0,.5);">

			<p class="text-white">Enter first name</p>
			<div class="form-group">
				<input class="form-control" name="fn"></input>
			</div>
			<p class="text-white">Enter last name</p>
			<div class="form-group">
				<input class="form-control" name="ln"></input>
			</div>
			<p class="text-white">Section</p>
			<div class="form-group">
				<select class="form-control"name="session">
					<option><p>2000</p></option>
					<option><p>2002</p></option>
					<option><p>2003</p></option>
					<option><p>2006</p></option>
				</select>
			</div>
			<p class="text-white">Enter Roll Number</p>
			<div class="form-group">
				<input class="form-control" name="rollno"></input>
			</div>
			<div class="row">
				<div class="col">
					<p class="text-white">Branch</p>
					<div class="form-group">
						<input class="form-control"name="branch"></input>
					</div>
				</div>
				<div class="col">
					<p class="text-white">Year</p>
					<div class="form-group">
						<input class="form-control" name="year"></input>
					</div>
				</div>
				<div class="col">
					<p class="text-white">Semester</p>
					<div class="form-group">
						<input class="form-control" name="sem"></input>
					</div>
				</div>
			</div>
				<p class="text-white">Enter Date of birth</p>
					<div class="form-group">
						<input class="form-control" name="dob"></input>
					</div>
				<p class="text-white">Address</p>
					<div class="form-group">
						<input class="form-control" name="add"></input>
					</div>
				<button class="btn btn-success btn-block" name="submit">Submit</button>
				</div>

		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>