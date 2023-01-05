<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jabatan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card" >
            <div class="card-header">
                <a href="/Project/Tampilan.html"></a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end"  >
                <a href="/Project/Tampilan.html" button class="btn btn-danger "  type="button" >Back</button></a>
                  </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label" >Jabatan Baru</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Baru">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Gaji Pokok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Rp-. / Bulan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label"> Total Lembur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lembur" name="lembur" placeholder=" -. / Jam">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Jabatan Baru
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Jabatan Baru</th>
                            <th scope="col">Gaji Pokok</th>
                            <th scope="col">Total Lembur</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawans as $k)
                            <tr>
                                <th scope="row"></th>
                                <td scope="row">{{ $k->nama_karyawan }}</td>
                                <td scope="row">{{ $k->jabatan_karyawan }}</td>
                                <td scope="row">{{ $k->umur_karyawan }}</td>
                                <td scope="row"></td>
                                <td scope="row">
                                    <a href="/karyawans/edit/{{ $k->id_karyawan }}" ><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="/karyawans/hapus/{{ $k->id_karyawan }}" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>