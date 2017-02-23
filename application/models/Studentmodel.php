<?php
/**
* 
*/
class Studentmodel extends CI_Model
{
	
	public function addstud($value)
	{
      
     $this->db->insert('student_detl',$value);
     echo "Success";
	}
    public function select_data()
    {
	$result = $this->db->select('*')->from('student_detl')->get();
	$res=$result->result_array();
	return $res;
    }
}


?>