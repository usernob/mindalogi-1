<?php

class Subs extends Controller
{
    public function index()
    {
        $this->view("layout/subs");
    }
    public function premium()
    {
        $this->model("Subs_model")->addPremium($_SESSION["_id"]);
        return header("location:" . BASE_URL . "/dashboard");
    }
}
