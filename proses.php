<?php

require 'Mahasiswa.php';

$data = new Mahasiswa(
    $_POST['nama'],
    $_POST['kelas'],
    $_POST['tugas'],
    $_POST['uts'],
    $_POST['uas']
);

include 'hasil.php';
