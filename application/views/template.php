
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MyCas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/datatables/dataTables.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">




  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>My</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->fungsi->user_login()->username; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?= $this->fungsi->user_login()->name; ?> - Web Developer
                  <small><?= $this->fungsi->user_login()->address; ?></small>
                </p>
              </li>
      
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->fungsi->user_login()->name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?> >
          <a href="<?=site_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'supplier' ? 'class="active"' : ''?>>
          <a href="<?=site_url('supplier')?>">
            <i class="fa fa-truck"></i> <span>Supplier</span>
          </a>
        </>
        <li <?=$this->uri->segment(1) == 'customer' ? 'class="active"' : ''?>>
          <a href="<?=site_url('customer')?>">
            <i class="fa fa-users"></i> <span>Customer</span>
          </a>
        </>

        <li class="treeview <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'category' ? 'class="active"' : ''?>>
              <a href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i> Categories</a>
            </li>
            <li <?=$this->uri->segment(1) == 'unit' ? 'class="active"' : ''?>>
              <a href="<?=site_url('unit')?>"><i class="fa fa-circle-o"></i> Units</a>
            </li>
            <li <?=$this->uri->segment(1) == 'item' ? 'class="active"' : ''?>>
              <a href="<?=site_url('item')?>"><i class="fa fa-circle-o"></i> Items</a>
            </li>
          </ul>
        </li>

        <li class="treeview <?=$this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'stock/in' || $this->uri->segment(1) == 'stockOut' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'stock' ? 'class="active"' : ''?>>
              <a href="<?=site_url('stock')?>"><i class="fa fa-circle-o"></i> Stock</a>
            </li>
            <li <?=$this->uri->segment(1) == 'stock/in' ? 'class="active"' : ''?>>
              <a href="<?=site_url('stock/in')?>"><i class="fa fa-circle-o"></i> Stock In</a>
            </li>
            <li <?=$this->uri->segment(1) == 'stockOut' ? 'class="active"' : ''?>>
              <a href="<?=site_url('stock/out')?>"><i class="fa fa-circle-o"></i> Stock Out</a>
            </li>
          </ul>
        </li>

        
        
        <li class="header">Setting</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Profile</span></a></li>
        <?php if($this->session->userdata('lvl') == 1) { ?>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>User</span></a></li>
        <?php } ?>
        <li><a href="<?=site_url("user") ?>"><i class="fa fa-user text-aqua"></i> <span>User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?= $contents ?>
    <!-- /.content -->
  </div>





  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>


      </div>

      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

       <!-- immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?=base_url()?>/assets/bower_components/datatables/jquery.js"></script>
<script src="<?=base_url()?>/assets/bower_components/datatables/bootstrap.js"></script>

<!-- Select2 -->
<script src="<?=base_url()?>/assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- InputMask -->
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>
  $(document).ready(function() {
     $('.select2').select2()
});
</script>

<script>
 $(function () { 
  //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
 })
</script>

<script>
$(document).ready(function() {
    $(document).on('click', '#select', function() {
        var item_id = $(this).data('id');
        var barcode = $(this).data('barcode');
        var name = $(this).data('name');
        var unit_name = $(this).data('unit');
        var stock = $(this).data('stock');
        $('#item_id').val(item_id);
        $('#barcode').val(barcode);
        $('#itemName').val(name);
        $('#unitName').val(unit_name);
        $('#stock').val(stock);
        $('#modal-item').modal('hide')
    })
})
</script>

</body>
</html>
