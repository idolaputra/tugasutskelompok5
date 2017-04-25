<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari Dashboard Kelompok 5'); window.location = 'index.php/../..'</script>";
?>
