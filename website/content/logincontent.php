<?php 

include './init.php';

	if(isset($_POST['submit'])){
		$bid=$_POST['bid'];
		$password=$_POST['password'];

		$stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`= ?  AND `Password`=? ');
		$stmt->bind_param('ss',$bid,$password );
		$stmt->execute();
		$result=$stmt->get_result();
		if($row=$result->fetch_assoc()){
			$_SESSION['user']=mysqli_insert_id($dbconnect);
			$_SESSION['bid']=$bid;
			header("Location: chooser.php");
			die();

		}else{
			?><script>alert('Invalid credentials');</script><?php
		}

	}



 ?>