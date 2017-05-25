<?php

Class Grade_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('grade_database');
    }

    public function index() {
         $data['cafe']=$this->grade_database->cafeinfo();
         $query="select * from cafe_survey_grade, grade_type, cafe_survey_common where cafe_survey_grade.cafe_survey_common_id = cafe_survey_common.cafe_survey_common_id";
         $data['cafeRating']=$this->grade_database->execute($query);
         $this->load->view('grade',$data);
    }
}
?>
