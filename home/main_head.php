<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CBBC | <?= htmlspecialchars($title) ?></title>
    <?php include 'components/css.php'; ?>
    <link rel="shortcut icon" href="favicon.ico"/>

  </head>
  <!-- #########   BEGIN BODY   ################### -->
  <body onLoad="startclock()" class="page-quick-sidebar-over-content">
    <!-- BEGIN MAIN PAGE LAYOUT -->
    <?php include 'components/header.php'; ?>
    <!-- ##########   MAIN CONTENT BEGIN    ##########-->
      <div class="container-fluid">
      	<div class="page-content page-content-popup">
      		<!-- BEGIN FIXED NAV -->
          <div class="page-content-fixed-header">
            <ul class="page-breadcrumb">
              <li class="font-purple-seance uppercase"><?= htmlspecialchars($title) ?></li>
            </ul>

            <div class="content-header-menu">
                <!-- BEGIN MENU TOGGLER -->
                <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="toggle-icon">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </span>
                      </button>
                <!-- END MENU TOGGLER -->
              </div>
          </div>
        <!-- ################# END FIXED NAV ################## -->

  			<!-- ############## BEGIN SIDEBAR NAV ################ -->
        <?php include 'components/sidemenu.php'; ?>
  			<!-- ########### END SIDEBAR NAV ################# -->
