<?php
class Dashboard extends Controller
{
    public function getUser(&$data)
    {
        if (!isset($_SESSION["_id"])) {
            return header("location:" . BASE_URL . "/login");
        }
        $data["db"]["user"] = $this->model("Dashboard_model")->getUserInfo($_SESSION["_id"], "avatar, username");
    }
    public function index()
    {
        $this->getUser($data);
        $scheme = [
            "tutorial" => [
                "count" => 0,
                "col" => "#00A1F1",
                "icon" => "/tutorials.png"
            ],
            "completed" => [
                "count" => 0,
                "col" => "#FF1D61",
                "icon" => "/task.png"
            ],
            "quizzes" => [
                "count" => 0,
                "col" => "#00F17D",
                "icon" => "/quiz.png"
            ],
            "lessons" => [
                "count" => 0,
                "col" => "#F17400",
                "icon" => "/lesson.png"
            ]
        ];
        $tutorials = $this->model("Dashboard_model")->getProgress($_SESSION["_id"]);
        foreach ($tutorials as $tutorial) {
            $scheme["tutorial"]["count"] += $tutorial["count"];
            if ($tutorial["complete"] == 1) {
                $scheme["completed"]["count"] = $tutorial["count"];
            }
        }
        $data["db"]["progress"] = $scheme;
        $data["title"] = WEB_NAME . " - dashboard";
        $this->view("layout/dashboard", $data);
    }
    public function profile()
    {
        $data["db"]["user"] = $this->model("Dashboard_model")->getUserInfo($_SESSION["_id"], "*");
        $data["title"] = WEB_NAME . " - profile";
        $this->view("layout/dashboard", $data, __FUNCTION__);
    }
    public function tutorials($params = "/")
    {
        if ($params != "/") {
            echo $params;
        }
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
    public function update_profile()
    {
        $profile_model = $this->model("Dashboard_model");
        if (isset($_POST) && isset($_SESSION["_id"])) {
            if (isset($_FILES["foto"]["tmp_name"]) && $_FILES["foto"]["tmp_name"] != "") {
                $file_size = $_FILES['foto']['size'];
                $file_type = $_FILES['foto']['type'];
                echo $file_size;
                if ($file_size > 2048000) {
                    $_SESSION["message"] = "file terlalu besar";
                } else if ($file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/jpeg") {
                    $image = file_get_contents($_FILES['foto']['tmp_name']);
                    $profile_model->updateAvatar($_SESSION["_id"], $image);
                } else {
                    $_SESSION["message"] = "format file tidak didukung " . $file_type;
                }
            }
            $profile_model->updateUser($_SESSION["_id"], $_POST);
            $_SESSION["message"] = isset($_SESSION["message"]) ? $_SESSION["message"] : "update profile success";
        }
        return header("location:" . BASE_URL . "/dashboard/profile");
    }
}
