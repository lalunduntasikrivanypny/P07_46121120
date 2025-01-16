<html lang="en"><head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include("aplikasi/views/bagian/bagian_samping_kiri.php");?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include("aplikasi/views/bagian/bagian_atas.php");?>
		<!--end header -->
		<!--start page wrapper -->
		<!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <form action="<?= APLIKASI; ?>/terima_proses_edit" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-dark text-white">
                            <h1 align="left"><strong>EDIT PESANAN</strong></h1>
                        </div>
                        <div class="card-body bg-gradient-success text-dark bg-opacity-25">

                            <input type="hidden" value="<?= $data["terimaid"]["id"]; ?>" name="id_pesanan">

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>NOMOR PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["nomor_penawaran"]; ?>" readonly>                              </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>KODE/NAMA PELANGGAN</strong></label>
                                <div class="col-6">
                                    <input type="text" class="form-control" id="kdp" value="<?= $data["terimaid"]["nama_penawaran"]; ?>" readonly>
                                </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>ALAMAT</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="alt" value="<?= $data["terimaid"]["alamat"]; ?>" readonly>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>TANGGAL PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["tgl_penawaran"]; ?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <table class="table table-bordered mt-4">
                                <thead class="table-dark"> 
                                <tr class="text-center">

                                        <th>

                                            <h5>Barang</h5>

                                        </th>

                                        <th>

                                            <h5>Harga Penawaran</h5>

                                        </th>

                                        <th>

                                            <h5>Kuantitas</h5>

                                        </th>

                                        <th>

                                            <h5>Harga</h5>

                                        </th>

                                        <th>

                                            <h5>Jumlah</h5>

                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="tbody-input-terima">
                                    <?php foreach ($data['detail_terima'] as $miw => $isi) : ?>
                                        <tr>
                                            <td scope="row">
                                                <?= $isi['kode_barang']; ?>
                                                <input type="hidden" value="<?= $isi['id']; ?>" name="detail_terima[<?= $isi['id']; ?>][idnya_detail]">

                                            </td>

                                            <td class="hre" idnya="<?= $isi['id_barang']; ?>">
                                                <?= $isi['harga_estimasi']; ?>
                                            </td>

                                            <td>
                                                <div class="form-group-row-center">
                                                    <div class="col-5">
                                                        <input type="text" class="form-control-center kuanti" idnya="<?= $isi['id_barang']; ?>" value="<?= $isi['kuntitas']; ?>" name="detail_terima[<?= $isi['id']; ?>][qty]">
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="hrg">
                                                <input type="text" value="<?= $isi['harga_barang']; ?>" name="detail_terima[<?= $isi['id']; ?>][harga]">
                                            </td>

                                            <td class="ttl" idnya="<?= $isi['id_barang']; ?>">
                                                <?= $isi['jumlah'] ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <div class="form-group-row">
                                <label for="" class="col-2" style="color:black"> <strong>TANGGAL TERIMA PESANAN</strong></label>
                                <div class="col-3">
                                    <input type="date" class="form-control" value="<?= $data['terimaid']['tgl_pesanan']; ?>" name="tglpesan">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark mt-3"> UPDATE</button></a>
                            <table class="table table-bordered table-striped" border="10" width="75%">
                                <a align="right" href="<?= APLIKASI; ?>/terima/index" button class="btn btn-outline-dark float-end mt-3"> KEMBALI </button> </a>
                                <table classs="table table-bordered table-striped" border="10" width="75%">
                        </div>
                    </div>
                </div>

            </form>

        </div>
        </table>

    </div>
    </div>
    </div>


    <!--end breadcrumb-->


    </main>
    <!--end page main-->
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php include("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php include("aplikasi/views/bagian/bagian_samping_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body>

</html>

<script>
    $(document).ready(function() {

        $("#tbody-input-terima").on("change", ".kuanti", function() {
            meov = $(this)
            //    id kuantitas
            id_baris = meov.attr("idnya")

            //    ambil nilai kuantitas
            nilai_kuanti = rawr.val()

            //    id harga
            harge = $(`.hre[idnya=${id_baris}]`).html()

            total = nilai_kuanti * harga

            $(`.ttl[idnya=${id_baris}]`).html(total)
        })

    })
</script>