<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('message')) : ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-6">

            <?= form_error('menu',  '<div class="alert alert-danger" role="alert">', '
            </div>'); ?>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">profile</th>
                        <th scope="col">Anggota</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($puskesmas as $p) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><img src="<?= base_url('assets/img/profile/') . $p['image']; ?>" class="rounded float-left" width="50px" height="40px"></td>
                            <td><?= $p['name']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/hapususer/') . $p['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus');">Delete</a>
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