<?php include"config/koneksi.php"; ?>

 <?php    
              
    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 4 ";
     $exe = mysql_query($sql);
                   while($data=mysql_fetch_array($exe)){
                        $disc     = ($data[diskon]/100)*$data[price];
                        $hargadisc     = number_format(($data[price]-$disc),0,",",".");
                      

                    ?>
                


               
                            <?php
                        if ($data[diskon]!= "0"){
                            $angkaa = "$data[price]";
                      $jumlah_desimala ="2";
                      $pemisah_desimala =",";
                      $pemisah_ribuana =".";
                      $notdis= "Rp ".number_format($angkaa, $jumlah_desimala, $pemisah_desimala, $pemisah_ribuana);


                            ?>
                          <?php
                          }else{
                              $angkaa = "$data[price]";
                      $jumlah_desimala ="2";
                      $pemisah_desimala =",";
                      $pemisah_ribuana =".";
                      $hartot= "Rp ".number_format($angkaa, $jumlah_desimala, $pemisah_desimala, $pemisah_ribuana);
                            ?>
                      
                      
                          <?php
                       } 

                        ?>

                 <div class="">
                  <div class="product-thumb">
                  <div class="image wow fadeInDown animated">
                    <a href=detail.php?id=<?php echo "$data[id]"?>><img class="wow fadeInDown animated"  src="admin/foto/<?php echo"$data[feature_image]"; ?>" alt="Kundli Dosha" title="Kundli Dosha" width="100px" height="100px"></a>
                    
                  </div>
                  <div class="caption ">
                    
                    <div class="rate-and-title">
                      <h4 class="wow fadeInDown animated"><a href=detail.php?id=<?php echo "$data[id]"?>><?php echo "$data[product_name]"; ?></a></h4>
                      <div class="rating wow fadeInDown animated">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <div class="clear"></div>
                      </div>
                      <p class="price wow fadeInDown animated">
                        <span class="price-old">Rp.<b><?php echo "$data[price]"; ?></span> <span class="price-new">Rp.<b><?php echo "$hargadisc";?></span>  
                      </p>
                       <?php if($data[stok]!=="0"){
                     echo "<a href='detail.php?id=$data[id]'><button type='button' class='btn wow fadeInDown animated' onclick='' title='Add to Cart'><span><i class='fa fa-shopping-cart'></i> Add to Cart</span></button></a>";
                        }
                        else{
               
                        echo"<a href='#' class='cart' role='button'>pesan</a>";
                       }?>
                    </div>
                  </div>
                </div>
              </div>
                 
                 <?php }
                        ?>