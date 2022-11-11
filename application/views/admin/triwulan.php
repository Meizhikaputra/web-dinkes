<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    $this->db->order_by('id', 'DESC');

    $puskesmas1 = $this->db->get('triwulan')->result_array();
    ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('message')) : ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Puskesmas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($puskesmas1 as $p) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= date('d F Y', $p['date_created']); ?></td>
                            <td>
                                <a href="<?= base_url('admin/detail/'); ?><?= $p['id']; ?>" class="badge badge-primary">Detail</a>
                                <?php if ($p['verifikasi'] == 1) : ?>
                                    <a href="<?= base_url(); ?>admin/ubah/<?= $p['id']; ?>" class="badge badge-success">Ubah</a>
                                    <a href="<?= base_url(); ?>admin/hapus/<?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus');">Delete</a>
                                <?php endif; ?>
                            </td>

                            <?php if ($p['verifikasi'] == 1) : ?>
                                <td class="text-gray">Belum diperiksa</td>
                            <?php elseif ($p['verifikasi'] == 2) : ?>
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
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->