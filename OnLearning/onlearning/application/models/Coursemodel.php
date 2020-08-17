<?php
require_once __DIR__."/Basemodel.php";

class Coursemodel extends Basemodel{
    public function __construct()
    {
        parent::__construct();
        $this->table = "courses";  
    }

    public function search($qt, $limit = 10, $offset = 0)
    {
        //return $this->db->query("select * from tintuc where tieude like '%".$qt."%'")->result_array();
        $this->preSearch($qt);
        $this->db->limit($limit, $offset);
        //$qr = $this->db->or_like("noidung", $qt);
        //$qr = $this->db->where("tieude like '%".$qt."%'");
        $qr = $this->db->get($this->table);
        if ($qr->num_rows()) {
            return $qr->result_array();
        }
        return array();
    }

    public function preSearch($qt){
        $this->db->select("*");
        $this->db->order_by("id", "desc");
        $this->db->like("course_name", $qt);
        //$this->db->or_like("course_discribe", $qt);
    }

    public function countSearch($qt){
        $this->preSearch($qt);
        $this->db->select('count(id) as total');
        return $this->db->get($this->table)->first_row('array')['total'];
    }
}