<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once __DIR__."/Admin.php";

class Course extends Admin {

	public function index($p = 1)
	{
        $courses_array = $this->Coursemodel->getAll(8, 8*($p-1));

        $data = array(
            "content" => "course/home",
            "courses_array" => $courses_array,
            "total" => $this->Coursemodel->countAll()
        );

        $this->load->view("layout", $data);
    }

    public function list($p = 1)
	{
        $courses_array = $this->Coursemodel->getAll(6, 6*($p-1));

        $data = array(
            "content" => "course/list",
            "courses_array" => $courses_array,
            "total" => $this->Coursemodel->countAll()
        );

        $this->load->view("layout", $data);
    }

    public function detail($id="")
	{
        $this->load->model("Coursemodel");
        $course = $this->Coursemodel->getById($id);

        $data = array(
            "content" => "course/detail",
            "course" => $course
        );

        $this->load->view("layout", $data);
    }

    public function search($qt=""){
        $qt = (isset($_GET["query"]) != "" ? $_GET["query"] : "");
        //echo $qt;
        $courses_array = $this->Coursemodel->search($qt);
        $total = $this->Coursemodel->countSearch($qt);
        $data = array(
            "courses_array"=> $courses_array,
            "content" => "course/list",
            "total" => $total
        );
        $this->load->view("layout", $data);
        return;
    }
}