<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view("user/login");
    }

    public function loginn(){
        //xu ly login
        //echo "Login/login";
        $usr = (isset($_POST["username"]))?$_POST["username"]:"";
        $pas = (isset($_POST["password"]))?$_POST["password"]:"";
        if($usr != "" && $pas != ""){
            //check csdl
            $user = $this->Usermodel->getByUsername($usr);
            if($pas == $user["password"]){
                $this->session->set_Userdata("is_login", true);
                $this->session->set_Userdata("username", $usr);
                //echo $usr; exit();
                $this->session->set_Userdata("is_admin", $user["is_admin"]);
                $this->session->set_Userdata("is_teacher", $user["is_teacher"]);
                $this->session->set_Userdata("is_student", $user["is_student"]);
            }
            if($user["is_admin"]){
                redirect("admin/index");
            }
            redirect("course/index");
        }
        redirect("login/index");
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("login/index");
    }
}
?>