<?php

$listMahasiswaJSON = '[
    {"nama": "Nazwan Faisal" },
    {"nama": "Rehan pratama" },
    {"nama": "Aditya nugroho" },
    {"nama": "Nurul huda" }
    ]';

    $listMahasiswaJSON = json_decode($listMahasiswaJSON);

    foreach ($listMahasiswaJSON as $key => $mahasiswa) {
        echo "{$key}. Nama: {$mahasiswa->nama} <br>";
    }