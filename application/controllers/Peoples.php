<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'List Of Peoples';

        $this->load->model('Peoples_model', 'peoples');

        //load library
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/ci-app/peoples/index/';
        $config['total_rows'] = $this->peoples->countAllPeople();
        $config['per_page'] = 12;
        
        //styling
        $config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center pagination-sm">';
        $config['full_tag_close'] = '</ul> </nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&gt';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&lt';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}