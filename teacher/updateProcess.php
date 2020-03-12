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
 
        $query = " update TEACHER set teacher_name = '".$name."', teacher_address='".$address."',teacher_email='".$email."',teacher_phone='".$phone."',school_id='".$school_id."' where teacher_id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:displayTeacher.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:displayTeacher.php");
    }
?>