<?php
// simple redirect
function redirect($page)
{
    header('Location: ' . URLROOT . "/" . $page);
};
