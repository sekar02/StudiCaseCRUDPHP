<?php

//Include config
include("config.php");

//check data jika ingin di update
if(isset($_POST['Update']))
{
    $id = $_POST['id'];

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    //Update siswa data
    $result = mysqli_query($mysqli, "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=$id");

    //Redirect ke halaman index
    header("Location:index.php");
}
?>

<?php
//Menampilkan data base on id
//Geetin id from url
$id = $_GET['id'];

//Fetch siswa berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM tb_siswa WHERE id=$id");

while($siswa_data = mysqli_fetch_array($result))
{
    $nis = $siswa_data['nis'];
    $nama = $siswa_data['nama'];
    $kelas = $siswa_data['kelas'];
    $alamat = $siswa_data['alamat'];
}
?>

<html>
<head>
    <title> Update Siswa</title>
</head>

<body>
    <form name="update_siswa.php" method="post" action="update_siswa.php">

        <table border="0">
            <tr>
                <td>NIS</td>
                <td><input type="text"
                name="nis" value=<?php echo $nis;
                ?>></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text"
                name="nama" value=<?php echo $nama;
                ?>></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td><input type="text"
                name="kelas" value=<?php echo $kelas;
                ?>></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text"
                name="alamat" value=<?php echo $alamat;
                ?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>

                <td><input type="submit" name="Update" value="Update"></td>
            </tr>
    </form>
</body>
</html>