<?php

class App{
    public function __construct(){
        $url = $this->parseUrl();
        var_dump($url);
    }
    public function parseUrl(){
        if(isset($_GET["url"])){
            $url =rtrim($_GET["url"],"/"); //Tidak memperbolehkan tanda / di akhir string
            $url = filter_var($url,FILTER_SANITIZE_URL);  //Ini berfungsi menyaring dan membersihkan data URL
            $url = explode("/",$url);
            return $url;
        }

    }
}