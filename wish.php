<?php
include"config/koneksi.php";
session_start();
?>



                  <div class="option-item" style="right: 20px;">
                    <div class="cart-btn">
 <?php
            
                  $sid = session_id();
                  

                  $sql = mysql_query("SELECT * FROM wish, product WHERE id_session='$sid' AND wish.id_product=product.id");
                  $row = mysql_num_rows($sql);
                  $jml = mysql_fetch_array($sql);
                  
                  echo "<a href='wish2.php'><i class='fa fa-heart'></i><span>$row</span></a>";
                  ?>
                      
                   
                  </div>