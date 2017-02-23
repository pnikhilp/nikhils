<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
	<title></title>
</head>
<body>
<h1>REGISTRATION FORM</h1>
<form method="post" action=<?php echo base_url()."index.php/Forms/vali";?>>
<table>
	<tr>
		<td>Email:</td><td><input type="text" name="email" placeholder="Email"></td>
	</tr>
	<tr>
		<td>Password:</td><td><input type="Password" name="Password" placeholder="Password"></td>
	</tr>
	<tr>
		<td><input type="submit" name=""></td>
	</tr>
</table>
</form>
</body>
</html>