<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {
    
    function getData() {
            $query = $this->db->get('obat');
            return $query->result_array();
        }

    public function GetBarang($where="") {
        $data= $this->db->query('select * from obat '.$where);
        return $data->result_array();
    }
    
    public function InsertData($tabelName, $data) {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }
    
    public function UpdateData($tableName, $data, $where) {
        $res = $this->db->update($tableName, $data, $where);
        return $res;
        
    }
    
    public function DeleteData($tableName, $where) {
         $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function save($url){
        $this->db->set('pic', $url);
        $this->db->insert('obat');
    }

    public function login($table,$where){      
        return $this->db->get_where($table,$where);
    }

    function data($number,$offset,$jeniscode){
        if($jeniscode == 1){
            $this->db->where("(jeniscode = 1)");
            return $query = $this->db->get('obat',$number,$offset)->result();   
        } else if($jeniscode == 2){
            $this->db->where("(jeniscode = 2)");
            return $query = $this->db->get('obat',$number,$offset)->result();   
        } else if ($jeniscode == 3){
            $this->db->where("(jeniscode = 3)");
            return $query = $this->db->get('obat',$number,$offset)->result();   
        } else{
            return $query = $this->db->get('obat',$number,$offset)->result();
        }  
    }
 
    function jumlah_data($jeniscode){
        if($jeniscode == 1){
            $this->db->where("(jeniscode = 1)");
            return $this->db->get('obat')->num_rows();
        } else if($jeniscode == 2){
            $this->db->where("(jeniscode = 2)");
            return $this->db->get('obat')->num_rows();
        } else if($jeniscode == 3){
            $this->db->where("(jeniscode = 3)");
            return $this->db->get('obat')->num_rows();
        } else{
            return $this->db->get('obat')->num_rows();
        }
        
    }

    function search($keyword)
    {
        $this->db->like('namaObat',$keyword);
        $query  =   $this->db->get('obat');
        return $query->result();
    }
}
