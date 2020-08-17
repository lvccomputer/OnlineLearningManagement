<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userData("is_login")){
            redirect("login/index");
            return;
        }
        if(!$this->session->userData("is_admin")){
            redirect("home/index");
        }
    }

    public function index(){
        $data = array(
                    "content"=>"admin/home",
                    "username"=>$this->session->userData("username")
        );
        //echo $this->session->userData("username");
        $this->load->view("layout_ad", $data);
    }
}
?>