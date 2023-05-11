<?php
require '../../database/dbkoneksi.php'
?>

<?php 
   $sql = "SELECT * FROM tipe_motor";
   $tipemotor = $dbh->query($sql);
?>


<?php require '../template/nav.php' ?>
        <div id="layoutSidenav">
        <?php require '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Tipe Motor</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <!-- <h2 class="text-center">Form Produk</h2> -->
                                    <form method="POST" action="proses.php">
                                        <div class="form-group">
                                            <label for="tipe_motor" class="form-label">Nama Tipe Motor</label>
                                            <input id="tipe_motor" name="tipe_motor" type="text" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group mt-4">
                                            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
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
