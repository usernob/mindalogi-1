<?php
class Tutorial extends Controller
{
    public function details($id)
    {
        $model = $this->model("Tutorial_model");
        $data["db"]["tutorial"] = $model->getTutorialById($id);
        if ($model->checkProgress($_SESSION["_id"], $id) < 1) {
            $model->addTutorialProgress($_SESSION["_id"], $id);
        }
        $this->view("layout/tutorial", $data);
    }
    public function complete($id)
    {
        $this->model("Tutorial_model")->setComplete($_SESSION["_id"], $id);
        return header("location:" . BASE_URL . "/dashboard");
    }
}
