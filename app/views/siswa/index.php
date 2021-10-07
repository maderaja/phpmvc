<div class="container mt-4">

  <div class="row">
    <div class="col-lg-6 mx-auto">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6 mx-auto">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Siswa [+]
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 mx-auto">
      <h3 class="mx-auto" style="width: fit-content;">Daftar Siswa</h3>

      <form action="<?= BASEURL; ?>/siswa/cari" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="cari siswa.." name="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>

      <ul class="list-group">
        <?php foreach ($data['swa'] as $swa) : ?>
          <li class="list-group-item  ">
            <?= $swa['nama']; ?>

            <a href="<?= BASEURL; ?>/siswa/hapus/<?= $swa['id']; ?>" class="badge bg-danger float-end ms-1" style="text-decoration: none;" id="btn-hapus">hapus</a>
            <a href="<?= BASEURL; ?>/siswa/ubah/<?= $swa['id']; ?>" class="badge bg-primary float-end ms-1 tampilModalUbah" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $swa['id'] ?>">ubah</a>
            <a href="<?= BASEURL; ?>/siswa/detail/<?= $swa['id']; ?>" class="badge bg-success float-end ms-1" style="text-decoration: none;">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/siswa/tambah" method="POST">
          <input type="hidden" name="id" id="id">

          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" autocomplete="off">
          </div>

          <label for="jurusan">Jurusan</label>
          <select class="form-select" id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Listrik">Teknik Listrik</option>
            <option value="Teknik Bangunan">Teknik Bangunan</option>
          </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>