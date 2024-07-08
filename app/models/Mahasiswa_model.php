<?php 
class Mahasiswa_model{
    
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllMahasiswa(){
        $this->db->query("SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }
    public function getDetailMahasiswa($id){
        $this->db->query("SELECT * FROM mahasiswa WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

}