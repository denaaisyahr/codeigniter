<?php

class Mahasiswa extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiwa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}