<?php
include "../config/session_manager.php";
if ($_GET[module]=='home'){
	echo "<h2>Aplikasi Data Mining C.45 Penerimaan Calon Pegawai</h2>
		  <p>Data mining adalah serangkaian proses untuk menggali nilai tambah berupa informasi yang selama ini tidak diketahui secara manual dari suatu basis data. Informasi yang dihasilkan diperoleh dengan cara mengekstraksi dan mengenali pola yang penting atau menarik dari data yang terdapat dalam basis data.
			 Data mining adalah proses yang menggunakan teknik statistik, matematika, kecerdasan buatan, dan machine learning untuk mengekstraksi dan mengidentifikasi informasi yang bermanfaat dan pengetahuan yang terkait dari berbagai database besar.</p>
		  <p>Menurut Gartner Group, <i>data mining</i> adalah suatu proses menemukan hubungan yang berarti, pola, dan kecenderungan dengan memeriksa dalam sekumpulan besar data yang tersimpan dalam penyimpanan dengan menggunakan teknik pengenalan pola seperti teknik statistik dan matematika.
			 Data mining bukanlah suatu bidang yang sama sekali baru. Salah satu kesulitan untuk mendefinisikan data mining adalah kenyataan bahwa data mining mewarisi banyak aspek dan teknik dari bidang-bidang ilmu yang sudah mapan terlebih dulu. </p>
		  <p>Menurut para ahli, data mining merupakan sebuah analisa dari observasi data dalam jumlah besar untuk menemukan hubungan yang tidak diketahui sebelumnya dan metode baru untuk meringkas data agar mudah dipahami serta kegunaannya untuk pemilik data.
			 Data-data yang ada, tidak dapat langsung diolah dengan menggunakan sistem data mining. Data-data tersebut harus dipersiapkan terlebih dahulu agar hasil yang diperoleh dapat lebih maksimal, dan waktu komputasinya lebih minimal. Proses persiapan data ini sendiri dapat mencapai 60 % dari keseluruhan proses dalam data mining.</p>
			<br><b>Persyaratan pelamar</b><br><br>
			Tata cara pendaftaran, Persyaratan, Seleksi KELULUSAN dan LOKASI PELAKSANAAN SELEKSI CPNS KEMENKUMHAM 2018<br>
			<ol><li>Warga Negara Indonesia.</li>
			<li>Tidak pernah dipidana dengan pidana penjara berdasarkan putusan pengadilan yang telah mempunyai kekuatan hukum yang tetap karena melakukan tindak pidana dengan pidana penjara 2 (dua) tahun atau lebih.</li>
			<li>Tidak pernah diberhentikan dengan hormat tidak atas permintaan sendiri atau tidak dengan hormat sebagai PNS, anggota TNI / POLRI, Pegawai BUMN / BUMD atau diberhentikan tidak dengan hormat sebagai pegawai swasta.</li>
			<li>Tidak berkedudukan sebagai Calon Pegawai Negeri Sipil atau Pegawai Negeri Sipil, Prajurit TNI, anggota Polri dan siswa sekolah ikatan dinas Pemerintah.</li>
			<li>Tidak menjadi anggota atau pengurus partai politik atau terlibat politik praktis.</li>
			<li>Memiliki kualifikasi pendidikan sesuai dengan persyaratan jabatan.</li>
			<li>Sehat jasmani dan rohani sesuai dengan jabatan yang dilamar.</li>
			<li>Tidak memiliki ketergantungan terhadap narkotika dan obat-obatan terlarang atau sejenisnya (Surat Keterangan Bebas Narkoba / NAPZA dari Rumah Sakit Pemerintah setempat yang masih berlaku wajib dilengkapi setelah peserta dinyatakan lulus pada pengumuman kelulusan akhir)</li>
			<li>Bersedia ditempatkan di seluruh wilayah Negara Kesatuan Republik Indonesia.</li>
			<li>Bagi Wanita tidak bertato / bekas tato dan tindik / bekas tindik anggota badan lainnya selain di telinga kecuali yang disebabkan oleh ketentuan agama atau adat dan bagi pria tidak bertato / bekas tato dan tindik / bekas tindik anggota badan lainnya selain di telinga kecuali yang disebabkan oleh ketentuan agama atau adat.</li>
			<li>Pelamar merupakan lulusan :</li>
			<ul><li>Dokter Spesialis, Dokter Umum, Sarjana / S-1 dan Diplima III / D-III, dengan Indeks Prestasi Kumulatif (IPK) Minimal 2,75 (dua koma tujuh lima). Khusus untuk pelamar dengan kategori Putra / Putri Papua dan Papua Barat IPK minimal adalah 2,50 (dua koma lima puluh).</li>
			<li>SLTA Sederajat dengan nilai minimal pada ijazah rata-rata 7,0 (tujuh koma nol) atau 3 (tiga) skala 1 sampai 4 atau B dan diutamakan memiliki keterampilan komputer (melampirkan sertifikat komputer). Khusus untuk pelamar dengan kategori Putra / Putri Papua dan Papua Barat denga nilai minimal pada ijazah rata-rata 6,0 (enam koma nol) atau 2 (dua) skala 1 sampai 4 atau C dan diutamakan memiliki keterampilan komputer (melampirkan sertifikat komputer).</li>
			</ul>
			<li>Usia pada tanggal 1 Agustus 2018 :
			<ul><li>Minimal 18 tahun dan maksimal 33 Tahun 0 Bulan 0 Hari untuk Dokter Spesialis, Dokterm Umum Sarjana / S-1</li>
			<li>Minimal 18 tahun dan Maksimal 30 Tahun 0 Bulan 0 Hari untuk Diploma III / D-III</li>
			<li>Minimal 18 tahun dan Maksimal 28 Tahun 0 Bulan 0 Hari untuk SLTA</li></ul>
			<li>Tinggi badan untuk pelamar jabatan Analis Keimigrasian dan Pemeriksa Keimigrasian :</li>
			<ul><li>Pria minimal 165 cm</li>
			<li>Wanita minimal 158 cm</li></ul>
			<li>Tinggi badan untuk pelamar jabatan penjaga tahanan :</li>
			<ul><li>Pria minimal 160 cm</li>
			<li>Wanita minimal 155 cm</li></ul>
			<li>Pelamar dengan kualifikasi pendidikan Diploma III/D-III dan SLTA Sederajat yang mendaftar pada Kantor Wilayah harus sesuai dengan domisili yang tercantum dalam KTP. Apabila pelamar yang domisilinya tidak sesuai KTP dan ingin mendaftar pada wilayah domisilinya, wajib membuat surat keterangan dari kelurahan atau kantor desa setempat yang menerangkan bahwa yang bersangkutan telah berdomisili mininmal 1 (satu) tahun pada wilayah tersebut.</li>
<ol>

			";
}
elseif ($_GET[module]=='profile'){
	echo "

	<h2>Profile Kementerian Hukum dan HAM Provinsi Sumatera Selatan</h2>
		  <img src='kemenkumham.png' style='float:left; margin-bottom:100px;' width='20%' height='20%' /><p>Kementerian Hukum dan Hak Asasi Manusia Provinsi Sumatera Selatan (disingkat Kemenkumham Sumsel) adalah kementerian dalam Pemerintah Provinsi Sumatera Selatan yang membidangi urusan hukum dan hak asasi manusia. Kemenkumham Sumsel terletak di KM. 3,5, Kel. 30138, Jl. Jenderal Sudirman, 20 Ilir D. IV, Ilir Tim. I, Kota Palembang, Sumatera Selatan.<br><br>
<b>Visi dan Misi Kementerian Hukum dan Hak Asasi Manusia Provinsi Sumatera Selatan</b>
<br><br><b>Visi</b><br>
Visi Kementerian Hukum dan Hak Asasi Manusia Provinsi Sumatera Selatan adalah Masyarakat memperoleh kepastian hukum<br><br><b>Misi</b><br>Kementerian Hukum dan Hak Asasi Manusia Provinsi Sumatera Selatan adalah sebagai berikut:<br>
1.	Mewujudkan peraturan Perundang-Undangan yang berkualitas;<br>
2.	Mewujudkan pelayanan hukum yang berkualitas;<br>
3.	Mewujudkan penegakan hukum yang berkualitas;<br>
4.	Mewujudkan penghormatan, pemenuhan, dan perlindungan HAM;<br>
5.	Mewujudkan layanan manajemen administrasi  Kementerian Hukum dan HAM; serta<br>
6.	Mewujudkan aparatur Kementerian Hukum dan HAM  yang profesional dan berintegritas.<br>
</p>
			<br><br> ";
}
elseif ($_GET[module]=='semuadata'){
	include "semua-data.php";
}
elseif ($_GET[module]=='prosesexcel'){
	include "proses_excel.php";
}
elseif ($_GET[module]=='perhitungan'){
	include "perhitungan.php";
}
elseif ($_GET[module]=='datamining'){
	include "mining.php";
}
elseif ($_GET[module]=='pohonkeputusan'){
	include "pohon-keputusan.php";
}
elseif ($_GET[module]=='refreshpohon'){
        mysql_query("TRUNCATE iterasi_c45");
        mysql_query("TRUNCATE pohon_keputusan_c45");
				echo "<script>window.alert('Pohon Keputusan Berhasil Di Refresh !!!');
				window.location='pohon-keputusan.html'</script>";
}
elseif ($_GET[module]=='hapusdataa'){
        mysql_query("TRUNCATE iterasi_c45");
		mysql_query("TRUNCATE mining_c45");
		mysql_query("TRUNCATE pohon_keputusan_c45");
		mysql_query("TRUNCATE data_pegawai");
				echo "<script>window.alert('Semua Data Berhasil Di Hapus !!!');
				window.location='semua-data.html'</script>";
}
elseif ($_GET[module]=='installdata'){
mysql_query("INSERT INTO `data_pegawai` (`id`, `kode_calonpegawai`,`nama_calonpegawai`,`jenis_kelamin`,`usia`,`pildep`,`tinggi`,`nilai_cat`,`nilai_psikologi`,`nilai_kesehatan`,`nilai_wawancara`,`pengalaman_kerja`,`pendidikan_terakhir`,`kesehatan` `status`) VALUES
(25, '1021', 'Laptop', 'Acer', '2007', '15500000', 'a','a','a','a','a','a', 'Tidak Layak')");

				echo "<script>window.alert('Berhasil Install Data Calon Pegawai !!!');
				window.location='semua-data.html'</script>";
}
elseif ($_GET[module]=='hapusperhitungan'){
        mysql_query("TRUNCATE iterasi_c45");
        mysql_query("TRUNCATE pohon_keputusan_c45");
				echo "<script>window.alert('Data Perhitungan C4.5 Berhasil Di Hapus !!!');
				window.location='perhitungan.html'</script>";
}
elseif ($_GET[module]=='inputcalonpegawai'){
		 echo "<h2>Tambahkan Jenis Calon Pegawai Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-atribut.html'>
		  <div class='td'>
          <table width=60% style='margin-left:20%'>						 <input type=hidden name='a' value='jenis_kelamin'>
			  <tr><td width='165px'>Jenis Kelamin</td>   		 <td>:</td> <td> <input type=text name='b' style='width:99%'></td></tr>

			  <tr><td colspan=2><br/><br/><input class='linkkk' type=submit value=Simpan>
			  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/></td></tr>
          </table><br/><br/><br/></div></form>";
}
elseif ($_GET[module]=='inputkesehatan'){
		 echo "<h2>Tambahkan kesehatan Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-atribut.html'>
		  <div class='td'>
          <table width=60% style='margin-left:20%'>						 <input type=hidden name='a' value='kesehatan'>
			  <tr><td width='165px'>kesehatan</td>   		 <td>:</td> <td> <input type=text name='b' style='width:99%'></td></tr>

			  <tr><td colspan=2><br/><br/><input class='linkkk' type=submit value=Simpan>
			  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/></td></tr>
          </table><br/><br/><br/></div></form>";
}
elseif ($_GET[module]=='inputtahun'){
		 echo "<h2>Tambahkan Tahun Calon Pegawai CV Putra Elektronik.</h2><hr><br/><br/>
          <form method=POST action='simpan-atribut.html'>
		  <div class='td'>
          <table width=60% style='margin-left:20%'>						 <input type=hidden name='a' value='tahun'>
			  <tr><td width='165px'>Tahun Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='b' style='width:99%'></td></tr>

			  <tr><td colspan=2><br/><br/><input class='linkkk' type=submit value=Simpan>
			  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/></td></tr>
          </table><br/><br/><br/></div></form>";
}
elseif ($_GET[module]=='simpanatribut'){
	if (empty($_POST[b])){
		echo "<script>window.alert('Maaf, Form Inputan masih kosong !!!.');
			window.location='javascript:history.go(-1)'</script>";
	}else{
	   mysql_query("INSERT INTO atribut(atribut,
										nilai_atribut)
								VALUES('$_POST[a]',
									   '$_POST[b]')");

			echo "<script>window.alert('Sukses Menyimpan data $_POST[a] !!!');
				window.location='input-data.html'</script>";
}
}
elseif ($_GET[module]=='inputdata'){
	 echo "<h2>Tambahkan Data Calon Pegawai Baru Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-data.html'>
		  <div class='td'>
          <table width=60% height=40% style='margin-left:20%'>
		  <tr><td width='165px'>Kode Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='kode_calonpegawai' style='width:99%'></td></tr>
	<tr><td width='165px'>Nama Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='nama_calonpegawai' style='width:99%'></td></tr>

			  <tr><td>Jenis Kelamin</td>     <td>:</td> <td>
					<select style='width:100%; margin-bottom:5px;' name='jenis_kelamin' onHover='g()' onChange='g()' onClick='g()'>
					<option value=0 selected>- Pilih Jenis Kelamin -</option>
					<option value='Laki-laki'> Laki-laki </option>
					<option value='Perempuan'> Perempuan </option>";
			  echo " </select></td></tr>

				<script type='text/javascript'>
				 function x()
				 {
				 var nilai_kesehatan,hasil; //nt=nilai teori, np=nilai praktek
				 nilai_kesehatan=document.forms[0].nilai_kesehatan.value;
				 hasil=nilai_kesehatan //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
				 if(hasil>=75)
				 ket='Sehat';
				 else if (hasil<75)
				 ket='Tidak Sehat';
				 else
				 ket='Tentukan Nilai Kesehatan';
				 document.getElementById('sehatgak').value=ket;
				 document.getElementById('sehatgak').text=ket;
				 }

				</script>

								<script type='text/javascript'>
								 function y()
								 {
								 var nilai_kesehatan,nilai_cat,nilai_wawancara,nilai_psikologi,hasil; //nt=nilai teori, np=nilai praktek
								 var kali = 0.2;
								 nilai_kesehatan=document.forms[0].nilai_kesehatan.value;
								 nilai_wawancara=document.forms[0].nilai_wawancara.value;
								 nilai_psikologi=document.forms[0].nilai_psikologi.value;
								 nilai_cat=document.forms[0].nilai_cat.value;
								 hasil=(nilai_kesehatan*kali+nilai_wawancara*1+nilai_psikologi*1+nilai_cat*1)/7
								 if(hasil>=75)
								 ket='Layak';
								 else if (hasil<75)
								 ket='Tidak Layak';
								 else
								 ket='Input seluruh nilai ujian!';

								 nk=nilai_kesehatan
								 if(nk>=75)
								 ket='Layak';
								 else if (nk<75)
								 ket='Tidak Layak';
								 else
								 ket='Input seluruh nilai ujian!';
								 document.getElementById('layakgak').value=ket;
								 document.getElementById('layakgak').text=ket;
								 }

								</script>


																										<script type='text/javascript'>
																										 function z()
																										 {
																										 var pendidikan_terakhir,hasil; //nt=nilai teori, np=nilai praktek
																										 pendidikan_terakhir=document.forms[0].pendidikan_terakhir.value;
																										 hasil=pendidikan_terakhir
																										 SMA='SMA'
																										 S1='S1'
																										 D3='D3'//hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																										 if(hasil==SMA)
																										 ketsia=28;
																										 else if (hasil==D3)
																										 ketsia=30;
																										 else if (hasil==S1)
																										 ketsia=33;
																										 document.getElementById('usia').max=ketsia;
																										 if(hasil==SMA)
																										 ketsia=18;
																										 else if (hasil==D3)
																										 ketsia=18;
																										 else if (hasil==S1)
																										 ketsia=18;
																										 document.getElementById('usia').min=ketsia;
																										 }

																										</script>

																										<script type='text/javascript'>
																										 function u()
																										 {
																										 var pildep,hasilx; //nt=nilai teori, np=nilai praktek
																										 pildep=document.forms[0].pildep.value;
																										 hasilx=pildep
																										 I='Analisis Keimigrasian dan Pemeriksa Keimigrasian'
																										 S='Penjaga Tahanan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																										 if(hasilx==I)
																										 ketx=165;
																										 else if (hasilx==S)
																										 ketx=160;
																										 document.getElementById('tinggi').min=ketx;
																										 }

																										</script>


																																																				<script type='text/javascript'>
																																																				 function v()
																																																				 {
																																																				 var pildep2,hasily; //nt=nilai teori, np=nilai praktek
																																																				 pildep2=document.forms[0].pildep.value;
																																																				 hasily=pildep2
																																																				 I2='Analisis Keimigrasian dan Pemeriksa Keimigrasian'
																																																				 S2='Penjaga Tahanan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																																																				 if(hasily==I2)
																																																				 kety=158;
																																																				 else if (hasily==S2)
																																																				 kety=155;
																																																				 document.getElementById('tinggi').min=kety;
																																																				 }

																																																				</script>

																										<script type='text/javascript'>
																										 function g()
																										 {
																										 var jenis_kelamin,hasil; //nt=nilai teori, np=nilai praktek
																										 jenis_kelamin=document.forms[0].jenis_kelamin.value;
																										 hasil=jenis_kelamin
																										 L='Laki-laki'
																										 P='Perempuan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																										 if(hasil==L)
																										 u();
																										 else if (hasil==P)
																										 v();
																										 document.getElementById('tinggi').min=ket;
																										 }

																										</script>

			<tr><td width='165px'>Usia</td>   		 <td>:</td> <td> <input max='33' onHover='z()' onClick='z()' onChange='z()' type='number' value='$e[usia]' id='usia' name='usia' style='width:99%'></td></tr>

						  <tr><td>Pilihan Departemen</td>     <td>:</td> <td>
								<select style='width:100%; margin-bottom:5px;' name='pildep' onHover='g()' onChange='g()' onClick='g()'>
								<option value=0 selected>- Pilih Departemen -</option>
								<option value='Analisis Keimigrasian dan Pemeriksa Keimigrasian'>Analisis Keimigrasian dan Pemeriksa Keimigrasian</option>
								<option value='Penjaga Tahanan'>Penjaga Tahanan</option>
								</select></td></tr>


				<tr><td width='165px'>Tinggi</td>   		 <td>:</td> <td> <input type='number' id='tinggi' name='tinggi' onHover='g()' onChange='g()' onClick='g()' style='width:99%'></td></tr>
	<tr><td width='165px'>Nilai CAT</td>   		 <td>:</td> <td> <input min='0' max='500' type='number' name='nilai_cat' onChange='y()' style='width:99%'></td></tr>


<tr><td width='165px'>Nilai Psikologi</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' name='nilai_psikologi' onChange='y()' style='width:99%'></td></tr>
<tr><td width='165px'>Nilai Kesehatan</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' name='nilai_kesehatan' onChange='x()'  onChange='y()' style='width:99%'></td></tr>

<tr><td width='165px'>Nilai Wawancara</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' name='nilai_wawancara' onChange='y()' style='width:99%'></td></tr>

<tr><td width='165px'>Pengalaman Kerja</td>   		 <td>:</td> <td> <input type=text name='pengalaman_kerja' style='width:99%'></td></tr>
<tr><td width='165px'>Pendidikan Terakhir</td>   		 <td>:</td> <td> <input type=text name='pendidikan_terakhir' onClick='z()' style='width:99%'></td></tr>

								<tr style='display:none;'>
								<td>Kesehatan</td>
								<td>:</td>

								<td >
									<select style='width:100%; margin-bottom:5px;' name='kesehatan'>
									<option id='sehatgak' selected></option>
									<option value='Sehat'> Sehat </option>
									<option value='Tidak Sehat'> Tidak Sehat </option>
								</select>
								</td>
								</tr>

								<tr style='display:none;'>
								<td>Status</td>
								<td>:</td>
								<td>
									<select style='width:100%; margin-bottom:5px;' name='status'>
									<option id='layakgak' selected>
									</option>
									<option value='Layak'> Layak </option>
									<option value='Tidak Layak'> Tidak Layak </option>
								</select>
								</td>
								</tr>


          <tr><td width='160px;' height='20px'><br/><br/><input class='linkkk' type=submit value=Simpan>
		  <input class='linkkk' type=button value=Batal onclick=self.history.back()></td></tr><br/><br/>
          </table>
		  <table>
		</tr></table><br/></div></form>";
}

elseif ($_GET[module]=='inputdataa'){
		  $sql=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]' AND status='layak'");
		  $sql2=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]' AND status='Tidak Layak'");
		  $sql3=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]'");
			$layak=mysql_num_rows($sql);
			$tidak_layak=mysql_num_rows($sql2);
			$total_data=mysql_num_rows($sql3);

			$persentase1 = ($layak!=0)?($layak/$total_data)*100:0;
			$persentase_layak=round($persentase1,0);
			$persentase2 = ($tidak_layak!=0)?($tidak_layak/$total_data)*100:0;
			$persentase_tidak_layak = round($persentase2,0);
	 echo "<h2>Tambahkan Data Calon Pegawai Baru Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-data.html'>
		  <div class='td'>
          <table width=60% style='margin-left:20%'>
		  <tr><td width='165px'>Kode Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='kode_calonpegawai' style='width:99%'></td></tr>		  <tr><td width='165px'>Kode Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='kode_calonpegawai' style='width:99%'></td></tr>
	<tr><td width='165px'>Nama Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='nama_calonpegawai' style='width:99%'></td></tr>		  <tr><td width='165px'>Nama Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='nama_calonpegawai' style='width:99%'></td></tr>
		  <tr><td>Jenis Kelamin</td>    	 <td>:</td> <td>"; ?>
				<select style='width:84%; margin-bottom:5px;' name='jenis_kelamin' ONCHANGE="location = this.options[this.selectedIndex].value;">
				<?php echo "<option value='$_GET[jenis]' selected> $_GET[jenis] </option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='jenis_kelamin'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='jenis-$r[nilai_atribut].html'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-pegawai.html';\"></td></tr>
		  <tr><td>kesehatan</td>    	 <td>:</td> <td>"; ?>
				<select style='width:84%; margin-bottom:5px;' name='kesehatan' ONCHANGE="location = this.options[this.selectedIndex].value;">
				<?php echo "<option value=0 selected>- Pilih kesehatan -</option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='kesehatan'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='jeniss-$_GET[jenis]-kesehatan-$r[nilai_atribut].html'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-kesehatan.html';\"></td></tr>
		  <tr><td>Tahun</td>    	 <td>:</td> <td>
				<select style='width:84%; margin-bottom:5px;' name='tahun'>
				<option value=0 selected>- Pilih Tahun -</option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='tahun'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-tahun.html';\"></td></tr>
		  <tr><td>Harga</td>     <td>:</td> <td><input type=text name='harga' style='width:99%'></td></tr>
		  <tr><td>Sstatus</td>     <td>:</td> <td>
				<select style='width:100%; margin-bottom:5px;' name='status'>";
				if ($layak > $tidak_layak) {
					echo "<option value='layak' selected> layak </option>";
				}else{
					echo "<option value='Tidak Layak' selected>Tidak Layak </option>";
				}
				echo "
				<option value='layak'> layak </option>
				<option value='Tidak Layak'> Tidak Layak </option>";
		  echo " </select></td></tr>

          <tr><td colspan=2><br/><br/><input class='linkkk' type=submit value=Simpan>
		  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/>
          </table>
		  <table>";

		echo "
		</tr></table><br/></div></form>";
}

elseif ($_GET[module]=='inputdataaa'){
		  $sql=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]' AND kesehatan='$_GET[kesehatan]' AND status='layak'");
		  $sql2=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]' AND kesehatan='$_GET[kesehatan]' AND status='Tidak Layak'");
		  $sql3=mysql_query("SELECT * FROM data_pegawai WHERE jenis_kelamin='$_GET[jenis]' AND kesehatan='$_GET[kesehatan]'");
			$layak=mysql_num_rows($sql);
			$tidak_layak=mysql_num_rows($sql2);
			$total_data=mysql_num_rows($sql3);

			$persentase1 = ($layak!=0)?($layak/$total_data)*100:0;
			$persentase_layak=round($persentase1,0);
			$persentase2 = ($tidak_layak!=0)?($tidak_layak/$total_data)*100:0;
			$persentase_tidak_layak = round($persentase2,0);
	 echo "<h2>Tambahkan Data Calon Pegawai Baru Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-data.html'>
		  <div class='td'>
          <table width=60% style='margin-left:20%'>
		  <tr><td width='165px'>Kode Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='kode_calonpegawai' style='width:99%'></td></tr>
	<tr><td width='165px'>Nama Calon Pegawai</td>   		 <td>:</td> <td> <input type=text name='nama_calonpegawai' style='width:99%'></td></tr>
		  <tr><td>Jenis Kelamin</td>    	 <td>:</td> <td>"; ?>
				<select style='width:84%; margin-bottom:5px;' name='jenis_kelamin' ONCHANGE="location = this.options[this.selectedIndex].value;">
				<?php echo "<option value='$_GET[jenis]' selected> $_GET[jenis] </option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='jenis_kelamin'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='jenis-$r[nilai_atribut].html'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-pegawai.html';\"></td></tr>
		  <tr><td>kesehatan</td>    	 <td>:</td> <td>"; ?>
				<select style='width:84%; margin-bottom:5px;' name='kesehatan' ONCHANGE="location = this.options[this.selectedIndex].value;">
				<?php echo "<option value='$_GET[kesehatan]' selected> $_GET[kesehatan] </option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='kesehatan'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='jeniss-$_GET[jenis]-kesehatan-$r[nilai_atribut].html'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-kesehatan.html';\"></td></tr>
		  <tr><td>Tahun</td>    	 <td>:</td> <td>
				<select style='width:84%; margin-bottom:5px;' name='tahun'>
				<option value=0 selected>- Pilih Tahun -</option>";
				$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='tahun'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
				}
		  echo " </select><input style='' type=button value='Tambah' onclick=\"window.location.href='input-tahun.html';\"></td></tr>
		  <tr><td>Harga</td>     <td>:</td> <td><input type=text name='harga' style='width:99%'></td></tr>
		  <tr><td>Status</td>     <td>:</td> <td>
				<select style='width:100%; margin-bottom:5px;' name='status'>";
				if ($layak > $tidak_layak) {
					echo "<option value='layak' selected> layak </option>";
				}else{
					echo "<option value='Tidak Layak' selected>Tidak Layak </option>";
				}
				echo "
				<option value='layak'> layak </option>
				<option value='Tidak Layak'> Tidak Layak </option>";
		  echo " </select></td></tr>

          <tr><td colspan=2><br/><br/><input class='linkkk' type=submit value=Simpan>
		  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/>
          </table>
		  <table>";

		echo "
		</tr></table><br/></div></form>";
}

elseif ($_GET[module]=='editdata'){
  $sql=mysql_query("SELECT * FROM data_pegawai WHERE id=$_GET[id]");
  $e=mysql_fetch_array($sql);
	 echo "<h2>Edit Data Calon Pegawai Baru Pada Kemenkumham RI.</h2><hr><br/><br/>
          <form method=POST action='simpan-edit-data.html'>
		  <div class='td'>

							<script type='text/javascript'>
							 function x()
							 {
							 var nilai_kesehatan,hasil; //nt=nilai teori, np=nilai praktek
							 nilai_kesehatan=document.forms[0].nilai_kesehatan.value;
							 hasil=nilai_kesehatan //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
							 if(hasil>=75)
							 ket='Sehat';
							 else if (hasil<75)
							 ket='Tidak Sehat';
							 else
							 ket='Tentukan Nilai Kesehatan';
							 document.getElementById('sehatgak').value=ket;
							 document.getElementById('sehatgak').text=ket;
							 }

							</script>

											<script type='text/javascript'>
											 function y()
											 {
											 var nilai_kesehatan,nilai_cat,nilai_wawancara,nilai_psikologi,hasil,nk; //nt=nilai teori, np=nilai praktek
								 		 var kali = 0.2;
										 nilai_kesehatan=document.forms[0].nilai_kesehatan.value;
										 nilai_wawancara=document.forms[0].nilai_wawancara.value;
										 nilai_psikologi=document.forms[0].nilai_psikologi.value;
										 nilai_cat=document.forms[0].nilai_cat.value;
										 hasil=(nilai_kesehatan*kali+nilai_wawancara*1+nilai_psikologi*1+nilai_cat*1)/7
										 if(hasil>=75)
										 ket='Layak';
										 else if (hasil<75)
										 ket='Tidak Layak';
										 else
										 ket='Input seluruh nilai ujian!';
										 document.getElementById('layakgak').value=ket;
										 document.getElementById('layakgak').text=ket;
											 }

											</script>


						<script type='text/javascript'>
						 function a()
						{
					 var nilai_kesehatan1,hasil1; //nt=nilai teori, np=nilai praktek
					 nilai_kesehatan1=document.forms[0].nilai_kesehatan.value;
						 hasil1=nilai_kesehatan1 //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
					 if(hasil1>=75)
							 ket='Layak';
						 else if (hasil1<75)
									 ket='Tidak Layak';
								 else
								 ket='Tentukan Nilai Kesehatan';
											 document.getElementById('layakgak').value=ket;
									 document.getElementById('layakgak').text=ket;
								 }

						</script>



						<script type='text/javascript'>
							 function b()
				 {
						 var nilai_wawancara1,hasil1; //nt=nilai teori, np=nilai praktek
						 nilai_wawancara1=document.forms[0].nilai_wawancara.value;
				 hasil1=nilai_wawancara1 //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
					 if(hasil1>=75)
			 ket='Layak';
									 else if (hasil1<75)
		 ket='Tidak Layak';
						 else
						ket='Tentukan Nilai Kesehatan';
					 document.getElementById('layakgak').value=ket;
						 document.getElementById('layakgak').text=ket;
									 }

						</script>



							<script type='text/javascript'>
					 function c()
						 {
							 var nilai_cat1,hasil1; //nt=nilai teori, np=nilai praktek
								 nilai_cat1=document.forms[0].nilai_cat.value;
						 hasil1=nilai_cat1 //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
						 if(hasil1>=298)
		       ket='Layak';
						 else if (hasil1<298)
						 ket='Tidak Layak';
				 else
				 ket='Tentukan Nilai Kesehatan';
					 document.getElementById('layakgak').value=ket;
				 document.getElementById('layakgak').text=ket;
									 }

						</script>

																																																																																																																												</script>																		<script type='text/javascript'>
																		 function z()
																		 {
																		 var pendidikan_terakhir,hasil; //nt=nilai teori, np=nilai praktek
																		 pendidikan_terakhir=document.forms[0].pendidikan_terakhir.value;
																		 hasil=pendidikan_terakhir
																		 SMA='SMA'
																		 S1='S1'
																		 D3='D3'//hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																		 if(hasil==SMA)
																		 ket=28;
																		 else if (hasil==D3)
																		 ket=30;
																		 else if (hasil==S1)
																		 ket=33;
																		 document.getElementById('usia').max=ket;
																		 if(hasil==SMA)
																		 ket=18;
																		 else if (hasil==D3)
																		 ket=18;
																		 else if (hasil==S1)
																		 ket=18;
																		 document.getElementById('usia').min=ket;
																		 }

																		</script>

																																												<script type='text/javascript'>
																																												 function u()
																																												 {
																																												 var pildep,hasilx; //nt=nilai teori, np=nilai praktek
																																												 pildep=document.forms[0].pildep.value;
																																												 hasilx=pildep
																																												 I='Analisis Keimigrasian dan Pemeriksa Keimigrasian'
																																												 S='Penjaga Tahanan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																																												 if(hasilx==I)
																																												 ketx=165;
																																												 else if (hasilx==S)
																																												 ketx=160;
																																												 document.getElementById('tinggi').min=ketx;
																																												 }

																																												</script>


																																																																						<script type='text/javascript'>
																																																																						 function v()
																																																																						 {
																																																																						 var pildep2,hasily; //nt=nilai teori, np=nilai praktek
																																																																						 pildep2=document.forms[0].pildep.value;
																																																																						 hasily=pildep2
																																																																						 I2='Analisis Keimigrasian dan Pemeriksa Keimigrasian'
																																																																						 S2='Penjaga Tahanan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																																																																						 if(hasily==I2)
																																																																						 kety=158;
																																																																						 else if (hasily==S2)
																																																																						 kety=155;
																																																																						 document.getElementById('tinggi').min=kety;
																																																																						 }

																																																																						</script>

																																												<script type='text/javascript'>
																																												 function g()
																																												 {
																																												 var jenis_kelamin,hasil; //nt=nilai teori, np=nilai praktek
																																												 jenis_kelamin=document.forms[0].jenis_kelamin.value;
																																												 hasil=jenis_kelamin
																																												 L='Laki-laki'
																																												 P='Perempuan' //hasil=rumus rata2. Kenapa nt,np harus di kali 1 karena jika tidak javascript akan menganggap bahwa inputan nt,np adalah jadi 1 ( string)
																																												 if(hasil==L)
																																												 u();
																																												 else if (hasil==P)
																																												 v();
																																												 document.getElementById('tinggi').min=ket;
																																												 }

																																												</script>
																		<script type='text/javascript'>
																		 function n()
																		 {
																			 y();
																			 x();
																			 a();
																		 }

																		</script>
																																				<script type='text/javascript'>
																																				 function o()
																																				 {
																																					 y();
																																					 b();
																																				 }

																																				</script>
																																																						<script type='text/javascript'>
																																																						 function p()
																																																						 {
																																																							 y();
																																																							 c();
																																																						 }

																																																						</script>
																																																																								<script type='text/javascript'>
																																																																								 function q()
																																																																								 {
																																																																									 y();
																																																																									 d();
																																																																								 }

																																																																								</script>

																																																																																										<script type='text/javascript'>
																																																																																										 function submitpower()
																																																																																										 {
																																																																																										 }

																																																																																										</script>
          <table width=60% style='margin-left:20%'>						 <input type=hidden value='$e[id]' name='id' style='width:99%'>
		  <tr><td width='165px'>Kode Calon Pegawai</td>   		 <td>:</td> <td> <input type=text value='$e[kode_calonpegawai]' name='kode_calonpegawai' style='width:99%'></td></tr>

			<tr><td width='165px'>Nama Calon Pegawai</td>   		 <td>:</td> <td> <input type=text value='$e[nama_calonpegawai]' name='nama_calonpegawai' style='width:99%'></td></tr>
			<tr><td>Jenis Kelamin</td>    	 <td>:</td> <td>
			 <select style='width:100%; margin-bottom:5px;' name='jenis_kelamin'>
			 <option onHover='g()' onChange='g()' onClick='g()' value='$e[jenis_kelamin]' selected> $e[jenis_kelamin] </option>";
			 $tampil=mysql_query("SELECT * FROM atribut WHERE atribut='jenis_kelamin'");
			 while($r=mysql_fetch_array($tampil)){
			 echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
			 }
		 echo " </select></td></tr>
						<tr><td width='165px'>Usia</td>   		 <td>:</td> <td> <input max='33' onHover='z()' onClick='z()'  onChange='z()' type='number' value='$e[usia]' id='usia' name='usia' style='width:99%'></td></tr>

												  <tr><td>Pilihan Departemen</td>     <td>:</td> <td>
														<select style='width:100%; margin-bottom:5px;' name='pildep' onHover='g()' onChange='g()' onClick='g()'>
														<option value='$e[pildep]' selected>- $e[pildep] -</option>
														<option value='Analisis Keimigrasian dan Pemeriksa Keimigrasian'>Analisis Keimigrasian dan Pemeriksa Keimigrasian</option>
														<option value='Penjaga Tahanan'>Penjaga Tahanan</option>
														</select></td></tr>
						<tr><td width='165px'>Tinggi</td>   		 <td>:</td> <td> <input type='number' onHover='g()' onChange='g()' onClick='g()' value='$e[tinggi]' id='tinggi' name='tinggi' style='width:99%'></td></tr>

						<tr><td width='165px'>Nilai CAT</td>   		 <td>:</td> <td> <input min='0' max='500' type='number' onChange='p()'  value='$e[nilai_cat]' name='nilai_cat' style='width:99%'></td></tr>
						<tr><td width='165px'>Nilai Psikologi</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' onChange='q()'  value='$e[nilai_psikologi]' name='nilai_psikologi' style='width:99%'></td></tr>
						<tr><td width='165px'>Nilai Kesehatan</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' onChange='n()'   value='$e[nilai_kesehatan]' name='nilai_kesehatan' style='width:99%'></td></tr>
						<tr><td width='165px'>Nilai Wawancara</td>   		 <td>:</td> <td> <input min='0' max='100' type='number' onChange='o()' value='$e[nilai_wawancara]' name='nilai_wawancara' style='width:99%'></td></tr>

			 		 <tr><td width='165px'>Pengalaman Kerja</td>   		 <td>:</td> <td> <input type=text value='$e[pengalaman_kerja]' name='pengalaman_kerja' style='width:99%'></td></tr>

					 			 		 <tr><td width='165px'>Pendidikan Terakhir</td>   		 <td>:</td> <td> <input type=text value='$e[pendidikan_terakhir]' onClick='z()' onChange='z()' name='pendidikan_terakhir' style='width:99%'></td></tr>

		  <tr style='display:none'><td>kesehatan</td>    	 <td>:</td> <td>
				<select style='width:100%; margin-bottom:5px;' name='kesehatan'>
				<option id='sehatgak' selected> $e[kesehatan]</option></select></td></tr>

		  <tr style='display:none'><td>Status</td>     <td>:</td> <td>
				<select style='width:100%; margin-bottom:5px;' name='status'>
				<option id='layakgak' selected> $e[status] </option>
				<option value='layak'> layak </option>
				<option value='Tidak Layak'> Tidak Layak </option>";
		  echo " </select></td></tr>

          <tr><td colspan=2><br/><br/><input onClick='submitpower()' class='linkkk' type=submit value=Simpan>
		  <input class='linkkk' type=button value=Batal onclick=self.history.back()><br/><br/></td></tr>
          </table></div></form>";
}
elseif ($_GET[module]=='hapusdata'){
	  mysql_query("DELETE FROM data_pegawai WHERE id='$_GET[id]'");
	  			echo "<script>window.alert('Sukses Menghapus data Calon Pegawai !!!');
				window.location='semua-data.html'</script>";
}
elseif ($_GET[module]=='simpandata'){

								 $nilai_kesehatan = $_POST['nilai_kesehatan'];
						 if ($nilai_kesehatan >= 75)
							{
								$kesehatan = "Layak";
							}
							else
							{
								$kesehatan = "Tidak Layak";
							}
	if (empty($_POST[kode_calonpegawai])){
		echo "<script>window.alert('Anda belum mengisikan kode.');
			window.location='javascript:history.go(-1)'</script>";
	}
elseif (empty($_POST[nama_calonpegawai])){
	echo "<script>window.alert('Anda belum memilih naman.');
		window.location='javascript:history.go(-1)'</script>";
}
	elseif (empty($_POST[jenis_kelamin])){
		echo "<script>window.alert('Anda belum memilih Jenis kelamin.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[usia])){
		echo "<script>window.alert('Anda belum memilih kesehatan.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[pildep])){
		echo "<script>window.alert('Anda belum memilih Departemen.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[tinggi])){
		echo "<script>window.alert('Anda belum memilih Tinggi.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[nilai_cat])){
		echo "<script>window.alert('Anda belum memilih Tahun.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[nilai_psikologi])){
		echo "<script>window.alert('Anda belum mengisikan Harga.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[nilai_kesehatan])){
		echo "<script>window.alert('Anda belum memilih JStatus.');
			window.location='javascript:history.go(-1)'</script>";
	}
	elseif (empty($_POST[nilai_wawancara])){
		echo "<script>window.alert('Anda belum mengisikan Wawancara');
			window.location='javascript:history.go(-1)'</script>";
	}
			elseif (empty($_POST[pengalaman_kerja])){
				echo "<script>window.alert('Anda belum mengisikan PENGALAMAN KERJA.');
					window.location='javascript:history.go(-1)'</script>";
			}

				elseif (empty($_POST[pendidikan_terakhir])){
					echo "<script>window.alert('Anda belum mengisikan PENDIDIKAN TERAKHIR.');
						window.location='javascript:history.go(-1)'</script>";
				}

					elseif (empty($_POST[kesehatan])){
						echo "<script>window.alert('Anda belum mengisikan SEHAT.');
							window.location='javascript:history.go(-1)'</script>";
					}

						elseif (empty($_POST[status])){
							echo "<script>window.alert('Anda belum mengisikan STATUS');
								window.location='javascript:history.go(-1)'</script>";
						}

			else{


	   mysql_query("INSERT INTO data_pegawai(kode_calonpegawai,
											nama_calonpegawai,
											jenis_kelamin,
											usia,
											pildep,
											tinggi,
											nilai_cat,
											nilai_psikologi,
											nilai_kesehatan,
											nilai_wawancara,
										pengalaman_kerja,
									pendidikan_terakhir,
								kesehatan,
							status)
									VALUES('$_POST[kode_calonpegawai]',
										   '$_POST[nama_calonpegawai]',
										   '$_POST[jenis_kelamin]',
										   '$_POST[usia]',
										   '$_POST[pildep]',
										   '$_POST[tinggi]',
										   '$_POST[nilai_cat]',
										   '$_POST[nilai_psikologi]',
										   '$_POST[nilai_kesehatan]',
										   '$_POST[nilai_wawancara]',
										   '$_POST[pengalaman_kerja]',
										   '$_POST[pendidikan_terakhir]',
										   '$_POST[kesehatan]',
										   '$_POST[status]')");

			echo "<script>window.alert('Berhasil menyimpan data calon pegawai.');
				window.location='semua-data.html'</script>";
				echo "Query yang dijalankan: $query";
								 echo "<br />";
								 echo "Kode error: ".mysql_errno();
								 echo "<br />";
								 echo "Pesan error: ".mysql_error();
}
}

elseif ($_GET[module]=='simpanedit'){
    mysql_query("UPDATE data_pegawai SET kode_calonpegawai  = '$_POST[kode_calonpegawai]',
									   nama_calonpegawai = '$_POST[nama_calonpegawai]',
									   jenis_kelamin	   = '$_POST[jenis_kelamin]',
									   usia      = '$_POST[usia]',
									   pildep      = '$_POST[pildep]',
									   tinggi      = '$_POST[tinggi]',
									   nilai_cat       = '$_POST[nilai_cat]',
									   nilai_psikologi       = '$_POST[nilai_psikologi]',
									   nilai_kesehatan       = '$_POST[nilai_kesehatan]',
									   nilai_wawancara      = '$_POST[nilai_wawancara]',
									   pengalaman_kerja       = '$_POST[pengalaman_kerja]',
									   pendidikan_terakhir       = '$_POST[pendidikan_terakhir]',
									   kesehatan       = '$_POST[kesehatan]',
									   status	   = '$_POST[status]'
								 WHERE id   = '$_POST[id]'");
			echo "<script>window.alert('Sukses Update data Calon Pegawai !!!');
				window.location='semua-data.html'</script>";
}
?>
