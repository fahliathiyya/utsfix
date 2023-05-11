<?php 
 require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
  //  $_tipe_motor_id = $_POST['tipe_motor_id'];
   $_harga = $_POST['harga'];
  //  $_merk_id = $_POST['merk_id'];
   $_stok = $_POST['stok'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_motor; 
   $ar_data[]=$_cc; 
  //  $ar_data[]=$_tipe_motor_id; 
   $ar_data[]=$_harga; 
  //  $ar_data[]=$_merk_id; 
   $ar_data[]=$_stok; 

   

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,stok) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
      // update data 
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,stok=?,gambar=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_motor.php');
?>