<?php

  session_start();
	include("include/db_conect.php");
$id = $_GET["id"];
$action = $_GET["action"];

switch ($action){
    case 'clear':
    $clear = mysql_query("DELETE FROM cart WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
    break;
    
    case 'delete':
    $delete = mysql_query("DELETE FROM cart WHERE cart_id = '$id' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
    break;
   
}


if (isset($_POST["submitdata"]))
{
    $_SESSION["order_delivery"] = $_POST["order_delivery"];
    $_SESSION["order_fio"] = $_POST["order_fio"];
    $_SESSION["order_email"] = $_POST["order_email"];
    $_SESSION["order_phone"] = $_POST["order_phone"];
    $_SESSION["order_address"] = $_POST["order_address"];
    $_SESSION["order_note"] = $_POST["order_note"];
    
header("Location: korzina.php?action=completion");
}


if (isset($_POST["complit"]))
{

    $result = mysql_query("SELECT * FROM cart,table_produkt WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_produkt.produkt_id = cart.cart_id_produkts",$link);
   
   if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);

        do{

        $n[] = "<a href=http://mamont.zzz.com.ua/view-content.php?id=".$row['produkt_id'].">".$row['title']."</a> ".$row['price']." грн.";
             
    }while($row = mysql_fetch_array($result));
    
          }
    
  for($i = 0; $i < count($n); $i++) 
  { 
     $tv = $tv. $n[$i]."<br /> "; 
  } 

$to= $_SESSION['order_email'].", shop@pasika-sojma.com.ua"; //обратите внимание на запятую


setlocale(LC_TIME, 'uk_UA.UTF-8');
date_default_timezone_set('Europe/Kiev'); 
$date = strftime("%c");
$subject = "Замовлення ".$date;

$message = "ПІБ замовника: ".$_SESSION['order_fio'].
"<br>Спосіб доставки: ".$_SESSION['order_delivery'].
"<br>Адреса доставки: ".$_SESSION['order_address'].
"<br>Контактний телефон: ".$_SESSION['order_phone'].
"<br>Примітки: ".$_SESSION['order_note'].
"<br>Продукт: ".$tv.
"<br>До сплати(без врахування доставки): ".$_SESSION['all_price']." грн.";

$headers  = "Content-type: text/html; charset=utf8 \r\n";
$headers .= "From: shop@pasika-sojma.com.ua";

mail($to, $subject, $message, $headers);
header("Location: korzina.php?action=send-mail");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta name ="autor" content="Volodimir Dovhanich"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" type="text/css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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

<?php

	$action=$_GET["action"];
    switch ($action){
        case 'oneclick':
        echo "
        <div id='block-step'>
        
        <div id='name-step'>
        <ul>
        <li><a class='active'>1. Корзина товарів</a></li>
        <li><a>2. Контактна інформація</a></li>
        <li><a>3. Завершення</a></li>
        </ul>
        </div>
        
        <p>крок 1 з 3</p>
        <a href='korzina.php?action=clear'>Очистити</a>
        
        </div>";
         
          
    $result = mysql_query("SELECT * FROM cart,table_produkt WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_produkt.produkt_id = cart.cart_id_produkts",$link);
   
   if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        
        echo "
        <div id='header-list-cart'>
        
        <div id='header1'>Зображення</div>
        <div id='header2'>Найменування товару</div>
        <div id='header4'>Ціна</div>
        
        </div>";
        
        do{
        
        $int = $row["cart_price"] * $row["cart_count"];
        $all_price = $all_price + $int;
        $_SESSION["all_price"] = $all_price;
        
         $img_path = './produkt/'.$row["images"];        
     
       
         echo "
        <div id='block-list-cart'>
        <div class='img-cart'>
        <p align='center'><img src='".$img_path."'></p>   
        </div>
        
        <div class='title-cart'>
        <p><a href='view-content.php?id=".$row['produkt_id']."'>".$row['title']."</a></p>   
        <p class='cart-mini-features'>".$row['mini_description']."</p> 
        </div>
        
        
        <div class='price-produkt'><p align='center'>".$int." грн.</p></div>
        <div class='delete-cart'><a href='korzina.php?id=".$row['cart_id']."&action=delete'><img src='/images/bsk_item_del.png'></a></div>
        <div id='bottom-cart-line'></div>        
        
        
        
        </div>";
        
        $n[] = $row['title'];
     

           
    }while($row = mysql_fetch_array($result));
   echo ' 
    <h2 class="all-price" align="right"> В сумі: <strong>'.$all_price.'</storng> грн</h2>
    <p align="right" class="button-next"><a href="korzina.php?action=confirm"> Далі </a></p>
      
    ';
          }
    else
    {
        echo '<h3 id="clear-cart" align="center"> Корзина порожня </h3>';    
    }
                         
        break;
        case 'confirm': 
                echo "
        <div id='block-step'>
        
        <div id='name-step'>
        <ul>
        <li><a href='korzina.php?action=oneclick'>1. Корзина товарів</a></li>
        <li><a class='active'>2. Контактна інформація</a></li>
        <li><a>3. Завершення</a></li>
        </ul>
        </div>
        
        <p>крок 2 з 3</p>
                
        </div>";
        
        $chck = "";
        if($_SESSION['order_delivery'] == 'Поштою') $chck1 = 'checked';
        if($_SESSION['order_delivery'] == 'Новою поштою') $chck2 = 'checked';
        if($_SESSION['order_delivery'] == 'Самовивіз') $chck3 = 'checked';
        echo "
        <div id=korzoll>
        
        <form method='post'>
        <ul id='info-radio'>
        <li>
        <h3 class='title-h3'>Способи доставки</h3>
        </li>
        <li>
        <input type='radio' name='order_delivery' class='order_delivery' id='order_delivery1' value='Поштою'".$chck1."> 
        <label class='label_delivery' for='order_delivery1'>Поштою</label>
        </li>
        <li>
        <input type='radio' name='order_delivery' class='order_delivery' id='order_delivery2' value='Новою поштою'".$chck2."> 
        <label class='label_delivery' for='order_delivery2'>Новою поштою</label>
        </li>
        <li>
        <input type='radio' name='order_delivery' class='order_delivery' id='order_delivery3' value='Самовивіз' ".$chck3."> 
        <label class='label_delivery' for='order_delivery3'>Самовивіз</label>
        </li>
        </ul>
        
        <ul id='info-order'> 
        <li><h3 class='title-h3'>Інформація для доставки</h3></li>   
        <li><label for='order_fio'>*ПІБ</label><input type='text' name='order_fio' id='order_fio' value='".$_SESSION["order_fio"]."'></li>
        <li><label for='order_email'>*E-mail</label><input type='text' name='order_email' id='order_email' value='".$_SESSION["order_email"]."'></li>
      <li><label for='order_phone'>*Телефон</label><input type='text' name='order_phone' id='order_phone' value='".$_SESSION["order_phone"]."'></li>
      <li><label for='order_label_style' for='order_address'>*Адреса</label><input type='text' name='order_address' id='order_address' value='".$_SESSION["order_address"]."'></li>
      <li><label for='order_label_style'>Примітка</label><textarea name='order_note'>".$_SESSION["order_note"]."</textarea></li>
          
        </ul>
        </div>
        <p align='right'><a><input type='submit' name='submitdata' class='confirm-button-next' value='Далі'></a></p>";
               
        break;
        case 'completion':
        echo "
        <div id='block-step'>
        
        <div id='name-step'>
        <ul>
        <li><a href='korzina.php?action=oneclick'>1. Корзина товарів</a></li>
        <li><a href='korzina.php?action=confirm'>2. Контактна інформація</a></li>
        <li><a class='active'>3. Завершення</a></li>
        </ul>
        </div>
        <p>крок 3 з 3</p>       
        </div>";

            
            echo'
            <form action="" method="post"> 
            <ul id="list-info">
            <li name="dostavka"<strong>Спосіб доставки:</strong>'.$_SESSION["order_delivery"].'</li>
            <li name="mail"><strong>Email:</strong>'.$_SESSION["order_email"].'</li>
            <li name="pib"><strong>ПІБ:</strong>'.$_SESSION['order_fio'].'</li>
            <li name="adres"><strong>Адреса доставки:</strong>'.$_SESSION['order_address'].'</li>
            <li name="tel"><strong>Телефон:</strong>'.$_SESSION['order_phone'].'</li>
            <li name="prim"><strong>Примітки:</strong>'.$_SESSION['order_note'].'</li>
            </ul>
            <h2 class="itog-price" align="right"> Сума: <strong>'.$_SESSION["all_price"].'</trong> грн</h2>
            <p align="right"><input type="submit" name="complit" class="confirm-button-next" value="Відправити"></p>
            </form>
            ';

        echo '
        
                 
        ';
        
        break;
        
        
        case 'send-mail':

            
            echo'
            <div id=send-mail>
            <img id="halka" src="/images/halka.png"/>
            <b>Дякуємо за замовлення!</b>
            <div id="textl">
            <p class="litletext" align="center">На ваш e-mail відправлена інформація щодо вашого замовлення.</p>
            <p class="litletext" align="center">Найближчим часом з вами звяжеться оператор для його підтвердження.</p>
            </div>           
            </div> ';
        
        break;
        
        
        default:
        echo "
        <div id='block-step'>
        
        <div id='name-step'>
        <ul>
        <li><a class='active'>1. Корзина товарів</a></li>
        <li><a>2. Контактна інформація</a></li>
        <li><a>3. Завершення</a></li>
        </ul>
        </div>
        
        <p>крок 1 з 3</p>
        <a href='korzina.php?action=clear'>Очистити</a>
        
        </div>";
         
          
    $result = mysql_query("SELECT * FROM cart,table_produkt WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_produkt.produkt_id = cart.cart_id_produkts",$link);
   
   if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        
        echo "
        <div id='header-list-cart'>
        
        <div id='header1'>Зображення</div>
        <div id='header2'>Найменування товару</div>
        <div id='header4'>Ціна</div>
        
        </div>";
        
        do{
        
        $int = $row["cart_price"] * $row["cart_count"];
        $all_price = $all_price + $int;
        
         $img_path = './produkt/'.$row["images"];        
     
       
         echo "
        <div id='block-list-cart'>
        
        <div class='img-cart'>
        <p align='center'><img src='".$img_path."'></p>   
        </div>
        
        <div class='title-cart'>
        <p><a href=''>".$row['title']."</a></p>   
        <p class='cart-mini-features'>".$row['mini_description']."</p> 
        </div>
        
        <div class='count-cart'>
        <ul class='input-count-style'>  
        
        </ul>
        </div>
        
        <div class='price-produkt'><p id='price_cart'>".$int." грн.</p></div>
        <div class='delete-cart'><a href='korzina.php?id=".$row['cart_id']."&action=delete'><img src='/images/bsk_item_del.png'></a></div>
        <div id='bottom-cart-line'></div>        
        
        
        
        </div>";
        
           
    }while($row = mysql_fetch_array($result));
   echo ' 
    <h2 class="all-price" align="right"> В сумі: <strong>'.$all_price.'</storng> грн</h2>
    <p align="right" class="button-next"><a href="korzina.php?action=confirm"> Далі </a></p>
    ';
    }
    else
    {
        echo '<h3 id="clear-cart" align="center"> Корзина порожня </h3>';    
    }
                         
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
