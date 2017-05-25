<?php

Class Grade_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('grade_database');
    }

    public function index() {
         $data['cafe']=$this->grade_database->cafeinfo();
         $this->load->view('grade',$data);
    }
}
?>
