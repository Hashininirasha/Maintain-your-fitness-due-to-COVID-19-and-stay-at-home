<!DOCTYPE html>
<html>
<head>
<title>Our Form</title>
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
input[type=text],input[type=email],input[type=tel],textarea {
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

input[type=date],input[type=number]{
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
<h1><b><ins>Registration Form<b></ins></h1>
<form action="form.php" method="">

<!--01.Name-->
<label for="name">Name with initials :</label>
<input type="text" name="name" placeholder="Enter your name" required="ÿes">
<br><br><br>

<!--02.Date of birth-->
<label for="name">Date of birth:</label>
<input type="date" name="dob" placeholder="Enter your date of Birth" required="ÿes">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<!--03.Age-->
<label for="name">Age :</label>
<input type="number" name="age" placeholder="Enter your age" required="ÿes" min=5>
<br><br>

<!--04.Gender-->
<label for="name">Gender :</label>
Male:<input type="radio" name="gender" >
Female:<input type="radio" name="gender" >
<br><br><br>


<!--04.NIC no-->
<label for="name">NIC No :</label>
<input type="text" name="id" placeholder="Enter your NIC no" required="ÿes">
<br><br>

<!--05.phone number-->
<label for="name">Phone Number :</label>
<input type="tel" name="phonenumber" placeholder="Enter your phone number" required="ÿes">
<br><br>

<!--06.Email-->
<label for="name">Email :</label>
<input type="email" name="email" placeholder="Enter your email">
<br><br>

<!--07.City-->
<label for="name">City :</label>
<input type="text" name="city" placeholder="Enter your city" required="ÿes">
<br><br>

<!--08.Country-->
<label for="name">Country:</label>
<input type="text" name="country" placeholder="Enter your country" required="ÿes">
<br><br>
<!--08.Address-->
<label for="name">Address :</label>
<input type="text" name="address" placeholder="Enter your address" required="ÿes">
<br><br>

<!--09.diseases-->
<label for="name">Your diseases :</label>
<br><textarea type="text" name="diseases" rows="10" cols="30" placeholder="Enter your diseases"></textarea>
<br><br>

<!--10.date-->
<label for="name">Registration Date :</label>
<input type="date" name="rdate" placeholder="Registration Date" required="ÿes">
<br><br>

<!--10.submit-->
<input type="Submit" name="button" value="Submit">
</form>
</body>
</html>
