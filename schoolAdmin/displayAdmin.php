<?php
session_start();

include 'db.php';
$sql = "SELECT * FROM SCHOOL_ADMINISTRATOR";
$result = $conn->query($sql);
?>
<html>
<body>
		<table border="1">
		<tr> <th>ID</th>
		<th>Name</th> 
		<th>Address</th> 
		<th>Email</th> 
		<th>Phone number</th>
        <th colspan="2">Action</th></tr>
<?php
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
		<td><?php echo $row['admin_id']; ?></td>
		<td><?php echo $row['admin_name']; ?></td>
		<td><?php echo $row['admin_address']; ?></td>
		<td><?php echo $row['admin_email']; ?></td>
		<td><?php echo $row['admin_phone']; ?></td>
		<td><a href="deleteProcess.php?delete=<?php echo $row['admin_id'];?>" 
		    class="btn btn-danger">Delete</a>
			<a href="edit.php?edit=<?php echo $row['admin_id'];?>" 
		    class="btn btn-danger">Edit</a></td>
		</tr>
		<?php
	}
}
else{
	?>
	<tr>
	<th colspan="2"> There's No data found!!</th>
	</tr>
	<?php
}
?>
</table><br>
	<button type="button" id="addButton">Add new Administrator</button>
<script type="text/javascript">
    document.getElementById("addButton").onclick = function () {
        location.href = "schoolAdmin.php";
    };
</script>
</body>
</html>