<?php
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat");
$jml_masyarakat = mysqli_num_rows($masyarakat);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$jml_pengaduan = mysqli_num_rows($pengaduan);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
$jml_tanggapan = mysqli_num_rows($tanggapan);

$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jml_petugas = mysqli_num_rows($petugas);

?>

<div class="container">
    <h3 class="mt-3">Dasboard</h3>
    <div class="row mt-3">
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="background-color: #87CEFA">Masyarakat</div>
                <div class="card-body"><?php echo $jml_masyarakat; ?> Pengguna</div>
            </div>
        </div> 
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="background-color: #87CEFA">Pengaduan</div>
                <div class="card-body"><?php echo $jml_pengaduan; ?> Pengaduan</div>
            </div>
        </div> 
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="background-color: #87CEFA">Tanggapan</div>
                <div class="card-body"><?php echo $jml_tanggapan; ?> Tanggapan</div>
            </div>
        </div> 
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header" style="background-color: #87CEFA">Petugas</div>
                <div class="card-body"><?php echo $jml_petugas; ?> Pengguna</div>
            </div>
        </div> 
    </div>
</div> 