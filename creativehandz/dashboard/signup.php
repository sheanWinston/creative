<?php 
	
	include_once 'kurn.php';

	$err = 0;
	$err_msg = '';

	$fname = clean('fname');
	$oname = clean('oname');
	$username = clean('username');
	$email = clean('email');
	$password = clean('password');
	$cpassword = clean('cpassword');
	if ($password != $cpassword) {
		$err = 1;
		$err_msg .= "Passwords do not match";
	}

	$password = sha1(md5($password));
	$gender = clean('gender');

	$address = clean('address'). ' '.clean('city'). " ".clean('country'). " ".clean('pcode') ;

	$skl = $_POST['skills'];
	foreach ($skl as  $value) {
		$skills .= $value.', ';
	}

	$descp = clean('descp');

	$check = $con->query("SELECT email from freelancers where email = '$email' ");
	if ($check->num_rows > 0) {
		$err = 1;
		$err_msg .= '<br> Email Already Exists';
	}

	$check2 = $con->query("SELECT username from freelancers where username = '$username' ");
	if ($check->num_rows > 0) {
		$err = 1;
		$err_msg .= '<br> Username Already Exists';
	}


	if ($err == 0) {
		$insert = $con->query("INSERT INTO freelancers (fname, oname, username, email, password, gender, skills, address, descp ) VALUES ('$fname', '$oname', '$username', '$email', '$password', '$gender', '$skills', '$address', '$descp' ) ");
		if ($insert === TRUE) {
			header("location: index.php?msg=Account Created Successfully");
		}else{
			$err = 1;
			$err_msg = $con->error;
		}
	}else{
		header("location: index.php?msg=".$err_msg);
	}

 ?>