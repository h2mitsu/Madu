<?php

function format_uang ($angka) {
    return number_format($angka, 0, ',', '.');
}

function terbilang ($angka) {
    $angka = abs($angka);
    $baca  = array('', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven');
    $terbilang = '';

    if ($angka < 12) { // 0 - 11
        $terbilang = ' ' . $baca[$angka];
    } elseif ($angka < 20) { // 12 - 19
        $terbilang = terbilang($angka -10) . 'teen';
    } elseif ($angka < 100) { // 20 - 99
        $terbilang = terbilang($angka / 10) . 'ty' . terbilang($angka % 10);
    } elseif ($angka < 200) { // 100 - 199
        $terbilang = ' seratus' . terbilang($angka -100);
    } elseif ($angka < 1000) { // 200 - 999
        $terbilang = terbilang($angka / 100) . ' Hundred' . terbilang($angka % 100);
    } elseif ($angka < 2000) { // 1.000 - 1.999
        $terbilang = ' seribu' . terbilang($angka -1000);
    } elseif ($angka < 1000000) { // 2.000 - 999.999
        $terbilang = terbilang($angka / 1000) . ' Thousand' . terbilang($angka % 1000);
    } elseif ($angka < 1000000000) { // 1000000 - 999.999.990
        $terbilang = terbilang($angka / 1000000) . ' Million' . terbilang($angka % 1000000);
    }

    return $terbilang;
}

function tanggal_indonesia($tgl, $tampil_hari = true)
{
    $nama_hari  = array(
        'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
    );
    $nama_bulan = array(1 =>
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
    );

    $tahun   = substr($tgl, 0, 4);
    $bulan   = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tanggal = substr($tgl, 8, 2);
    $text    = '';

    // if($tanggal = 1) {
    //     $tanggalnew = $tanggal . 'st';
    // } elseif($tanggal = 2) {
    //     $tanggalnew = $tanggal . 'nd';
    // } elseif($tanggal = 3) {
    //     $tanggalnew = $tanggal . 'rd';
    // } else {
    //     $tanggalnew = $tanggal . 'th';

    // }


    if ($tampil_hari) {
        $urutan_hari = date('w', mktime(0,0,0, substr($tgl, 5, 2), $tanggal, $tahun));
        $hari        = $nama_hari[$urutan_hari];
        $text       .= "$hari, $tanggal $bulan $tahun";
    } else {
        $text       .= "$bulan $tanggal $tahun";
    }

    return $text;
}

function tambah_nol_didepan($value, $threshold = null)
{
    return sprintf("%0". $threshold . "s", $value);
}
