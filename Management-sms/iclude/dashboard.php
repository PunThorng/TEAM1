<?php

declare(strict_types=1);
// dashboard.php
require_once 'header.php';
require_once 'slidebar.php';
?>

<div class="container-fluid d-flex justify-content-center " style="margin-left:270px;  width:calc(100% - 270px); min-height: 100vh;">
    <?php
    $page = $_GET['page'] ?? 'home';
    ?>

    <?php
    $allowed_pages = [
        'home',
        'users',
        'order',
        'category',
        'sale',
        'report',
        'setting'
    ];

    if (in_array($page, $allowed_pages)) {
        require_once "../pages/$page.php";
    } else {
        require_once "../pages/home.php";
    }
    ?>

</div>

<!--begin::Footer-->
<div class="mb-auto">
<?php require_once 'footer.php'; ?>
</div>