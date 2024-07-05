<?php

class Home extends Controller {
    public function index(){
        $data["nama"] = "Rizky ardiansyah";
        $data["umur"] = 20;
        $data["judul"] = "Home";

        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");

    }
}