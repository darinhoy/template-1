<?php

class userController extends BaseController {
    public function login() {
        $this->view('users/login');
    }


    public function register() {
              $this->view('users/register');
          }

    public function list() {
        $this->view('users/list');
    }
          
}