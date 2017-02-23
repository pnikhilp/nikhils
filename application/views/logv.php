<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
	<title>students</title>
</head>
<body>

<h1 align="center">STUDENT REGISTRATION</h1>
<table border="0" align="center">
<form method="post" action=<?php echo base_url()."index.php/Student/addstudent"?>>
<tr>
	<td>Name:</td><td><input type="text" name="name"></td>
</tr>
<tr>
<td>Gender:</td><td><input type="radio" name="gender" value="male">Male</td>
<td><input type="radio" name="gender" value="female"> Female</td>
</tr>

<tr>
	<td>Hobbies:</td><td><input type="checkbox" name="hobbie[]" value="music">Music</td>
</tr>
<tr><td></td><td><input type="checkbox" name="hobbie[]" value="playing">Playing</td></tr>
<tr><td></td><td><input type="checkbox" name="hobbie[]" value="reading">Reading</td></tr>

<tr>
<td>Country:</td><td><select name="country" style="width: 100px;height: 25px">
<option value="india">India</option>
<option value="pak">Pakistan</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="submit">
</td>
</tr>
</form>
</table>
<?php
if(isset('$student_details'))
{
	?>
	<table border="1">
		<tr><th>name</th></tr>
		<tr><td><?php echo $stud['name']?>;</td></tr>
	</table>
}

</body>
</html>