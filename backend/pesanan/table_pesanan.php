<?php
require '../../database/dbkoneksi.php';
?>

<?php 
   $sql = "SELECT * FROM pesanan";
   $pesanan = $dbh->query($sql);
?>

<?php require '../template/nav.php'?>
        <div id="layoutSidenav">
            <?php require '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Pesanan</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                               <a href="form_pesanan.php" class="btn btn-success">[+] Create Data Pesanan</a>         
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Alamat Pelanggan</th>
                                            <th>Qty</th>
                                            <th>Action</th>                 
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php $nomor = 1; foreach($pesanan as $data) { ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$data['nama_pelanggan']?></td>
                                            <td><?=$data['alamat_pelanggan']?></td>
                                            <td><?=$data['quantity']?></td>
                                            <td>
                                            <a class="btn btn-warning" href="edit.php?idedit=<?=$data['id']?>">Edit</a>
                                            <a class="btn btn-danger" href="delete.php?iddel=<?=$data['id']?>"
                                                onclick="if(!confirm('Anda Yakin Hapus Data pesanan <?=$data['nama_pelanggan']?>?')) {return false}">Delete</a>
                                            </td>
                                        </tr>
                                    <?php $nomor++; }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
