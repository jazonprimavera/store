<?php
switch($_GET['p']) {
  case 'table':
    include("table.php");
    break;
    
  case 'add':
    include("form_create.php");
    break;
    
  case 'preview':
    include("preview.php");
    break;
	
	  default:
    include("bs-login1.php");
    break;
	
		  case 'login':
    include("bs-login1.php");
    break;
}
?>
