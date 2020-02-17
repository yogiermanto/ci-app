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
                    <?php $no = 1; ?>
                    <?php foreach($peoples as $people) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $people['name'] ?></td>
						<td><?= $people['email'] ?></td>
						<td>
							<a href="" class="badge badge-danger" onclick="return confirm('yakin?')">Hapus</a>
							<a href="" class="badge badge-warning">Edit</a>
							<a href="" class="badge badge-primary">Detail</a>
						</td>
					</tr>
                    <?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
