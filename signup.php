<?php
if(isset($_POST['submit'])){
//    $username= $_POST['name'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
//      x
   $club = $_POST['club']; 
    $email= $_POST['email'];
//    $phone= $_POST['phone'];
//    $gender= $_POST['gender'];
//    

    $connection = mysqli_connect('localhost','root','','news nigga');
    if($connection)
        echo("connected");
    else
        die("not connected");
     if($password==$cpassword){
         echo "matched";
    $query= "INSERT INTO  login (email,password,club_id) VALUES ('$email','$password','$club')";
    $r =mysqli_query($connection,$query);

    if(!$r){
        die("data cannot be sent");
    }
    else{
    header('location:register.php');
}
        
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="topcont">
		<h2>Sign Up Here!!</h2>
		<form action="signup.php" method="post">
			
<!--
				<div class="col"><label for="name">NAME:</label>
				<input type="text" name="name" placeholder="Name"></div>
-->
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                    </div>
				
			    	<div class="col">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="Password">
				</div>
				
				<div class="col">
				<label for="password">Confirm Password</label>
				<input type="password" name="cpassword" placeholder="Confirm Password">
				</div>

				<div class="col">
				<label for="club">Clubid</label>
				<input type="text" name="club" placeholder="ClubId">
				</div>
				
<!--
				<div class="col">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" placeholder="phone number">
				</div>
-->
				
				<div class="g">
<!--
				<div class="g">Gender:
					<br>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				</div>
-->
				<br>
				<br>
				<label for="department">Deprtment</label>
				<select  name="department">
	      <option value="CSE" >CSE</option>
	      <option value="ISE" >ISE</option>
	      <option value="EEE" >EEE</option>
	      <option value="ECE" >ECE</option>
	      <option value="MECH" >MECH</option>
	      <option value="CIVIL" >CIVIL</option>
	      </select>
				<br>
	       <input type="submit" value="Submit" name="submit">
	       </div>

	</form>	
    </div>
</body>
</html>