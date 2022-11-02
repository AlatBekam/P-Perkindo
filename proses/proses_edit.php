<?php

    include "../konekski.php";  
    
    $sql=mysqli_query($koneksi,"select * from agama where agama='$_GET[agama]'");
    $data=mysqli_fetch_array($sql);
?>