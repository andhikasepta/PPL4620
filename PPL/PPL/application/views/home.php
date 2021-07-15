<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard | Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>">
<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap-responsive.min.css"?>">
<link rel="stylesheet" href="<?php echo base_url()."assets/css/jquery.gritter.css"?>">
<link rel="stylesheet" href="<?php echo base_url()."assets/css/maruti-style.css"?>">
<link rel="stylesheet" class="skin-color" href="<?php echo base_url()."assets/css/maruti-media.css"?>">
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
    <div id="breadcrumb"> <a href="<?php echo base_url()."index.php/hal_admin/"?>" title="Beranda" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1>DATA PENJUALAN</h1>
  </div>
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
            <h5>Tabel Data Barang</h5>
          </div>
          <div class="widget-content nopadding">
          
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
              <?php
                $numb = 1;
              ?>
              <?php
                foreach($dataKu as $dat){
              ?>
                  <tr>
                  <td><?php echo $numb++; ?></td>
                  <td><?php echo $dat['nama_pr']; ?></td>
                  <td><?php echo $dat['jenis_pr']; ?></td>
                  <td><?php echo $dat['harga_pr']; ?></td>
                  <td><?php echo $dat['stock_pr']; ?></td>
                    <td>
                      <a href="<?php echo base_url()."index.php/hal_admin/delete_data/".$dat['no']?>" >
                        <button class="btn btn-warning" data-toggle="modal" style="border-radius:5px" >
                          Delete
                        </button>
                      </a>
                      <a href="<?php echo base_url()."index.php/hal_admin/ambilData/".$dat['no']?>">
                        <button class="btn btn-info" style="border-radius:5px" >
                          Update 
                        </button>
                      </a>
                    </td>
                  </tr>
                  
              </tbody>
              <?php } ?>
            </table>
            <center>
            <a href="<?php echo base_url()."index.php/hal_admin/baca_form"?>">
              <button class="btn btn-large btn-inverse" style="border-radius:5px">
                TAMBAH BARANG 
              </button>
            </a>
            </center>
            
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
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/jquery.peity.min.js"></script>
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.interface.js"></script>
<script src="js/maruti.popover.js"></script>
 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

</body>
</html>
