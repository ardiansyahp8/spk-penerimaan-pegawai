<head>
<title>Pohon Keputusan - Kemenkumham RI</title>
</head>
<body onload="window.print()">
<?php
  include "../config/koneksi.php";
	echo "<table width=100%>
			<center><h2>POHON KEPUTUSAN C4.5 <br/>
			PENERIMAAN PEGAWAI DI Kemenkumham RI </h2></center><hr/>";
			generatePohonC45('0', 0);
function generatePohonC45($idparent, $spasi){
    $result = mysql_query("select * from pohon_keputusan_c45 where id_parent= '$idparent'");
    while($row=mysql_fetch_row($result)){
        for($i=1;$i<=$spasi;$i++){
            echo "|&nbsp;&nbsp;";
        }

        if ($row[6] === 'Layak') {
            $keputusan = "<font color=green>$row[6]</font>";
        } elseif ($row[6] === 'Tidak Layak') {
            $keputusan = "<font color=red>$row[6]</font>";
        } elseif ($row[6] === '?') {
            $keputusan = "<font color=blue>$row[6]</font>";
        } else {
            $keputusan = "<b>$row[6]</b>";
        }
        echo "<font color=red>$row[1]</font> = $row[2] (Layak = $row[4], Tidak Layak = $row[5]) : <b>$keputusan</b><br>";

        /*panggil dirinya sendiri*/
        generatePohonC45($row[0], $spasi + 1);
    }
}
?>
