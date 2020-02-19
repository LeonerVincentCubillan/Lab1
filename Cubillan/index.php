<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form action="validation.php" method="post">
  <fieldset>
    <legend>Register</legend>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="lname">Middle name:</label><br>
    <input type="text" id="mname" name="mname"><br>
    <label for="lname">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="birthday">Date of Birth:</label><br>
  	<input type="date" id="birthday" name="birthday"><br>
  	<label for="lname">Place of birth:</label><br>
    <input type="text" id="place" name="place"><br>
    <label for="lname">Gender</label><br>
    <input type="radio" id="male" name="gender" value="male">
	<label for="male">Male</label><br>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br>
	<input type="radio" id="other" name="gender" value="other">
	<label for="other">Other</label><br>
	<label for="lname">Gaurdian:</label><br>
    <input type="text" id="guardian" name="guardian"><br>
    <label for="phonenum">Contact Number:</label><br/>
  	<input name="phonenum" id="phonenum" type="tel" pattern="[+0-9]{13}" required value="+63" ><br>
  	<label for="lname">Civil Status:</label><br>
    <input type="text" id="status" name="status"><br><br>
    <select required>
    <!--
      This is how we can do "placeholder" options.
      note: "required" attribute is on the select
    -->
    <option value=""
            hidden
    >Year Level</option><br>

    <!-- normal options -->
    <option value="1">1st year</option>
    <option value="2">2st year</option>
    <option value="3">3rd year</option>
    <option value="4">4th year</option>
    <option value="5">5th year</option>
    </select><br>


    <br>
    <input type="submit" value="Submit" style="border-radius: 2px; background-color: #FF5151; color: white">

  </fieldset>
</form>

</body>
</html>