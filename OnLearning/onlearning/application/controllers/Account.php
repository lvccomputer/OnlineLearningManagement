<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once __DIR__ . "/Admin.php";

class Account extends Admin
{
    public function insert()
    {
        $data = array(
            "content" => "user/new_user"
        );
        $this->load->view("layout_ad", $data);
        return;
    }

    public function add()
    {
        $user["username"] = ($_POST["username"] != "" ? $_POST["username"] : "");
        $user["password"] = ($_POST["password"] != "" ? $_POST["password"] : "");
        $user["is_admin"] = (isset($_POST["is_admin"])? 1:0);
        $user["is_teacher"] = (isset($_POST["is_teacher"])? 1:0);
        $user["is_student"] = (isset($_POST["is_student"])? 1:0);
        if ($user["username"] != "") {
            if ($this->Usermodel->add($user)) {
                redirect("account/index", "refresh");
            } else
                echo "Thêm không thành công!";
            return;
        }
    }

    public function index($p = 1)
    {
        //lay ra tất cả ds nguoi dung
        $data = array(
            "new_user" => $this->Usermodel->getAll(4, 4*($p-1)),
            "content" => "user/list_user",
            "total" => $this->Usermodel->countAll()
        );

        $this->load->view("layout_ad", $data);
        return;
    }

    public function update($id="")
    {
        $user["id"] = $id;
        $user["username"] = (isset($_POST["username"]) != "" ? $_POST["username"] : "");
        $user["password"] = (isset($_POST["password"]) != "" ? $_POST["password"] : "");
        $user["is_admin"] = (isset($_POST["is_admin"])? 1:0);
        $user["is_teacher"] = (isset($_POST["is_teacher"])? 1:0);
        $user["is_student"] = (isset($_POST["is_student"])? 1:0);
        if ($id != "" && $user["username"] != "") {
            if ($this->Usermodel->update($user)) {
                redirect("account/index");
            } else
                redirect("account/edit/".$user["id"]);
            return;
        }
    }

    public function edit($id=""){
        if($id != ""){
            $user = $this->Usermodel->getByID($id);
        
        $data = array(
            "user" => $user,
            "content" => "user/new_user"
        );
        $this->load->view("layout_ad", $data);
    }
        return;
    }

    public function delete($id = "")
    {
        if ($id != "") {
            $user = $this->Usermodel->getById($id);
        }
        $data = array(
            "user" => $user,
            "content" => "admin/delete_acc"
        );
        $this->load->view("layout_ad", $data);
    }

    public function dele($id)
    {
        if ($id != "") {
            $this->Usermodel->delete($id);
        }
        redirect("account/index", "refresh");
    }
}
?>