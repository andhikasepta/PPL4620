<!DOCTYPE html>
<html lang="en">
<head>
<title>Grafik | Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap-responsive.min.css"?>" />
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
    <div id="breadcrumb"><a href="<?php echo base_url()."index.php/hal_admin/"?>" title="Kembali Ke Beranda" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url()."index.php/hal_admin/grafik"?>" title="Halaman Grafik" class="current">Grafik</a></div>
    <h1>GRAFIK PENJUALAN</h1>
  </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Grafik Data Penjualan</h5>
          </div>
          <div class="widget-content">
            <div class="bars"></div>
          </div>
        </div>
      </div>
    </div>
  <div class="row-fluid">
      <div class="span7">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Data Penjualan</h5>
          </div>
          <div class="widget-content">
            <div class="">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Coca Cola</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>3000</td>
                      <td>1</td>
                      <td>
                        <a href="">
                          <button class="btn btn-warning" style="border-radius:5px" >
                            Delete
                          </button>
                        </a>
                        <a href="">
                          <button class="btn btn-info" style="border-radius:5px" >
                            Update 
                          </button>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Red Velvet</td>
                      <td><select name="jenis">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>  
                      </td>
                      <td>21000</td>
                      <td>1</td>
                      <td><a href="">
                        <button class="btn btn-warning" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                      </td>
                    </tr>
                
                </tbody>
              </table>
            </div>
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
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.pie.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.charts.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/jquery.peity.min.js"></script>
</body>
</html>
