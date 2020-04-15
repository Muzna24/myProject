<?php
require_once __DIR__ .'/function.php';
class API{
	function Select(){
		$db = new Connect;
		$users = array();
		$data = $db->Prepare('SELECT * FROM STUDENT_PERMISSION ORDER BY username');
		$data->execute();
		while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
			$users[$OutputData['username']] = array(
			'username' => $OutputData['username'],
			'password' => $OutputData['password']);
		}
		return json_encode($users);
	}
}
$API = new API;
header('Connect-Type: application/json');
echo $API->Select();
?>