<html>
<form action = "rest.php" method = 'post'>
Student ID:<input type='text' name='id'/><br>
<input type="submit" name="play" value="Play"/>
</form>
</html>
<?php

if(isset($_POST['play'])){
		$id= $_POST['id'];
		$game=1;
		$start_time='22:00';
		$end_time='22:39';
		$score=50000000;
		
		
		$url= "http://localhost/insertData2/index.php?id=$id&game_id=$game&start_time=$start_time&end_time=$end_time&score=$score";
		
		$client=curl_init($url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, 5);
		
		$responce=curl_exec($client);
}
?>