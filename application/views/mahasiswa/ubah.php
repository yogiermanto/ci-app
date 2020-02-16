<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
                        <input type="hidden" name="id" value="<?=$mahasiswa['id']?>">
						<div class="form-group">
							<label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?=$mahasiswa['nama']?>">
                            <small id="numberHelp" class="form-text text-danger">
                                <?= form_error('npm') ?>                           
                            </small>
						</div>
						<div class="form-group">
							<label for="npm">NPM</label>
                            <input type="number" class="form-control" name="npm" id="npm" value="<?=$mahasiswa['npm']?>">
                            <small id="numberHelp" class="form-text text-danger">
                                <?= form_error('npm') ?>                           
                            </small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?=$mahasiswa['email']?>">
                            <small id="numberHelp" class="form-text text-danger">
                                <?= form_error('npm') ?>                           
                            </small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach($jurusan as $data) : ?>
                                    <?php if($data == $mahasiswa['jurusan']) :?>
                                        <option value="<?=$data?>" selected><?=$data?></option>
                                    <?php else : ?>
                                        <option value="<?=$data?>"><?=$data?></option>
                                    <?php endif ?>

                                <?php endforeach ?>
							</select>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
