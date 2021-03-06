<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Edit | Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap-responsive.min.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/colorpicker.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/datepicker.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/uniform.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/select2.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/maruti-style.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/maruti-media.css"?>" class="skin-color" />
</head>
<body>

  <div id="header">
    <h1>Admin Management</h1>
  </div>
  
  <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class="" ><a title="Akun Setting" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
      <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="<?php echo base_url()."index.php/hal_utama/logout/";?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
  </div>
  
  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  
  <div id="sidebar"> <a href="index.html" class="visible-phone"><i class="icon icon-signal"></i>Dashboard</a><ul>
    <li class="active"><a href="<?php echo base_url()."index.php/hal_admin/"?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?php echo base_url()."index.php/hal_admin/grafik"?>"><i class="icon icon-signal"></i> <span> Grafik</span></a> </li>
    <li class="submenu"> <a href=""><i class="icon icon-list-alt"></i> <span>Form</span> </a>
      <ul>
        <li><a href="<?php echo base_url()."index.php/hal_admin/baca_form"?>">Form Tambah</a></li>
      </ul>
    </li>
</div>
  
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Kembali Ke Beranda" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form</a> <a href="#" class="current">Form Tambah Barang</a> </div>
    <h1>Form Tambah Barang</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Tambah Data Barang</h5>
          </div>
          <?php
            foreach($dataS as $dt){
          ?>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url()."index.php/hal_admin/DataUpdate"?>" method="POST" class="form-horizontal">
            <div class="control-group">
                <label class="control-label">No :</label>
                <div class="controls">
                  <input type="text" name="no" readonly value="<?php echo $dt['no'];?>">
                </div>
              </div>  
            <div class="control-group">
                <label class="control-label">Nama Barang :</label>
                <div class="controls">
                  <input type="text" name="nama_pr" value="<?php echo $dt['nama_pr'];?>" class="span11" placeholder="Masukkan Nama Barang" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jenis Barang :</label>
                <div class="controls">
                  <select name="jenis_pr" value="<?php echo $dt['jenis_pr'];?>">
                    <option value="">Pilih Jenis Barang</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                  </select>  
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Harga :</label>
                <div class="controls">
                  <input type="text" name="harga_pr" value="<?php echo $dt['harga_pr'];?>" class="span11" placeholder="Masukkan Harga Barang" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Stock :</label>
                <div class="controls">
                  <input type="text" name="stock_pr" value="<?php echo $dt['stock_pr'];?>" class="span11" placeholder="Masukkan Jumlah Stock Barang" />
                </div>
              </div>
              
              
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Update Data</button>
              </div>
              <?php }?>
            </form>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2021 &copy; UNIVERSITAS DIAN NUSWANTORO </div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.form_common.js"></script>
</body>
</html>
