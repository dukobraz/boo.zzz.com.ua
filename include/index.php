<?php
	include("include/db_conect.php");
     if( isset( $_POST['cart-add'] ) )
    {
    
        include ("include/addtocart.php");
        $id = $_POST['$id'];
    }       


$fignja="fignkdskdjfjdfs";


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1"/>

<meta name ="autor" content="Volodimir Dovhanich"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<title>Інтернет магазин Медунка Карпат</title>



</head>


<body>




<div id="block-body">

<?php
include("include/block-header.php");	
?>

<div id="block-right">
<?php
include("include/block-category.php");	
?>
</div>



<div id="block_content">
<div class="container-fluid">
    <div class="row"> 
    <div class="col-lg-3 tovar">
        
    </div>
    </div>
</div>

</div>

 <div id="clear"></div>
<?php
include("include/block-footer.php");	
?>
</div>

</body>

</html>