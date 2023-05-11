<?php
require '../../database/dbkoneksi.php'
?>

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $motor = $st->fetch();
?>



<?php require '../template/nav.php' ?>
        <div id="layoutSidenav">
        <?php require '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="container">
                            <h2 class="text-center mt-4">View Produk</h2>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><?=$motor['id']?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Motor</td>
                                        <td><?=$motor['nama_motor']?></td>
                                    </tr>
                                    <tr>
                                        <td>CC</td>
                                        <td><?=$motor['cc']?></td>
                                    </tr>
                                    <tr>
                                        <td>ID Tipe Motor</td>
                                        <td><?=$motor['tipe_motor_id']?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td> 
                                        <td><?=$motor['harga']?></td>
                                    </tr>
                                    <tr>
                                        <td>Merk ID</td> 
                                        <td><?=$motor['merk_id']?></td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td><?=$motor['stok']?></td>
                                    </tr>
                                </tbody>
                            </table>
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
