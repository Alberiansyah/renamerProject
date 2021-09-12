<?php
session_start();
?>
<?php require 'layouts/resources.php' ?>

<body class="page-sidebar-fixed">

    <!-- Page Container -->
    <div class="page-container">
        <?php require 'layouts/sidebar.php'; ?>

        <?php require 'layouts/header.php'; ?>

        <!-- Alert -->
        <!-- End of Alert -->

        <!-- Page Inner -->
        <div class="page-inner no-page-title">
            <div id="main-wrapper">
                <div class="content-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-separator-1">
                            <li class="breadcrumb-item active" aria-current="page">Renamer Project</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Renamer Project</h1>
                </div>
                <div id="alert">
                    <?php require "function/alert.php"; ?>
                </div>
                <div id="reset">
                    <div id="search">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ubah nama File</h5>
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <?php if (isset($_COOKIE['path'])) : ?>
                                                    <div class="form-group">
                                                        <label for="tempFolderPath" class="form-label"><b>Temp Folder Lokasi</b></label>
                                                        <input type="text" class="form-control" name="tempFolderPath" id="tempFolderPath" value="<?= $_COOKIE['path']; ?>" readonly></label>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="form-group">
                                                        <label for="tempFolderPath" class="form-label"><b>Temp Folder Lokasi Asal</b></label>
                                                        <input type="text" class="form-control" name="tempFolderPath" id="tempFolderPath" readonly></label>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="namaFileBaru" class="form-label"><b>Nama File Baru</b></label>
                                                    <input type="text" class="form-control" name="namaFileBaru" id="namaFileBaru" autocomplete="" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="namaFileLama" class="form-label"><b>Nama File yang akan Diubah</b></label>
                                                    <input type="file" class="form-control" id="namaFileLama" multiple onchange="showname()" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="tempNama" class="form-label"><b>Temp Nama File</b></label>
                                                    <input type="text" class="form-control" name="tempNama" id="tempNama" readonly>
                                                </div>
                                            </div>
                                            <button type="button" name="submit" class="btn btn-primary" id="submitForm">Selesai</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Folder Lokasi</h5>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="folderPath" class="form-label"><b>Folder Lokasi Asal</b></label>
                                                <input type="text" class="form-control" name="folderPath" id="folderPath" autocomplete="" require>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" name="submitFolderPath" class="btn btn-success" id="submitFolderPath">Simpan</button>
                                            <button type="button" name="resetFolderPath" class="btn btn-danger" id="resetFolderPath">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Main Wrapper -->


            <?php require 'layouts/footer.php'; ?></b>