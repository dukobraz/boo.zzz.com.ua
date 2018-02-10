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
        

        <div class="container-fluid">
            <div class="row">

            </div>
            <div class="row bloc_tovar">


                <div id="block_content" class="offset-lg-2 col-lg-8">
                    <div class="row">
                        <?php

                        $result = mysql_query("SELECT * FROM table_produkt",$link);
                        if(mysql_num_rows($result) > 0)
                        {
                            $row = mysql_fetch_array($result);

                            do{

                                echo  
                                "  

                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 tovar'>
                                <a href='view-content.php?id=".$row['produkt_id']."'><img class='tovarphoto' src='".$row['images']."' alt='".$row['title']."'></a>
                                <p class='nazva' align='center' ><a href='view-content.php?id=".$row['produkt_id']."'>".$row['title']."</a></p>
                                <p class='cina' align='center'>".$row['price']." грн.</p>
                                <form method='POST'>
                                <input name='id' type='hidden' value='" . $row['produkt_id'] . "'>
                                <input class='vkorziny' type='submit' value='в корзину'>
                                </form></div>";
                            }while($row = mysql_fetch_array($result));
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>



        <?php
        include("include/block-footer.php");	
        ?>
    </div>




    

</body>

</html>