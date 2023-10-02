<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect("posts");
        }

        $data = [
            "title" => "SharePost",
            "description" => "simple social network build on top of ayoubmvc php framwork"
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = [
            "title" => "About us",
            "description" => "App to share posts with other users"
        ];
        $this->view("pages/about", $data);
    }
}
