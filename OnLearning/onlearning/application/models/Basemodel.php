<?php

class Basemodel extends CI_Model
{
    //lay theo id tra ve duoi dang mang
    public function getById($id)
    {
        $qr = $this->db->query("Select * from $this->table where id = $id");
        $course = $qr->first_row("array");
        return $course;
    }

    public function getList()
    {
        $qr = $this->db->query("Select * from $this->table");
        $courses_array = $qr->result_array();
        return $courses_array;
    }

    public function add($news)
    {
        if ($this->db->insert($this->table, $news)) {
            return true;
        }
        return false;
    }

    public function getAll($limit = 10, $offset = 0)
    {
        $qr = $this->db->select("*");
        $qr = $this->db->limit($limit, $offset);
        $qr = $this->db->order_by("id", "desc");
        $qr = $this->db->get($this->table);
        if ($qr->num_rows()) {
            return $qr->result_array();
        }
        return array();
    }
    
    public function update($course)
    {
        $qr = $this->db->where('id', $course["id"]);
        if($qr->update($this->table, $course)){
            return true;
        }
        return false;
    }

    public function delete($id){
        $qr = $this->db->where('id', $id);
        return $qr->delete($this->table);
    }

    public function countAll(){
        //lay ra so ban ghi
        $this->db->select("count(id) as total");
        return $this->db->get($this->table)->first_row('array')['total'];
    }
}
?>