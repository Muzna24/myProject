<?php
session_start();
?>
<html>
<head>
<title>
shop Store
</title>
<style>
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}
header {background:rgb(44,132,65);color:white;}
footer {background:rgb(44,132,65);color:white;}
.nav {background:white;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
.topnav {
	background-color:#333;
	overflow: hidden;
}
.topnav a {
	float: left;
	display: block;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font size: 17px;
}
.topnav a:hover {
	background-color:#ddd;
	color: black;
}
.topnav a.active {
	background-color:#4CAF50;
	color: white;
}
</style>
</head>
<body>
<div class="flex-container">
<header>
  <h1>Shop Store System</h1>
</header>

<nav class="nav">
<ul>
  <li><a href="addProduct.php">Add product </a></li>
  <li><a href="displyProduct.php">Products Store</a></li>
  <li><a href="http://www.googel.com">Search</a></li>
</ul>
</nav>
<div class="topnav" id="myTopnav">
	<a href="logout.php">Sign Out </a>
  </div>

<article class="article">
<?php
$conn= mysqli_connect('localhost:3306', 'root', '','muzna');
if(isset($_POST['submit'])){
$id = $_POST['ID'];
$name = $_POST['Name'];
$price = $_POST['Price'];
$quantity = $_POST['Quantity'];
$description = $_POST['Description'];
$sql = "INSERT INTO product (ID, Name, Price, Quantity, Description) VALUES('$id','$name','$price','$quantity','$description')";
$result= mysqli_query($conn,$sql);
if(!$result){
echo "Not inserted!";
}
else{
echo "inserted!";
}
}
//header(refresh:2; url="addproduct.php");
?>

<form action = "addproduct.php" method = 'post'>
<fieldset style='width:500px'>
<legend><b>Add new product</b></legend>
<table>
<tr>
<td>ID:</td><td><input type='text' name='ID' style='width:100px'></td>
</tr>
<tr>
<td>Name:</td><td><input type='text' name='Name' style='width:200px'></td>
</tr>
<tr>
<td>Price:</td><td><input type='text' name='Price' style='width:200px'></td>
</tr>
<tr>
<td>Quantity:</td><td><input type='text' name='Quantity' style='width:200px'></td>
</tr>
<tr>
<td>Description:</td><td><textarea name='Description'> enter product description</textarea></td>
</tr>
<tr>	
<td><input type="submit" name="submit" value="Add"/></td>
<td><input type="reset"  Value="Reset"/></td>
</tr>
</table>
</fieldset>
</form>
</article><br>

<footer>Copyright &copy; Muzna Al.Barwani</footer>
</div>
</body>
</html>