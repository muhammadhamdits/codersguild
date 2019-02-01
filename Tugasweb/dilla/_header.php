<?php  
	require_once "_config/config.php";
    require "_assets/libs/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coder's Guild HMSI UA</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/img/logo1.png">
</head>

<body>
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>

	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>PENDAFTARAN CLUB</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('dataAnggota/data.php'); ?>">Data Anggota Club</a>
                </li>
            </ul>
        </div>

        <div style="position: absolute; width: 100%; background-color: black; bottom: 50px;"></div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
	