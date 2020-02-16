<div class="container">

	<div class="row mt-5">
		<div class="col-md-6">
            <?php if($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
				Data mahasiswa <strong>berhasil</strong> <?=$this->session->flashdata('flash')?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <?php endif ?>
            
			<div class="d-flex justify-content-between mb-3">
				<h3>Daftar Mahasiswa</h3>
				<a href="<?=base_url()?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
			</div>
			<ul class="list-group">
				<?php foreach($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']?>
                        <a href="<?= base_url()?>mahasiswa/hapus/<?= $mhs['id']?>" class="badge badge-danger float-right" onclick="return confirm('yakin?')">Hapus</a>
                    </li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

</div>
