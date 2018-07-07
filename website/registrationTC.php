<html>
    <head>
        <title>
            
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
        <style>

            .wide{
                max-width: 50%;
            }

            body{
                 background-image: url(images/b2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            .slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 23px;
    height: 24px;
    border: 0;
    background: url("earn1.jpg");
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 23px;
    height: 24px;
    border: 0;
    background: url('contrasticon.png');
    cursor: pointer;
}
        </style>
    </head>
    <body class="w3-padding-16 ">
        <?php include './content/registrationTCcontent.php'; ?>
       <center>
        <div class="w3-black w3-opacity-min w3-center w3-card w3-margin-left w3-margin-right wide w3-round">
            
                      <form name="frmregister" method="POST" class="wide w3-content" >
                            <p align="center" class="w3-xxlarge" style="font-size:40px;color:crimson"><br/><u><b> REGISTRATION FOR TRAINING CENTER</b></u></p>
                          <h2><b><b><u>Personal Details</u></b></b></h2>
                                    NAME:<input type="text" name="name" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter name" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>

                                                                                                             
                                    <!-- PASSPORT SIZE PHOTO:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your BHAMASHAH CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/> -->
                                                                          <br/>
                                    PHONE NO.:<input type="number" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="phoneno" placeholder="Enter phone number" class="w3-padding-16 w3-input w3-border w3-content w3-round" required=""><br/>
                                    
                                    Date of Birth:<input type="Date" name="dob" class="w3-padding-16 w3-round w3-input w3-border w3-content"><br/><br/>
                                    
                                    CURRENT ADDRESS:<textarea name="caddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter current address" class="w3-padding-16 w3-input w3-border w3-round w3-content"></textarea><br/>
								    
                                   PERMANENT ADDRESS:  <textarea name="paddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter permanent address" class="w3-padding-16 w3-input w3-border w3-content w3-round"></textarea><br/></br>
                                    
                                    BANK ACCOUNT NUMBER:<input type="text" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="bac" placeholder="Enter bank Account number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    AADHAR NUMBER:<input type="number" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="aadhar" placeholder="Enter aadhar number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    <!-- ADHAAR UPLOAD:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your ADHAAR CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/> -->
                                    
                                    USERNAME:<input type="text" name="username" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter username" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>
                                    PASSWORD:<input type="password" name="password" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter name" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>
                                    
                           
                                    <br/>
                                    
                                    DO YOU HAVE A COMPUTER?<br/><input type="radio" name="comp" value="1" class="w3-btn" onclick="myFunY();">YES <input type="radio" name="comp" value="0" class="w3-btn" onclick="myFunN();">NO
                                    <br/>
                                    <script>
                                        function myFunY() {
                                            var x = document.getElementById("myDiv");
                                                    x.style.display = "block";
                                        }
                                        function myFunN() {
                                            var x = document.getElementById("myDiv");
                                                    x.style.display = "none";
                                        }
                                    </script>
                                    
                                    
                                    
                            <div id="myDiv">
								<!-- <br/> -->
								<!-- PHOTO OF THE COMPUTER:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload Photo of the computer" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/><br/> -->
                              <!-- <br/> -->
								<!-- PHOTO OF THE CLASSROOM:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload Photo of the classroom" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/><br/> -->
                              <br/></div>
								    <br/>
								    
                                   
                                    DO YOU WANT TO APPLY FOR A LOAN?<br/>
                                    <input type="button" name="apply" value="YES" onclick="myFunction();" id="YN">
                                    <script>
                                        function myFunction() {
                                            var x = document.getElementById("myDIV");
                                                if (x.style.display === "none") {
                                                    x.style.display = "block";
                                                    document.getElementById("YN").setAttribute("value","NO");
                                                } else {
                                                    x.style.display = "none";
                                                    document.getElementById("YN").setAttribute("value","YES");
                                                }
                                        }
                                    </script>
                                    <br/>
								    
                                   <div class="slidecontainer" id="myDIV" style="display: none">
                                    AMOUNT OF LOAN REQUIRED:<br/><br/>

                                    
                                    <input type="range" name="amount" min="0" max="100"  class="slider" value="0" id="loan">
                                      <p>Value: <span  id="demo">0</span></p>
                                    </div>
                                    
                                    <script>
                                        var slider = document.getElementById("loan");
                                        var output = document.getElementById("demo");
                                        output.innerHTML = slider.value*200+30000;

                                        slider.oninput = function() {
                                            output.innerHTML = this.value*200+30000;
                                        }
                                    </script>
								<br/>
                               
                                <input type="submit" name="submit" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-green" value="SUBMIT" />
								<input type="reset" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-red" value="CLEAR"/>
                          
            </form>
						
		
        </center>        
        </div>
    </body>
</html>