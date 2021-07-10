<div class="row">
	<div class="col-md-6">
		<div class="card">
		  <div class="card-header">
		    Form Tambah Data
		  </div>
		  <div class="card-body">
		    <form action="" method="POST">
		    	<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama">
				    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="text" class="form-control" id="nim" name="nim">
				    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email">
				    <small class="form-text text-danger"><?= form_error('email'); ?></small>
				  </div>
				  <div class="form-group">
				    <select class="form-control" name="jurusan">
				    	<option value="">-pilih di bawah ini-</option>
							<?php foreach ($jurusan as $j) : ?>
						  	<option value="<?= $j; ?>"><?= $j; ?></option>
							<?php endforeach; ?>
						</select>
						<small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				  </div>
				  <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
		    </form>
		  </div>
		</div>
	</div>
</div>