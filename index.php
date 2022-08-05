<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PHP</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="container"> <!--Membungkus Semua Elemen-->

        <div class="gambar"></div>

        <div class="konten cf">
            <div class="main">
                <img src="gambar/profil.jpg" alt="">
                <h2>AS FINE BASITH MARYONO</h2>
                <h3>KELAS XI RPL</h3>
            </div>
        

            <div class="sidebar">
                <form action="seconds.php" method="post">

                    <!--Jenis Kelamin-->
                    <label for=""> Jenis Kelamin : </label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="lk"checked>
                    <label for="lk">Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" value="Perempuam" id="pr">
                    <label for="pr">Perempuan</label>


                    <br><br><br>
            

                    <!--Hobi-->
                    <label for="">Hobi : </label>
                    <input type="checkbox" name="hobi_list[]" alt="checkbox" value="Membaca" id="mb">
                    <label for="mc">Membaca</label>
                    <input type="checkbox" name="hobi_list[]" alt="checkbox" value="Menulis" id="mn">
                    <label for="mn">Menulis</label>
                    <input type="checkbox" name="hobi_list[]" alt="checkbox" value="Traveling" id="tv">
                    <label for="tv">Traveling</label>

                    <br><br><br>

                    <!--Cita Cita-->
                    <label for="">Cita-cita : </label>
                    <input type="text" name="cita-cita">


                    <br><br><br>
                    
                    <!--tanggal-->
                    <label for="">Birthday </label>
                    <input type="date" name="birthday">


                    <!--Submit-->
                    <input type="submit" name="kirim">

                </form>
            </div> <!--Bagian Kiri-->
        </div>

        <div class="footer">
            <p class="copy">Copyright 2021, As Fine Basith Maryono</p>
        </div>

    </div>
</body>
</html>