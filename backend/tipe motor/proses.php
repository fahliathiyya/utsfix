<?php 
 require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_nama_tipe_motor = $_POST['tipe_motor'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_tipe_motor; 
   

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_motor (tipe_motor) VALUES (?)";
   }else if($_proses == "Update"){
      // update data 
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE tipe_motor SET tipe_motor=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_tipe_motor.php');
?>

<?php 
 require_once '../../database/dbkoneksi.php';
?>
