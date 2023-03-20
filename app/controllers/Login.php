<?php

class Login extends Controller
{
    public function index()
    {
        $data["title"] = WEB_NAME . " - Login";
        if (isset($_SESSION["_id"])) {
            unset($_SESSION["_id"]);
        }
        $this->view("layout/login", $data);
    }
    public function request()
    {
        $res = $this->model("Login_model")->get_user($_POST["username"]);
        if (password_verify($_POST["password"], $res["password"])) {
            $_SESSION["_id"] = $res["id_user"];
            header("location:" . BASE_URL . "/dashboard");
            return;
        } else {
            $_SESSION["login_failed"] = true;
            header("location:" . BASE_URL . "/login");
        }
    }
}
