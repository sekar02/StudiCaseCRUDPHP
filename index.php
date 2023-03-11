<?php
include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_siswa ORDER BY id DESC");
?>

<html>
<head>
    <title>Data Siswa Bootcamp</title>
</head>

<body>
    <table width="80%" border=1>
        <tr>
            <th>NIS</th> <th>Name</th> <th>Kelas</th> <th>Alamat</th> <th>Aksi</th>
        </tr>

        <?php
            while($siswa_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$siswa_data['nis']."</td>";
                echo "<td>".$siswa_data['nama']."</td>";
                echo "<td>".$siswa_data['kelas']."</td>";
                echo "<td>".$siswa_data['alamat']."</td>";
                echo "<td><a href='update_siswa.php?id=$siswa_data[id]'>Edit</a>
                <a href='delete_siswa.php?id=$siswa_data[id]'>Delete</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </table> <br><br>

    <a href="add_siswa.php">Add New Siswa</a>
</body>
</html>