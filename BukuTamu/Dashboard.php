

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'css.php'?>
  </head>
  <body>
    <div class="container-fluid mt-2">
    <form action="">
      <div class="d-flex">
        <h5 class="my-3 p-2 flex-grow-1" style="color: rgb(54, 42, 42);">Data Mahasiswa</h5>
        <a href="add.php?ubah=mahasiswa" class="tombol mb-3 mx-4 ms-auto"> <i class="fa fa-plus"></i> Tambah Data</a>
        <a href="print.php?ubah=mahasiswa" class="tombol cetak mb-3 ms-auto"> <i class="fa fa-print"></i> Cetak</a>
      </div>
      <table class="table table-striped table-bordered table-hover table-warning glow" id="dataMahasiswa">
        <thead class="table-dark">
          <tr>
            <th>No.ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Nomor HP</th>
            <th class="text-center">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'koneksi.php';
          $query = mysqli_query($con, 'SELECT * FROM guest');
          while ($data = mysqli_fetch_array($query)) {
          ?>
          <tr>
            <td>
              <?php echo $data['id_guest']; ?>
            </td>
            <td>
              <?php echo $data['nama']; ?>
            </td>
            <td>
              <?php echo $data['alamat']; ?>
            </td>
            <td>
              <?php echo $data['tanggal']; ?>
            </td>
            <td>
              <?php echo $data['tujuan']; ?>
            </td>
            <td>
              <?php echo $data['nomor_hp']; ?>
            </td>
            <td class="text-center">
              <a class="btn btn-success btn-sm uh" href="ubah.php?id=<?php echo $data['id']; ?>&ubah=mahasiswa"><i class="fa fa-edit"></i>
                Ubah</a>
              <a class="btn btn-danger btn-sm uh" href="hapus.php?id=<?php echo $data['id']; ?>&ubah=mahasiswa"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>
                Hapus</a>
            </td>
          </tr>
          <?php } ?>
          </tr>
        </tbody>
      </table>
  </div>

  <footer>
    <?php include 'javascript.php'?>
  </footer>
  </body>
  </html>