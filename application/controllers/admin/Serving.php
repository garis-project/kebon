<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serving extends CI_Controller
{

    function index()
    {
        $this->load->view('serving/index');
    }
}
