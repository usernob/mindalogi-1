<?php

class Login extends Controller
{
    public function index()
    {
        $this->view("layout/login");
    }
    public function request()
    {
        $this->model("Login_model")->get_login($_POST);
    }
}
