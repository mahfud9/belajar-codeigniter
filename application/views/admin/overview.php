<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.8
*
-->

<!DOCTYPE html>
<html>

<head>

  <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body>
  <div id="wrapper">
   <?php $this->load->view("admin/_partials/sidebar.php") ?>


   <div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
     <?php $this->load->view("admin/_partials/navbar.php") ?>
   </div>
   <div class="row  border-bottom white-bg dashboard-header">

    <?php $this->load->view("admin/_partials/header.php") ?>

  </div>
  <div class="row">
    <?php $this->load->view("admin/_partials/modal.php") ?>
  </div>
  <?php $this->load->view("admin/_partials/footer.php") ?>
</div>
<div class="small-chat-box fadeInRight animated">
  <?php $this->load->view("admin/_partials/small-chat.php") ?>
  

</div>
<div id="small-chat">

  <span class="badge badge-warning float-right">5</span>
  <a class="open-small-chat" href="">
    <i class="fa fa-comments"></i>

  </a>
</div>
<div id="right-sidebar" class="animated">
  <?php $this->load->view("admin/_partials/navbar-notes-right.php") ?> 
</div>
</div>

<?php $this->load->view("admin/_partials/js.php") ?> 
</body>
</html>
