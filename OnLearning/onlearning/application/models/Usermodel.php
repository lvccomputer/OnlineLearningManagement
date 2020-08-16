<?php
require_once __DIR__."/Basemodel.php";

class Usermodel extends Basemodel{
    public function __construct()
    {
        parent::__construct();
        $this->table = "user";
    }

    public function getByUsername($username){
        $qr = $this->db->query("Select * from $this->table where username = '$username'");
        $user = $qr->first_row("array");
        return $user;
    }
}
?>