<!DOCTYPE html>
<html>
<head>
<title>PHP Form Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
	<meta charset="UTF-8">
	<input http-equiv="X-UA-Compatible" content="ITE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">

<body>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<h1>PHP Form Example</h1>
<form action="phpdeligos.php" method="POST">
  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>