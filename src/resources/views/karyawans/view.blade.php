<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#">DongokerS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/karyawans/view">Karyawan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/jabatans">Jabatan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/penggajians">Penggajian</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    <div class="mx-auto">
        untuk memasukkan data
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form action="/karyawans" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="">- Pilih Jabatan -</option>
                                <option value="Direktur" >Direktur</option>
                                <option value="Karyawan" >Karyawan</option>
                                <option value="Manager" >Manager</option>
                            </select>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="umur" name="umur" >
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        untuk mengeluarkan data
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Karyawan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawans as $k)
                            <tr>
                                <th scope="row">{{ $k->id_karyawan }}</th>
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
</html> -->