<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $user = $user['name'];
    ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" value="<?= $user; ?>" id="nama" name="nama">
                <input type="hidden" name="id" value="<?= $triwulan['id']; ?>">
                <!-- 1 -->
                <div class="form-group row">
                    <label for="1" class="ml-3">1. Angka Kematian Bayi Per 1000 KH</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="1" name="1" value="<?= $triwulan['cakupan1']; ?>">
                    </div>
                    <?= form_error('1', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 2 -->
                <div class="form-group row">
                    <label for="2" class="ml-3">2. Angka Kematian Ibu Per 100.000 KH</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="2" name="2" value="<?= $triwulan['cakupan2']; ?>">
                    </div>
                    <?= form_error('2', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 3 -->
                <div class="form-group row">
                    <label for="3" class="ml-3">3. Indeks Keluarga Sehat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $triwulan['cakupan3']; ?>" id="3" name="3">
                    </div>
                    <?= form_error('3', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 4 -->
                <div class="form-group row">
                    <label for="4" class="ml-3">4. Cakupan pelayanan kesehatan ibu hamil (k4)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="4" name="4" value="<?= $triwulan['cakupan4']; ?>">
                    </div>
                    <?= form_error('4', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 5 -->
                <div class="form-group row">
                    <label for="5" class="ml-3">5. Cakupan Komplikasi kebidanan yang ditangani</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="5" name="5" value="<?= $triwulan['cakupan5']; ?>">
                    </div>
                    <?= form_error('5', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 6 -->
                <div class="form-group row">
                    <label for="6" class="ml-3">6. Cakupan pertolongan persalinan oleh nakes yang memiliki kompetensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="6" name="6" value="<?= $triwulan['cakupan6']; ?>">
                    </div>
                </div>
                <!-- 7 -->
                <div class="form-group row">
                    <label for="7" class="ml-3">7. Cakupan pelayanan nifas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="7" name="7" value="<?= $triwulan['cakupan7']; ?>">
                    </div>
                    <?= form_error('7', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 8 -->
                <div class="form-group row">
                    <label for="8" class="ml-3">8. Cakupan Neonatus dengan komplikasi yang ditangani</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="8" name="8" value="<?= $triwulan['cakupan8']; ?>">
                    </div>
                    <?= form_error('8', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 9 -->
                <div class="form-group row">
                    <label for="9" class="ml-3">9. Cakupan pelayanan kesehatan bayi baru lahir (Kn Lengkap)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="9" name="9" value="<?= $triwulan['cakupan9']; ?>">
                    </div>
                    <?= form_error('9', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 10 -->
                <div class="form-group row">
                    <label for="10" class="ml-3">10. Cakupan Pelayanan Kesehatan anak sekolah usia pendidikan dasar (Kelas 1, dan Kelas 7, dan Kelas 9)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="10" name="10" value="<?= $triwulan['cakupan10']; ?>">
                    </div>
                    <?= form_error('10', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 11-->
                <div class="form-group row">
                    <label for="11" class="ml-3">11. Presentase Pelayanan Kesehatan Usia Produktif</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="11" name="11" value="<?= $triwulan['cakupan11']; ?>">
                    </div>
                    <?= form_error('11', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 12 -->
                <div class="form-group row">
                    <label for="12" class="ml-3">12. Presentase Pelayanan Kesehatan Usia Lanjut</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="12" name="12" value="<?= $triwulan['cakupan12']; ?>">
                    </div>
                    <?= form_error('12', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 13 -->
                <div class="form-group row">
                    <label for="13" class="ml-3">13. Prevalensi Balita gizi Buruk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="13" name="13" value="<?= $triwulan['cakupan13']; ?>">
                    </div>
                    <?= form_error('13', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 14 -->
                <div class="form-group row">
                    <label for="14" class="ml-3">14. Prevalensi balita gizi buruk mendapat perawatan sesuai standar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="14" name="14" value="<?= $triwulan['cakupan14']; ?>">
                    </div>
                    <?= form_error('14', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 15 -->
                <div class="form-group row">
                    <label for="15" class="ml-3">15. Prevalensi stunting pada balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="15" name="15" value="<?= $triwulan['cakupan15']; ?>">
                    </div>
                    <?= form_error('15', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 16 -->
                <div class="form-group row">
                    <label for="16" class="ml-3">16. Prevalensi stunting sangat pendek pada balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="16" name="16" value="<?= $triwulan['cakupan16']; ?>">
                    </div>
                    <?= form_error('16', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 17 -->
                <div class="form-group row">
                    <label for="17" class="ml-3">17. Prevalensi stunting pada baduta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="17" name="17" value="<?= $triwulan['cakupan17']; ?>">
                    </div>
                    <?= form_error('17', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 18 -->
                <div class="form-group row">
                    <label for="18" class="ml-3">18. Prevalensi stunting sangat pendek pada baduta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="18" name="18" value="<?= $triwulan['cakupan18']; ?>">
                    </div>
                    <?= form_error('18', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 19 -->
                <div class="form-group row">
                    <label for="19" class="ml-3">19. Prevalensi anak balita yang kurus (wasting)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="19" name="19" value="<?= $triwulan['cakupan19']; ?>">
                    </div>
                    <?= form_error('19', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 20 -->
                <div class="form-group row">
                    <label for="20" class="ml-3">20. Prevalensi wasting sangat kurus pada balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="20" name="20" value="<?= $triwulan['cakupan20']; ?>">
                    </div>
                    <?= form_error('20', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 21 -->
                <div class="form-group row">
                    <label for="21" class="ml-3">21. Angka Kematian balita (Per 1000 balita)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="21" name="21" value="<?= $triwulan['cakupan21']; ?>">
                    </div>
                    <?= form_error('21', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 22 -->
                <div class="form-group row">
                    <label for="22" class="ml-3">22. Cakupan Pelayanan kesehatan balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="22" name="22" value="<?= $triwulan['cakupan22']; ?>">
                    </div>
                    <?= form_error('22', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 23 -->
                <div class="form-group row">
                    <label for="23" class="ml-3">23. Persentase anemia pada ibu hamil</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="23" name="23" value="<?= $triwulan['cakupan23']; ?>">
                    </div>
                    <?= form_error('23', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 24 -->
                <div class="form-group row">
                    <label for="24" class="ml-3">24. Presentase Ibu hamil yang mendapatkan Fe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="24" name="24" value="<?= $triwulan['cakupan24']; ?>">
                    </div>
                    <?= form_error('24', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 25 -->
                <div class="form-group row">
                    <label for="25" class="ml-3">25. Presentase Puskesmas yang terakreditasi minimal utama </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="25" name="25" value="<?= $triwulan['cakupan25']; ?>">
                    </div>
                    <?= form_error('25', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 26 -->
                <div class="form-group row">
                    <label for="26" class="ml-3">26. Presentase Puskesmas Perkotaan yang Memiliki Gedung sesuai Standar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="26" name="26" value="<?= $triwulan['cakupan26']; ?>">
                    </div>
                    <?= form_error('26', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 27 -->
                <div class="form-group row">
                    <label for="27" class="ml-3">27. Prosentase Fasilitas Kesehatan yang memiliki SDMK sesuai standar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="27" name="27" value="<?= $triwulan['cakupan27']; ?>">
                    </div>
                    <?= form_error('27', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 28 -->
                <div class="form-group row">
                    <label for="28" class="ml-3">29. Cakupan peningkatan sarana prasarana puskesmas (ASPAK)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="28" name="28" value="<?= $triwulan['cakupan28']; ?>">
                    </div>
                    <?= form_error('28', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 29 -->
                <div class="form-group row">
                    <label for="29" class="ml-3">29. Cakupan ketersediaan alkes di Puskesmas sesuai standar (ASPAK)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="29" name="29" value="<?= $triwulan['cakupan29']; ?>">
                    </div>
                    <?= form_error('29', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 30 -->
                <div class="form-group row">
                    <label for="30" class="ml-3">30. Presentase perlindungan sosial bagi penduduk rentan dan kurang mampu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="30" name="30" value="<?= $triwulan['cakupan30']; ?>">
                    </div>
                    <?= form_error('30', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 31 -->
                <div class="form-group row">
                    <label for="31" class="ml-3">31. Presentase Pelaksanaan UHC</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="31" name="31" value="<?= $triwulan['cakupan31']; ?>">
                    </div>
                    <?= form_error('31', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 32 -->
                <div class="form-group row">
                    <label for="32" class="ml-3">32. Indeks Kepuasan Masyarakat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="32" name="32" value="<?= $triwulan['cakupan32']; ?>">
                    </div>
                    <?= form_error('32', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 33 -->
                <div class="form-group row">
                    <label for="33" class="ml-3">33. Cakupan Pelaksanaan Standar Minimal Kesehatan di Puskesmas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="33" name="33" value="<?= $triwulan['cakupan33']; ?>">
                    </div>
                    <?= form_error('33', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 34 -->
                <div class="form-group row">
                    <label for="34" class="ml-3">34. Presentase Puskesmas beroperasional BLUD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="34" name="34" value="<?= $triwulan['cakupan34']; ?>">
                    </div>
                    <?= form_error('34', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 35 -->
                <div class="form-group row">
                    <label for="35" class="ml-3">35. Cakupan kertesediaan obat dan perbekalan kesehatan sesuai dengan kebutuhan (Standar WHO)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="35" name="35" value="<?= $triwulan['cakupan35']; ?>">
                    </div>
                    <?= form_error('35', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 36 -->
                <div class="form-group row">
                    <label for="36" class="ml-3">36. Persentase Pembinaan Industri Rumah Tangga Pangan (IRTP)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="36" name="36" value="<?= $triwulan['cakupan36']; ?>">
                    </div>
                    <?= form_error('36', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 37 -->
                <div class="form-group row">
                    <label for="37" class="ml-3">37. Presentase Pembinaan Sarana Apotik dan Toko Obat </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="37" name="37" value="<?= $triwulan['cakupan37']; ?>">
                    </div>
                    <?= form_error('37', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 38 -->
                <div class="form-group row">
                    <label for="38" class="ml-3">38. Presentase sarana Kefarmasian Puskesmas yang memenuhi standar kefarmasian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="38" name="38" value="<?= $triwulan['cakupan38']; ?>">
                    </div>
                    <?= form_error('38', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 39 -->
                <div class="form-group row">
                    <label for="39" class="ml-3">39. Presentase Sarana Kefarmasian Apotek yang memenuhi standar Kefarmasian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="39" name="39" value="<?= $triwulan['cakupan39']; ?>">
                    </div>
                    <?= form_error('39', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 40 -->
                <div class="form-group row">
                    <label for="40" class="ml-3">40. Presentase Instalasi Farmasi RS Pemerintah yang melaksanakan pelayanan kefarmasian sesuai standar </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="40" name="40" value="<?= $triwulan['cakupan40']; ?>">
                    </div>
                    <?= form_error('40', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 41 -->
                <div class="form-group row">
                    <label for="41" class="ml-3">41. Presentase toko alat kesehatan yang memenuhi standar kesehatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="41" name="41" value="<?= $triwulan['cakupan41']; ?>">
                    </div>
                    <?= form_error('41', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 42 -->
                <div class="form-group row">
                    <label for="42" class="ml-3">42. Presentase Penggunaan obat rasional di sarana kesehatan dasar pemerintah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="42" name="42" value="<?= $triwulan['cakupan42']; ?>">
                    </div>
                    <?= form_error('41', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 43 -->
                <div class="form-group row">
                    <label for="43" class="ml-3">43. Presentase TPM yang memenuhi standar kesehatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="43" name="43" value="<?= $triwulan['cakupan43']; ?>">
                    </div>
                    <?= form_error('43', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 44 -->
                <div class="form-group row">
                    <label for="44" class="ml-3">44. Presentase TTUI yang memenuhi standar kesehatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="44" name="44" value="<?= $triwulan['cakupan44']; ?>">
                    </div>
                    <?= form_error('44', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 45 -->
                <div class="form-group row">
                    <label for="45" class="ml-3">45. Kelurahan Stop BABS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="45" name="45" value="<?= $triwulan['cakupan45']; ?>">
                    </div>
                    <?= form_error('45', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 46 -->
                <div class="form-group row">
                    <label for="46" class="ml-3">46. Cakupan Rumah Tangga Ber PHBS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="46" name="46" value="<?= $triwulan['cakupan46']; ?>">
                    </div>
                    <?= form_error('46', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 47 -->
                <div class="form-group row">
                    <label for="47" class="ml-3">47. Cakupan Rumah Tangga Belum Ber PHBS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="47" name="47" value="<?= $triwulan['cakupan47']; ?>">
                    </div>
                    <?= form_error('47', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 48 -->
                <div class="form-group row">
                    <label for="48" class="ml-3">48. Presentase Penyelanggaraan Air minum yang memenuhi syarat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="48" name="48" value="<?= $triwulan['cakupan48']; ?>">
                    </div>
                    <?= form_error('48', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 49 -->
                <div class="form-group row">
                    <label for="49" class="ml-3">49. Presntase Penduduk yang memiliki akses sanitasi layak </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="49" name="49" value="<?= $triwulan['cakupan49']; ?>">
                    </div>
                    <?= form_error('49', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 50 -->
                <div class="form-group row">
                    <label for="50" class="ml-3">50. Cakupan UKBM yang aktif</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="50" name="50" value="<?= $triwulan['cakupan50']; ?>">
                    </div>
                    <?= form_error('50', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 51 -->
                <div class="form-group row">
                    <label for="51" class="ml-3">51. Cakupan UKBM Strata Aktif Mandiri</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="51" name="51" value="<?= $triwulan['cakupan51']; ?>">
                    </div>
                    <?= form_error('51', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 52 -->
                <div class="form-group row">
                    <label for="52" class="ml-3">52. Presentase Puskesmas yang melaksanakan kesehatan Olahraga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="52" name="52" value="<?= $triwulan['cakupan52']; ?>">
                    </div>
                    <?= form_error('52', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 53 -->
                <div class="form-group row">
                    <label for="53" class="ml-3">53. Persentase Pos UKM yang dilakukan Pembinaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="53" name="53" value="<?= $triwulan['cakupan53']; ?>">
                    </div>
                    <?= form_error('53', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 54 -->
                <div class="form-group row">
                    <label for="54" class="ml-3">54. Presentase pelayanan kesehatan penderita hipertensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="54" name="54" value="<?= $triwulan['cakupan54']; ?>">
                    </div>
                    <?= form_error('54', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 55 -->
                <div class="form-group row">
                    <label for="55" class="ml-3">55. Presentase Pelayanan Kesehatan penderita diabetes melitus </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="55" name="55" value="<?= $triwulan['cakupan55']; ?>">
                    </div>
                    <?= form_error('55', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 56 -->
                <div class="form-group row">
                    <label for="56" class="ml-3">56. Insiden TB Per 100.000 Penduduk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="56" name="56" value="<?= $triwulan['cakupan56']; ?>">
                    </div>
                    <?= form_error('56', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 57 -->
                <div class="form-group row">
                    <label for="57" class="ml-3">57. Presentase Pelayanan Kesehatan Orang Dengan TB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="57" name="57" value="<?= $triwulan['cakupan57']; ?>">
                    </div>
                    <?= form_error('57', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 58 -->
                <div class="form-group row">
                    <label for="58" class="ml-3">58. Presentase Pelayanan Kesehatan orang dengan resiko HIV</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="58" name="58" value="<?= $triwulan['cakupan58']; ?>">
                    </div>
                    <?= form_error('58', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 59 -->
                <div class="form-group row">
                    <label for="59" class="ml-3">59. Prevalensi HIV pada populasi dewasa (Per 1000 Penduduk)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="59" name="59" value="<?= $triwulan['cakupan59']; ?>">
                    </div>
                    <?= form_error('59', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 60 -->
                <div class="form-group row">
                    <label for="60" class="ml-3">60. Kesiapsiagaan dalam Penanggulangan Kedaruratan Kesehatan Masyarakat yang berpotensi KLB (Pelaksanaan Vaksinasi Covid-19</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="60" name="60" value="<?= $triwulan['cakupan60']; ?>">
                    </div>
                    <?= form_error('60', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 61 -->
                <div class="form-group row">
                    <label for="61" class="ml-3">61. Kesiapsiagaan dalam penanggulangan kedaruratan kesehatan masyarakat yang berpotensi KLB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="61" name="61" value="<?= $triwulan['cakupan61']; ?>">
                    </div>
                    <?= form_error('61', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 62 -->
                <div class="form-group row">
                    <label for="62" class="ml-3">62. Jumlah Kebijakan dalam penanggulangan penyakit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="62" name="62" value="<?= $triwulan['cakupan62']; ?>">
                    </div>
                    <?= form_error('62', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 63 -->
                <div class="form-group row">
                    <label for="63" class="ml-3">63. Presentase pelayanan kesehatan orang dengan gangguan jiwa berat (ODGJ)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="63" name="63" value="<?= $triwulan['cakupan63']; ?>">
                    </div>
                    <?= form_error('63', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 64 -->
                <div class="form-group row">
                    <label for="64" class="ml-3">64. IR DBD Per 100.000 Penduduk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="64" name="64" value="<?= $triwulan['cakupan64']; ?>">
                    </div>
                    <?= form_error('64', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 65 -->
                <div class="form-group row">
                    <label for="65" class="ml-3">65. Cakupan Pelayanan Kesehatan DBD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="65" name="65" value="<?= $triwulan['cakupan65']; ?>">
                    </div>
                    <?= form_error('65', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 66 -->
                <div class="form-group row">
                    <label for="66" class="ml-3">66. Kasus Malaria Per 1000 penduduk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="66" name="66" value="<?= $triwulan['cakupan66']; ?>">
                    </div>
                    <?= form_error('66', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 67 -->
                <div class="form-group row">
                    <label for="67" class="ml-3">67. Presentase pelaksanaan Hepatitis B pada kelompok berisiko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="67" name="67" value="<?= $triwulan['cakupan67']; ?>">
                    </div>
                    <?= form_error('67', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 68 -->
                <div class="form-group row">
                    <label for="68" class="ml-3">68. Presentase pelayanan Filariasis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="68" name="68" value="<?= $triwulan['cakupan68']; ?>">
                    </div>
                    <?= form_error('68', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 69 -->
                <div class="form-group row">
                    <label for="69" class="ml-3">69. Presentase pelayanan penyakit kusta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="69" name="69" value="<?= $triwulan['cakupan69']; ?>">
                    </div>
                    <?= form_error('69', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 70 -->
                <div class="form-group row">
                    <label for="70" class="ml-3">70. Cakupan Puskesmas melaksanakan PTM Terpadu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="70" name="70" value="<?= $triwulan['cakupan70']; ?>">
                    </div>
                    <?= form_error('70', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 71 -->
                <div class="form-group row">
                    <label for="71" class="ml-3">71. Presentase Lokasi Bebas Asap Rokok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="71" name="71" value="<?= $triwulan['cakupan71']; ?>">
                    </div>
                    <?= form_error('71', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 72 -->
                <div class="form-group row">
                    <label for="72" class="ml-3">72. Persentase Merokok Usia 10-18 Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="72" name="72" value="<?= $triwulan['cakupan72']; ?>">
                    </div>
                    <?= form_error('72', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 73 -->
                <div class="form-group row">
                    <label for="73" class="ml-3">73. Kelurahan UCI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="73" name="73" value="<?= $triwulan['cakupan73']; ?>">
                    </div>
                    <?= form_error('73', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 74 -->
                <div class="form-group row">
                    <label for="74" class="ml-3">74. Cakupan Imunisasi Haji</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="74" name="74" value="<?= $triwulan['cakupan74']; ?>">
                    </div>
                    <?= form_error('74', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 75 -->
                <div class="form-group row">
                    <label for="75" class="ml-3">75. Cakupan Imunisasi Dasar Lengkap Bayi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="75" name="75" value="<?= $triwulan['cakupan75']; ?>">
                    </div>
                    <?= form_error('75', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <!-- 76 -->
                <div class="form-group row">
                    <label for="76" class="ml-3">76. Cakupan Imunisasi TT WUS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="76" name="76" value="<?= $triwulan['cakupan76']; ?>">
                    </div>
                    <?= form_error('76', '<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <button type="submit" name="ubah" class="btn btn-success">Ubah Laporan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->