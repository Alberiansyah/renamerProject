<?php
session_start();


// Cookie Manual PHP
// if (isset($_POST['submitFolderPath'])) {
//     setCookies($_POST);
// }
// if (isset($_POST['resetFolderPath'])) {
//     deleteCookies();
// }

// // Cookie Manual PHP
// function setCookies($post)
// {
//     $pathFolder = $post['folderPath'];
//     $path = setcookie('path', $pathFolder, time() + 1440);
//     header('Location: index.php');
// }

// function deleteCookies()
// {
//     setcookie('path', '', time() - 3600);
//     header('Location: index.php');
// }

// function renameFile($post)
// {
//     if ($_POST['tempFolderPath'] == null) {
//         $_SESSION['gagal'] = ['type' => false, 'message' => 'Anda belum mengisi ' . '<b>' . 'Folder Lokasi ' . '</b>' . 'harap isi terlebih dahulu.'];
//         return false;
//     }

//     if ($_POST['namaFileBaru'] == null || $_POST['tempNama'] == null) {
//         $_SESSION['gagal'] = ['type' => false, 'message' => 'Anda belum mengisi ' . '<b>' . 'Mengisi semua form ' . '</b>' . 'harap isi terlebih dahulu.'];
//         return false;
//     }

//     $namaFile =  $_POST['tempNama'];
//     $folderAsal = $_POST['tempFolderPath'] . $namaFile;
//     $ekstensiFile = explode('.', $namaFile);
//     $ekstensiFile = strtolower(end($ekstensiFile));
//     $namaFileBaru = $_POST['namaFileBaru'] . "." . $ekstensiFile;
//     $folderAkhir = $_POST['tempFolderPath'] . $namaFileBaru;
//     $rename = rename($folderAsal, $folderAkhir);

//     if ($rename) {
//         $_SESSION['berhasil'] = ['type' => true, 'message' => 'File dengan nama ' . '<b>' . $namaFile . '</b>'  . ' berhasil berganti nama! menjadi ' . '<b>' . $namaFileBaru . '</b>'];
//     } else {
//         $_SESSION['berhasil'] = ['type' => false, 'message' => 'File dengan nama ' . '<b>' . $namaFile . '</b>' . ' gagal diganti nama! Harap periksa kembali folder lokasi asal atau File anda'];
//     }
// }
