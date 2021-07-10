<h3>List of Peoples</h3>

<div class="row">
	<div class="col-md-6">
		<form action="<?= base_url('peoples'); ?>" method="POST">
			<div class="input-group mb-3">
			  <input type="text" name="keyword" autocomplete="off" autofocus class="form-control" placeholder="search people here..">
			  <div class="input-group-append">
			    <input class="btn btn-outline-primary" name="submit" type="submit">
			  </div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-10">
		<h6>Result : <?= $rows; ?></h6>
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
				<?php if (empty($peoples)) : ?>
					<tr>
						<td colspan="4">
							<div class="alert alert-danger" role="alert">
							  data not found!
							</div>
						</td>
					</tr>
				<?php endif ?>
				<?php foreach ($peoples as $p) : ?>
				<tr>
					<th><?= ++$start; ?></th>
					<td><?= $p['name']; ?></td>
					<td><?= $p['email']; ?></td>
					<td>
						<a href="" class="badge badge-warning">detail</a>
						<a href="" class="badge badge-success">edit</a>
						<a href="" class="badge badge-danger">delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links(); ?>
	</div>
</div>