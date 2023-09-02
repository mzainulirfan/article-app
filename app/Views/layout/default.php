<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<!-- Breadcrumb-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>CoreUI Free Bootstrap Admin Template</title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>coreUi/assets/favicon/favicon-16x16.png">
  <!-- Vendors styles-->
  <!-- css_script  -->
  <?= $this->include('layout/partial/css_script'); ?>
</head>

<body>
  <!-- SidebarMenu  -->
  <?= $this->include('layout/partial/sidebarMenu'); ?>
  <!-- end sidebarMenu  -->
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <!-- headerMenu  -->
    <?= $this->include('layout/partial/headerMenu'); ?>
    <!-- end headerMenu  -->
    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <?= $this->renderSection('content'); ?>
      </div>
    </div>
    <!-- footer  -->
    <?= $this->include('layout/partial/footer'); ?>
    <!-- end footer  -->
  </div>
  <!-- js script  -->
  <?= $this->include('layout\partial\js_scsript'); ?>
</body>

</html>