<?php
/**
* 
*/
class Student extends CI_Controller
{
	
	public function addstudent()
	{
		$stud['name'] = $this->input->post('name');
		$stud['gender'] = $this->input->post('gender');
		$st['hobbie'] = $this->input->post('hobbie');
		$stud['country'] = $this->input->post('country');
		//echo "string";
		//print_r($stud);
		$hobbies=implode(',', $st['hobbie']);
		$st['hobbie']=$hobbies;
		//echo $hobbies;
		$this->load->model('Studentmodel');
		$this->Studentmodel->addstud($stud);
	    
	    $data['student_details'] = $this->Studentmodel->select_data();
	    //print_r($data);
	    $this->load->view('logv',$data);
	}
}


?>