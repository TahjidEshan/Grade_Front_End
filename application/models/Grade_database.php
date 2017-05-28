<?php

Class Grade_database extends CI_Model {

    public function cafeInfo(){
        return $this->db->query()->result();
    }
    public function execute($val){
        return $this->db->query($val)->result();
    }
}
?>
