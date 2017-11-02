<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Local Photography</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/journal/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>

<?php include '../resources/navigation.php'; ?>

<div class="jumbotron">
	<div class="container">
    	<h1 class="display-3">Log in to Local Photography!</h1>
    </div>
</div>

<div>
<div class="col-xs-6" style='padding-left: 130px'>
  <img src="images/path_and_river.png" alt=Path and River />
</div>
</div>

<div class="container">
<div class="col-xs-6">
  <fieldset>
    <h1>User Information</h1>
      <h4>
        <label for="username">Username:</label>
        <input type="text" id="username" placeholder="Username"/>
        </h4>
      <h4>
        <label for="password">Password:</label>
        <input type="text" id="password" placeholder="Password" />
      </h4>
    <button type="button" class="btn btn-primary btn-sm">Log In</button>
  </fieldset>
</div>
</div>

<?php include '../resources/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>