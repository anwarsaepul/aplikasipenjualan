<?php 

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        checklogin();
    }

    function index(){
        echo "Ini halaman administrator";
    }
}