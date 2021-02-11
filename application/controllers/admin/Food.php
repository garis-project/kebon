<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Food extends CI_Controller
{

    function index()
    {
        $this->load->view('food/index');
    }

    function create()
    {
        $this->load->view('food/create');
    }

    function store()
    {
        $this->input->post();
    }
}
