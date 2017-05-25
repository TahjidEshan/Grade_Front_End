<?php

Class Grade_database extends CI_Model {

    public function cafeInfo(){
        return $this->db->query("SELECT  *, avg(rating) AS average FROM cafe_survey_common, cafe_survey_grade WHERE cafe_survey_common.cafe_survey_common_id = cafe_survey_grade.cafe_survey_common_id group by cafe_survey_grade.cafe_survey_common_id")->result();
    }
    public function execute($val){
        return $this->db->query($val)->result();
    }
}
?>
