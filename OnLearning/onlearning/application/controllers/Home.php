<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $data = array(
            "content" => "admin/home"
        );

        $this->load->view("layout_ad", $data);
        return;
    }

    public function list()
    {
        $data = array(
            "content" => "user/list_user"
        );

        $this->load->view("layout_ad", $data);
        return;
    }
}
?>