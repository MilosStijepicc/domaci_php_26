<?php

    class DB {
        public $baza;

        public function __construct() {
            $this->baza = mysqli_connect("localhost", "root", "", "php24");
        }
    }

?>