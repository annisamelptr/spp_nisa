<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPP | CREATE DATA PETUGAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ (session('success')) }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ (session('error')) }}
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                     <h3 class="fw-bold text-center pb-2">Tambah Data Siswa</h3>
                     <hr>
                     <form action="{{ route('siswa.index') }}" method="POST">
                      @csrf
                       <div class="form-group">
                       <label for="nisn">Nama:</label>
                       <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Siswa" required>
                      </div>
                      <br>
                      <div class="form-group">
                       <label for="nisn">Alamat:</label>
                       <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" required></textarea>
                      </div>
                      <br>
                      <div class="form-group">
                       <label for="nisn">No. Telepon:</label>
                       <input type="number" class="form-control" name="no_telp" placeholder="Masukkan No. Telepon Siswa" required>
                      </div>
                      <br>
                      <div class="form-group">
                       <label for="id_spp">ID. PETUGAS</label>
                       <select name="id_spp" class="form-control" required>
                           <option selected>Pilih ID. SPP Petugas</option>
                           <option value="1">2021</option>
                           <option value="2">2022</option>
                           <option value="3">2023</option>
                       </select>
                       </div>
                       <br>
                      <button type="submit" class="btn btn-outline-primary">SIMPAN</button>
                      <a href="{{ route('siswa.index') }}" class="btn btn-outline-dark">KEMBALI</a>
                     </form>
                    </div>
                  </div>
                  </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>