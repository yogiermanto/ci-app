<div class="container mt-3">
	<div class="row">
		<div class="col">
			<h3>List of Peoples</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($peoples as $people) : ?>
					<tr>
						<td><?= ++$start ?></td>
						<td><?= $people['name'] ?></td>
						<td><?= $people['email'] ?></td>
						<td>
							<a href="" class="badge badge-primary">Detail</a>
							<a href="" class="badge badge-warning">Edit</a>
							<a href="" class="badge badge-danger" onclick="return confirm('yakin?')">Hapus</a>
						</td>
					</tr>
                    <?php endforeach ?>
				</tbody>
			</table>

			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
