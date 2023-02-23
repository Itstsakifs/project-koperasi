<?php
	include "../../config/koneksi.php";
    $id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query_anggota = mysqli_query($koneksi, " select  b.nama_barang, a.* from peminjaman as a left join barang as b on a.barang_pinjaman = b.id_barang
    where id_peminjaman ='$id'");
    $stock_barang = mysqli_fetch_array($query_anggota);
    
    $barang = $stock_barang['nama_barang'];
    $stockBR = $stock_barang['stock'];

    
    $test= mysqli_query($koneksi, "select * from barang  where nama_barang ='$barang'");
    $test2 =mysqli_fetch_array($test);

    $idBR =$test2['id_barang'];
    $stock = $test2['stock'];

    $hitung = $stock + $stockBR;
    
    $update_stock_barang = "update barang set stock ='$hitung' where id_barang='$idBR'";
    $query_hitung = mysqli_query($koneksi, $update_stock_barang);


    $query = "UPDATE peminjaman SET status='Sudah Kembali' WHERE id_peminjaman ='$id' ";
    $hasil_query = mysqli_query($koneksi,  $query);
    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Barang Sudah di kembalikan.');window.location='../layout/data_pengembalian.php';</script>";
    }
?>
