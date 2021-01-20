<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        permission();
    }

    public function index()
    {
        $title["title"] = "CONTACTBOOK";
        $this->load->view('templates/header', $title);
        $this->load->view('templates/nav-top');
        $this->load->view('pages/mainpage');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
    }


}