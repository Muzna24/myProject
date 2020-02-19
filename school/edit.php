<?php 
$conn = mysqli_connect("localhost:3306", "root","", "platform");
if(!$conn){
	die("Error on the connection".$conn->connect_error);
}

    $UserID = $_GET['edit'];
    $query = " select * from SCHOOL where school_id='".$UserID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['school_id'];
        $name = $row['school_name'];
		$address = $row['school_address'];
        $email = $row['school_email'];
        $phone = $row['school_phone'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit </title>
</head>
<body class="bg-dark">
<form action="updateProcess.php?edit=<?php echo $id ?>" method="post">
<fieldset style='width:500px'>
<legend><b>Update School information</b></legend>
<table>
<tr>
<td>Name:</td><td><input type="text"  placeholder=" School name " name="name" value="<?php echo $name ?>"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text"  placeholder=" School address " name="address" value="<?php echo $address ?>"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email"  placeholder=" School Email " name="email" value="<?php echo $email ?>"></td>
</tr>
<tr>
<td>Phone:</td><td><input type="text"  placeholder=" Phone number " name="phone" value="<?php echo $phone ?>"></td>
</tr>
<tr>
<td><button id="update_btn" name="update">Update</button></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
