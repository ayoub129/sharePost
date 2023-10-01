<?php

/*
 * Base Controller
 * Load Models and Views
 */

class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once "../app/models/" . $model . ".php";

        // instatiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // check for the view file
        if (file_exists("../app/views/" . $view . ".php")) {
            require_once "../app/views/" . $view . ".php";
        } else {
            // View does not exist
            die("View Does not exist");
        }
    }
}
