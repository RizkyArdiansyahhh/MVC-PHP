<?php
class About extends Controller{

    public function index($name = "Rizky ardiansyah", $work="Software Engginer"){

        $data["judul"] = "About";

        $this->view("templates/header", $data);
        $this->view("about/index");
        $this->view("templates/footer");
    }

    public function page(){

        $data["judul"] = "Page";

        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}