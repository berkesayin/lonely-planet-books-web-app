<?php

session_start();

$_SESSION["girisKontrol"] = 0;
unset($_SESSION["username"]);
header("Location: index.php?i=cikis");  //başarıyla çıkış yaptınız yazdıralım(?i harfi onun için)
session_destroy();

?>