<?php
  session_start();
  include "../config/koneksi.php";
  include "../config/session_manager.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aplikasi Data Mining Penerimaan Calon Pegawai Kemenkumham</title>
<link href="../templates/style.css" rel="stylesheet" type="text/css" />
<script src="tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="tiny_mce/tiny_gugun.js" type="text/javascript"></script>
</head>
<body style="margin:50px; margin-top:40px; font-family: Arial;">

<div id="container_wrapper">
	<div id="container">
  <div id="header">
      <div id="inner_header">
        <center><img src="kemenkumham.png" width="7%" height="7%" /></center>
	  <center><b>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA</b></center>
			<br><!-- <img src='templates/images/head.jpg'> -->
      </div>
  </div>

  	<div id="top">
		<span class="cpojer-links"> <center>
					<a href='home'>HOME</a> |
					<a href='profile.html'>PROFIL</a> |
					<a href='semua-data.html'>INPUT DATA</a> >
					<a href='data-mining.html'>PROCESS C4.5</a> >
					<a href='perhitungan.html'>RESULT C4.5</a> >
					<a href='pohon-keputusan.html'>DECISION TREE</a> |
					<a href='../logout.php'>LOGOUT</a> 					</center>
		</span>
	</div>

		<div id="left_column">
			<div class="text_area" align="justify">
				<?php include "content.php"; ?>
					<br/>
			</div>
		</div>


</div>
</div>
</body>
</html>
