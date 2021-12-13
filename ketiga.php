<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="keempat.css">
</head>
<body>
    <div class="konten">
        <div class="main">
            <img src="gambar/profil.jpg" alt="">
            <h2>AS FINE BASITH MARYONO</h2>
            <h3>KELAS XI RPL</h3>
        </div>

        <div class="php">
            <?php
                if(isset($_POST['kirim'])){
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $hobi = implode($_POST['hobi_list'] , ',');
                    $ct = $_POST ['cita-cita'];
                    $birthday = $_POST ['birthday'];


                    echo "<p> Jenis Kelamin : $jenis_kelamin </p>";
                    echo "<p> Hobi : $hobi </p>";
                    echo "<p> Cita-cita : $ct </p>";
                    echo "<p> Birthday : $birthday </p>";

                }
            ?>
        </div>
    </div>

</body>
</html>
