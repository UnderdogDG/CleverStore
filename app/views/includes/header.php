<?php
  if(!isset($_SESSION)){ 
      session_start(); 
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= SITE; ?></title>
  <link rel="shortcut icon" href="img/clever_icon.ico" type="image/x-icon">
  <link rel="icon" href="<?= URL; ?>/img/clever_icon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= URL; ?>/public/css/fullpage.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?= URL; ?>/public/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= URL; ?>/public/css/main.css">
</head>
<body>