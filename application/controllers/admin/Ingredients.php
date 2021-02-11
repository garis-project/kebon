<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ingredients extends CI_Controller
{

    function index()
    {
        $this->load->view('ingredients/index');
    }
}
