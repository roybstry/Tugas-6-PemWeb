<?php
	// Memproses data yang dikirimkan dari form
	if (isset($_POST['nama'])) {
		$nama = $_POST['nama'];
		$umur = $_POST['umur'];
		$alamat = $_POST['alamat'];
		$jeniskelamin = $_POST['jeniskelamin'];
        $universitas = $_POST['universitas'];
        $semester = $_POST['semester'];
        $fakultas = $_POST['fakultas'];
        $jurusan = $_POST['jurusan'];

		// Menampilkan data
		echo "<h2>Biodata Anda</h2>";
		echo "<p>Nama lengkap: $nama</p>";
		echo "<p>Umur: $umur tahun</p>";
		echo "<p>Alamat: $alamat</p>";
		echo "<p>Jenis Kelamin: $jeniskelamin</p>";
        echo "<p>Asal Universitas: $universitas</p>";
        echo "<p>Semester: $semester</p>";
        echo "<p>Fakultas: $fakultas</p>";
        echo "<p>Jurusan: $jurusan</p>";
	}
	?>