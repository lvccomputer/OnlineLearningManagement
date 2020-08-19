<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once __DIR__ . "/Admin.php";

class Quiz extends Admin
{
    public function index($p = 1)
    {
        $quiz_list = $this->Quizmodel->getAll(5, 5 * ($p - 1));

        $data = array(
            "content" => "admin/quiz_list",
            "quiz_list" => $quiz_list,
            "total" => $this->Quizmodel->countAll()
        );

        $this->load->view("layout_ad", $data);
    }

    public function insert()
    {
        $data = array(
            "content" => "admin/new_quiz"
        );

        $this->load->view("layout_ad", $data);
        return;
    }

    public function add()
    {
        $quiz["quiz_name"] = ($_POST["quiz_name"] != "" ? $_POST["quiz_name"] : "");
        $quiz["quiz_time"] = ($_POST["quiz_time"] != "" ? $_POST["quiz_time"] : "");
        $quiz["quiz_describe"] = ($_POST["quiz_describe"] != "" ? $_POST["quiz_describe"] : "");
        if ($quiz["quiz_name"] != "") {
            if ($this->Quizmodel->add($quiz)) {
                redirect("quiz/index", "refresh");
            } else
                echo "Thêm mới không thành công!";
            return;
        }
    }

    public function update($id = "")
    {
        $quiz["id"] = $id;
        $quiz["quiz_name"] = (isset($_POST["quiz_name"]) != "" ? $_POST["quiz_name"] : "");
        $quiz["quiz_time"] = (isset($_POST["quiz_time"]) != "" ? $_POST["quiz_time"] : "");
        $quiz["quiz_describe"] = ($_POST["quiz_describe"] != "" ? $_POST["quiz_describe"] : "");
        if ($id != "" && $quiz["quiz_name"] != "") {
            if ($this->Quizmodel->update($quiz)) {
                redirect("quiz/index", "refresh");
            } else
                redirect("quiz/edit/" . $quiz["id"]);
            return;
        }
    }

    public function edit($id = "")
    {
        if ($id != "") {
            $quiz = $this->Quizmodel->getById($id);
        }
        $data = array(
            "quiz" => $quiz,
            "content" => "admin/new_quiz"
        );
        $this->load->view("layout_ad", $data);
        return;
    }

    public function delete($id = "")
    {
        if ($id != "") {
            $quiz = $this->Quizmodel->getById($id);
        }
        $data = array(
            "quiz" => $quiz,
            "content" => "delete"
        );
        $this->load->view("layout_ad", $data);
    }

    public function dele($id)
    {
        if ($id != "") {
            $this->Quizmodel->delete($id);
        }
        redirect("quiz/index", "refresh");
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
}
