<html>
<head>
<title>
add manager
</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost:3306','root','','platform');
if(isset($_POST['submit'])){
	$id = $_POST['ID'];
	$name = $_POST['Name'];
	$address = $_POST['Address'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$school = $_POST['School'];
	$sql= "INSERT INTO MANAGER(manager_id, manager_name, manager_address, manager_email, manager_phone, school_id) VALUES('$id','$name','$address','$email','$phone','$school')";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo "Not inserted!";
	}else{
		echo "inserted!";
	}
?>
<form action = "addManager.php" method = 'post'>
<fieldset style='width:500px'>
<legend><b>Add School Manager</b></legend>
<table>
<tr>
<td>ID:</td><td><input type='text' name='ID' style='width:100px'></td>
</tr>
<tr>
<td>Name:</td><td><input type='text' name='Name' style='width:200px'></td>
</tr>
<tr>
<td>Address:</td><td><input type='text' name='Address' style='width:200px'></td>
</tr>
<tr>
<td>Email:</td><td><input type='text' name='Email' style='width:200px'></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type='text' name='Phone' style='width:200px'></td>
</tr>
<tr>
<td>School_id:</td><td><input type='text' name='School' style='width:200px'></td>
</tr>
<tr>	
<td><input type="submit" name="submit" value="Add"/></td>
<td><input type="reset"  Value="Reset"/></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>