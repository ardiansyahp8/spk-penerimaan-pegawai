<?php
switch($_GET[act]){
    default:
        echo "<h2>Semua Data Calon Pegawai Pada Kemenkumham RI </h2>
		   <br>";
		/* <form method='post' enctype='multipart/form-data' action='proses-excel.html'>
			Upload Data dari Excel: <input style='border:1px solid #000;'name='userfile' type='file'>
			<input name='upload' type='submit' value='Import'>
		</form> */
		echo "<input style='float:right; margin-top:-27px; margin-bottom:3px;' type=button value='Input Data Calon Pegawai Baru' onclick=\"window.location.href='input-data.html';\">";
        echo "<table width='100%'  border='1' cellspacing='0' cellpadding='3' style='font-size:15px;'>
          <tr style='text-transform:uppercase; background:#000; color:#fff;'>
              <th>No</th>
              <th>Kode Calon Pegawai</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Usia</th>
              <th>Pilihan Departemen</th>
              <th>Tinggi</th>
              <th>Nilai CAT</th>
              <th>Nilai Psikologi</th>
              <th>Nilai Kesehatan</th>
              <th>Nilai Wawancara</th>
              <th>Pengalaman kerja</th>
              <th>Pendidikan Terakhir</th>
              <th>Kesehatan</th>
              <th>Status</th>
              <th align=center>Action</th>
          </tr>";

        $warna  = $warna1;
        $no = 1;
        $sql=mysql_query("SELECT * FROM data_pegawai ORDER BY kode_calonpegawai ASC");
        while ($data=mysql_fetch_array($sql)){
            if($warna == $warna1){
                $warna = $warna2;
            } else {
                $warna = $warna1;
            }
            echo "<tr bgcolor='$warna'>
                  <td>$no</td>
                  <td>CP-$data[kode_calonpegawai]</td>
                  <td>$data[nama_calonpegawai]</td>
                  <td>$data[jenis_kelamin]</td>
                  <td>$data[usia]</td>
                  <td>$data[pildep]</td>
                  <td>$data[tinggi]</td>
                  <td>$data[nilai_cat]</td>
                  <td>$data[nilai_psikologi]</td>
                  <td>$data[nilai_kesehatan]</td>
                  <td>$data[nilai_wawancara]</td>
                  <td>$data[pengalaman_kerja]</td>
                  <td>$data[pendidikan_terakhir]</td>
                  <td>$data[kesehatan]</td>
                  <td><b>$data[status]</b></td>
                  <td><a href=edit-data-$data[id].html>Edit</a> |
                  <a href=hapus-data-$data[id].html>Hapus</a>
                  </td>
                  </tr>";
            $no++;
        }
        echo"</table>";
    break;

    case "hapus_semua_data";
        mysql_query("TRUNCATE data_pegawai");
        header('location:data_pegawai.php');
    break;

    case "edit_data_pegawai";
        include "edit_data_pegawai.php";
    break;
    case "hapus_data_pegawai";
        mysql_query("DELETE FROM data_pegawai WHERE id = '$_GET[id]'");
        header('location:data_pegawai.php');
    break;
}
