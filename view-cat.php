<?php
	include("include/db_conect.php");
    $cat = $_GET["cat"];
    $type = $_GET["type"];
    
    $cat = strip_tags($cat);
    $cat = mysql_real_escape_string($cat);
    $cat = trim($cat);
    
    $type = strip_tags($type);
    $type = mysql_real_escape_string($type);
    $type = trim($type);
    
    
     if( isset( $_POST['cart-add'] ) )
    {
        echo 'Кнопка нажата!';
        include ("include/addtocart.php");
        $id = $_POST['$id'];
    }   
   
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name ="autor" content="Volodimir Dovhanich"/> 
<meta name ="keywords" content="Натуральнйи мед, медунка карпат, прополіс, БАД, лікарські рослини, купити, карпати, карпатський, недорого, інтернет магазин, закарпаття, пасіка сойма"/> 
<meta name ="description" content="Інтернет магазин Медунка Карпат"/> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8-general-ci"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">


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



<div id="block-content">

<ul id="block-tovar-grid">
<?php

if (!empty($cat))
{
$querycat = " name='$cat'";
}else
{   
$querycat = " type='$type'";
} 

	$result = mysql_query("SELECT * FROM table_produkt  WHERE $querycat",$link);
 
    
  if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        
        do{
            echo  
   "
   <div id = 'block'>
   <li >
   <div class='block-image-grid'>
    <a href='view-content.php?id=".$row['produkt_id']."'><img  id='image' alt='".$row['title']."' src='produkt/".$row['images']."'></a>
     <div id='title_block'><p class='style-title-grid'><a href='view-content.php?id=".$row['produkt_id']."'>".$row['title']."</a></p></div>
    <form method='POST'>
    <input name='id' type='hidden' value='" . $row['produkt_id'] . "'>
    <p ><input class='cart-add' type='submit' name='cart-add' value='в корзину'/></p>
    </form>
    <p class='style-price-grid'>".$row['price']." грн.</p>
    </div>
    <p class='mini-description-grid'>".$row['mini_description']."</p>


    </li>
    </div>";
        }while($row = mysql_fetch_array($result));
    }
 ?>
</ul>

</div>

 <div id="clear"></div>

<?php
include("include/block-footer.php");	
?>
</div>

</body>
</html>