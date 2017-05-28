<?php

Class Grade_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('grade_database');
    }

    public function index() {

        $data['cafe'] = $this->grade_database->execute("select * from cafe_survey_common group by name order by cafe_survey_common_id desc");
        $data['cafeRating'] = $this->grade_database->execute("SELECT cafe_survey_grade.rating, cafe_survey_grade.grade_type_id, cafe_survey_common.cafe_survey_common_id FROM cafe_survey_grade, cafe_survey_common WHERE cafe_survey_grade.cafe_survey_common_id = cafe_survey_common.cafe_survey_common_id");
        $data['cafeRatingAverage'] = $this->grade_database->execute("SELECT cafe_survey_common_id, avg( rating ) AS average FROM (SELECT cafe_survey_grade.rating, cafe_survey_grade.grade_type_id, cafe_survey_common.cafe_survey_common_id FROM cafe_survey_grade, cafe_survey_common WHERE cafe_survey_grade.cafe_survey_common_id = cafe_survey_common.cafe_survey_common_id) AS tab GROUP BY cafe_survey_common_id");

        $data['bar'] = $this->grade_database->execute("select * from bar_survey_common group by name order by bar_survey_common_id desc");
        $data['barRating'] = $this->grade_database->execute("SELECT bar_survey_grade.rating, bar_survey_grade.grade_type_id, bar_survey_common.bar_survey_common_id FROM bar_survey_grade, bar_survey_common WHERE bar_survey_grade.bar_survey_common_id = bar_survey_common.bar_survey_common_id");
        $data['barRatingAverage'] = $this->grade_database->execute("SELECT bar_survey_common_id, avg( rating ) AS average FROM (SELECT bar_survey_grade.rating, bar_survey_grade.grade_type_id, bar_survey_common.bar_survey_common_id FROM bar_survey_grade, bar_survey_common WHERE bar_survey_grade.bar_survey_common_id = bar_survey_common.bar_survey_common_id) AS tab GROUP BY bar_survey_common_id");

        $data['resturant'] = $this->grade_database->execute("select * from resturant_survey_common group by name order by resturant_survey_common_id desc");
        $data['resturantRating'] = $this->grade_database->execute("SELECT resturant_survey_grade.rating, resturant_survey_grade.grade_type_id, resturant_survey_common.resturant_survey_common_id FROM resturant_survey_grade, resturant_survey_common WHERE resturant_survey_grade.resturant_survey_common_id = resturant_survey_common.resturant_survey_common_id");
        $data['resturantRatingAverage'] = $this->grade_database->execute("SELECT resturant_survey_common_id, avg( rating ) AS average FROM (SELECT resturant_survey_grade.rating, resturant_survey_grade.grade_type_id, resturant_survey_common.resturant_survey_common_id FROM resturant_survey_grade, resturant_survey_common WHERE resturant_survey_grade.resturant_survey_common_id = resturant_survey_common.resturant_survey_common_id) AS tab GROUP BY resturant_survey_common_id");

        $data['poll_site'] = $this->grade_database->execute("select * from poll_site_survey_common group by name order by poll_site_survey_common_id desc");
        $data['poll_siteRating'] = $this->grade_database->execute("SELECT poll_site_survey_grade.rating, poll_site_survey_grade.grade_type_id, poll_site_survey_common.poll_site_survey_common_id FROM poll_site_survey_grade, poll_site_survey_common WHERE poll_site_survey_grade.poll_site_survey_common_id = poll_site_survey_common.poll_site_survey_common_id");
        $data['poll_siteRatingAverage'] = $this->grade_database->execute("SELECT poll_site_survey_common_id, avg( rating ) AS average FROM (SELECT poll_site_survey_grade.rating, poll_site_survey_grade.grade_type_id, poll_site_survey_common.poll_site_survey_common_id FROM poll_site_survey_grade, poll_site_survey_common WHERE poll_site_survey_grade.poll_site_survey_common_id = poll_site_survey_common.poll_site_survey_common_id) AS tab GROUP BY poll_site_survey_common_id");

        $this->load->view('grade', $data);
    }

}
?>
