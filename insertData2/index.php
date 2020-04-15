<?php
header("Content-Type:application/json");
include("function.php");
if(!empty($_GET['id'] && $_GET['game_id'] && $_GET['start_time'] && $_GET['end_time'] && $_GET['score'])){
	$id= $_GET['id'];
	$game= $_GET['game_id'];
	$s_time= $_GET['start_time'];
	$e_time= $_GET['end_time'];
	$score= $_GET['score'];
	set_info($id, $game, $s_time, $e_time, $score);
}
?>