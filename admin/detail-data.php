<?php
    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../config/koneksi.php";
    echo " <h2>Data Karyawan</h2>
    <table border='1' cellpadding='4'>
        <tr bgcolor='silver'>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>TELP</th>
            <th>KOTA</td>
            <th>ALAMAT</th>
            <th>KODE POS</th>
            <th>ONGKIR</th>
        </tr>";
        $sql = mysql_query("SELECT * FROM order_product 
            INNER JOIN kota ON order_product.id_kota=kota.id_kota
            WHERE id='$id'");
        
        while ($r=mysql_fetch_array($sql)){

            
            echo"<tr>
        
                    <td>$r[name]</td>
                     <td>$r[email]</td>
                    <td>$r[phone]</td>
                    <td>$r[nama_kota]</td>
                    <td>$r[address]</td>
                    <td>$r[kodepos]</td>
                     <td>$r[ongkir]</td>";
                    ?>
                   
                    </tr>
            <?php 
            
        }
        echo "</tbody></table></div></div>";

    
?>
