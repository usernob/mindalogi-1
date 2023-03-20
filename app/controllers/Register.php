<?php

class Register extends Controller
{
    public function index()
    {
        $data["title"] = WEB_NAME . " - Register";
        $this->view("layout/register");
    }
    public function request()
    {
        $model = $this->model("Register_model");
        if ($model->get("username", $_POST["username"])["total"] > 0) {
            $_SESSION["username_exist"] = true;
            return header("location:" . BASE_URL . "/register");
        }
        $id = $model->newSignup($_POST);
        if (isset($id)) {
            $_SESSION["_id"] = $id;
            return header("location:" . BASE_URL . "/home");
        }
    }
}
