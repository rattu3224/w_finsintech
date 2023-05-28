<?php
/**
* This is a comment on the file to define what is it about.
* This comment can be before or after the namespace.
*/
namespace Html;

class DistanceController 
{
    function __construct()
    {
    }
    function index()
    {
        include_once('Views/map.php');
    }
}