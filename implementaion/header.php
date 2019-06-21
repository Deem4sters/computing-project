  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  display: block;
  padding: 0;
  overflow: hidden;
  background-color: #e6f0ff;
  text-decoration: none;
  font-family: Cambria, serif;
	font-size: 24px;
	font-style: normal;
	font-weight: normal;
	text-transform: normal;
	letter-spacing: normal;
	line-height: 1.3em;
	color: #262626;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  text-decoration: none;
	font-family: Cambria, serif;
	font-size: 24px;
	font-style: normal;
	font-weight: normal;
	text-transform: normal;
	letter-spacing: normal;
	line-height: 1.3em;
	color: #596365;
}

ul.topnav li a:hover:not(.active) {background-color:  #99c2ff;}

ul.topnav li a.active {
background-color: #66a3ff;
text-decoration: none;
	font-family: Cambria, serif;
	font-size: 24px;
	font-style: normal;
	font-weight: normal;
	text-transform: normal;
	letter-spacing: normal;
	line-height: 1.3em;
	color: #000;
}
ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right,
  ul.topnav li {float: none;}
}
img {
  width: 80px;
  float: left;
}
</style>
</head>
<body>

<ul class="topnav">
  <img src="img/logo.png" alt="">
  <li class="dropdown"><a href="#buy">Buy</a></li>
  <li><a href="#sell">Sell</a></li>
  <li><a href="#rent">Rent</a></li>
  <li><a href="#myhome">My Home</a></li>
  <li><a href="#news">News</a></li>
  <li class="right"><a href="register.php">Register</a></li>
  <li class="right"><a href="login.php">Login</a></li>
</ul>
</body>
</html>
