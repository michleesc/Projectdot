<!DOCTYPE html>
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

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                @foreach ($karyawans as $k)
                <form action="/karyawans/update" method="POST">
                    <div class="mb-3 row">
                    <input type="hidden" name="id" value="{{ $k->id_karyawan }}"> <br/>
                        <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $k->nama_karyawan }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="{{ $k->jabatan_karyawan }}">{{ $k->jabatan_karyawan }}</option>
                                <option value="Direktur" >Direktur</option>
                                <option value="Karyawan" >Karyawan</option>
                                <option value="Manager" >Manager</option>
                            </select>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="umur" name="umur" value="{{ $k->umur_karyawan }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Ubah Data" class="btn btn-primary" />
                    </div>
                </form>
                @endforeach

            </div>
        </div>