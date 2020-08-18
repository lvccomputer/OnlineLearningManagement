<?php
require_once __DIR__."/Basemodel.php";

class Quizmodel extends Basemodel{
    public function __construct()
    {
        parent::__construct();
        $this->table = "quiz";  
    }
}
?>
