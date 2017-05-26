<?php

Class Grade_database extends CI_Model {

    public function cafeInfo(){
        return $this->db->query("select * from cafe_survey_common group by name order by cafe_survey_common_id desc")->result();
    }
    public function execute($val){
        return $this->db->query($val)->result();
    }
}
?>
