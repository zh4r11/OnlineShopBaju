 <?php include"config/koneksi.php"; ?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$q[nama_olshop]";?></title>

<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link rel="stylesheet" href="admin/awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css" type="text/css" />
 <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" />

<style type="text/css">
  .marquee {
  width: 300px;
  overflow: hidden;
 
}

.ver {
  height: 270px;
  width: 200px;
}
</style>
</head>
<div id="nduwur">

    

       <div id="owl-demo" class="owl-carousel owl-theme">
     <?php
     $tampilslide=mysql_query("select * from slidshow ORDER BY RAND() LIMIT 4 ");
     while($rr=mysql_fetch_array($tampilslide)){
      ?>
      <div class="item"><div class="textoverlay"><p><?php echo "$rr[caption]";?></p></div><img src="admin/foto/<?php echo "$rr[image]";?>" alt="" title=""></div>
      <?php
     }
     ?>