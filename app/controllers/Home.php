<?php
    class Home extends Controller{


        public function index() {
            $name = 'Sven';
            $this->view('home/index', ['name' => $name]);

        }

    }
