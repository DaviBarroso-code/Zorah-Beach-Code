<?php
session_start();
session_destroy();
echo "<script>alert('Logout sendo realizado! Clique em Ok!')</script>";
exit();
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=http://localhost/zorahbeach/Páginas/cadastro.php">';
        //header('Location: http:\\htdocs\zorahbeach\Index.php');
?>