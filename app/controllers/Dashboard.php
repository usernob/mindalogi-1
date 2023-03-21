<?php
class Dashboard extends Controller
{
    public function getUser(&$data)
    {
        if (!isset($_SESSION["_id"])) {
            return header("location:" . BASE_URL . "/login");
        }
        $data["db"]["user"] = $this->model("Dashboard_model")->getUserInfo($_SESSION["_id"]);
    }
    public function index()
    {
        $this->getUser($data);
        $data["title"] = WEB_NAME . " - dashboard";
        $this->view("layout/dashboard", $data);
    }
    public function profile()
    {
        $this->getUser($data);
        $data["title"] = WEB_NAME . " - profile";
        $this->view("layout/dashboard", $data, __FUNCTION__);
    }
    public function tutorials()
    {
        $this->getUser($data);
        $data["title"] = WEB_NAME . " - tutorials";
        $this->view("layout/dashboard", $data, __FUNCTION__);
    }
    public function certificates()
    {
        $this->getUser($data);
        $data["title"] = WEB_NAME . " - certificates";
        $this->view("layout/dashboard", $data, __FUNCTION__);
    }
    public function logout()
    {
        unset($_SESSION["_id"]);
        header("location:" . BASE_URL . "/login");
    }
}
