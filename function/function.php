<?php
session_start();

// Check the locale input folder, preventing from blank field
if ($_POST['tempFolderPath'] == null) {
    $_SESSION['gagal'] = ['type' => false, 'message' => 'Anda belum mengisi ' . '<b>' . 'Folder Lokasi ' . '</b>' . 'harap isi terlebih dahulu.'];
    return false;
}
// Check the input form, preventing from blank field
if ($_POST['namaFileBaru'] == null || $_POST['tempNama'] == null) {
    $_SESSION['gagal'] = ['type' => false, 'message' => 'Anda belum mengisi ' . '<b>' . 'Mengisi semua form ' . '</b>' . 'harap isi terlebih dahulu.'];
    return false;
}

// POST Data
$namaFile =  $_POST['tempNama'];
$folderAsal = $_POST['tempFolderPath'] . $namaFile;
$ekstensiFile = explode('.', $namaFile);
$ekstensiFile = strtolower(end($ekstensiFile));
$namaFileBaru = $_POST['namaFileBaru'] . "." . $ekstensiFile;
$folderAkhir = $_POST['tempFolderPath'] . $namaFileBaru;
$rename = rename($folderAsal, $folderAkhir);

// Alert Session
if ($rename) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'File dengan nama ' . '<b>' . $namaFile . '</b>'  . ' berhasil berganti nama! menjadi ' . '<b>' . $namaFileBaru . '</b>'];
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'File dengan nama ' . '<b>' . $namaFile . '</b>' . ' gagal diganti nama! Harap periksa kembali folder lokasi asal atau File anda'];
}
