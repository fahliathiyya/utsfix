<?php 
 require_once '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$sql = "DELETE FROM tipe_motor WHERE id=?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header('Location: table_tipe_motor.php');

?>