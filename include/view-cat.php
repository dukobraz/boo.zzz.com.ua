<?php
	include("include/db_conect.php");
    $cat = $_GET["cat"];
    $type = $_GET["type"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" type="text/css" rel="stylesheet">



<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<title>Пасіка</title>
</head>
<body>

<div id="block-body">

<?php
include("include/block-header.php");	
?>

<div id="block-right">

<div id="block-searcher">
<form method="GET" action="search.php?q=">

<span></span>
<input type="text" id="input-search" name="q" placeholder="Пошук між товарами"/>
<input type="submit" id="button-search" value="Пошук"/>
</form></form>
</div>

<?php
include("include/block-category.php");	
?>

</div>



<div id="block-content">

<ul id="block-tovar-grid">
<?php
	$result = mysql_query("SELECT * FROM table_produkt",$link);
    if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        
        do{
            echo 
   "
   <li>
   <div class='block-image-grid'>
    <img id='image' src='produkt/".$row['images']."'>
    </div>
    <p class='style-title-grid'><a href=''>".$row['title']."</a></p> 
    <p class='add-cart-style-grid'><a></a></p>
    <p class='style-price-grid'>".$row['price']." грн.</p>
    <p class='mini-description-grid'>".$row['mini_description']."</p>


    </li>";
        }while($row = mysql_fetch_array($result));
    }
 ?>
</ul>

</div>

<?php
include("include/block-footer.php");	
?>
</div>

</body>
</html>