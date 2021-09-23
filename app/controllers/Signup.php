<?php
class Signup extends Controller {
    public function __construct() {
       
    }

    public function index() {
        $data = [
            'title' => 'Signup'
        ];

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            show($_POST);
        }

        $this->view("signup", $data);


    }
}
