<?php
	include 'db.php';
    if(isset($_POST['update']))
    {
        $UserID = $_GET['edit'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
		$school_id = $_POST['id'];
 
        $query = " update MANAGER set manager_name = '".$name."', manager_address='".$address."',manager_email='".$email."',manager_phone='".$phone."',school_id='".$school_id."' where manager_id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:displayManager.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:displayManager.php");
    }
?>