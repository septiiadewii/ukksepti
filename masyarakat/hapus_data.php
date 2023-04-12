<?php
//HAPUS
include "../config/koneksi.php";
$id_pengaduan= $_GET['id_pengaduan'];
$data = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'");
if ($data){ ?>
	<script language="javascript">
			alert('Data Berhasil Dihapus!');
		document.location.href="index.php";
	</script>
<?php
}else {
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>