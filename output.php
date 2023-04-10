<?php

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nomor_induk_mahasiswa = $_POST['nim'];
$nilai_absensi = $_POST['nilai_absensi'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

// Hitung Nilai 
$nas = $nilai_absensi * 0.1;
$nts = $nilai_tugas * 0.2;
$nuts = $nilai_uts * 0.3;
$nuas = $nilai_uas * 0.4;

// Hitung nilai akhir
$nilai_akhir = $nas + $nts + $nuts + $nuas;

// Kondisi untuk mencari grade
if ($nilai_akhir >= 85) {
    $grade = "A";
} elseif ($nilai_akhir >= 70) {
    $grade = "B";
} elseif ($nilai_akhir >= 56) {
    $grade = "C";
} else {
    $grade = "D";
}

// Kondisi untuk mencari keterangan
if ($grade == "A" || $grade == "B" || $grade == "C") {
    $keterangan = "LULUS";
} else {
    $keterangan = "TIDAK LULUS";
}
?>

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
                <form>

                    <div class="form-group">
                        <label for="" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" value="<?= $nama_mahasiswa ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" value="<?= $nomor_induk_mahasiswa ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai Absensi</label>
                        <input type="text" class="form-control" value="<?= $nas ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai Tugas</label>
                        <input type="text" class="form-control" value="<?= $nts ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" value="<?= $nuts ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" value="<?= $nuas ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Nilai Akhir</label>
                        <input type="text" class="form-control" value="<?= $nilai_akhir ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">GRADE</label>
                        <input type="text" class="form-control" value="<?= $grade ?>" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" value="<?= $keterangan ?>" disabled>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="index.php" class="btn btn-primary btn-md mt-3">DONE</a>
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