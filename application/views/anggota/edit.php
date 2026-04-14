<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Edit Anggota</h2>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('anggota/update'); ?>">

<input type="hidden" name="id" value="<?= $anggota->id ?>">

<div class="form-group mb-3">
<label>No Anggota</label>
<input type="text" name="no_anggota" class="form-control" value="<?= $anggota->no_anggota ?>">
</div>

<div class="form-group mb-3">
<label>Nama Anggota</label>
<input type="text" name="nama_anggota" class="form-control" value="<?= $anggota->nama_anggota ?>" required>
</div>

<div class="form-group mb-3">
<label>Telp</label>
<input type="text" name="telp" class="form-control" value="<?= $anggota->telp ?>">
</div>

<div class="form-group mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?= $anggota->email ?>">
</div>

<div class="form-group mb-3">
<label>Status</label>
<select name="status" class="form-control">
<option value="1" <?= $anggota->status==1?'selected':'' ?>>Aktif</option>
<option value="0" <?= $anggota->status==0?'selected':'' ?>>Nonaktif</option>
</select>
</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= site_url('anggota');?>" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</div>