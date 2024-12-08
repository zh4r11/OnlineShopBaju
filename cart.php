 <?php
include"config/koneksi.php";
session_start();
?>


<div class="others-option align-items-center">
                  <div class="option-item">
                    <div class="cart-btn">
 <?php
            
                  $sid = session_id();
                  

                  $sql = mysql_query("SELECT * FROM keranjang, product WHERE id_session='$sid' AND keranjang.id_product=product.id");
                  $row = mysql_num_rows($sql);
                  $jml = mysql_fetch_array($sql);
                  
                  echo "<a href='chart.php'><i class='fa fa-shopping-cart'></i><span>$row</span></a>";
                  ?>
                      
                    </div>
                  </div>