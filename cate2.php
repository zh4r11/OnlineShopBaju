<?php
include"config/koneksi.php";
session_start();
?>


<?php 
              $kat = mysql_query("SELECT category, category.id from category join product on product.id_category=category.id group by category LIMIT 6") or die(mysql_error());
              while($r=mysql_fetch_array($kat)){
                ?>
<!-- category -->
            <li><a href="kategori.php?cat=<?php echo  $r[id];?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $r[category];?></a></li>
                  
            <!-- category end-->
             <?php
            }
            ?>