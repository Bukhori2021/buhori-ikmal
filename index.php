<?php

require 'public/controler/functions.php';
$kegiatan = ambil("SELECT * FROM kegiatan");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/Buttons-2.4.2/css/dataTables.bootstrap5.min.css">
        <link href="public/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" href="public/css/style.css" />
        <title>
            <?php
        @$title = $_GET['public'];
        if (!empty($title)) {
            if ($title == 'home') {
                echo 'Halaman utama';
            } else if ($title == 'input data alumni') {
                echo 'Input data alumni';
            } else if ($title == 'data alumni') {
                echo 'Data alumni';
            } elseif ($title == 'input kegiatan') {
                echo 'Input data kegiatan';
            }
        } else {
            echo 'Halaman utama';
        }
        ?>
        </title>
    </head>

    <body>
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top mb-5" style="background-color: #066823fb">
            <div class="container">
                <a class="navbar-brand" href="#">IMAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="?public=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="?public=data alumni">Data alumni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?public=input data alumni">Input data alumni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?public=input kegiatan">Input data kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?public=dpw">input dpw</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar end -->

        <?php
    @$public = $_GET['public'];
    if (!empty($public)) {
        switch ($public) {
            case 'home':
                require 'public/home.php';
                break;
            case 'input data alumni';
                require 'public/inputdata_aln/inputdataalumni.php';
                break;
            case 'input kegiatan';
                require 'public/kegiatan/kegiata.php';
                break;
            case 'data alumni';
                require 'public/data_aln/dataAlumni.php';
                break;
            case 'ubah data alumni';
                require 'public/ubahdata/ubah_data.php';
                break;
            case 'dpw';
                require 'public/dpw/dpw.php';
                break;
            default:
                require 'public/home.php';
                break;
        }
    } else {
        require 'public/home.php';
    }
    ?>
        <script src="public/js/bootstrap.min.js"></script>