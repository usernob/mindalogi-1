<?php
class Tutorial extends Controller
{
    public function details($id)
    {
        $data["db"]["tutorial"] = $this->model("Tutorial_model")->getTutorialById($id);
        $this->view("layout/tutorial", $data);
    }
}
