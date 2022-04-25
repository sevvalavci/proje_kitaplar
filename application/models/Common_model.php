<?php
class common_model extends CI_Model{


public function get($where,$table){
    return $this->db->where($where)->get($table)->row();
}
public function insert($table,$data){
    return $this->db->insert($table,$data);
}





}