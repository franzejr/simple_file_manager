<?php
session_start();
session_destroy();
setcookie("count", $count, time()-3600);
include("../funcoes.php");
redirect("../index.php");
?>
