<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$title" ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
body, html {
  height: 100%;
}
#background {
    background-image: url("img/coffee.jpg");
     height: 400%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }


ul {
  list-style-type: none;
  margin: 2;
  padding: 2;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
}
</style>
</head>
<body id="background">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="information.php">information</a></li>
  <li><a href="about.php">About</a></li>
</ul>
