<?php
//Include setup database
include("config.php");

//Get id
$id = $_GET['id'];

//Query delete
$result = mysqli_query($mysqli, "DELETE FROM tb_siswa WHERE id=$id");

//After delete redirect to home
header("Location:index.php")
?>