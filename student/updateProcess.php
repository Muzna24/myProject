<?php
	include 'db.php';
    if(isset($_POST['update']))
    {
        $UserID = $_GET['edit'];
        $name = $_POST['name'];
		$level = $_POST['level'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$school_id = $_POST['id'];
 
        $query = " update STUDENT set student_name = '".$name."',student_level='".$level."',student_address='".$address."',student_email='".$email."',school_id='".$school_id."' where student_id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:displayStudent.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:displayStudent.php");
    }
?>