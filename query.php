<!DOCTYPE HTML>
<html>
<head>
<title>Information Retrieval</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(
hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='js/jquery.min.js'></script>


<!--tanggalan-->
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<script>
    $(document).ready(function(){
        $('#tgldateline').Zebra_DatePicker({
            format: 'Y-m-d',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>


</head>
<body>
<div class="wrap">
<div class="wrapper">
	<div class="header">
		<div class="logo">
			 <a href="index.php"><img src="images/logounisbank.jpg"> </a>
		</div>
		<div class="navigation">
			<a class="toggleMenu" href="#" style="display: inline-block;">≡</a>
			<ul class="nav" style="display: none;">
				<li class="test"><a href="index.php">Home</a></li>
				<li><a href="upload.php">Upload File</a></li>
                <li><a href="query.php">Pencarian Kata Kunci</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<script type="text/javascript" src="js/script.js"></script>
		</div>
	<div class="clear"></div>
	</div>
	<!-- start contennt -->
	<div class="content_bottom">
	<div class="contact">
		<div class="section group">				
				<div class="col span_1_of_2">
                <h1>Kelompok 5</h1>
      				</div>
      			<div class="company_address">
				     	
						<p>UNISBANK / SISTEM INFORMASI</p>
                        <p>**Information Retrieval**</p>
                        <p> ==>Sukmana Idola Putra (15.01.65.0016)</p>
                        <p> ==>M. Faiz Nurul Anam (15.01.65.0014)</p>
                        <p> ==>Mirza Adi Pradana (15.01.0017)</p>
				   </div>
				   <div class="clear"></div>
				</div>
<br><br>
<form enctype="multipart/form-data" method="POST" action="hasilquery.php">
Keyword : <br>
<input type="text" name="katakunci"><br>
<input type=submit>
</form>