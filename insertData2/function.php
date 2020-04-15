<?php
function set_info($id, $game_id, $start_time, $end_time, $score){
	$conn = mysqli_connect("localhost:3306", "root", "", "platform");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO STUDENT_GAME_IND (student_id, game_id, start_time, end_time, score)
VALUES ('$id','$game_id','$start_time','$end_time','$score')";
if (mysqli_query($conn, $sql)) {
    echo "game information inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>