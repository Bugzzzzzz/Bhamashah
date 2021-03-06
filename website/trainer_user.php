<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="css\learn_user\learn_user.css" rel="stylesheet">
			
        <script>
            function myFunction(button) {
                var x = document.getElementById("myP");
                if (x.contentEditable == "true") {
                    x.contentEditable = "false";
                    button.innerHTML = '<i class="fa fa-pencil" style="color:black;"></i>';
                } else {
                    x.contentEditable = "true";
                    button.innerHTML = '<i class="fa fa-pencil" style="color:red;"></i>';
                }
            }
        </script>
    </head>
    <body style="background-color:#fff2e6">

	<div class="background">
	
        <div style="height:25%;background-color:#f26522;">
            <div class="imgcontainer" style="position:absolute;background-color:#f26522;">
                <img src="images/logo.png" alt="Avatar" class="avatar">
				</div>
            
            <div align="right" style="background-color:#f26522;width:100%;height:35%;float:center;">
        
                <header>
                    <section class="header-content">
                        <h1 class="header-title animate-pop-in">Bhamashah yojana</h1>
                </header>
			</div>
            </div>
       
        
        
        
    <div>
        <!--Profile-->
        <div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
                    <p align="center"><img src="images/logo.png" style="height:106px;width:106px;border-radius:100%;width=45%;" alt="Avatar"></p>
                        <h4 class="w3-center">&lt;user name&gt;</h4>
						<h4 class="w3-center"><a href="logoutnext.php">Logout</a></h4>
                        <hr>
                    <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>&lt;user name&gt;</p>
                    <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-text-theme"></i>&lt;city&gt;</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>&lt;DOB&gt;</p>
              
                    <p><i class="fa fa-flag fa-fw w3-margin-right w3-text-theme"></i>India</p>

        </div>
        
        <!--Editable details-->
        <div style="width:70%;height:30%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
        
            <div style="float:right;"><button onclick="myFunction(this);" style="color:black;background-color:white;"><i class="fa fa-pencil"></i></button></div>
            <table>
			<tr>
                <td><h4><b>EDITABLE DETAILS-</h4></b></td>
                
                </tr>
                <tr>
                <td><p>Mobile no.:</p></td>
                <td><p id="myP" contentEditable="true">&lt;phone number&gt;</p></td>
                </tr>
                
                <tr>
                <td><p>Address:</p></td>
                <td><p id="myP" contentEditable="true">&lt;address&gt;</p></td>
                </tr>
                
                <tr>
                <td><p>Email Id:</p></td>
                <td><p id="myP" contentEditable="true">&lt;email id&gt;</p></td>
                </tr>
                
           
                
            </table>
        </div>
		
       <!--account realted stuff-->
            <div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>APPLY FOR LOAN</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                  <p> &nbsp &nbsp   <button class="loan"  style="margin-right:50%;width:50%;float:right;background-color:black"> <a href="loan.php"> Click for loan </a></button></p> <br>
                    </div>
                </div>
                </div>
				
				<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>UPDATE PROFILE</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                  <p> &nbsp &nbsp   <button class="loan"  style="margin-right:50%;width:50%;float:right;background-color:black"> <a href="update_login.php"> Click for Update </a></button></p> <br>
                    </div>
                </div>
                </div>
				
				<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>BILL PAYMENT</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                  <p> &nbsp &nbsp   <button class="loan"  style="margin-right:50%;width:50%;float:right;background-color:black"> <a href="http://emitra.rajasthan.gov.in/content/emitra/en/home.html#"> Pay </a></button></p> <br>
                    </div>
                </div>
                </div>
				<div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            <table>
               
                <tr>
                    <td><p align="right">Adhar No.:</p></td>
                    <th><p align="left">&lt;adhar card&gt;</p></th>
                </tr>
                
                <tr>
                    <td><p align="right">Bhamashah id.:</p></td>
                    <th><p align="left">&lt;bhamashah&gt;</p></th>
                </tr>
               
            </table>
        </div>
				 
              
                    </div> <br> <br>
					
					<div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            
             <br>
			 <table>
               
                <tr>
                    <td><p align="right"><button style="background-color:black;height:40px;width:50px;border-radius:20px">&#43;</button> </p></td>
                    <th><p align="left"><p><b><a href="#"> &nbsp  &nbsp Add members</a></b></p></th>
                </tr>
                </table>
			
        </div>
		
		
		<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>DEPOSIT</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                     <form name="frmregister1" method="post" class="wide w3-content" >  
                       ENTER DEPOSIT: <input type="number" name="number" placeholder="Enter Deposit amount"  max="50000" required />
                       DEPOSIT UPLOAD :<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:black;" name="txnmobile1" placeholder="Upload your DEPOSIT RECEIPT XEROX" required class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/>					   <br>
                    </div>
                </div>
                </div>
				 
                   <div>
				    <div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                    <div style="margin-right:60%;width:90%;margin-top:20px;float:left;">
                        <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Feedback</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>apurv.rathore.prakash@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Bhubaneswar,Odisha</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>7608903930</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
                    </div>
                </div>
      
            </div>
        </div>
         <!--EVERY DETAILS-->
       
    </div>
	</div>
    </body>
</html>





