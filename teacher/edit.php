<?php 
$conn = mysqli_connect("localhost:3306", "root","", "platform");
if(!$conn){
	die("Error on the connection".$conn->connect_error);
}

    $UserID = $_GET['edit'];
    $query = " select * from TEACHER where teacher_id='".$UserID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['teacher_id'];
        $name = $row['teacher_name'];
		$address = $row['teacher_address'];
        $email = $row['teacher_email'];
        $phone = $row['teacher_phone'];
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
<legend><b>Update Teacher information</b></legend>
<table>
<tr>
<td>Name:</td><td><input type="text"  placeholder=" teacher name " name="name" value="<?php echo $name ?>"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text"  placeholder=" teacher address " name="address" value="<?php echo $address ?>"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email"  placeholder=" teacher Email " name="email" value="<?php echo $email ?>"></td>
</tr>
<tr>
<td>Phone:</td><td><input type="text"  placeholder=" teacher number " name="phone" value="<?php echo $phone ?>"></td>
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
