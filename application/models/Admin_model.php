<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function tw1ById($id)
    {
        return $this->db->get_where('triwulan', ['id' => $id])->row_array();
    }

    public function verifikasi()
    {
        $data = [
            'verifikasi' => $this->input->post('2')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('triwulan', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('triwulan');
    }

    public function hapususer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function ubah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'cakupan1' => $this->input->post('1'),
            'cakupan2' => $this->input->post('2'),
            'cakupan3' => $this->input->post('3'),
            'cakupan4' => $this->input->post('4'),
            'cakupan5' => $this->input->post('5'),
            'cakupan6' => $this->input->post('6'),
            'cakupan7' => $this->input->post('7'),
            'cakupan8' => $this->input->post('8'),
            'cakupan9' => $this->input->post('9'),
            'cakupan10' => $this->input->post('10'),
            'cakupan11' => $this->input->post('11'),
            'cakupan12' => $this->input->post('12'),
            'cakupan13' => $this->input->post('13'),
            'cakupan14' => $this->input->post('14'),
            'cakupan15' => $this->input->post('15'),
            'cakupan16' => $this->input->post('16'),
            'cakupan17' => $this->input->post('17'),
            'cakupan18' => $this->input->post('18'),
            'cakupan19' => $this->input->post('19'),
            'cakupan20' => $this->input->post('20'),
            'cakupan21' => $this->input->post('21'),
            'cakupan22' => $this->input->post('22'),
            'cakupan23' => $this->input->post('23'),
            'cakupan24' => $this->input->post('24'),
            'cakupan25' => $this->input->post('25'),
            'cakupan26' => $this->input->post('26'),
            'cakupan27' => $this->input->post('27'),
            'cakupan28' => $this->input->post('28'),
            'cakupan29' => $this->input->post('29'),
            'cakupan30' => $this->input->post('30'),
            'cakupan31' => $this->input->post('31'),
            'cakupan32' => $this->input->post('32'),
            'cakupan33' => $this->input->post('33'),
            'cakupan34' => $this->input->post('34'),
            'cakupan35' => $this->input->post('35'),
            'cakupan36' => $this->input->post('36'),
            'cakupan37' => $this->input->post('37'),
            'cakupan38' => $this->input->post('38'),
            'cakupan39' => $this->input->post('39'),
            'cakupan40' => $this->input->post('40'),
            'cakupan41' => $this->input->post('41'),
            'cakupan42' => $this->input->post('42'),
            'cakupan43' => $this->input->post('43'),
            'cakupan44' => $this->input->post('44'),
            'cakupan45' => $this->input->post('45'),
            'cakupan46' => $this->input->post('46'),
            'cakupan47' => $this->input->post('47'),
            'cakupan48' => $this->input->post('48'),
            'cakupan49' => $this->input->post('49'),
            'cakupan50' => $this->input->post('50'),
            'cakupan51' => $this->input->post('51'),
            'cakupan52' => $this->input->post('52'),
            'cakupan53' => $this->input->post('53'),
            'cakupan54' => $this->input->post('54'),
            'cakupan55' => $this->input->post('55'),
            'cakupan56' => $this->input->post('56'),
            'cakupan57' => $this->input->post('57'),
            'cakupan58' => $this->input->post('58'),
            'cakupan59' => $this->input->post('59'),
            'cakupan60' => $this->input->post('60'),
            'cakupan61' => $this->input->post('61'),
            'cakupan62' => $this->input->post('62'),
            'cakupan63' => $this->input->post('63'),
            'cakupan64' => $this->input->post('64'),
            'cakupan65' => $this->input->post('65'),
            'cakupan66' => $this->input->post('66'),
            'cakupan67' => $this->input->post('67'),
            'cakupan68' => $this->input->post('68'),
            'cakupan69' => $this->input->post('69'),
            'cakupan70' => $this->input->post('70'),
            'cakupan71' => $this->input->post('71'),
            'cakupan72' => $this->input->post('72'),
            'cakupan73' => $this->input->post('73'),
            'cakupan74' => $this->input->post('74'),
            'cakupan75' => $this->input->post('75'),
            'cakupan76' => $this->input->post('76'),
            'date_created' => time(),
            'verifikasi' => 1
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('triwulan', $data);
    }
}
