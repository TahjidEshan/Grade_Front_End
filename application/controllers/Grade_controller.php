<?php

Class Grade_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('grade_database');
    }

    public function index() {
         $data['cafe']=$this->grade_database->cafeinfo();
         $query="SELECT cafe_survey_grade.rating, cafe_survey_grade.grade_type_id, cafe_survey_common.cafe_survey_common_id FROM cafe_survey_grade, cafe_survey_common
WHERE cafe_survey_grade.cafe_survey_common_id = cafe_survey_common.cafe_survey_common_id";
         $data['cafeRating']=$this->grade_database->execute($query);
         $query="SELECT cafe_survey_common_id, avg( rating ) AS average FROM (SELECT cafe_survey_grade.rating, cafe_survey_grade.grade_type_id, cafe_survey_common.cafe_survey_common_id FROM cafe_survey_grade, cafe_survey_common WHERE cafe_survey_grade.cafe_survey_common_id = cafe_survey_common.cafe_survey_common_id
) AS tab GROUP BY cafe_survey_common_id";
         $data['cafeRatingAverage']=$this->grade_database->execute($query);
         $this->load->view('grade',$data);
    }
}
?>
