<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'List Of Peoples';

        $this->load->model('Peoples_model', 'peoples');
        $data['peoples'] = $this->peoples->getPeople(12, 30);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}