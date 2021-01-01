<?php
require_once "pdo.php";
session_start();

if(isset($_POST['submit']) ) {

 // Data validation
    $email=$_POST['email'];    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]); 
    $user = $stmt->fetch();
    $selection = $_POST['gender'];

    if ($user) {
        $_SESSION["error"]="This email has already registered.. login or use another email";
    }
   
   else if ($selection!="F" && $selection!="M" ) {
            $_SESSION["error"] = 'Please,select your gender';  
        
   }

    else if (!is_string($_POST['name'])||!is_string($_POST['country'])||!is_numeric($_POST['age']) ) {
        $_SESSION["error"] = 'First Name and Last Name should include characters only'; 
    }

    else if ($_POST['password']!=$_POST['confirm']) {
         $_SESSION["error"] = 'Password and Confirm Password should have same value.';          
    }

    else{
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $rdate=$_POST['rdate'];
        $dob=$_POST['dob'];
        $nic=$_POST['nic'];
        $diseases=$_POST['diseases'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];

        $sql = "INSERT INTO users(username, nic, password,  phonenumber, email, age, gender, city, country, registerday, address, birthday,diseases) VALUES (:name, :nic, :password, :phonenumber, :email, :age, :gender, :city, :country, :rdate, :address, :dob, :diseases)";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindParam(':name',$name,PDO::PARAM_STR);
        $stmt -> bindParam(':age',$age,PDO::PARAM_INT);
        $stmt -> bindParam(':password',$password,PDO::PARAM_STR);
        $stmt -> bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
        $stmt -> bindParam(':email',$email,PDO::PARAM_STR);
        $stmt -> bindParam(':nic',$nic,PDO::PARAM_STR);
        $stmt -> bindParam(':gender',$gender,PDO::PARAM_STR);
        $stmt -> bindParam(':city',$country,PDO::PARAM_STR);
        $stmt -> bindParam(':rdate',$rdate,PDO::PARAM_STR);
        $stmt -> bindParam(':dob',$dob,PDO::PARAM_STR);
        $stmt -> bindParam(':address',$address,PDO::PARAM_STR);
        $stmt -> bindParam(':country',$country,PDO::PARAM_STR);
        $stmt -> bindParam(':diseases',$diseases,PDO::PARAM_STR);
     
        $stmt->execute();

      

            header('Location:login.php') ;
            return;
        
      
           }

      }

?>
<!DOCTYPE html>
<html>
<head>
<title>Our Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body{ background-color:lightgray;
background-size:100%;
background-image: url(form.jpg);
background-repeat: no-repeat;
background-size:275px 183px;
background-attachment:fixed;
background-position:right top;
} 

h1{text-align:center;
color:  #4b0082;

}
input[type=text],input[type=email],input[type=tel],textarea{
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  font-family:Comic Sans MS;
  border: 1px solid black; /* black border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

input[type=date],input[type=number],input[type=password] {
 width: 25%; 
 padding: 10px; 
 border: 1px solid black;
 border-radius: 4px;
 box-sizing: border-box;
 margin-top: 6px;
 margin-bottom: 16px;
 }
 


/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color:   #191970;
  color: white;
  font-weight:600;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a green color */
input[type=submit]:hover {
  background-color:   #7b68ee;
    color: black;
}

</style>
</head>
<body>
<div class="card m-5">
<div class="card-container">
<h1 class="card-header"><b><ins>Registration Form<b></ins></h1>
   <?php
     if (isset($_SESSION["error"]) ) {
          echo('<p style="color:red">'.htmlentities($_SESSION["error"])."</p>\n");
          unset($_SESSION["error"]);
                           }
?>  
<form class="card-body" method="post">

<!--01.Name-->
<label for="name">Name with initials :</label>
<input type="text" id="name" name="name" placeholder="Enter your name" required="yes">
<br><br><br>

<!--02.Date of birth-->
<label for="date">Date of birth:</label>
<input type="date" id="date" name="dob" placeholder="Enter your date of Birth" required="yes">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<!--03.Age-->
<label for="age">Age :</label>
<input type="number" id="age" name="age" placeholder="Enter your age" required="yes">
<br><br>

<!--04.Gender-->
<label>Gender :</label>&nbsp&nbsp&nbsp&nbsp&nbsp
Male:<input  type="radio" name="gender" value="M" >&nbsp&nbsp&nbsp&nbsp
Female:<input type="radio" name="gender" value="F" >
<br><br><br>


<!--04.NIC no-->
<label for="name">NIC No :</label>
<input type="text" name="nic" placeholder="Enter your NIC no" required="yes">
<br><br>

<!--05.phone number-->
<label for="phonenumber">Phone Number :</label>
<input type="tel" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" required="yes">
<br><br>

<!--06.password-->

<label  for="name">New Password</label>
<input type="password" name="password" placeholder="Enter your password" required="yes">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="name">Confirm Password</label>
<input type="password" name="confirm" placeholder="Renter your password" required="yes">

<br><br>

<!--07.Email-->
<label for="email">Email :</label>
<input type="email" id="email" name="email" placeholder="Enter your email">
<br><br>

<!--08.City-->
<label for="city">City :</label>
<input type="text" id="city" name="city" placeholder="Enter your city" required="yes">
<br><br>

<!--08.Country-->
<label for="country">Country:</label>
<input type="text" id="country" name="country" placeholder="Enter your country" required="yes">
<br><br>
<!--09.Address-->
<label for="address">Address :</label>
<input type="text" id="address" name="address" placeholder="Enter your address" required="yes">
<br><br>

<!--10.diseases-->
<label for="diseases">Your diseases :</label>
<br><textarea type="text" id="diseases" name="diseases" rows="10" cols="30" placeholder="Enter your diseases"></textarea>
<br><br>

<!--11.date-->
<label for="rdate">Registration Date :</label>
<input type="date" id="rdate" name="rdate" placeholder="Registration Date" required="yes">
<br><br>

<!--12.submit-->
<input type="submit" name="submit" value="Register">  
<hr>                      
<p align="center"><a href="login.php">If you already have a account? login </a></p>
</form>
</div>
</div>
</body>
</html>
