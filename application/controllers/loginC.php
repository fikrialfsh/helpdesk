<?php

class loginC extends CI_Controller
{

    public function index()
    {
        $this->load->view('loginV');
        $this->load->view('/templates/footer');
    }
}
