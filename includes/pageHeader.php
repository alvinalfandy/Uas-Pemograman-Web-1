<?php
require "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuliner Tradisional Indonesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar {
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    }

    .navbar-brand {
      font-weight: 600;
      color: #ff6b6b !important;
    }

    .nav-link {
      font-weight: 500;
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      background: #ff6b6b;
      left: 0;
      bottom: 0;
      transition: width 0.3s;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    h1 {
      color: #2d3436;
      font-weight: 700;
    }
  </style>
</head>

<body></body>