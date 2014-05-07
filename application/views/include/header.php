<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" media="all">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/jui/css/jquery-ui.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- msgBox -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/msgbox/jquery.msgbox.css" media="screen">

<!-- pnotify -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/pnotify/jquery.pnotify.css" media="screen">

<!-- iButton -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/ibutton/jquery.ibutton.css" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom-plugins/circular-stat/circular-stat.css">

<!-- Fullcalendar -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar.print.css" media="print">

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/main-style.css" media="screen">

<link href="<?php echo base_url();?>assets/assets/css/flash-white.css" rel="stylesheet" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>STIKOM DEALER - Dashboard</title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">
<div class="loading-page"></div>
    <div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="#" style="padding:0px 20px 11px 41px !important;" >
								<img src="<?php echo base_url();?>assets/assets/images/stkom.png" alt="" style="width: 133px; height: 54px;">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="Search">
							</form>
						</div>
						<div id="dropdown-lists">
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
    								<span class="item-icon"><i class="icon-exclamation-sign"></i></span>
    								<span class="item-label">Notifications</span>
    								<span class="item-count">4</span>
    							</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong> commented on your photo
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong> commented on your photo
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong> commented on your photo
                                                        <span class="time">43 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">View all notifications</a></li>
                                </ul>
                            </div>
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
    								<span class="item-icon"><i class="icon-envelope"></i></span>
    								<span class="item-label">Messages</span>
    								<span class="item-count">16</span>
    							</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong><br> Hello, do you have time to go out tomorrow?
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong><br> Hey, the reports said that you were...
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong><br> Can I borrow your new camera for taking...
                                                        <span class="time">About an hour ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="mail.html">View all messages</a></li>
                                </ul>
                            </div>
						</div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Welcome
                                    <span class="name"> 
									<?php if($pengguna->level == "1")
								  {
								 //mengambil nama session                             
								 echo $pengguna->first_name;?>, anda login sebagai Administrator 
								 <?php 
								 }elseif($pengguna->level == "2")
								 {
								 echo $pengguna->first_name;?>, anda login sebagai Operator 
								 <?php 
								 }
								 ?>
								 </span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="<?php echo base_url();?>assets/assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                    	<li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a id="msgbox-trigger-4"  href="<?php echo base_url();?>login/logout"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="<?php echo base_url();?>login/logout"  id="msgbox-trigger-4" ><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
                    	<aside id="sidebar">
                        	<nav id="navigation" class="collapse">
                            	<ul>
                                	<li  <?php if($this->router->fetch_class()=="home"){?> class="active"<?php }?>>
                                    	<span title="General">
                                    		<i class="icon-home"></i>
											<span class="nav-title">General</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li  <?php if($this->router->fetch_method()=="dashboard"){?> class="active"<?php }?>><a href="<?php echo base_url();?>home/dashboard"><i class="icol-dashboard"></i> Dashboard</a></li>
									<li><a href="../creative/dashboard.html"><i class="icol-plugin"></i> Laporan Pelanggan</a></li>
                                        	<li><a href="affix.html"><i class="icol-pin"></i> Laporan Transaksi</a></li>
                                        	<li><a href="calendar.html"><i class="icol-calendar-2"></i> Laporan Cash</a></li>
									<li><a href="icons.html"><i class="icol-lifebuoy"></i> Laporan Kredit</a></li>
                                        	<li><a href="grids.html"><i class="icol-grid"></i> Laporan Motor</a></li>
                                        	<li><a href="typography.html"><i class="icol-font"></i> Laporan Keuangan</a></li>
                                        </ul>
                                    </li>
                                	<li <?php if($this->router->fetch_class()=="customer"){?> class="active"<?php }?>>
                                    	<span title="Table">
                                    		<i class="icon-users"></i>
											<span class="nav-title">Pelanggan</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li  <?php if($this->router->fetch_method()=="newcustomer"){?> class="active"<?php }?>><a href="<?php echo base_url();?>customer/newcustomer"><i class="icon-add-contact"></i> Pelanggan Baru</a></li>
                                        	<li><a href="responsive_tables.html"><i class="icon-pacman"></i> Pelanggan Aktif</a></li>
                                        	<li><a href="data_tables.html"><i class="icon-accessibility"></i> Pelanggan Tidak Aktif</a></li>
                                         <li><a href="detail_view.html"><i class="icol-user-thief"></i> Pelanggan Blokir</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Statistic">
                                        	<i class="icon-truck"></i>
											<span class="nav-title">Kendaraan</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="statistic.html"><i class="icol-car"></i> Kendaraan Masuk</a></li>
                                        	<li><a href="statistic.html"><i class="icol-delivery"></i> Kendaraan Keluar</a></li>
                                        	<li><a href="charts_gallery.html"><i class="icol-application-home"></i> Pabrikan</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Form">
                                        	<i class="icon-shopping-cart"></i>
											<span class="nav-title">Pesanan</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="form_layouts.html"><i class="icos-box-incoming"></i> Belum Diproses</a></li>
                                        	<li><a href="form_elements.html"><i class="icon-history"></i> Dalam Proses</a></li>
											<li><a href="form_wizard.html"><i class="icol-calendar-2"></i> Jadwal Survey </a></li>
                                        	<li><a href="form_validation.html"><i class="icol-delivery"></i> Pengiriman Barang</a></li>
                                        	<li><a href="form_validation.html"><i class="icol-zone-money"></i> Storan Kredit</a></li>
                                        	<li><a href="form_cloning.html"><i class="icol-money"></i> Storan Tunai</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Elements">
                                        	<i class="icon-cogs"></i>
											<span class="nav-title">Pengaturan</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="ui_bootstrap.html"><i class="icon-tools"></i> Validasi Kredit</a></li>
                                        	<li><a href="file_uploader.html"><i class="icol-computer"></i> File Uploader</a></li>
											<li><a href="file_manager.html"><i class="icol-databases"></i> File Manager</a>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Extra">
                                        	<i class="icon-official"></i>
											<span class="nav-title">Pegawai</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="profile.html"><i class="icon-users"></i> Data Seluruh Pegawai</a></li>
                                            <li><a href="profile.html"><i class="icol-user"></i> Akun Saya </a></li>
                                            <li><a href="mail.html"><i class="icol-email"></i> Kotak Masuk</a></li>
                                            <li><a href="invoice.html"><i class="icon-unlock"></i> Change Password</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </aside>