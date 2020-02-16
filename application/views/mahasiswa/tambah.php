<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post" novalidate>
						<div class="form-group">
							<label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <?php if(validation_errors()) : ?>
                                <small id="numberHelp" class="form-text text-danger">
                                    <?= form_error('npm') ?>                           
                                </small>
                            <?php endif ?>
						</div>
						<div class="form-group">
							<label for="npm">NPM</label>
                            <input type="number" class="form-control" name="npm" id="npm">
                            <?php if(validation_errors()) : ?>
                                <small id="numberHelp" class="form-text text-danger">
                                    <?= form_error('npm') ?>                           
                                </small>
                            <?php endif ?>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <?php if(validation_errors()) : ?>
                                <small id="numberHelp" class="form-text text-danger">
                                    <?= form_error('npm') ?>                           
                                </small>
                            <?php endif ?>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" name="jurusan" id="jurusan">
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Teknik Mesin">Teknik Mesin</option>
								<option value="Teknik Sipil">Teknik Sipil</option>
								<option value="Teknik Industri">Teknik Industri</option>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
