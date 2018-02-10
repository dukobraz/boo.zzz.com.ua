<?php
	include("include/db_conect.php");
$id = $_GET["id"];





if (isset($_POST["vidhuk"]))
{
if (preg_match("/^[а-яА-Яa-zA-Z0-9_\.\-]+@[а-яА-Яa-zA-Z0-9\-]+\.[а-яА-Яa-zA-Z\-\.]+$/Du", $_POST['order_email']) > 0)
 {

$to= $_POST['order_email'].", shop@pasika-sojma.com.ua"; //обратите внимание на запятую
setlocale(LC_TIME, 'uk_UA.UTF-8');
date_default_timezone_set('Europe/Kiev'); 
$date = strftime("%c");
$subject = "Відгук ".$date;

$message = "Отримано повідомлення від <b>".$_POST['order_fio']."</b>
<br> email: ". $_POST['order_email'].
"<br> веб переглядач: ". $_SERVER['HTTP_USER_AGENT'].
"<br> ip: ". $_SERVER['REMOTE_ADDR'].
"<br>
<br><b>Повідомлення:</b> <br> <i> ".$_POST['order_note']."</i>";


$headers  = "Content-type: text/html; charset=utf8 \r\n";
$headers .= "From: shop@pasika-sojma.com.ua";

mail($to, $subject, $message, $headers);
header("Location: vidhuk.php?action=send-vidhuk");
        
    }else{
        header("Location: vidhuk.php?action=error");
    }
}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name ="autor" content="Volodimir Dovhanich"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>



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
<?php


        
	     $action=$_GET["action"];
      switch ($action){
       default:
        
        
        echo '
        
            <form action="" method="post"> 
        <ul id="vidhuk-order">     
        <div id="vtext"><p>Ви можете надіслати нам листа з побажаннями, пропозиціями чи зауваженнями за допомогою цієї форми:</p></div>
        <li><label for="order_fio">*Ваше імя</label><input type="text" name="order_fio" id="order_fio" value=""></li>
        <li><label for="order_email">*Ваш E-mail</label><input type="text" name="order_email" id="order_email" value=""></li>
        <li><label for="order_label_style">Повідомлення</label><textarea name="order_note" id="order_note"></textarea></li>
        </ul>
            <p align="right"><input type="submit" name="vidhuk" class="confirm-button-next" value="Відправити"></p>
            </form>';
    
        break;

        case 'send-vidhuk':

            echo'
            <div id=send-vidhuk>
            <img id="halka" src="/images/halka.png"/>
            <b>Ваше повідомлення відправлено!</b>       
            </div> ';
                         
        break;
        
             case 'error':

            echo'
            
            <div id=error>
            <img id="halka" src="/images/error.png"/>
            <b>Ви ввели некоректний email адрес.</b>       
            </div> ';
            
             echo '
        
            <form action="" method="post"> 
        <ul id="info-order">     
        <div id="vtext"><p>Ви можете надіслати нам листа з побажаннями, пропозиціями чи зауваженнями за допомогою цієї форми:</p></div>
        <li><label for="order_fio">*Ваше імя</label><input type="text" name="order_fio" id="order_fio" value=""></li>
        <li><label for="order_email" class="order_email_er">*Ваш E-mail</label><input type="text" name="order_email" class="order_email_er" value=""></li>
        <li><label for="order_label_style">Повідомлення</label><textarea name="order_note" id="order_note"></textarea></li>
        </ul>
            <p align="right"><input type="submit" name="vidhuk" class="confirm-button-next" value="Відправити"></p>
            </form>';
            
            
                         
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
