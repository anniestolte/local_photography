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
          <h1 class="display-3">Sign up for Local Photography!</h1>
        </div>
      </div>

<div>
<div class="col-xs-6" style='padding-left: 130px'>
  <img src="images/path_and_river.png" alt=Path and River />
</div>
</div>

<form>
  <div class="container">
    <div class="col-xs-12 col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class="container">
  <div class="col-xs-12 col-md-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
  </div>
</form>

<?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
