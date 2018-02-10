<?php
	include("include/db_conect.php");
$id = $_GET["id"];


     if( isset( $_POST['cart-add'] ) )
    {
    
        include ("include/addtocart.php");
        $id = $_POST['$id'];
header("Location: view-content.php?action=send-vidhuk");
    }

?>

<?php
	$result = mysql_query("SELECT * FROM table_produkt WHERE produkt_id='$id'",$link);
            $row = mysql_fetch_array($result);

    
    if(mysql_num_rows($result) > 0)
{
       $titlepage = $row['title'];
       $seodescription = $row['seo_description'];
       $seoword = $row['seo_words'];


}else{
$titlepage = "Інтернет магазин Медунка Карпат";   

}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name ="autor" content="Volodimir Dovhanich"/> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <title>Інтернет магазин взуття Fantasy boots</title>
</head>
<body>

<div id="block-body">

<?php
include("include/block-header.php");	
?>

<div id="block-content">

<div class="container-fluid bloc_tovar">
    <div class="row">
        <div class="col-lg-6">
            <img class="kartinkatovara" src="images/zhel1.jpg" alt="жовті ботінки">
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/zhel1.jpg" alt="Жовті боти" class="imglitlle">
                </div>
                <div class="col-lg-4">
                    <img src="images/zhel1.jpg" alt="Жовті боти" class="imglitlle">
                </div>
                <div class="col-lg-4">
                    <img src="images/zhel1.jpg" alt="Жовті боти" class="imglitlle">
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <hr>
            <p class="textnajavnist" align="center">Є на складі</p>
            <hr>
            <p class="textnajavnist" align="center">Код товару-3422905</p>
            <hr>
            <p class="tcina1" align="center">3500грн.</p>
            <hr>
            <p class="rozmirytovaru" align="center">Розміри в наявності</p>

        </div>
    </div>
</div>



<?php

         $action=$_GET["action"];
        switch ($action){
       default: 
       
	$result = mysql_query("SELECT * FROM table_produkt WHERE produkt_id='$id'",$link);
            $row = mysql_fetch_array($result);

    
    if(mysql_num_rows($result) > 0)
    {

 
            
        do{

$resource_src = "produkt/larg/".$row['images'];

            echo "
            
<div id='block-content-info'>
<img id='image-view' alt='".$row['title']."' src='".$resource_src."'>

<div id='block-mini-description'>

<p id='content-title'><h1>".$row['title']."</h1></p>
<p id='style-mini_description'><h3>".$row['mini_description']."<h3></p>
<form method='POST'>
<input name='id' type='hidden' value='" . $row['produkt_id'] . "'>
<p ><input class='cart-add' type='submit' name='cart-add' value='в корзину'/></p>
</form>
<p id='style-price'>".$row['price']."  грн. </p>

</div>



</div>

<div id='description'>
<p>".$row['description']."</p>
</div>";
   

    

    
    
                      }while($row = mysql_fetch_array($result));
                      
                      }

     break;
 
 case 'send-vidhuk':
            echo'
            <div id=send-vidhuk>
            <img id="halka" src="/images/halka.png"/>
            <b> Товар добавлено в <a href="korzina.php?action=oneclick">корзину!</a></b> <br>
            Дякуємо за Ваше замовлення.     
            </div> ';
                         
        break;    

    }   
    
    
    
 ?>
</div>


 <div id="clear"></div>
<?php
include("include/block-footer.php");	
?>
</div>

</body>
</html>
