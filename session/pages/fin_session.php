<?php
session_start();
if (isset ($_SESSION['age'])){
    session_destroy();
}

echo '<script language="Javascript">
	  <!--
	  document.location.replace("../index.php");
	  // -->
    </script>';


?>