<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
    }



    // public function index()
    // {
    //     $data['title'] = 'Role';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $data['role'] = $this->db->get('user_role')->result_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('admin/index', $data);
    //     $this->load->view('templates/footer');
    // }

    public function index()
    {
        $data['title'] = 'Tambah Anggota';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);

            $this->session->set_flashdata('registration', '<div class="alert alert-success" role="alert">
            Akun Berhasil di Buat!
            </div>');
            redirect('admin/index');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $roleId = $this->input->post('roleId');

        $data = [
            'role_id' => $roleId,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Changed</div>');
    }


    private function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    ' . $email . ' has been activated! Please Login.</div>');
                    redirect('auth');
                } else {

                    $this->db->delet('user', ['email => $email']);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Token Expired</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Verify Invalid!. Wrong Token</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Verify Invalid!. Wrong Email</div>');
            redirect('auth');
        }
    }

    public function userall()
    {
        $data['title'] = 'Anggota';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['puskesmas'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/alluser', $data);
        $this->load->view('templates/footer');
    }



    public function triwulan()
    {
        $data['title'] = 'Laporan Triwulan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['puskesmas'] = $this->db->get('triwulan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/triwulan', $data);
        $this->load->view('templates/footer');
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

        $this->form_validation->set_rules('2', '2', 'required|trim');

        $data['cakupan'] = $this->Admin_model->tw1ById($id);
        $data['puskesmas'] = $this->db->get('triwulan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->verifikasi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di terima</div>');
            redirect('admin/triwulan');
        }
    }
    public function hapus($id)
    {
        $this->Admin_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
        redirect('admin/triwulan');
    }

    public function hapususer($id)
    {
        $this->Admin_model->hapususer($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            User Berhasil Dihapus!</div>');
        redirect('admin/userall');
    }

    public function registration()
    {
        $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/registration', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);

            $this->session->set_flashdata('registration', '<div class="alert alert-success" role="alert">
            Berhasil Menambah Pengguna!
            </div>');
            redirect('admin');
        }
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Triwulan 1';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['triwulan'] = $this->Admin_model->tw1ById($id);

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
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->ubah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat. Data Berhasil di Ubah!
            </div>');
            redirect('admin/triwulan');
        }
    }
}
