<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h2 class=" mb-5 text-center">Laporan Triwulan dari : Puskesmas</h2>

    <?php if ($cakupan['verifikasi'] == 2) : ?>
        <h3 class="mb-4 text-success">Data Sudah di Terima</h3>
    <?php endif; ?>

    <small style="font-size: 12px;">
        <div class="row">
            <div class="col-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Indikator</th>
                            <th scope="col">Target</th>
                            <th scope="col">Realisasi</th>
                            <th scope="col">Capaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 1 -->
                        <?php $i = 1; ?>
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Angka Kematian Bayi Per 1000 KH</td>
                            <td>4.1</td>
                            <td><?= round($cakupan['cakupan1'] / $target['a'] * 4.1); ?></td>
                            <td><?= round($cakupan['cakupan1'] / $target['a'] * 4.1); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Bayi yang meninggal dalam 1 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan1']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Kelahiran Hidup dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>989</td>
                            <td></td>
                        </tr>
                        <!-- 2 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Angka Kematian Bayi Per 100.000 KH</td>
                            <td>100</td>
                            <td><?= round($cakupan['cakupan2'] / $target['a'] * 100); ?></td>
                            <td><?= round($cakupan['cakupan2'] / $target['a'] * 100); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kematian ibu melahirkan dalam 1 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan2']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Kelahiran Hidup dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>989</td>
                            <td></td>
                        </tr>
                        <!-- 3 -->
                        <tr>
                            <th scope="row" class="bg-primary"><?= $i++; ?></th>
                            <td>Index Keluarga Sehat</td>
                            <td>4.1</td>
                            <td><?= round($cakupan['cakupan3'] / 36257 * 0.3); ?></td>
                            <td><?= round($cakupan['cakupan3'] / 36257 * 0.3); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah keluarga dengan IKS >0.800</td>
                            <td></td>
                            <td><?= $cakupan['cakupan3']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh keluarga dikota</td>
                            <td></td>
                            <td>36257</td>
                            <td></td>
                        </tr>
                        <!-- 4 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Pelayanan Kesehatan Ibu Hamil(k4)</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan4'] / 4705 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan4'] / 4705 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kunjungan ibu hamil K4 </td>
                            <td></td>
                            <td><?= $cakupan['cakupan4']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ibu hamil</td>
                            <td></td>
                            <td>4705</td>
                            <td></td>
                        </tr>
                        <!-- 5 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Komplikasi kebidanan yang ditangani</td>
                            <td>79%</td>
                            <td><?= round($cakupan['cakupan5'] / 941 * 79); ?>%</td>
                            <td><?= round($cakupan['cakupan5'] / 941 * 79); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah komplikasi kebidanan yang mendapatkan penanganan definitif di Kota Lubuklinggau dalam kurun waktu tertentu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan5']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ibu dengan komplikasi kebidanan di Kota Lubuklinggau dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>941</td>
                            <td></td>
                        </tr>
                        <!-- 6 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan pertolongan persalinan oleh nakes yang memiliki kompetensi</td>
                            <td>96%</td>
                            <td><?= round($cakupan['cakupan6'] / 4493 * 96); ?>%</td>
                            <td><?= round($cakupan['cakupan6'] / 4493 * 96); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah ibu bersalin yang ditolong oleh nakes di Kota Lubuklinggau pada kurun waktu tertentu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan6']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh sasaran ibu bersalin di Kota Lubuklinggau pada kurun waktu yang sama</td>
                            <td></td>
                            <td>4493</td>
                            <td></td>
                        </tr>
                        <!-- 7 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan pelayanan nifas</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan7'] / 4493 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan7'] / 4493 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kunjungan ibu nifas</td>
                            <td></td>
                            <td><?= $cakupan['cakupan7']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ibu nifas</td>
                            <td></td>
                            <td>4493</td>
                            <td></td>
                        </tr>
                        <!-- 8 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Neonatus dengan komplikasi yang ditangani</td>
                            <td>85%</td>
                            <td><?= round($cakupan['cakupan8'] / 122 * 85); ?>%</td>
                            <td><?= round($cakupan['cakupan8'] / 122 * 85); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kunjungan ibu nifas</td>
                            <td></td>
                            <td><?= $cakupan['cakupan8']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ibu nifas</td>
                            <td></td>
                            <td>122</td>
                            <td></td>
                        </tr>
                        <!-- 9 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan pelayanan kesehatan bayi baru lahir (Kn Lengkap)</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan9'] / 798 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan9'] / 798 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah bayi baru lahir usia 0-28 hari yang mendapat pelayanan kesehatan bayi baru lahir sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan9']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah bayi baru lahir di Kota Lubuklinggau dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>798</td>
                            <td></td>
                        </tr>
                        <!-- 10 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Pelayanan Kesehatan anak sekolah usia pendidikan dasar (Kelas 1, dan Kelas 7, dan Kelas 9)</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan10'] / 4719 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan10'] / 4719 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah anak sekolah yang mendapatkan pelayanan sesuai standar di wilayah tertentu pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan10']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah anak sekolah di wilayah tertentu pada kurun waktu yang sama</td>
                            <td></td>
                            <td>4719</td>
                            <td></td>
                        </tr>
                        <!-- 11 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelayanan Kesehatan Usia Produktif</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan11'] / 39983 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan11'] / 39983 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah orang usia 15-59 tahun di wilayah tertentu yang mendapat skrining kesehatan sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan11']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah orang usia 15-59 tahun di wilayah tertentu dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>39983</td>
                            <td></td>
                        </tr>
                        <!-- 12 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelayanan Kesehatan Usia Lanjut</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan12'] / 21758 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan12'] / 21758 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah orang berusia 60 tahun atau lebih yang mendapatkan pelayanan kesehatan sesuai standar minimal 1 kali di wilayah tertentu dalam kurun waktu 1 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan12']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah orang berusia 60 tahun atau lebih di wilayah tertentu dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>21758</td>
                            <td></td>
                        </tr>
                        <!-- 13 -->
                        <tr>
                            <th scope="row" class="bg-primary"><?= $i++; ?></th>
                            <td>Prevalensi Balita gizi Buruk</td>
                            <td>1.3</td>
                            <td><?= round($cakupan['cakupan13'] / 24460 * 1.3); ?>%</td>
                            <td><?= round($cakupan['cakupan13'] / 24460 * 1.3); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah balita gizi buruk</td>
                            <td></td>
                            <td><?= $cakupan['cakupan13']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 14 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi balita gizi buruk mendapat perawatan sesuai standar</td>
                            <td>100</td>
                            <td>0%</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah balita gizi buruk yang mendapat perawatan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan14']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita gizi buruk</td>
                            <td></td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <!-- 15 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi stunting pada balita</td>
                            <td>15</td>
                            <td><?= round($cakupan['cakupan15'] / 24460 * 15); ?></td>
                            <td><?= round($cakupan['cakupan15'] / 24460 * 15); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah balita yang mengalami stunting</td>
                            <td></td>
                            <td><?= $cakupan['cakupan15']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 16 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi stunting sangat pendek pada balita</td>
                            <td>2.5</td>
                            <td><?= round($cakupan['cakupan16'] / 24460 * 2.5); ?></td>
                            <td><?= round($cakupan['cakupan16'] / 24460 * 2.5); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah balita yang mengalami stunting sangat pendek</td>
                            <td></td>
                            <td><?= $cakupan['cakupan16']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 17 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi stunting pada baduta</td>
                            <td>7.0</td>
                            <td><?= round($cakupan['cakupan17'] / 14109 * 7.0); ?></td>
                            <td><?= round($cakupan['cakupan17'] / 14109 * 7.0); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah baduta yang mengalami stunting</td>
                            <td></td>
                            <td><?= $cakupan['cakupan17']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah baduta</td>
                            <td></td>
                            <td>14109</td>
                            <td></td>
                        </tr>
                        <!-- 18 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi stunting sangat pendek pada baduta</td>
                            <td>1.7</td>
                            <td><?= round($cakupan['cakupan17'] / 14109 * 1.7); ?></td>
                            <td><?= round($cakupan['cakupan17'] / 14109 * 1.7); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah baduta yang mengalami stunting sangat pendek</td>
                            <td></td>
                            <td><?= $cakupan['cakupan17']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah baduta</td>
                            <td></td>
                            <td>14109</td>
                            <td></td>
                        </tr>
                        <!-- 19 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi anak balita yang kurus (wasting)</td>
                            <td>8.1</td>
                            <td><?= round($cakupan['cakupan19'] / 14190 * 8.1); ?></td>
                            <td><?= round($cakupan['cakupan19'] / 14190 * 8.1); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah balita yang kurus</td>
                            <td></td>
                            <td><?= $cakupan['cakupan19']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah baduta</td>
                            <td></td>
                            <td>14190</td>
                            <td></td>
                        </tr>
                        <!-- 20 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi wasting sangat kurus pada balita</td>
                            <td>1.4</td>
                            <td><?= round($cakupan['cakupan20'] / 24460 * 1.4); ?></td>
                            <td><?= round($cakupan['cakupan20'] / 24460 * 1.4); ?></td>
                        </tr>
                        <tr>
                            <th scope="row""></th>
                        <td>Jumlah balita yang mengalami wasting sangat kurus</td>
                        <td></td>
                        <td><?= $cakupan['cakupan20']; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope=" row""></th>
                            <td>Jumlah balita</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 21 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Angka Kematian balita (Per 1000 balita)</td>
                            <td>3</td>
                            <td><?= round($cakupan['cakupan21'] / 24460 * 3); ?></td>
                            <td><?= round($cakupan['cakupan21'] / 24460 * 3); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kematian balita dalam 1 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan21']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita hidup dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 22 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Pelayanan kesehatan balita</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan22'] / 24460 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan22'] / 24460 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah anak balita yang mendapatkan pelayanan kesehatan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan22']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah balita</td>
                            <td></td>
                            <td>24460</td>
                            <td></td>
                        </tr>
                        <!-- 23 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Persentase anemia pada ibu hamil</td>
                            <td>25%</td>
                            <td><?= round($cakupan['cakupan23'] / 726 * 25); ?>%</td>
                            <td><?= round($cakupan['cakupan23'] / 726 * 25); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah ibu hamil yang menderita anemia</td>
                            <td></td>
                            <td><?= $cakupan['cakupan23']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh ibu hamil yang diperiksa</td>
                            <td></td>
                            <td>726</td>
                            <td></td>
                        </tr>
                        <!-- 24 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Ibu hamil yang mendapatkan Fe</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan24'] / 4705 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan24'] / 4705 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah ibu hamil yang mendapatkan minimal 90 tablet Fe selama periode kehamilannya pada wilayah dan kurun waktu tertentu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan24']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ibu hamil pada wilayah dan kurun waktu yang sama</td>
                            <td></td>
                            <td>4705</td>
                            <td></td>
                        </tr>
                        <!-- 25 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Puskesmas yang terakreditasi minimal utama</td>
                            <td>56%</td>
                            <td><?= round($cakupan['cakupan25'] / 9 * 56); ?>%</td>
                            <td><?= round($cakupan['cakupan25'] / 9 * 56); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Puskesmas yang terakreditasi minimal utama</td>
                            <td></td>
                            <td><?= $cakupan['cakupan25']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah seluruh Puskesmas yang terakreditasi</td>
                            <td></td>
                            <td>9</td>
                            <td></td>
                        </tr>
                        <!-- 26 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Puskesmas Perkotaan yang Memiliki Gedung sesuai Standar</td>
                            <td>60%</td>
                            <td><?= round($cakupan['cakupan26'] / 10 * 60); ?>%</td>
                            <td><?= round($cakupan['cakupan26'] / 10 * 60); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Puskesmas Perkotan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan26']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Puskesmas</td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 27 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prosentase Fasilitas Kesehatan yang memiliki SDMK sesuai standar</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan27'] / 11 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan27'] / 11 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Fasilitas Kesehatan yang memiliki SDMK sesuai standar</td>
                            <td></td>
                            <td><?= $cakupan['cakupan27']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Fasilitas Kesehatan</td>
                            <td></td>
                            <td>11</td>
                            <td></td>
                        </tr>
                        <!-- 28 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan peningkatan sarana prasarana puskesmas (ASPAK)</td>
                            <td>80%</td>
                            <td><?= round($cakupan['cakupan28'] / 11 * 80); ?>%</td>
                            <td><?= round($cakupan['cakupan28'] / 11 * 80); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Sarana dan prasaranadi Puskesmas yang sesuai standar</td>
                            <td></td>
                            <td><?= $cakupan['cakupan28']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Sarana dan prasaranan yang harus ada di Puskesmas sesuai standar</td>
                            <td></td>
                            <td>11</td>
                            <td></td>
                        </tr>
                        <!-- 29 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan ketersediaan alkes di Puskesmas sesuai standar (ASPAK)</td>
                            <td>40%</td>
                            <td><?= round($cakupan['cakupan29'] / 11 * 40); ?>%</td>
                            <td><?= round($cakupan['cakupan29'] / 11 * 40); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah alat kesehatan Puskesmas yang sesuai standar</td>
                            <td></td>
                            <td><?= $cakupan['cakupan29']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah alat kesehatan yang harus ada di Puskesmas yang sesuai standar</td>
                            <td></td>
                            <td>11</td>
                            <td></td>
                        </tr>
                        <!-- 30 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase perlindungan sosial bagi penduduk rentan dan kurang mampu</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan30'] / 92354 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan30'] / 92354 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penduduk rentan dan kurang mampu yang mendapatkan perlindungan sosial (BPJS BPI) di suatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan30']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk rentan dan kurang mampu di suatu wilayah pada kurun waktu yang sama</td>
                            <td></td>
                            <td>92354</td>
                            <td></td>
                        </tr>
                        <!-- 31 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelaksanaan UHC</td>
                            <td>98%</td>
                            <td><?= round($cakupan['cakupan31'] / 229063 * 98); ?>%</td>
                            <td><?= round($cakupan['cakupan31'] / 229063 * 98); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah seluruh penduduk yang telah terdaftar sebagai peserta pragram JKN pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan31']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh penduduk disuatu wilayah pada kurun waktu yang sama</td>
                            <td></td>
                            <td>229063</td>
                            <td></td>
                        </tr>
                        <!-- 32 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Indeks Kepuasan Masyarakat</td>
                            <td>80</td>
                            <td><?= round($cakupan['cakupan32'] / 1 * 80); ?></td>
                            <td><?= round($cakupan['cakupan32'] / 1 * 80); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah nilai indeks Kepuasan seluruh UPTD</td>
                            <td></td>
                            <td><?= $cakupan['cakupan32']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Uptd yang ada di wilayah Kerja</td>
                            <td></td>
                            <td>1</td>
                            <td></td>
                        </tr>
                        <!-- 33 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Pelaksanaan Standar Minimal Kesehatan di Puskesmas</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan33'] / 10 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan33'] / 10 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah cakupan Standar Pelayanan Minimal diseluruh Puskesmas</td>
                            <td></td>
                            <td><?= $cakupan['cakupan33']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Puskesmas</td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 34 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Puskesmas beroperasional BLUD</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan34'] / 10 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan34'] / 10 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Puskesmas beroperasional BLUD</td>
                            <td></td>
                            <td><?= $cakupan['cakupan34']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Puskesmas</td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 35 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan kertesediaan obat dan perbekalan kesehatan sesuai dengan kebutuhan (Standar WHO)</td>
                            <td>$1.5</td>
                            <td>$<?= round($cakupan['cakupan35'] / 1 * 1.5); ?></td>
                            <td>$<?= round($cakupan['cakupan35'] / 1 * 1.5); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggaran Ketersediaan Obat /Jumlah penduduk</td>
                            <td></td>
                            <td><?= $cakupan['cakupan35']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Standar Kebutuhan Obat berdasarkan WHO / jumlah penduduk</td>
                            <td></td>
                            <td>1</td>
                            <td></td>
                        </tr>
                        <!-- 36 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Persentase Pembinaan Industri Rumah Tangga Pangan (IRTP)</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan36'] / 25 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan36'] / 25 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah sarana IRTP yang mendapat pembinaan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan36']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh IRTP</td>
                            <td></td>
                            <td>25</td>
                            <td></td>
                        </tr>
                        <!-- 37 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pembinaan Sarana Apotik dan Toko Obat</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan37'] / 70 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan37'] / 70 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah srana Apotik dan Toko Obat yang mengikuti Pembinaan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan37']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Seluruh Apotik dan Toko Obat</td>
                            <td></td>
                            <td>70</td>
                            <td></td>
                        </tr>
                        <!-- 38 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase sarana Kefarmasian Puskesmas yang memenuhi standar kefarmasian</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan38'] / 10 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan38'] / 10 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah sarana kefarmasian puskesmas yang memenuhi standar kefarmasian disuatu wilayah pada kurun waktu satu tahun </td>
                            <td></td>
                            <td><?= $cakupan['cakupan38']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah sarana kefarmasian puskesmas yang memenuhi standar kefarmasian disuatu wilayah pada kurun waktu satu tahun </td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 39 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Sarana Kefarmasian Apotek yang memenuhi standar Kefarmasian</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan39'] / 52 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan39'] / 52 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah sarana kefarmasian apotek yang memenuhi standar kefarmasian disuatu wilayah pada krun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan39']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah sarana kefarmasian apotek di suatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td>52</td>
                            <td></td>
                        </tr>
                        <!-- 40 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Instalasi Farmasi RS Pemerintah yang melaksanakan pelayanan kefarmasian sesuai standar</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan40'] / 6 * 100); ?></td>
                            <td><?= round($cakupan['cakupan40'] / 6 * 100); ?></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Instalasi Farmasi RS yang memenuhi standar</td>
                            <td></td>
                            <td><?= $cakupan['cakupan40']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Instalasi Farmasi RS</td>
                            <td></td>
                            <td>6</td>
                            <td></td>
                        </tr>
                        <!-- 41 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase toko alat kesehatan yang memenuhi standar kesehatan</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan41'] / 2 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan41'] / 2 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah toko alkes yang memenuhi standar kesehatan disuatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan41']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah toko alkes disuatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                        </tr>
                        <!-- 42 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Penggunaan obat rasional di sarana kesehatan dasar pemerintah</td>
                            <td>60%</td>
                            <td>60%</td>
                            <td>100%</td>
                        </tr>
                        <!-- 43 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase TPM yang memenuhi standar kesehatan</td>
                            <td>84%</td>
                            <td><?= round($cakupan['cakupan43'] / 569 * 84); ?>%</td>
                            <td><?= round($cakupan['cakupan43'] / 569 * 84); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah TPM yang memenuhi standar kesehatan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan43']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah TPM yang ada</td>
                            <td></td>
                            <td>569</td>
                            <td></td>
                        </tr>
                        <!-- 44 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase TTUI yang memenuhi standar kesehatan</td>
                            <td>93%</td>
                            <td><?= round($cakupan['cakupan44'] / 439 * 93); ?>%</td>
                            <td><?= round($cakupan['cakupan44'] / 439 * 93); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah TTUI yang memenuhi standar kesehatan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan44']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah TTUI yang ada</td>
                            <td></td>
                            <td>439</td>
                            <td></td>
                        </tr>
                        <!-- 45 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kelurahan Stop BABS</td>
                            <td>85%</td>
                            <td><?= round($cakupan['cakupan45'] / 72 * 85); ?>%</td>
                            <td><?= round($cakupan['cakupan45'] / 72 * 85); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah desa/kelurahan stop BABS di wilayah dan periode tertentu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan45']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah desa/kelurahan di wilayah dan periode yang sama</td>
                            <td></td>
                            <td>72</td>
                            <td></td>
                        </tr>
                        <!-- 46 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Rumah Tangga Ber PHBS/td>
                            <td>78%</td>
                            <td><?= round($cakupan['cakupan46'] / 55053 * 78); ?>%</td>
                            <td><?= round($cakupan['cakupan46'] / 55053 * 78); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Rumah Tangga Ber PHBS</td>
                            <td></td>
                            <td><?= $cakupan['cakupan46']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Rumah Tangga</td>
                            <td></td>
                            <td>55053</td>
                            <td></td>
                        </tr>
                        <!-- 47 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Rumah Tangga Belum Ber PHBS</td>
                            <td>32%</td>
                            <td><?= round($cakupan['cakupan47'] / 11037 * 32); ?>%</td>
                            <td><?= round($cakupan['cakupan47'] / 11037 * 32); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Rumah Tangga Belum Ber PHBS dibina</td>
                            <td></td>
                            <td><?= $cakupan['cakupan47']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Rumah Tangga Belum Ber PHBS</td>
                            <td></td>
                            <td>11037</td>
                            <td></td>
                        </tr>
                        <!-- 48 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Penyelanggaraan Air minum yang memenuhi syarat</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan48'] / 62 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan48'] / 62 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Penyelanggaraan Air minum yang memenuhi syarat</td>
                            <td></td>
                            <td><?= $cakupan['cakupan48']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Penyelanggaraan Air minum yang diambil sampel</td>
                            <td></td>
                            <td>62</td>
                            <td></td>
                        </tr>
                        <!-- 49 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presntase Penduduk yang memiliki akses sanitasi layak </td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan49'] / 62 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan49'] / 62 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah KK yang memiliki akses sanitasi layak</td>
                            <td></td>
                            <td><?= $cakupan['cakupan49']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah KK pada waktu yang sama</td>
                            <td></td>
                            <td>62</td>
                            <td></td>
                        </tr>
                        <!-- 50 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan UKBM yang aktif</td>
                            <td>95%</td>
                            <td><?= round($cakupan['cakupan50'] / 55521 * 95); ?>%</td>
                            <td><?= round($cakupan['cakupan50'] / 55521 * 95); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kelurahan memiliki Posyandu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan50']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah kelurahan</td>
                            <td></td>
                            <td>55521</td>
                            <td></td>
                        </tr>
                        <!-- 51 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan UKBM Strata Aktif Mandiri</td>
                            <td>39%</td>
                            <td><?= round($cakupan['cakupan51'] / 104 * 39); ?>%</td>
                            <td><?= round($cakupan['cakupan51'] / 104 * 39); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Posyandu Strata mandiri</td>
                            <td></td>
                            <td><?= $cakupan['cakupan51']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Posyandu Strata mandiri</td>
                            <td></td>
                            <td>104</td>
                            <td></td>
                        </tr>
                        <!-- 52 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Puskesmas yang melaksanakan kesehatan Olahraga</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan52'] / 10 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan52'] / 10 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah puskesmas yang melaksanakan kesehatan kerja dan olahraga</td>
                            <td></td>
                            <td><?= $cakupan['cakupan52']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh puskesmas</td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 53 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Persentase Pos UKM yang dilakukan Pembinaan</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan53'] / 24 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan53'] / 24 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Pos UKM yang dilakukan Pembinaan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan53']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh Pos UKM</td>
                            <td></td>
                            <td>24</td>
                            <td></td>
                        </tr>
                        <!-- 54 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelayanan Kesehatan penderita diabetes melitus</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan54'] / 14362 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan54'] / 14362 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita diabetes melitus >15 tahun diwilayah kerja yang mendapat pelayanan kesehatan sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan54']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah estimasi penderita diabetes melitus usia >15 tahun yang berada di wilayah kerjanya berdasarkan angka prevalensi kab/kota dalam kurun waktu satu tahun yang sama</td>
                            <td></td>
                            <td>14362</td>
                            <td></td>
                        </tr>
                        <!-- 55 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Insiden TB Per 100.000 Penduduk</td>
                            <td>120</td>
                            <td><?= round($cakupan['cakupan55'] / 234290 * 120); ?></td>
                            <td><?= round($cakupan['cakupan55'] / 234290 * 120); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita TB</td>
                            <td></td>
                            <td><?= $cakupan['cakupan55']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk pada waktu yang sama</td>
                            <td></td>
                            <td>234290</td>
                            <td></td>
                        </tr>
                        <!-- 56 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelayanan Kesehatan Orang Dengan TB</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan56'] / 6048 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan56'] / 6048 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah orang yang mendapatkan pelayanan TB sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan56']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah sasaran penderita TB yang mendapatkan pelayanan sesuai standar dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>6048</td>
                            <td></td>
                        </tr>
                        <!-- 57 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Pelayanan Kesehatan orang dengan resiko HIV</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan57'] / 11440 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan57'] / 11440 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah orang dengan resiko terinfeksi HIV yang mendapatkan pelayanan sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan57']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah orang dengan resiko terinfeksi HIV dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>11440</td>
                            <td></td>
                        </tr>
                        <!-- 58 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Prevalensi HIV pada populasi dewasa (Per 1000 Penduduk)</td>
                            <td>0.030</td>
                            <td><?= round($cakupan['cakupan58'] / 171443 * 0.030); ?></td>
                            <td><?= round($cakupan['cakupan58'] / 171443 * 0.030); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita HIV pada populasi dewasa</td>
                            <td></td>
                            <td><?= $cakupan['cakupan58']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk dewasa</td>
                            <td></td>
                            <td>171443</td>
                            <td></td>
                        </tr>
                        <!-- 59 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kesiapsiagaan dalam Penanggulangan Kedaruratan Kesehatan Masyarakat yang berpotensi KLB (Pelaksanaan Vaksinasi Covid-19</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan59'] / 237840 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan59'] / 237840 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah masyarakat yang mendapatkan Vaksin</td>
                            <td></td>
                            <td><?= $cakupan['cakupan59']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah sasaran masyarakat yang mendapatkan vaksin</td>
                            <td></td>
                            <td>237840</td>
                            <td></td>
                        </tr>
                        <!-- 60 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kesiapsiagaan dalam penanggulangan kedaruratan kesehatan masyarakat yang berpotensi KLB</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan60'] / 72 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan60'] / 72 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah kelurahan yang mengalami KLB < 24 jam</td>
                            <td></td>
                            <td><?= $cakupan['cakupan60']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah kelurahan yang mengalami KLB</td>
                            <td></td>
                            <td>72</td>
                            <td></td>
                        </tr>
                        <!-- 61 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Jumlah Kebijakan dalam penanggulangan penyakit</td>
                            <td>2</td>
                            <td><?= round($cakupan['cakupan61'] * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan61'] * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td><?= $cakupan['cakupan61']; ?></td>
                            <td></td>
                        </tr>
                        <!-- 62 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase pelayanan kesehatan orang dengan gangguan jiwa berat (ODGJ)</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan62'] / 458 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan62'] / 458 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita ODGJ berat diwilayah kerja yang mendapat pelayanan kesehatan sesuai standar dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan62']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah ODGJ berat berdasarkan proyeksi di wilayah kerjanya dalam kurun waktu satu tahun yang sama</td>
                            <td></td>
                            <td>458</td>
                            <td></td>
                        </tr>
                        <!-- 63 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>IR DBD Per 100.000 Penduduk</td>
                            <td>90</td>
                            <td><?= round($cakupan['cakupan63'] / 229063 * 90); ?></td>
                            <td><?= round($cakupan['cakupan63'] / 229063 * 90); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita DBD</td>
                            <td></td>
                            <td><?= $cakupan['cakupan63']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk pada waktu yang sama</td>
                            <td></td>
                            <td>229063</td>
                            <td></td>
                        </tr>
                        <!-- 64 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Pelayanan Kesehatan DBD</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan64'] / 7 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan64'] / 7 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita DBD yang dilayani sesuai SOP disuatu wilayah selama 1 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan64']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penderita DBD yang ditemukan disuatu wilayah dalam kurun waktu yang sama</td>
                            <td></td>
                            <td>7</td>
                            <td></td>
                        </tr>
                        <!-- 65 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kasus Malaria Per 1000 penduduk</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan65'] / 229063 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan65'] / 229063 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita malaria</td>
                            <td></td>
                            <td><?= $cakupan['cakupan65']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk pada waktu yang sama</td>
                            <td></td>
                            <td>229063</td>
                            <td></td>
                        </tr>
                        <!-- 66 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kasus Malaria Per 1000 penduduk</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan66'] / 229063 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan66'] / 229063 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita malaria</td>
                            <td></td>
                            <td><?= $cakupan['cakupan66']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penduduk pada waktu yang sama</td>
                            <td></td>
                            <td>229063</td>
                            <td></td>
                        </tr>
                        <!-- 67 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase pelaksanaan Hepatitis B pada kelompok berisiko</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan67'] / 8 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan67'] / 8 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita Hepatitis B yang mendapat pelayanan</td>
                            <td></td>
                            <td><?= $cakupan['cakupan67']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah pederita Hepatitis B pada kurun waktu yang sama</td>
                            <td></td>
                            <td>8</td>
                            <td></td>
                        </tr>
                        <!-- 68 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase pelayanan Filariasis</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan68'] / 8 * 0); ?>%</td>
                            <td><?= round($cakupan['cakupan68'] / 8 * 0); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita filariasis yang mendapatkan pelayanan kesehatan sesuai standar disuatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan68']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penderita filariasis disuatu wilayah pada kurun waktu yang sama</td>
                            <td></td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <!-- 69 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase pelayanan penyakit kusta</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan69'] / 8 * 0); ?>%</td>
                            <td><?= round($cakupan['cakupan69'] / 8 * 0); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah penderita kusta yang mendapatkan pelayanan kesehatan sesuai standar disuatu wilayah pada kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan69']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah penderita kusta disuatu wilayah pada kurun waktu yang sama</td>
                            <td></td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <!-- 70 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Puskesmas melaksanakan PTM Terpadu</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan70'] / 10 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan70'] / 10 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah puskesmas yang melaksanakan PTM terpadu</td>
                            <td></td>
                            <td><?= $cakupan['cakupan70']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah seluruh puskesmas</td>
                            <td></td>
                            <td>10</td>
                            <td></td>
                        </tr>
                        <!-- 71 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Presentase Lokasi Bebas Asap Rokok</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan71'] / 764 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan71'] / 764 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah Lokasi KTR</td>
                            <td></td>
                            <td><?= $cakupan['cakupan71']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah Lokasi</td>
                            <td></td>
                            <td>764</td>
                            <td></td>
                        </tr>
                        <!-- 72 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Persentase Merokok Usia 10-18 Tahun</td>
                            <td>12</td>
                            <td><?= round($cakupan['cakupan72'] / 39144 * 12); ?>%</td>
                            <td><?= round($cakupan['cakupan72'] / 39144 * 12); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah remaja merokok usia 10-18 tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan72']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah remaja usia 10-18 Tahun</td>
                            <td></td>
                            <td>39144</td>
                            <td></td>
                        </tr>
                        <!-- 73 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Kelurahan UCI</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan73'] / 72 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan73'] / 72 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah desa/kelurahan UCI</td>
                            <td></td>
                            <td><?= $cakupan['cakupan73']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah kelurahan</td>
                            <td></td>
                            <td>72</td>
                            <td></td>
                        </tr>
                        <!-- 74 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Imunisasi Haji</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan74'] / 199 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan74'] / 199 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah jamaah haji yang diimunisasi dalam kurun waktu satu tahun</td>
                            <td></td>
                            <td><?= $cakupan['cakupan74']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah jamaah haji dalam kurun waktu yang sams</td>
                            <td></td>
                            <td>199</td>
                            <td></td>
                        </tr>
                        <!-- 75 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Imunisasi Dasar Lengkap Bayi</td>
                            <td>100%</td>
                            <td><?= round($cakupan['cakupan75'] / 4105 * 100); ?>%</td>
                            <td><?= round($cakupan['cakupan75'] / 4105 * 100); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah anak usia 0-11 bulan yang diimunisasi</td>
                            <td></td>
                            <td><?= $cakupan['cakupan75']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah anak usia 0-11 bulan</td>
                            <td></td>
                            <td>4105</td>
                            <td></td>
                        </tr>
                        <!-- 76 -->
                        <tr>
                            <th scope="row" class="bg-success"><?= $i++; ?></th>
                            <td>Cakupan Imunisasi TT WUS</td>
                            <td>70%</td>
                            <td><?= round($cakupan['cakupan76'] / 3930 * 70); ?>%</td>
                            <td><?= round($cakupan['cakupan76'] / 3930 * 70); ?>%</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Jumlah WUS yang mendapatkan imunisasi TT</td>
                            <td></td>
                            <td><?= $cakupan['cakupan76']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope=" row"></th>
                            <td>Jumlah WUS</td>
                            <td></td>
                            <td>3930</td>
                            <td></td>
                        </tr>
                        <?php if ($cakupan['verifikasi'] == 1) : ?>
                            <form action="" method="post">
                                <input type="hidden" id="2" name="2" value="2">
                                <input type="hidden" id="id" name="id" value="<?= $cakupan['id']; ?>">

                                <button type="submit" name="2" id="2" class="btn btn-success mb-4">Terima</button>
                            </form>
                        <?php endif; ?>



                    </tbody>
                </table>
            </div>
        </div>
    </small>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->