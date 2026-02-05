<?php

declare(strict_types=1);
// sidebar.php
?>
<style>
  body {
    margin: 0;
  }

  .sidebar {
    margin-top: 5.6vh;
    width: 280px;
    height: 92vh;
    border-radius: 7px;
    background: #040b6b;
    color: white;
    position: fixed;
    margin-left: 5px;
  }

  .sidebar a {
    color: white;
    text-decoration: none;
    padding: 20px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .sidebar a:hover,
  .sidebar a.active {
    background: rgba(255, 255, 255, 0.2);
  }

  .sidebar .profile {
    text-align: center;
    display: flex;
    padding: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
  }

  .sidebar .profile img {
    width: 60px;
    border-radius: 50%;
    margin-bottom: 10px;
    width: 55px;
    height: 55px;
    object-fit: cover;
  }
</style>
</head>

<body>

  <div class="sidebar " style="overflow-y: auto; ">
    <!-- Profile -->
    <div class="profile px-1 py-2 d-flex flex-column align-items-center">
      <img src="../assets/images/logo.jpg" alt="Admin">
      <h6 style="font-family: 'Arial', sans-serif;" class="fs-15 text-white text-align-center">ADMIN RSRL4</h6>
    </div>

    <!-- Menu -->
    <a href="dashboard.php?page=home" class="active">
      <i class="bi bi-speedometer2"></i> Dashboard
    </a>

    <a href="dashboard.php?page=users">
      <i class="bi bi-person"></i> Users
    </a>

    <a href="dashboard.php?page=order">
      <i class="bi bi-cart"></i> Users Order
    </a>

    <a href="category.php">
      <i class="bi bi-grid"></i> Category
    </a>

    <a href="sale.php">
      <i class="bi bi-tags"></i> Sale
    </a>

    <a href="report.php">
      <i class="bi bi-bar-chart"></i> Report
    </a>

    <a href="total_order.php">
      <i class="bi bi-bag-check"></i> Total Order
    </a>

    <a href="setting.php">
      <i class="bi bi-gear"></i> Setting
    </a>

    <img src="../assets/images//christmas-menu-hero-6x4-17112016.webp" alt="Admin"
      style="width: 95%; margin-top: 18px; border-radius: 5px; object-fit: cover;margin-left: 8px;border: 1px solid white;">

  </div>