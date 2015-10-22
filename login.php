<?php
session_start();
	
require ("config2.php");

 if (isset($_POST['user'])) {
    $name = $mysqli->real_escape_string($_POST['user']);
}else{
		die("dont try to mess around bro1 ;)");
	}

 if (isset($_POST['loginname'])) {
    $lname = $mysqli->real_escape_string($_POST['loginname']);
}else{
		die("dont try to mess around bro2 ;)");
	}	
	
	if (isset($_POST['email']) && strpos($_POST['email'],'@') !== false) {
    $mail = $mysqli->real_escape_string($_POST['email']);
}else{
		die("dont try to mess around bro3 ;)");
	}

 if (isset($_POST['comment'])) {
    $message = $mysqli->real_escape_string($_POST['comment']);
}else{
		die("dont try to mess around bro4 ;)");
	}	
	
	
 $exist = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
			$exist->bind_param('s', $mail);
			$exist->execute();
			$exist->store_result();
			$size = $exist->num_rows;
			$exist->bind_result($id, $nname, $gname, $emaill, $text);
			$exist->fetch();
		
			if($size == 0)
			{
				$stmt = $mysqli->prepare("INSERT INTO users(username, loginname, email, message) Values(?,?,?,?)");
				$stmt->bind_param('ssss', $name, $lname, $mail, $message);
				$stmt->execute();	
				$stmt->close();
				$mysqli->close();
				$_SESSION['sentence'] = false;
			}
			else
			{
				$_SESSION['sentence'] = true;
				$_SESSION['username'] = $name;
				$_SESSION['message'] = $message;
			}

			$exist->close();
				$mysqli->close();
				header('Location: ass2.php');
			
			