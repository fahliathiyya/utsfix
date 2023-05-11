<?php
require '../../database/dbkoneksi.php'
?>

<?php 
   $id = $_GET['idedit'];
   $sql = "SELECT * FROM motor WHERE id=?";
   $statement = $dbh->prepare($sql);
   $statement->execute([$id]);
   $result = $statement->fetch();
?>

<?php require '../template/nav.php' ?>
        <div id="layoutSidenav">
        <?php require '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Edit Data Motor</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                                <div class="card-body">
                                    <div class="container">
                                        <!-- <h2 class="text-center">Form Produk</h2> -->
                                        <form method="POST" action="proses.php">
                                        <input type="hidden" name="idedit" value="<?=$result['id']?>" >
                                            <div class="form-group">
                                                <label for="nama_motor" class="form-label">Nama Motor</label>
                                                <input id="nama_motor" name="nama_motor"  value="<?=$result['nama_motor']?>" type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc" class="form-label">CC Motor</label>
                                                <input id="cc" name="cc"  value="<?=$result['cc']?>" type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input id="harga" name="harga"  value="<?=$result['harga']?>" type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="stok" class="form-label">Stok</label>
                                                <input id="stok" name="stok"  value="<?=$result['stok']?>" type="text" class="form-control" required>
                                            </div>

                                        <input type="hidden" name="idedit" value="<?=$result['merk_id']?>" >
                                        <input type="hidden" name="idedit" value="<?=$result['tipe_motor_id']?>" >

                                            <div class="form-group">
                                                <label for="gambar" class="form-label">Gambar</label>
                                                <input id="gambar" name="gambar"  value="<?=$result['gambar']?>" type="text" class="form-control" required>
                                            </div>

                                            <div class="form-group mt-4">
                                                <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Update" />
                                            </div>
                                        </form>
                                    </div>
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
