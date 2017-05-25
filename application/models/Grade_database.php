<?php

Class Grade_database extends CI_Model {

    public function cafeInfo(){

        return $this->db->query(SELECT  * FROM bar_survey_common, bar_survey_grade WHERE bar_survey_common.bar_survey_common_id = bar_survey_grade.bar_survey_common_id);

    }
}
?>
