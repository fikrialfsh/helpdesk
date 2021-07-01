<?php

class aboutC extends CI_Controller
{

    public function index()
    {
        $this->load->view('/templates/header');
        $this->load->view('aboutV');
        $this->load->view('/templates/footer');
    }
}