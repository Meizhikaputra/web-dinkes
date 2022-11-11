<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        is_logged_in();
        $this->load->model('Pimpinan_model');
    }


    public function index()
    {
        $data['title'] = 'Laporan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['triwulan'] = $this->Pimpinan_model->triwulan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Laporan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['target'] = [
            'a' => 989, 'b' => 100, 'c' => 0.3, 'd' => 11738, 'e' => 39111,
            '100' => 100.2

        ];

        $data['cakupan'] = $this->Pimpinan_model->tw1ById($id);
        $data['puskesmas'] = $this->db->get('triwulan')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/detail', $data);
        $this->load->view('templates/footer');
    }
}
