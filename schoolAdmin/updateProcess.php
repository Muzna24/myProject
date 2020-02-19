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
 
        $query = " update SCHOOL_ADMINISTRATOR set admin_name = '".$name."', admin_address='".$address."',admin_email='".$email."',admin_phone='".$phone."',school_id='".$school_id."' where admin_id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:displayAdmin.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:displayAdmin.php");
    }
?>