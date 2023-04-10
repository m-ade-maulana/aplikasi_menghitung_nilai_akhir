<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="card mt-3 mx-auto" style="width:50%">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Aplikasi Penghitung Nilai Akhir</div>
            </div>
            <div class="card-body">
                <form action="output.php" method="post">

                    <div class="form-group">
                        <label for="" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" name="nim" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai Absensi</label>
                        <input type="text" class="form-control" name="nilai_absensi" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai Tugas</label>
                        <input type="text" class="form-control" name="nilai_tugas" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" name="nilai_uts" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" name="nilai_uas" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-md mt-3">Hitung</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>