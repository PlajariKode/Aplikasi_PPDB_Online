<div class="container mt-4">

	<?php
	if(!isset($_GET['act']) || $_GET['act'] == 'step-daftar') { ?>
		
		<div class="card">
			<div class="card-header">
				<strong>Langkah Pendaftaran</strong>
			</div>
			<div class="card-body">
				<ol>
					<li>Pergi ke halaman form pendaftaran atau klik tombol biru dibawah</li>
					<li>Lengkapi semua data pada form pendaftaran</li>
					<li>Setelah pendaftaran berhasil silahkan gunakan nomor pendaftaran dan password kalian untuk login dengan klik link <b>Masuk</b> pada menu diatas</li>
				</ol><br/>
				<a href="?p=daftar&act=form-daftar" class="btn btn-primary">Daftar</a>
			</div>
		</div>

	<?php } elseif($_GET['act'] == 'form-daftar') { ?>		

		<div class="card">
			<div class="card-header">
				<strong>Form Pendaftaran</strong>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="alert alert-info">Lengkapi formulir blanko pendaftaran siswa dibawah ini.</div>
						<form method="POST" action="">
							<label for="nisn">NISN</label>
							<input type="text" name="nisn" id="nisn" class="form-control mb-2" required>
							<label for="nama">Nama Lengkap Siswa</label>
							<input type="text" name="nama_lengkap" id="nama" class="form-control mb-2" required>	
							<label for="asal_sekolah">Asal Sekolah</label>
							<input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control mb-2" required>
							<label for="email">E-mail Siswa</label>
							<input type="email" name="email" id="email" class="form-control mb-2" required>
						</div>
						<div class="col-md-6">
							<div class="alert alert-info">Pilih urutan kompetensi yang diminati</div>
							<label for="pil1">Pilihan 1</label>
							<select id="pil1" name="pil1" class="form-control mb-2" required>
								<option value="">-</option>
								<option value="RPL">Rekayasa Perangkat Lunak</option>
								<option value="TKR">Teknik Kendaraan Ringan</option>
								<option value="MM">Multimedia</option>
								<option value="AP">Akomodasi Perhotelan</option>
							</select>
							<label for="pil2">Pilihan 2</label>
							<select id="pil2" name="pil2" class="form-control mb-2" required>
								<option value="">-</option>
								<option value="RPL">Rekayasa Perangkat Lunak</option>
								<option value="TKR">Teknik Kendaraan Ringan</option>
								<option value="MM">Multimedia</option>
								<option value="AP">Akomodasi Perhotelan</option>
							</select>
							<label for="pil3">Pilihan 3</label>
							<select id="pil3" name="pil3" class="form-control mb-2" required>
								<option value="">-</option>
								<option value="RPL">Rekayasa Perangkat Lunak</option>
								<option value="TKR">Teknik Kendaraan Ringan</option>
								<option value="MM">Multimedia</option>
								<option value="AP">Akomodasi Perhotelan</option>
							</select>
							<div class="mt-3">
								<button class="btn btn-success w-100" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		<?php }	?>

	</div>