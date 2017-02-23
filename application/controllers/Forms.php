
<?php
/**
* 
*/
class Forms extends CI_Controller
{
	
	public function vali()
	{
		
$em=$_POST['email'];
$pass=$_POST['Password'];

 if ($em=='nikhil@gmail.com') 
{
	if ($pass=='compute456')
	 {
     echo "REGISTERED SUCCESSFULLY";
	 }
}	
}
}
// $conn=mysqli_connect("localhost","root","","core");
// //mysqli_select_db("core");
// $qr="insert into corephp(Email,Password) values('$em','$pass')";
// if(mysqli_query($conn,$qr))
//  {
//    echo "REGISTERED SUCCESSFULLY";
//   }
//  }
// }
?>

