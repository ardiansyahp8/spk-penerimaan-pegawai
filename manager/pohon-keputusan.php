<?php
switch($_GET[act]){
    default:
		echo "<h2>Pohon Keputusan Menggunakan Algoritma C45</h2>";

		echo "<font face='Courier New' size='2'>";
		echo "<a style='color:red; margin-bottom:3px;' target='_BLANK' onclick='print()' href='#print'>Print Pohon Keputusan</a><br>
			<input style='float:right; margin-top:-27px; margin-bottom:3px;' type=button value='Refresh Pohon Keputusan' onclick=\"window.location.href='refresh-pohon.html';\"><hr><br>";
        generatePohonC45A('0', 0);
		generatePohonC45('0', 0);
		echo "</font>";
    break;
}

function generatePohonC45A($idparent, $spasi){
    $result = mysql_query("select * from decision_tree where id_parent= '$idparent'");
    while($row=mysql_fetch_row($result)){
        for($i=1;$i<=$spasi;$i++){
            echo "|&nbsp;&nbsp;";
        }

        if ($row[6] === 'Layak') {
            $keputusan = "<font color=green>$row[6]</font>";
        } elseif ($row[6] === 'Tidak layak') {
            $keputusan = "<font color=red>$row[6]</font>";
        } elseif ($row[6] === '?') {
            $keputusan = "<font color=blue>$row[6]</font>";
        } else {
            $keputusan = "<b>$row[6]</b>";
        }
        echo "<font color=red>$row[1]</font> = $row[2] (layak = $row[4], Tidak layak = $row[5]) : <b>$keputusan</b><br>";


        /*panggil dirinya sendiri*/
        generatePohonC45A($row[0], $spasi + 1);
    }
}


function generatePohonC45($idparent, $spasi){
    $result = mysql_query("select * from pohon_keputusan_c45 where id_parent= '$idparent'");
    while($row=mysql_fetch_row($result)){
        for($i=1;$i<=$spasi;$i++){
            echo "|&nbsp;&nbsp;";
        }

        if ($row[6] === 'Layak') {
            $keputusan = "<font color=green>$row[6]</font>";
        } elseif ($row[6] === 'Tidak layak') {
            $keputusan = "<font color=red>$row[6]</font>";
        } elseif ($row[6] === '?') {
            $keputusan = "<font color=blue>$row[6]</font>";
        } else {
            $keputusan = "<b>$row[6]</b>";
        }
        echo "<font color=red>$row[1]</font> = $row[2] (layak = $row[4], Tidak layak = $row[5]) : <b>$keputusan</b><br>";


        /*panggil dirinya sendiri*/
        generatePohonC45($row[0], $spasi + 1);
    }
}


		echo "<br><br>
		<table>
		<h2>Keterangan Hasil dari Pohon Keputusan:</h2><hr>
		<tr><td width='80px;' style='color:green;'>layak</td> <td>:</td><td>Calon pegawai yang layak jauh lebih banyak dari Tidak layak..</td></tr>
		<tr><td style='color:red;'>Tidak layak</td> <td>:</td><td>Calon pegawai yang Tidak layak jauh lebih banyak dari layak..</td></tr>
		<tr><td style='color:black;'>Kosong</td> <td>:</td><td>Calon pegawai yang layak tidak ada, dan Tidak layak Pun Tidak ada,.</td></tr>
		<tr><td style='color:blue;'>?</td> <td>: </td><td>Jumlah Calon pegawai yang layak dan Tidak layak Beda Tipis,.</td>
		</tr></table>";
