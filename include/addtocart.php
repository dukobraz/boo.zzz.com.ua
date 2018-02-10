<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{  
    include("include/db_conect.php");
        
    $id = $_POST["id"];
    
$result = mysql_query("SELECT * FROM table_produkt WHERE produkt_id ='$id'",$link);
$row = mysql_fetch_array($result);


    mysql_connect("pasikaso.mysql.ukraine.com.ua", "pasikaso_db", "QHqCvfWg") or die (mysql_error ());        
            
	mysql_select_db("pasikaso_db") or die(mysql_error());

	// Построение SQL-оператора

	$strSQL = "INSERT INTO cart(";

	$strSQL = $strSQL . "cart_id_produkts, ";
	$strSQL = $strSQL . "cart_price, ";

	$strSQL = $strSQL . "cart_datetime, ";
    $strSQL = $strSQL . "cart_count, ";
	$strSQL = $strSQL . "cart_ip) ";

	$strSQL = $strSQL . " VALUES (";
	$strSQL = $strSQL . "'".$row["produkt_id"]."', ";

	$strSQL = $strSQL . "'".$row["price"]."', ";
	$strSQL = $strSQL . "NOW(), ";
    $strSQL = $strSQL . "'1', ";

	$strSQL = $strSQL . "'{$_SERVER['REMOTE_ADDR']}')";

	// SQL-оператор выполняется
	mysql_query($strSQL) or die (mysql_error());

	// Закрытие соединения
	mysql_close();
                

}
?>

            
            