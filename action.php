<?php
include '../config/koneksi.php';
	

if($_POST['simpan']){
    $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $kota = $_POST['kota'];
   $perusahaan = $_POST['perusahaan'];
   $tgllhr = $_POST['tgllhr'];
   $penerima = $_POST['penerima'];
   $kategori = $_POST['kategori'];
   $keterangan = $_POST['keterangan'];
   $nokantor = $_POST['nokantor'];
   $tgldateline = $_POST['tgldateline'];
   
   $group = $_POST['group'];
   
   if (!empty($group))
   {
   foreach($group as $namagroup)
   {
      $listgroup .= $namagroup.'';
   }
   $listgroup = ''.$listgroup;
   }
   else $listgroup = '';
   
   $notelp = $_POST['notelp'];
   
   if (substr($notelp, 0, 1) == '0')
   {
	$notelp[0] = "X";
	$notelp = str_replace("X", "+62", $notelp);
   }
   else $notelp = $notelp;
	
    mysql_query("insert into sms_phonebook values('$notelp', '$nokantor', '$nama', '$alamat', '$kota', '$perusahaan', '$listgroup', '$tgllhr', '$penerima', '$kategori', '$keterangan', '$tgldateline')");
    header("location:index.php");
}
else {
?>
<script language="javascript">
"<script>alert('Simpan Gagal!!'); window.location = 'index.php'</script>";
	</script>
  <?php  
}
?>