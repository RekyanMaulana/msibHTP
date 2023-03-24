<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pemrosesan Form</title>
</head>
<body>
    <form action="" method="post">
        <p>Form Input Nilai</p>
        <label for="">Nama : </label><br>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br>
        <label for="">Mata Kuliah : </label><br>
        <select name="matkul" id="">
            <option >--- Pilih Mata Kuliah ---</option>
            <option value="html">Html & Css</option>
            <option value="js">Javascript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select><br>
        <label for="">Nilai : </label><br>
        <input type="text" name="nilai" placeholder="Masukkan Nilai Anda">
        <button type="submit" name="proses">Submit</button>
    </form>

    <?php
    error_reporting(0);
        $nama = $_POST['nama'];
        $matakuliah = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        $tombol = $_POST['proses'];

        $ket = ($nilai >= 60)? "Lulus" : "Tidak Lulus";
        if ($nilai >= 85 && $nilai <= 100) $grade = "A";
        elseif ($nilai >= 75 && $nilai < 85) $grade = "B";
        elseif ($nilai >= 60 && $nilai < 75) $grade = "C";
        elseif ($nilai >= 30 && $nilai < 60) $grade = "D";
        elseif ($nilai >= 0 && $nilai < 30) $grade = "E";
        else $grade = "";

        switch($grade){
            case "A" : $predikat = "Memuaskan"; break;
            case "B" : $predikat = "Bagus"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Buruk"; break;
            default: $predikat = "";
        }
        if(isset($tombol)){
    ?>

    Nama Mahasiswa : <?= $nama ?>
    <br> Matakuliah : <?= $matakuliah ?>
    <br> Nilai : <?= $nilai ?>
    <br> Keterangan : <?= $ket ?>
    <br> Grade : <?= $grade ?>
    <br> Predikat : <?= $predikat ?>

    <?php } ?>
</body>
</html>