<?php
class Home extends Controller {
    public function __construct() {
       
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];
        $this->view(THEME . "index", $data);


    }
}
