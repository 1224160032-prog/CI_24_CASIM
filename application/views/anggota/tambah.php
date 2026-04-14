<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Tambah Anggota</h2>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('anggota/simpan'); ?>">

<div class="form-group mb-3">
<label>Id</label>
<input type="text" name="id" class="form-control">
</div>

<div class="form-group mb-3">
<label>No Anggota</label>
<input type="text" name="no_anggota" class="form-control" required>
</div>

<div class="form-group mb-3">
<label>Nama</label>
<input type="text" name="nama_anggota" class="form-control" required>
</div>

<div class="form-group mb-3">
<label>Telp</label>
<input type="text" name="telp" class="form-control">
</div>

<div class="form-group mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group mb-3">
<label>Status</label>
<select name="status" class="form-control">
<option value="1">Aktif</option>
<option value="0">Nonaktif</option>
</select>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</div>