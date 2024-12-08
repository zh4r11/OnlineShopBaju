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
	<link rel="stylesheet" href="dex/assets/vendor/smoothproducts/smoothproducts.css"> 

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="dex/assets/vendor/jquery/jquery-2.1.3.min.js"></script>
	<script src="dex/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="dex/assets/vendor/wow/wow.min.js"></script>
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
                      <a href="contact_us.html" class=""> Contact Us</a>
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
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Single products</h2>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="">Single products</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="single_products_page">
<!-- single products page -->
	<div id="products_products" class="single_products_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="eb_right single_products_right_side">
						<div class="single_products_images">
							<div class="single_product_image">
								<div class="sp-loading">
									<img src="dex/assets/image/products/product-1.jpg" alt="" width="100%">
								</div>
								<div class="sale"><span class="">Sale</span></div>
							</div>
							
							<div class="sp-wrap">
							<?php 


session_start();
    $c=$_GET[id];
    $_SESSION['sessionprod']=$c;
    $sessionproduks=$_SESSION['sessionprod'];
    $tampil=mysql_query("SELECT * FROM product where id='$c'");
   
    $r=mysql_fetch_array($tampil);
    $disc     = ($r[diskon]/100)*$r[price];
                        $hargadisc     = number_format(($r[price]-$disc),0,",",".");
    $str =$r[image];


$array =  explode('|', $str);


    ?>
        <ul id="etalage">
        <?php
        foreach ($array as $item) {
          ?>
								<div id="additional_silder_products_images" class="owl-carousel">
									<div class="item">
										<a href="admin/foto/tn/<?php echo "$item";?>">
											<img src="admin/foto/<?php echo "$item";?>" alt="">
										</a>
									</div>	
								
									
								</div>
								<?php
        }
        ?>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6">
					<div class="eb_left single_products_left_side">
						<h2><?php echo"$r[product_name]";?></h2>
						<div class="rating">
							<p>			
											  					
								<span class="border"> | </span> 
								<a href="#product-detail-tab" onclick="">reviews</a> <span class="border"> | </span> 	  
								<a href="#product-detail-tab" onclick="" class="text_write_icon"><i class="fa fa-pencil-square-o"></i> Write a review</a>		  
							</p>
						</div>
						<hr>
						<div class="price-block">
							<div class="price-box">
								<p class="in-stock"><i class="fa fa-check"></i> In Stock</p>
								<div class="form-group">
 
								<div class="col-xs-3">
	  <p class="in-stock">S : <?php echo"$r[stok_s]";?> </p>
                 
        </select>
    </div>
    <div class="col-xs-3">
	  <p class="in-stock">M : <?php echo"$r[stok_m]";?> </p>
                 
        </select>
    </div>
	<div class="col-xs-3">
	  <p class="in-stock">L : <?php echo"$r[stok_l]";?> </p>
                 
        </select>
    </div>
      <div class="col-xs-3">
	  <p class="in-stock">XL : <?php echo"$r[stok_xl]";?> </p>
                 
        </select>
    </div>
</div>
<br>
<br>
								<?php
                        if ($data[diskon]!= "0"){
                            $angkaa = "$r[price]";
                      $jumlah_desimala ="2";
                      $pemisah_desimala =",";
                      $pemisah_ribuana =".";
                      $notdis= "Rp ".number_format($angkaa, $jumlah_desimala, $pemisah_desimala, $pemisah_ribuana);


                            ?>
        
        <?php
         }else{
                              $angkaa = "$r[price]";
                      $jumlah_desimala ="2";
                      $pemisah_desimala =",";
                      $pemisah_ribuana =".";
                      $hartot= "Rp ".number_format($angkaa, $jumlah_desimala, $pemisah_desimala, $pemisah_ribuana);
                            ?>
                             
                             <?php
                       } 

                        ?>
								<p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">RP. <?php echo "$hargadisc";?> </span> </p>
								<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">RP. <?php echo "$r[price]";?></span> <?php echo "$r[diskon]";?>% </p>
								
							</div>
						</div>
						
						<div class="col-xs-2">
							<form action="input2.php?input=add" method="Post" enctype="multipart/form-data">
							<input type="hidden" name="ids" value=" <?php echo $r[id]?>">
								<button class="btn btn-cart" title="Add to Wishlist"  type="Submit"><i class='fa fa-heart'></i> Add to Wishlist</button></form>
							</div>
						
						<div class="col-xs-2" style="left: 120px;">
						<form action="input.php?input=add" method="Post" enctype="multipart/form-data">
						<input type="hidden" name="ids" value=" <?php echo $r[id]?>">
						<button class="btn btn-cart" title="Add to Cart" type="Submit"><i class='fa fa-shopping-cart'></i> Add to Cart</button>
						</form>
							</div>
						
						
						
						
						
						<ul class="shipping-pro">
							<li>Free Wordwide Shipping</li>
							<li>30 Days Return</li>
							<li>Member Discount</li>
                        </ul>
						<a href="javascript:history.go(-1)" class="btn btn-danger"><i class="fa fa-mail-reply"></i> Back</a>
					</div>	
				</div>
			</div>		
			
			<!---- ---------------------->
			<div class="row" id="rev">
				<div class="product-collateral">
					<div class="add_info">
							<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
								<li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
								
								<li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
							</ul>


						  <div id="productTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="product_tabs_description">
									<div class="std">
									<?php echo"$r[deskripsi]";?></P>
								  </div>
								</div>
								
								<div class="tab-pane fade" id="reviews_tabs">
									<div class="eb-Reviews">
										<div>
											<h4 class="eb-Reviews-title">reviews for <span><?php echo"$r[product_name]";?></span></h4>
											<ol class="commentlist">
											<?php
                function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
                   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
                  $BulanIndo = array("Januari", "Februari", "Maret",
                   "April", "Mei", "Juni",
                   "Juli", "Agustus", "September",
                   "Oktober", "November", "Desember");
                  $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
                  $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
                  $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
                  $zzesult = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
                  return($zzesult);
                }
                $tm=mysql_query("SELECT riview.*, pelanggan.nama FROM riview,pelanggan,product WHERE riview.id_pelanggan=pelanggan.id_pelanggan AND riview.id_product='$r[id]' AND product.id=riview.id_product AND riview.terbit='Y'");
                while ($s=mysql_fetch_array($tm)) {?>
                  
               
                  
												<li class="comment">
												<div>
													<img alt="" src="http://bootdey.com/img/Content/user_1.jpg" class="avatar avatar-60 photo">
													<div class="comment-text">
													<div class="ratings">
															 <b><h3>Rating : </b><i class="fa fa-star fa-1x" style="color:yellow"></i> <?php echo "$s[rating]";?></p></h3>
															  
															</div>
														<p class="meta">
														<strong><?php echo "$s[nama]";?></strong> 
														<span>–</span>><?php echo DateToIndo($s[tgl]);?>
														</p>
														<div class="description">
														<p><?php echo "$s[isi]";?></p>
														</div>
													</div>
												</div>
												</li><!-- #comment-## -->
												<?php }
                ?>
											</ol>
										</div>
									<div>
								<div>
								<div class="comment-respond">
									<span class="comment-reply-title">Add a review </span>
									<?php 
if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){  ?>
 <h3>login to add comments and reviews
(Note: if already logged in please reload this page)</h3>
                          <div class="form-group">
                           <a  target = "_blank" href="loginn.php"> <button class="btn btn-primary"><i class="fa fa-user-circle"></i> Login</button></a>
                            
                        </div>
                        <?php }else{
                          ?>
                         <?php 
                         $d=mysql_fetch_array(mysql_query("select * from pelanggan where username='$_SESSION[username]'"));
                         $dd=mysql_fetch_array(mysql_query("select * from riview where id_pelanggan='$d[id_pelanggan]' and id_product='$r[id]'"));
                          if(!empty($dd[id_pelanggan])){?>
                              <h3>Sorry you already did a review</h3>
                          <?php
                        }else {
                          ?>			
									 <form action="proseskoment.php" method="post" enctype="multipart/form-data"  > 
                        <input type="hidden" name="id_prod" value="<?php echo "$r[id]";?>">
						<div class="form-group">
                         
                        
						 <select  name='rating' class='form-control' required='required'  style='width: 70%;'>
						 <option value=0 selected>- Rating Produk-</option>";
						 
						 <option value='1'>1 Star</option>
						  <option value='2'>2 Star</option>
						   <option value='3'>3 Star</option>
							<option value='4'>4 Star</option>
							 <option value='5'>5 Star</option>
						 
						 </select>
						 
					  </div>
										
                  <div class="form-group">
                       
                          <textarea name="isi" class="form-control" style="width: 70%; height: 100px;" rows="3" required='required' placeholder="fill in the comments" ></textarea>
                        </div>

                         <div class="form-group">
                                   
                                        <img src="gambar.php" alt="gambar" />
                                       
                                  
                                </div>
                                <div class="form-group">
                                    
                                
                                        <input type="text" style="width: 70%;" class="form-control"  name="nilaiCaptcha" placeholder="captcha" maxlength="6" required="required">
                                 
                                </div>
              <div class="form-group">
                            <button class="btn btn-success  btn-circle text-uppercase " type="submit" ><i class="fa fa-user-circle"></i> Submit comment</button>
                            
						</div>
									</form>
									<?php
                      }
                      ?>
                          <?php
                          }?>
								</div><!-- #respond -->
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
						  </div>
					</div>
				</div>
			</div>
				
			<!---- ---------------------->
			
			<!-- relative products -->
			
			
			
		</div>	
	</div>
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
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Services </a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Products List </a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Cart</a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Checkout </a> </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog </a> </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="footer_list_wrapper">
            <h2>Shop</h2>
            <ul class="footer_list">
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Bags</a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Jeans </a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> T-shirt</a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Dress</a>
              </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Caps</a> </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Innerwear</a> </li>
              <li class="wow fadeInDown animated"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a> </li>
              
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
<script>

$(document).ready(function(){
	$('#additional_silder_products_images').owlCarousel({	
		items:5,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,2],
		itemsTablet:[768,3],
		itemsMobile:[600,2],
		autoPlay: 6000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left fa-5x"></i>', '<i class="fa fa-angle-right fa-5x"></i>']
	});
});

$(document).ready(function(){
	$('#related_product').owlCarousel({	
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

$(window).load(function() {
	$('.sp-wrap').smoothproducts();
});

</script>
<!-- script files -->
	<script src="dex/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="dex/assets/js/custom.js"></script>
	<script src="dex/assets/vendor/smoothproducts/smoothproducts.min.js"></script>
<!-- script files -->
</body>
</html>
