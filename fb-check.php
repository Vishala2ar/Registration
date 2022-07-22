<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user_name']) && isset($_POST['Email'])
    && isset($_POST['phone']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_name = validate($_POST['user_name']);
	$Email = validate($_POST['Email']);
    $phone = validate($_POST['phone']);
	$password = validate($_POST['password']);
	
	
	$user_data = 'user_name='. $user_name. '&Email='. $Email .'&phone='.$phone .'&password='.$password;


	if (empty($user_name)) {
		header("Location: fb.php?error=user_name is required&$user_data");
	    exit();
	}else if(empty($Email)){
        header("Location: fb.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($phone)){
        header("Location: fb.php?error=phone is required&$user_data");
	    exit();
	}

	else if(empty($password)){
        header("Location: fb.php?error=password is required&$user_data");
	    exit();
	}


	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM login WHERE user_name='$user_name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: fb.php?error=The user_name is taken try another&$user_name");
	        exit();
		}else {
           $sql2 = "INSERT INTO login(user_name, Email, phone, password) VALUES('$user_name', '$Email', '$phone', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: fb.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: fb.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: fb.php");
	exit();
}


