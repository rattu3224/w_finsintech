<?php
require DISTANCE__PLUGIN_DIR.'Html.php';
class DistanceController 
{
    function __construct()
    {
        // parent::construct();
    }
    function index()
    {
        $new = new Html\DistanceController();
        $new->index();
    }
}