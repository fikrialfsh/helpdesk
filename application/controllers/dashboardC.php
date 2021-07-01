<?php

class dashboardC extends CI_Controller
{

    public function index()
    {
        $this->load->view('/templates/header');
        $this->load->view('dashboardV');
        $this->load->view('/templates/footer');
    }
}
