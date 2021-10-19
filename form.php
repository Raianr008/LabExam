<?php include "validation.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Fill Up the Form </h1>
<form action="" method="post">
	<form>
<table>

<tr>
 <td> <label for="fname">First name:</label><br></td>
 <td> <input type="text" id="fname" name="fname" minlength="5" ></td><?php echo $validatefname; ?>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td><label for="lname">Last name:</label></td>
 <td><input type="text" id="lname" name="lname" minlength="5"></td><?php echo $lname; ?>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email" id="email" name="email"></td><?php echo $validateemail; ?>
</tr>


  <td>Gender:</td>
  <td><input type="radio"  name="gender" value="male">
  <label for="Programmer">Male</label>
  <input type="radio" name="gender" value="female">
  <label for="Programmer">Female</label>

	<tr>
	 <td><label for="phone number">Phone number:</label></td>
	 <td> <input type="number" id="number" name="number"></td>
	</tr>

	<tr>
			<td>Birth Date:</td>
			<td><input type="date" name="dob" ></td>
	</tr>

	<tr>
	 <td><label for="hsc">HSC Result:</label></td>
	 <td> <input type="hsc" id="hsc" name="hsc"></td>
	</tr>

	<tr>
	 <td><label for="ssc">SSC Result:</label></td>
	 <td> <input type="ssc" id="ssc" name="ssc"></td>
	</tr>

	<tr>
	 <td>  <label for="course">Select a course you want to enroll:</label> </td>
	  <td>
	 <select name="course" id="course">
    <option value="cse">CSE</option>
    <option value="eee">EEE</option>
    <option value="cs">CS</option>
</td>
  </select>
	</tr>

	<tr>
	 <td>  <label for="year">Select a year to enroll:</label> </td>
	  <td>
	 <select name="year" id="year">
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
</td>
	</select>
</tr>

	<tr>
	 <td>  Select a semester to enroll: </td>
	 <td>  <select name="semester" >
		<option value="summer">summer</option>
		<option value="fall">FALL</option>
		<option value="Spring">Spring</option>
</td>
	</select>
</tr>


<?php echo $validateradio; ?>
</tr>

<tr>
  <td> </Td>
</tr>

<tr>

  <?php echo $validatecheckbox; ?>
  <?php echo $L1;?>

<?php echo $L2;?>

<?php echo $L3;?>
</tr>

<tr>
  <td><p></p><br></Td>
  </tr>
  <tr>

  <td><input type="submit" value="insert data"> </td>
  </tr>
  </table>
</form>

</body>
</html>
