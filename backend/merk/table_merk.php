<?php
require '../../database/dbkoneksi.php';
?>

<?php 
   $sql = "SELECT * FROM merk";
   $merk = $dbh->query($sql);
?>

<?php require '../template/nav.php'?>
        <div id="layoutSidenav">
            <?php require '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Merk</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                 <a class="btn btn-success" href="form_merk.php">[+] Create Data Merk</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Merk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $nomor = 1; foreach($merk as $data) { ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$data['id']?></td>
                                            <td><?=$data['nama_merk']?></td>
                                            <td>
                                                <a class="btn btn-warning" href="edit.php?idedit=<?=$data['id']?>">Edit</a>
                                                <a class="btn btn-danger" href="delete.php?iddel=<?=$data['id']?>"
                                                    onclick="if(!confirm('Anda Yakin Hapus Data Merk <?=$data['nama_merk']?>?')) {return false}">Delete</a>
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
