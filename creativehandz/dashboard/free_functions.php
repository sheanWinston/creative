<?php 
	include_once 'auth.php';
	
	$type = 'profile';

	switch ($type) {
		case 'profile':
			update_profile();

			break;
		
		default:
			# code...
			break;
	}


function update_profile(){
	$con = new mysqli('localhost', 'root', '', 'creativehandx');
	$msg = "Me";
	$usid = $_SESSION['usid'];
	$fname = clean('fname');
	$oname = clean('oname');
	$address = clean('address');
	$skills = clean('skills');
	$descp = clean('descp');

	$update = $con->query("UPDATE freelancers set fname = '$fname', oname = '$oname', address = '$address', skills = '$skills', descp = '$descp' WHERE freeId = '$usid' ");
	if ($update === TRUE) {
		$msg = "Profile Updated Sucessfully";
	}else{
		$msg = "Profile Update failed";
	}
	echo json_encode($msg);
	
}




     


?>