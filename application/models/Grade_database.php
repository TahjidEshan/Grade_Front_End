<?php

Class Grade_database extends CI_Model {

    public function cafeInfo(){

        return $this->db->query("SELECT  * FROM cafe_survey_common, cafe_survey_grade WHERE cafe_survey_common.cafe_survey_common_id = cafe_survey_grade.cafe_survey_common_id")->result();

    }
}
?>
