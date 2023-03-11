<html>

    <head>
        <title>Add Siswa</title>

    </head>

    <body>
        <a href="index.php">Go Back</a>
        <br><br>

        <form action="add_siswa.php" method="post" name="form1">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis"></td>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas"></td>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>

                <tr>
                <td></td>
                    <td><input type="submit" name="submit" value="Add Siswa"></td>
                </tr>
            </table>
        </form>

        <?php
            //Pengecekan jika form submitted diisi pada form diatas
            if(isset($_POST['submit'])){
                $nis = $_POST['nis'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $alamat = $_POST['alamat'];
            
            //Include database config
            include("config.php");

            //
            $result = mysqli_query($mysqli, "INSERT INTO tb_siswa(nis,nama,kelas,alamat) VALUES('$nis', '$nama', '$kelas', '$alamat')");

            //Message
            echo "Siswa Add Succesfully. <a href='index.php'>View Siswa</a>";
            }
        ?>
    </body>
</html>