<?php 
$conn = mysqli_connect("localhost:3306", "root","", "platform");
if(!$conn){
	die("Error on the connection".$conn->connect_error);
}

    $UserID = $_GET['edit'];
    $query = " select * from SCHOOL_ADMINISTRATOR where admin_id='".$UserID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['admin_id'];
        $name = $row['admin_name'];
		$address = $row['admin_address'];
        $email = $row['admin_email'];
        $phone = $row['admin_phone'];
		$school_id = $row['school_id'];
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
<legend><b>Update Administrator information</b></legend>
<table>
<tr>
<td>Name:</td><td><input type="text"  placeholder=" admin name " name="name" value="<?php echo $name ?>"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text"  placeholder=" admin address " name="address" value="<?php echo $address ?>"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email"  placeholder=" admin Email " name="email" value="<?php echo $email ?>"></td>
</tr>
<tr>
<td>Phone:</td><td><input type="text"  placeholder=" admin number " name="phone" value="<?php echo $phone ?>"></td>
</tr>
<tr>
<td>School ID:</td><td><input type="text"  placeholder=" school id " name="id" value="<?php echo $school_id ?>"></td>
</tr>
<tr>
<td><button id="update_btn" name="update">Update</button></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
