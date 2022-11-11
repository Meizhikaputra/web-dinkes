<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek gambar upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('current', '<div class="alert alert-danger" role="alert">
            Wrong Current Password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('current', '<div class="alert alert-danger" role="alert">
                New Password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('current', '<div class="alert alert-success" role="alert">
            Password change!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function triwulan()
    {
        $data['title'] = 'Laporan Triwulan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/triwulan', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Triwulan 1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('1', 'No 1', 'required|trim');
        $this->form_validation->set_rules('2', 'No 2', 'required|trim');
        $this->form_validation->set_rules('3', 'No 3', 'required|trim');
        $this->form_validation->set_rules('4', 'No 4', 'required|trim');
        $this->form_validation->set_rules('5', 'No 5', 'required|trim');
        $this->form_validation->set_rules('6', 'No 6', 'required|trim');
        $this->form_validation->set_rules('7', 'No 7', 'required|trim');
        $this->form_validation->set_rules('8', 'No 8', 'required|trim');
        $this->form_validation->set_rules('9', 'No 9', 'required|trim');
        $this->form_validation->set_rules('10', 'No 10', 'required|trim');
        $this->form_validation->set_rules('11', 'No 11', 'required|trim');
        $this->form_validation->set_rules('12', 'No 12', 'required|trim');
        $this->form_validation->set_rules('13', 'No 13', 'required|trim');
        $this->form_validation->set_rules('14', 'No 14', 'required|trim');
        $this->form_validation->set_rules('15', 'No 15', 'required|trim');
        $this->form_validation->set_rules('16', 'No 16', 'required|trim');
        $this->form_validation->set_rules('17', 'No 17', 'required|trim');
        $this->form_validation->set_rules('18', 'No 18', 'required|trim');
        $this->form_validation->set_rules('19', 'No 19', 'required|trim');
        $this->form_validation->set_rules('20', 'No 20', 'required|trim');
        $this->form_validation->set_rules('21', 'No 21', 'required|trim');
        $this->form_validation->set_rules('22', 'No 22', 'required|trim');
        $this->form_validation->set_rules('23', 'No 23', 'required|trim');
        $this->form_validation->set_rules('24', 'No 24', 'required|trim');
        $this->form_validation->set_rules('25', 'No 25', 'required|trim');
        $this->form_validation->set_rules('26', 'No 26', 'required|trim');
        $this->form_validation->set_rules('27', 'No 27', 'required|trim');
        $this->form_validation->set_rules('28', 'No 28', 'required|trim');
        $this->form_validation->set_rules('29', 'No 29', 'required|trim');
        $this->form_validation->set_rules('30', 'No 30', 'required|trim');
        $this->form_validation->set_rules('31', 'No 31', 'required|trim');
        $this->form_validation->set_rules('32', 'No 32', 'required|trim');
        $this->form_validation->set_rules('33', 'No 33', 'required|trim');
        $this->form_validation->set_rules('34', 'No 34', 'required|trim');
        $this->form_validation->set_rules('35', 'No 35', 'required|trim');
        $this->form_validation->set_rules('36', 'No 36', 'required|trim');
        $this->form_validation->set_rules('37', 'No 37', 'required|trim');
        $this->form_validation->set_rules('38', 'No 38', 'required|trim');
        $this->form_validation->set_rules('39', 'No 39', 'required|trim');
        $this->form_validation->set_rules('40', 'No 40', 'required|trim');
        $this->form_validation->set_rules('41', 'No 41', 'required|trim');
        $this->form_validation->set_rules('42', 'No 42', 'required|trim');
        $this->form_validation->set_rules('43', 'No 43', 'required|trim');
        $this->form_validation->set_rules('44', 'No 44', 'required|trim');
        $this->form_validation->set_rules('45', 'No 45', 'required|trim');
        $this->form_validation->set_rules('46', 'No 46', 'required|trim');
        $this->form_validation->set_rules('47', 'No 47', 'required|trim');
        $this->form_validation->set_rules('48', 'No 48', 'required|trim');
        $this->form_validation->set_rules('49', 'No 49', 'required|trim');
        $this->form_validation->set_rules('50', 'No 50', 'required|trim');
        $this->form_validation->set_rules('51', 'No 51', 'required|trim');
        $this->form_validation->set_rules('52', 'No 52', 'required|trim');
        $this->form_validation->set_rules('53', 'No 53', 'required|trim');
        $this->form_validation->set_rules('54', 'No 54', 'required|trim');
        $this->form_validation->set_rules('55', 'No 55', 'required|trim');
        $this->form_validation->set_rules('56', 'No 56', 'required|trim');
        $this->form_validation->set_rules('57', 'No 57', 'required|trim');
        $this->form_validation->set_rules('58', 'No 58', 'required|trim');
        $this->form_validation->set_rules('59', 'No 59', 'required|trim');
        $this->form_validation->set_rules('60', 'No 60', 'required|trim');
        $this->form_validation->set_rules('61', 'No 61', 'required|trim');
        $this->form_validation->set_rules('62', 'No 62', 'required|trim');
        $this->form_validation->set_rules('63', 'No 63', 'required|trim');
        $this->form_validation->set_rules('64', 'No 64', 'required|trim');
        $this->form_validation->set_rules('65', 'No 65', 'required|trim');
        $this->form_validation->set_rules('66', 'No 66', 'required|trim');
        $this->form_validation->set_rules('67', 'No 67', 'required|trim');
        $this->form_validation->set_rules('68', 'No 68', 'required|trim');
        $this->form_validation->set_rules('69', 'No 69', 'required|trim');
        $this->form_validation->set_rules('70', 'No 70', 'required|trim');
        $this->form_validation->set_rules('71', 'No 71', 'required|trim');
        $this->form_validation->set_rules('72', 'No 72', 'required|trim');
        $this->form_validation->set_rules('73', 'No 73', 'required|trim');
        $this->form_validation->set_rules('74', 'No 74', 'required|trim');
        $this->form_validation->set_rules('75', 'No 75', 'required|trim');
        $this->form_validation->set_rules('76', 'No 76', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->upload();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat. Data Berhasil di kirim!
            </div>');
            redirect('user/triwulan');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Laporan Triwulan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['target'] = [
            'a' => 989, 'b' => 100, 'c' => 0.3, 'd' => 11738, 'e' => 39111,
            '100' => 100.2

        ];
        $data['puskesmas'] =
            $this->db->order_by('id', 'DESC');
        $this->db->get('triwulan')->result_array();
        $data['cakupan'] = $this->User_model->detail($id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Triwulan 1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['triwulan'] = $this->User_model->detail($id);

        $this->form_validation->set_rules('1', 'No 1', 'required|trim');
        $this->form_validation->set_rules('2', 'No 2', 'required|trim');
        $this->form_validation->set_rules('3', 'No 3', 'required|trim');
        $this->form_validation->set_rules('4', 'No 4', 'required|trim');
        $this->form_validation->set_rules('5', 'No 5', 'required|trim');
        $this->form_validation->set_rules('6', 'No 6', 'required|trim');
        $this->form_validation->set_rules('7', 'No 7', 'required|trim');
        $this->form_validation->set_rules('8', 'No 8', 'required|trim');
        $this->form_validation->set_rules('9', 'No 9', 'required|trim');
        $this->form_validation->set_rules('10', 'No 10', 'required|trim');
        $this->form_validation->set_rules('11', 'No 11', 'required|trim');
        $this->form_validation->set_rules('12', 'No 12', 'required|trim');
        $this->form_validation->set_rules('13', 'No 13', 'required|trim');
        $this->form_validation->set_rules('14', 'No 14', 'required|trim');
        $this->form_validation->set_rules('15', 'No 15', 'required|trim');
        $this->form_validation->set_rules('16', 'No 16', 'required|trim');
        $this->form_validation->set_rules('17', 'No 17', 'required|trim');
        $this->form_validation->set_rules('18', 'No 18', 'required|trim');
        $this->form_validation->set_rules('19', 'No 19', 'required|trim');
        $this->form_validation->set_rules('20', 'No 20', 'required|trim');
        $this->form_validation->set_rules('21', 'No 21', 'required|trim');
        $this->form_validation->set_rules('22', 'No 22', 'required|trim');
        $this->form_validation->set_rules('23', 'No 23', 'required|trim');
        $this->form_validation->set_rules('24', 'No 24', 'required|trim');
        $this->form_validation->set_rules('25', 'No 25', 'required|trim');
        $this->form_validation->set_rules('26', 'No 26', 'required|trim');
        $this->form_validation->set_rules('27', 'No 27', 'required|trim');
        $this->form_validation->set_rules('28', 'No 28', 'required|trim');
        $this->form_validation->set_rules('29', 'No 29', 'required|trim');
        $this->form_validation->set_rules('30', 'No 30', 'required|trim');
        $this->form_validation->set_rules('31', 'No 31', 'required|trim');
        $this->form_validation->set_rules('32', 'No 32', 'required|trim');
        $this->form_validation->set_rules('33', 'No 33', 'required|trim');
        $this->form_validation->set_rules('34', 'No 34', 'required|trim');
        $this->form_validation->set_rules('35', 'No 35', 'required|trim');
        $this->form_validation->set_rules('36', 'No 36', 'required|trim');
        $this->form_validation->set_rules('37', 'No 37', 'required|trim');
        $this->form_validation->set_rules('38', 'No 38', 'required|trim');
        $this->form_validation->set_rules('39', 'No 39', 'required|trim');
        $this->form_validation->set_rules('40', 'No 40', 'required|trim');
        $this->form_validation->set_rules('41', 'No 41', 'required|trim');
        $this->form_validation->set_rules('42', 'No 42', 'required|trim');
        $this->form_validation->set_rules('43', 'No 43', 'required|trim');
        $this->form_validation->set_rules('44', 'No 44', 'required|trim');
        $this->form_validation->set_rules('45', 'No 45', 'required|trim');
        $this->form_validation->set_rules('46', 'No 46', 'required|trim');
        $this->form_validation->set_rules('47', 'No 47', 'required|trim');
        $this->form_validation->set_rules('48', 'No 48', 'required|trim');
        $this->form_validation->set_rules('49', 'No 49', 'required|trim');
        $this->form_validation->set_rules('50', 'No 50', 'required|trim');
        $this->form_validation->set_rules('51', 'No 51', 'required|trim');
        $this->form_validation->set_rules('52', 'No 52', 'required|trim');
        $this->form_validation->set_rules('53', 'No 53', 'required|trim');
        $this->form_validation->set_rules('54', 'No 54', 'required|trim');
        $this->form_validation->set_rules('55', 'No 55', 'required|trim');
        $this->form_validation->set_rules('56', 'No 56', 'required|trim');
        $this->form_validation->set_rules('57', 'No 57', 'required|trim');
        $this->form_validation->set_rules('58', 'No 58', 'required|trim');
        $this->form_validation->set_rules('59', 'No 59', 'required|trim');
        $this->form_validation->set_rules('60', 'No 60', 'required|trim');
        $this->form_validation->set_rules('61', 'No 61', 'required|trim');
        $this->form_validation->set_rules('62', 'No 62', 'required|trim');
        $this->form_validation->set_rules('63', 'No 63', 'required|trim');
        $this->form_validation->set_rules('64', 'No 64', 'required|trim');
        $this->form_validation->set_rules('65', 'No 65', 'required|trim');
        $this->form_validation->set_rules('66', 'No 66', 'required|trim');
        $this->form_validation->set_rules('67', 'No 67', 'required|trim');
        $this->form_validation->set_rules('68', 'No 68', 'required|trim');
        $this->form_validation->set_rules('69', 'No 69', 'required|trim');
        $this->form_validation->set_rules('70', 'No 70', 'required|trim');
        $this->form_validation->set_rules('71', 'No 71', 'required|trim');
        $this->form_validation->set_rules('72', 'No 72', 'required|trim');
        $this->form_validation->set_rules('73', 'No 73', 'required|trim');
        $this->form_validation->set_rules('74', 'No 74', 'required|trim');
        $this->form_validation->set_rules('75', 'No 75', 'required|trim');
        $this->form_validation->set_rules('76', 'No 76', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->ubah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat. Data Berhasil di Ubah!
            </div>');
            redirect('user/triwulan');
        }
    }


    public function hapus($id)
    {
        $this->User_model->hapusPendonor($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
        redirect('user/triwulan');
    }
}
