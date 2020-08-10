<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Baso Benua | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-link">
        <a href="<?=site_url('login/logout')?>"title="Logout" ><i class="fa  fa-sign-out fa-x3"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/sidebar')?>
  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($page)?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020   Deplove BY: <a href="http://wiraimajinyata.com">PT Wiraimajinyata</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>asset_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>asset_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>asset_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>asset_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>asset_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>asset_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>asset_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>asset_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>asset_admin/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>asset_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>asset_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>asset_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>asset_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>asset_admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>asset_admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>asset_admin/dist/js/demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?=$this->session->flashdata('msg')?>
<?php if ($this->uri->segment(1)=='admin'): ?>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<!-- penjualan -->
<script type="text/javascript">
  Highcharts.chart('penjualan', {
  chart: {
    type: 'area'
  },
  accessibility: {
    description: 'Cart penjualan perhari'
  },
  title: {
    text: 'Penjualan Per Hari'
  },
  
  xAxis: {

        type: 'date',
        accessibility: {
          rangeDescription: 'Range: Jan 1st 2017 to Dec 31 2017.'
        }
      },
  tooltip: {
    pointFormat: '{series.name} Penjualan <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
  },
  
  series: [{
    name: 'penjualan',
    data: [
      0,
    ]
  },]
});
</script>
<script type="text/javascript">
  Highcharts.chart('pengunjung', {
  chart: {
    type: 'area'
  },
  accessibility: {
    description: 'Cart pengunjung perhari'
  },
  title: {
    text: 'Pengunjung Per Hari'
  },
  
  xAxis: {

        type: 'date',
        accessibility: {
          rangeDescription: 'Range: Jan 1st 2017 to Dec 31 2017.'
        }
      },
  tooltip: {
    pointFormat: '{series.name} Pengunjung <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
  },
  
  series: [{
    name: 'pengunjung',
    data: [
      0,
    ]
  },]
});
</script>
<?php endif?>
</body>
</html>
