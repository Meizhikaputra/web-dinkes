<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan_model extends CI_Model
{
    public function triwulan()
    {
        return $this->db->get_where('triwulan', ['verifikasi' => 2])->result_array();
    }

    public function tw1ById($id)
    {
        return $this->db->get_where('triwulan', ['id' => $id])->row_array();
    }
}
