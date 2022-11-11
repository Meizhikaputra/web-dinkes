<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $this->db->order_by('id', 'DESC');
    $triwulan1 = $this->db->get_where('triwulan', ['verifikasi' => 2])->result_array();
    ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Puskesmas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($triwulan1 as $p) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= date('d F Y', $p['date_created']); ?></td>
                            <td>
                                <a href="<?= base_url('pimpinan/detail/'); ?><?= $p['id']; ?>" class="badge badge-primary">Detail</a>
                            </td>
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