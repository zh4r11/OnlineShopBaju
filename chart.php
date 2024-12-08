<?php include"config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo "$q[nama_olshop]";?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dex/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dex/assets/css/style.css">
  <link rel="stylesheet" href="dex/assets/css/responsive.css">
  <link rel="stylesheet" href="dex/assets/vendor/owl.carousel/assets/owl.carousel.css"> 
  <link rel="stylesheet" href="dex/assets/vendor/wow/animate.css"> 

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="dex/assets/vendor/jquery/jquery.min.js"></script>
  <script src="dex/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="dex/assets/vendor/wow/wow.min.js"></script>
  <!----slider use---->
  <script type="text/javascript" src="dex\assets\vendor\slider-js\slideShow.js"></script>
  <script type="text/javascript" src="dex\assets\vendor\slider-js\slideWiz.js"></script>
  <link rel="stylesheet" type="text/css" href="dex\assets\vendor\slider-js\slideWiz.css">
  
  <script>
  new WOW().init();
    wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
    )
    wow.init();
    
       
  </script>
  
</head>
<body>
<header class="header-area">
  <!-- Top Header -->
  <div class="top-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-12">
          <ul class="top-header-contact-info">
            <li><i class="fa fa-envelope-o"></i> info@yourcompany.com</li>
            <li><i class="fa fa-phone"></i> Emergancy Helpline: <a href="tel:+44587154756">+91 123 456-7890</a></li>
          </ul>
        </div>
        <?php
session_start(); // starts the session
$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){?>
       <div class="col-lg-4 col-md-12">
          <ul class="top-header-social header_account">
            <li><a href="loginn.php"><i class="fa fa-sign-in"></i> Login <span>/</span></a> </li>
            <li><a href="daftar.php"><i class="fa fa-pencil-square-o"></i> Register</a></li>
          </ul>
        </div>
           <?php
}else{
   $dd=mysql_fetch_array(mysql_query("select * from pelanggan where username='$_SESSION[username]'"));
?>
<ul class="nav navbar-nav navbar-right">
        <li><a href="user.php?mod=user" ><span class="glyphicon glyphicon-user"></span> Hy, <?php echo "$dd[nama]";  ?> </a> </li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
  <?php
  }
  ?>
        </div>

      </div>
    </div>
  </div>
  <!-- End Top Header -->

  <!-- Start Navbar Area -->
  <div class="navbar-area">
    <div class="fashion-responsive-nav">
      <div class="container-fluid">
        <div class="row">
          <div class="fashion-responsive-menu">
            <div class="logo">
              <a href="index.php">
                <img src="dex/assets/image/logo/logo.png" alt="logo">
              </a>
            </div>
            
            
            <div class="others-option align-items-center">
                  <div class="option-item">
                    <div class="cart-btn">
                       <?php include"cartmobile.php";?>
                    </div>
                  </div>

                  &nbsp; &nbsp; &nbsp;<?php include"wish.php";?>
            </div>

                  <!--<div class="option-item">
                    <a href="contact_us.html" class="btn"> Appointment</a>
                  </div>-->
                </div>
          <!--mobile Menu  -->

          <div id="mySidenav" class="sidenav">
            <div class="menu_slid_bg">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
              
                <div class="col-sm-12" style="padding:0px;">
                  <h3>Menu</h3>
                  
                  <ul class="accordion" id="accordion-category">
                    <li class="panel mobile_menu_li">
                      <a href="index.php" class=""></i> Home</a>
                    </li>
                    <li class="panel mobile_menu_li">
                      <a href="about.php" class=""></i> about us</a>
                    </li>
                    
                    
                <!--  <li class="panel mobile_menu_li">
                      <a href="#" class="">Accessories</a>
                        <span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category83" aria-expanded="false">
                        <span class="plus">+</span><span class="minus">-</span></a></span>
                        <div id="category83" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
                          <ul>
                            <li>
                               <a href="services.html">Services</a>
                            </li>
                            <li>
                               <a href="full_services_page.html">Services Full Page</a>
                            </li>
                          </ul>
                        </div>
                    </li>
                    -->
                    
                    <li class="panel mobile_menu_li">
                      <a href="#" class="">My Account</a>
                        <span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category84" aria-expanded="false">
                        <span class="plus">+</span><span class="minus">-</span></a></span>
                        <div id="category84" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
                          <ul>
                           <?php
session_start(); // starts the session
$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){?>
       <div class="col-lg-4 col-md-12">
          <ul class="top-header-social header_account">
            <li><a href="loginn.php"><i class="fa fa-sign-in"></i> Login <span></span></a> </li>
            <li><a href="daftar.php"><i class="fa fa-pencil-square-o"></i> Register</a></li>
          </ul>
        </div>
           <?php
}else{
   $dd=mysql_fetch_array(mysql_query("select * from pelanggan where username='$_SESSION[username]'"));
?>
<ul class="nav navbar-nav navbar-right">
        <li><a href="user.php?mod=user" ><span class="glyphicon glyphicon-user"></span> Hy, <?php echo "$dd[nama]";  ?> </a> </li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
  <?php
  }
  ?>
                          </ul>
                        </div>
                    </li>
                    
                    <li class="panel mobile_menu_li">
                      <a href="#" class="">Upload</a>
                        <span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category85" aria-expanded="false">
                        <span class="plus">+</span><span class="minus">-</span></a></span>
                        <div id="category85" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
                          <ul>
                            <li>
                               <a href="uploadbuktitfdelay.php">Bukti Transfer</a>
                            </li>
                          </ul>
                        </div>
                    </li>
                   
                    <li class="panel mobile_menu_li">
                      <a href="#con" class=""> Contact Us</a>
                    </li>
                  </ul>
              <div class="clear"></div>
              </div>
               
            </div>
          </div>

          <span class="menu_open" onclick="openNav()">&#9776; Menu</span>
          <!-- mobile Menu  end-->
          </div>
        </div>
      </div>
    </div>

    <div class="fashion-nav">
      <div class="container-fluid">
        <div class="row">
          <div class="header_menu_wrapper">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="index.php">
                <img src="dex/assets/image/logo/logo.png" alt="logo">
              </a>

              <div class="collapse navbar-collapse mean-menu" style="display: block;">
                <ul class="navbar-nav">
                  <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                  
                  <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>

                  <!--<li class="nav-item"><a href="" class="nav-link">Our Services <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                      <li class="nav-item"><a href="full_services_page.html" class="nav-link">Services Full Page</a></li>

                    </ul>
                  </li>-->
                  <li class="nav-item"><a href="#" class="nav-link">Upload<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">

                      <li class="nav-item"><a href="uploadbuktitfdelay.php" class="nav-link">Bukti Transfer</a></li>
                    </ul>
                  </li>
<li class="nav-item"><a href="#products" class="nav-link">Category</a></li>
                  <li class="nav-item"><a href="#con" class="nav-link">Contact</a></li>
                  
                </ul>

                 <?php include"cart.php";?>

                  <div class="option-item">
                    <div class="search-btn-box">
                      <a href="#search"><i class="search-btn fa fa-search"></i></a>
                      <?php include"wish.php";?>
                    </div>
                  </div>
                  

                  <!--<div class="option-item">
                    <a href="contact_us.html" class="btn"> Appointment</a>
                  </div>-->
                </div>
              </div>
            </nav>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Navbar Area --> 
<div id="search" class="input-group header">
  <span class="close">x</span>
    <form action="search.php" method="post" class="navbar-form navbar-right">
      <input value="" name="cari" type="search" placeholder="Cari Produk">
       <span class="input-group-btn">
        <button type="button" class="btn" value="cari"><i class="fa fa-search"></i></button>
      </span>
      <div class="clear"></div>
    </form>
</div>  
</header>
<!-- Header End -->
<!-- Header End -->
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Cart</h2>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page">
<!-- cart -->
	<div id="cart" class="cart_section checkout_section">
		<div class="container-fluid" id="checkout">
			
			
			<!-- your shopping cart -->
			<div class="row your_cart wow fadeInDown   animated">
				<h2>your shopping cart</h2>
				<div class="table-custom-responsive">
					<table class="table-custom table-cart table-responsive">
						<thead>
							<tr>
              <th>No</th>
								<th>Product name</th>
								<th>Price</th>
								
                <th>Discount</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>Delete</th>
								
							</tr>
						</thead>
            <?php
            session_start();
              $sid = session_id();
              $sql = mysql_query("SELECT * FROM keranjang, product WHERE id_session='$sid' AND keranjang.id_product=product.id");
              $x=mysql_fetch_array(mysql_query("select member_diskon from setting where id='1'"));
              $hitung = mysql_num_rows($sql);
              if ($hitung < 1){
                echo"<script>window.alert('Keranjang belanja kosong....');
                    window.location=('index.php')</script>";
                }
              else { echo"<form method=POST enctype=multipart/form-data action=admin/aksi.php?mod=keranjang&act=update>";
              
              $no = 1;
                while($bacaku=mysql_fetch_array($sql)){
                  /*
                   $disc        = ($r[diskon]/100)*$r[harga];
                    $hargadisc   = number_format(($r[harga]-$disc),0,",",".");
                    $subtotal    = ($r[harga]-$disc) * $r[jumlah];
                    $total       = $total + $subtotal;  
                    $subtotal_rp = format_rupiah($subtotal);
                    $total_rp    = format_rupiah($total);
                    $harga       = format_rupiah($r[harga]);
                  */
                  $disc     = ($bacaku[diskon]/100)*$bacaku[price];
                    $hargadisc     = number_format(($bacaku[price]-$disc),0,",",".");
                  $subtotal    = ($bacaku[price]-$disc) * ($bacaku[qty_s]+$bacaku[qty_m]+$bacaku[qty_l]+$bacaku[qty_xl]);
                  $total       = $total + $subtotal;  
                  $subtotal_rp = $subtotal;
                  $total_rp    = $total;
                  $total_rp2    = number_format(($total),0,",",".");
                  $harga       = $bacaku[price];

                  $potongan=($x[member_diskon]/100)*$total_rp;
                  $hasilakhir=$total_rp - $potongan;
                  $total_rp3    = number_format(($hasilakhir),0,",",".");

                  $jmltotal=$bacaku[qty_s]+$bacaku[qty_m]+$bacaku[qty_l]+$bacaku[qty_xl];
                  echo"
							<tbody>
								<tr>
                <td>$no</td><input type=hidden name=id[$no] value=$bacaku[id_keranjang]>
									<td><a class='table-cart-figure'><img src=admin/foto/$bacaku[feature_image] width=70 height=132></a><a class='table-cart-link'>$bacaku[product_name]</a></td>
									<td>Rp. $hargadisc</td>
									<td>$bacaku[diskon]%</td>
                  <td><input type=text name=jmls[$no] value=$bacaku[qty_s] size=1></td>
                  <td><input type=text name=jmlm[$no] value=$bacaku[qty_m] size=1></td>
                  <td><input type=text name=jmll[$no] value=$bacaku[qty_l] size=1></td>
                  <td><input type=text name=jmlxl[$no] value=$bacaku[qty_xl] size=1></td>
                <td><a href=input.php?input=delete&id=$bacaku[id_keranjang]><i class='fa fa-remove'></i></a></td>
                  
								</tr>
														
							</tbody>";
              $no++;
              $jumlah+=$jmltotal; 
                }?>
					</table>
				</div>
			</div>	
			
			
					<!-- payment method -->
				<div class="row payment_method wow fadeInDown   animated">
					
					<!--Cart total -->
					<div class="col-sm-6 col-lg-6 wow fadeInDown   animated">
					  <h3>Cart total</h3>
						  <div class="table-custom-responsive">
							<table class="table-custom table-responsive">
								  <tbody>
                  <?php
include"config/koneksi.php";

session_start();

if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){ echo"
									<tr>
									  <td>Cart Subtotal</td>
									  <td>Rp.<b>$total_rp2</b></td>
									</tr>";
                }else{
                  echo"
									<tr>
									  <td>Member Discount</td>
									  <td>Rp. <b>$potongan</b></td>
									</tr>
									<tr>
									  <td>Cart Subtotal</td>
									  <td>Rp. <b>$total_rp3</b></td>
									</tr>";
                }
                ?>
                
								  </tbody>
							</table>
              <?php
							echo"<button class='btn btn-primary' type=submit value=update>Update Cart</button></form>";
            }
            ?>
						</div>
					</div>
          <div class="col-sm-6 col-lg-6">
						<h3>Checkout</h3>
						<div class="inner_payment_method">
							<div class="box-radio">
								<div class="radio-panel">
									<label class="radio-inline">
										<input name="input-group-radio" value="checkbox-1" type="radio" checked="" class="radio-custom"><span class="radio-custom-dummy"></span>Before checkout, please update the cart first.
									</label>
									
								</div>
								
                <form action="order.php" method="Post" enctype="multipart/form-data">
            <input type="hidden" name="jmlorder" value="<?php echo "$jumlah";?>">
                    <input type="hidden" name="harganologin" value="<?php echo"$total_rp";?>">
                    <input type="hidden" name="hargalogin" value="<?php echo"$hasilakhir";?>">
                    <button type="Submit" class="btn btn-default">Proceed to checkout</button>
      </form>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			<!-- payment method -->
		</div>	
	</div>	
<!-- cart end-->	
</div>
<!-- Footer Section -->
<footer id="footer" class="footer">
    <div class="container-fluid">
      <div class="row">
      <!-- Newslatter--
        <div class="footer_newslatter wow fadeInDown animated">
            <div class="box">
              <div class="row">
                <div class="col-sm-3">
                  <strong class="wow fadeInDown animated">sign up for free</strong>
                </div>
                <div class="col-sm-4">
                  <p class="wow fadeInDown animated">get your daily fashion, daily lovescope and daily tarot by email</p>
                </div>
                <div class="col-sm-5">
                  <form id="newsletter" accept-charset="utf-8">
                    <div class="success wow fadeInDown animated" style="display: none;">Your subscribe request has been sent!</div>
                    <label class="email">
                      <input type="email" placeholder="Enter your email here" class="wow fadeInDown animated">
                    </label>
                    <a href="#" data-type="submit" class="wow fadeInDown animated">subscribe</a>
                  </form>
                </div>
              </div>
            </div>
        </div>
      !-- Newslatter end-->
      <div class="row footer_matter">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="footer_logo_wrapper">
            <!--<img src="assets/image/logo/footer_logo.png" alt="footer_logo" class="img-responsive wow fadeInDown animated">-->
            <h2 id="con" class="wow fadeInDown animated">Contact Detail</h2>
               <ul>
                <li class="hidden"><i class="fa fa-map-marker"></i> Neque non north India.</li>
                <li><i class="fa fa-map-marker"></i> Neque non north India.</li>
                <li><i class="fa fa-phone"></i> Phone. (123) 456-7890</li>
                <li><i class="fa fa-fax"></i> Fax. (123) 456-7890</li>
                <li><i class="fa fa-envelope"></i> Email: company@Example.com</li>
                
              </ul>
              
            <h4 class="wow fadeInDown animated"><a href="#" class="btn wow fadeInDown animated">Read More</a></h4>
            <ul>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="footer_list_wrapper">
            <h2 class="wow fadeInDown animated">Categorey</h2>
            <ul class="footer_list">
              <li class="wow fadeInDown animated"><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a>
              </li>
              <li class="wow fadeInDown animated"><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Services </a>
              </li>
              <li class="wow fadeInDown animated"><a href="#products"><i class="fa fa-angle-right" aria-hidden="true"></i>Products List </a>
              </li>
              <li class="wow fadeInDown animated"><a href="chart.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Cart</a>
              </li>
              <li class="wow fadeInDown animated"><a href="chart.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Checkout </a> </li>
              
              <li class="wow fadeInDown animated"><a href="#con"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="footer_list_wrapper">
            <h2>Shop</h2>
            <ul class="footer_list">
              <li class="wow fadeInDown animated">  <?php include"cate2.php";?>
              </li>
              
              
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="download_wrapper">
            <h2 class="wow fadeInDown animated">Download App</h2>
            <p class="wow fadeInDown animated">Download Our Mobile App</p>
            <div class="download_btn_wrapper">
              <a href="#">
              <img src="dex/assets/image/App-Store.png" class="img-responsive wow fadeInDown animated" alt="App_Store_img">
              </a>
              <a href="#">
              <img src="dex/assets/image/Google-Play.png" class="img-responsive wow fadeInDown animated" alt="Google_Play_img">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
  
  <div class="footer_copyright">
    <div class="container-fluid">
      <p class="wow fadeInDown animated">© Copyright 2020<a href="#" target="#"></a></p>
    </div>
  </div>

<!-- Footer Section End -->
<!-- back-to-top scrtion -->
<div class="top_button">
  <a class="back-to-top" style="cursor:pointer;" id="top-scrolltop"><i class="fa fa-angle-up"></i></a>
</div>
<!-- back-to-top scrtion End-->
<!-- script files -->
<!-- home silder -->
<script>
$(document).ready(function(){
  $('#home-silder').owlCarousel({ 
    items: 1,
    itemsDesktop:[1199,1],
    itemsDesktopSmall:[992,1],
    itemsTablet:[768,1],
    itemsMobile:[450,1],
    autoPlay: 10000,
    pagination: true,
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });
});

$(document).ready(function(){
  $('#testimonial').owlCarousel({ 
    items: 3,
    itemsDesktop:[1199,3],
    itemsDesktopSmall:[992,3],
    itemsTablet:[768,2],
    itemsMobile:[450,1],
    autoPlay: 10000,
    pagination: true,
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });
});

$(document).ready(function(){
  $('#blog').owlCarousel({  
    items: 3,
    itemsDesktop:[1199,3],
    itemsDesktopSmall:[992,3],
    itemsTablet:[768,2],
    itemsMobile:[450,1],
    autoPlay: 10000,
    pagination: false,
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });
});

$(document).ready(function(){
  $('#product').owlCarousel({ 
    items: 4,
    itemsDesktop:[1199,3],
    itemsDesktopSmall:[992,3],
    itemsTablet:[768,2],
    itemsMobile:[450,1],
    autoPlay: 10000,
    pagination: false,
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });
});

$(document).ready(function(){
  $('#new_category').owlCarousel({  
    items: 4,
    itemsDesktop:[1199,3],
    itemsDesktopSmall:[992,3],
    itemsTablet:[768,2],
    itemsMobile:[450,1],
    autoPlay: 10000,
    pagination: false,
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });
});
</script>

  
  <script src="dex/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="dex/assets/js/custom.js"></script>
  
<!-- script files -->
</body>
</html>

