<!-- Begin Page Content -->
<?php
$triwulan = $this->db->get_where('triwulan', ['email' => $user['email']])->result_array();
$this->db->order_by('id', 'DESC');
$triwulan1 = $this->db->get_where('triwulan', ['email' => $user['email']])->result_array();
?>
<div class="container-fluid">




    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h3 class="h3 mb-4 text-gray-800 text-center">Laporan Yang Sudah Terkirim </h3>
    <?php if ($this->session->flashdata('message')) : ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>

    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-primary mb-3">Buat Laporan</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($triwulan1 as $t) : ?>

                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $t['nama']; ?></td>
                    <td><?= date('d F Y', $t['date_created']); ?></td>

                    <td>
                        <a href="<?= base_url('user/detail/'); ?><?= $t['id']; ?>" class="badge badge-primary">Detail</a>
                        <?php if ($t['verifikasi'] == 1) : ?>
                            <a href="<?= base_url(); ?>user/ubah/<?= $t['id']; ?>" class="badge badge-success">Ubah</a>

                            <a href="<?= base_url(); ?>user/hapus/<?= $t['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus');">Delete</a>
                        <?php endif; ?>
                    </td>
                    <?php if ($t['verifikasi'] == 1) : ?>
                        <td class="text-gray">Belum diperiksa</td>
                    <?php elseif ($t['verifikasi'] == 2) : ?>
                        <td class="text-success">Diterima</td>
                    <?php else : ?>
                        <td class="text-danger">Ditolak</td>
                    <?php endif; ?>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->