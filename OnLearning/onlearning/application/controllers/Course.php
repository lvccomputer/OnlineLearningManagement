<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

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
        $courses_array = $this->Coursemodel->getAll(5, 5*($p-1));

        $data = array(
            "content" => "course/list",
            "courses_array" => $courses_array,
            "total" => $this->Coursemodel->countAll()
        );

        $this->load->view("layout", $data);
    }

    public function all($p = 1)
	{
        $courses_array = $this->Coursemodel->getAll(5, 5*($p-1));

        $data = array(
            "content" => "course/course_all",
            "courses_array" => $courses_array,
            "total" => $this->Coursemodel->countAll()
        );

        $this->load->view("layout_ad", $data);
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
            "content" => "course/home",
            "total" => $total
        );
        $this->load->view("layout", $data);
        return;
    }

    public function searchCourse($qt=""){
        $qt = (isset($_GET["query"]) != "" ? $_GET["query"] : "");
        //echo $qt;
        $courses_array = $this->Coursemodel->search($qt);
        $total = $this->Coursemodel->countSearch($qt);
        $data = array(
            "courses_array"=> $courses_array,
            "content" => "admin/search",
            "total" => $total
        );
        $this->load->view("layout_ad", $data);
        return;
    }

    public function index1($p = 1)
    {
        $course_list = $this->Coursemodel->getAll(5, 5 * ($p - 1));

        $data = array(
            "content" => "admin/course_list",
            "course_list" => $course_list,
            "total" => $this->Coursemodel->countAll()
        );

        $this->load->view("layout_ad", $data);
    }

    public function insert()
    {
        $data = array(
            "content" => "admin/new_course"
        );

        $this->load->view("layout_ad", $data);
        return;
    }

    public function add()
    {
        $course["course_name"] = ($_POST["course_name"] != "" ? $_POST["course_name"] : "");
        $course["qty_lesson"] = ($_POST["qty_lesson"] != "" ? $_POST["qty_lesson"] : "");
        $course["course_describe"] = ($_POST["course_describe"] != "" ? $_POST["course_describe"] : "");
        if ($course["course_name"] != "") {
            if ($this->Coursemodel->add($course)) {
                redirect("course/index1", "refresh");
            } else
                echo "Thêm mới không thành công!";
            return;
        }
    }

    public function update($id = "")
    {
        $course["id"] = $id;
        $course["course_name"] = (isset($_POST["course_name"]) != "" ? $_POST["course_name"] : "");
        $course["qty_lesson"] = (isset($_POST["qty_lesson"]) != "" ? $_POST["qty_lesson"] : "");
        $course["course_describe"] = ($_POST["course_describe"] != "" ? $_POST["course_describe"] : "");
        if ($id != "" && $course["quiz_name"] != "") {
            if ($this->Coursemodel->update($course)) {
                redirect("course/index1", "refresh");
            } else
                redirect("course/edit/" . $course["id"]);
            return;
        }
    }

    public function edit($id = "")
    {
        if ($id != "") {
            $course = $this->Coursemodel->getById($id);
        }
        $data = array(
            "course" => $course,
            "content" => "admin/new_course"
        );
        $this->load->view("layout_ad", $data);
        return;
    }

    public function delete($id = "")
    {
        if ($id != "") {
            $course = $this->Coursemodel->getById($id);
        }
        $data = array(
            "course" => $course,
            "content" => "admin/delete_course"
        );
        $this->load->view("layout_ad", $data);
    }

    public function dele($id)
    {
        if ($id != "") {
            $this->Coursemodel->delete($id);
        }
        redirect("course/index1", "refresh");
    }

}