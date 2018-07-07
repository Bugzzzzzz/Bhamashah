<?php 
include './init.php';
	$name="";
	$phoneno="";
	$dob="";
	$caddress="";
	$paddress="";
	$aadhar="";
	$bid="";
	$password="";

	if(isset($_POST['submit'])){
		// getting post result
		$name=$_POST['name'];
		$phoneno=$_POST['phoneno'];
		$dob=$_POST['dob'];
		
		$caddress=$_POST['caddress'];
		$paddress=$_POST['paddress'];
		$aadhar=$_POST['aadhar'];
		$bid=$_POST['bid'];
		$password=$_POST['password'];


		$stmt=$dbconnect->prepare('INSERT INTO `user`(`Name`, `PhoneNo`, `DOB`, `CAddress`, `PAddress`, `Aadhar`, `Bid`, `Password`) VALUES (?,?,?,?,?,?,?,?)');

		$stmt->bind_param('ssssssss',$name,$phoneno,$dob,$caddress,$paddress,$aadhar,$bid,$password); // 's' specifies the variable type=> 'string'

		$stmt->execute();

		$result=$stmt->get_result();

		if(isset($result)){
			// success signup 
			
			?>
			<script>
				if(confirm('Sign Up Successful')){
			<?php 
				$_SESSION['user']=mysqli_insert_id($dbconnect);
				$_SESSION['bid']=$bid;
				header("Location: chooser.php");
				die();
			?>
			}
			</script>
			<?php
		}else{
			?> <script>alert("Sign Unsuccessful Due to Existing Username");</script><?php
		}

	}
 ?>
