<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Pasien</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Pasien</button>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Penyakit</th>
                    <th>No Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pasien";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['tgl_lahir']}</td>
                                <td>{$row['jenis_kelamin']}</td>
                                <td>{$row['usia']}</td>
                                <td>{$row['penyakit']}</td>
                                <td>{$row['no_kamar']}</td>
                                <td>{$row['tgl_masuk']}</td>
                                <td>{$row['tgl_keluar']}</td>
                                <td>
                                    <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#editModal{$row['id']}'>Edit</button>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                                </td>
                            </tr>";

                        // Modal Edit
                        echo "
                        <div class='modal fade' id='editModal{$row['id']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Edit Pasien</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <form action='update.php' method='POST'>
                                        <div class='modal-body'>
                                            <input type='hidden' name='id' value='{$row['id']}'>
                                            <div class='mb-3'>
                                                <label for='nama' class='form-label'>Nama</label>
                                                <input type='text' class='form-control' name='nama' value='{$row['nama']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='tgl_lahir' class='form-label'>Tanggal Lahir</label>
                                                <input type='date' class='form-control' name='tgl_lahir' value='{$row['tgl_lahir']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='jenis_kelamin' class='form-label'>Jenis Kelamin</label>
                                                <select class='form-control' name='jenis_kelamin' required>
                                                    <option value='Laki-laki' " . ($row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '') . ">Laki-laki</option>
                                                    <option value='Perempuan' " . ($row['jenis_kelamin'] == 'Perempuan' ? 'selected' : '') . ">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='usia' class='form-label'>Usia</label>
                                                <input type='number' class='form-control' name='usia' value='{$row['usia']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='penyakit' class='form-label'>Penyakit</label>
                                                <input type='text' class='form-control' name='penyakit' value='{$row['penyakit']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='no_kamar' class='form-label'>No Kamar</label>
                                                <input type='text' class='form-control' name='no_kamar' value='{$row['no_kamar']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='tgl_masuk' class='form-label'>Tanggal Masuk</label>
                                                <input type='date' class='form-control' name='tgl_masuk' value='{$row['tgl_masuk']}' required>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='tgl_keluar' class='form-label'>Tanggal Keluar</label>
                                                <input type='date' class='form-control' name='tgl_keluar' value='{$row['tgl_keluar']}'>
                                            </div>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Modal Create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="create.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="usia" class="form-label">Usia</label>
                                <input type="number" class="form-control" name="usia" required>
                            </div>
                            <div class="mb-3">
                                <label for="penyakit" class="form-label">Penyakit</label>
                                <input type="text" class="form-control" name="penyakit" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_kamar" class="form-label">No Kamar</label>
                                <input type="text" class="form-control" name="no_kamar" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tgl_masuk" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tgl_keluar">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
