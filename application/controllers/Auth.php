<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function index()
    {
        $this->load->view('login');
    }
}
