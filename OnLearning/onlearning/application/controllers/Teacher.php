<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function index($p = 1)
	{
        $teacher_list = $this->Teachermodel->getAll(2, 2*($p-1));

        $data = array(
            "content" => "teacher/list_teacher",
            "teacher_list" => $teacher_list,
            "total" => $this->Teachermodel->countAll()
        );

        $this->load->view("layout", $data);
    }
}
?>