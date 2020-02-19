<?php
	include 'db.php';
    if(isset($_POST['update']))
    {
        $UserID = $_GET['edit'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
 
        $query = " update SCHOOL set school_name = '".$name."', school_address='".$address."',school_email='".$email."',school_phone='".$phone."' where school_id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:displaySchool.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:displaySchool.php");
    }
?>