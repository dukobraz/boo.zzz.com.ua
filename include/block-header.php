<div class="container-fluid">
<div class="row justify-content-center header ">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 colheder1 "><a href="http://boo.zzz.com.ua"><img class="logo" src="images/fantasy.png" alt="Фантазі шоп"></a></div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 colheder2 ">
        <h4 align="center" style="color:#525252;">+38(063)2814581</h4>
        <p class="vibertelegram">| Viber + Telegram | Працюємо з пн-пт з 9 до 19 |</p>
        <form class="inputposhuk" action="" method="post">
            <input type="text">
            <img class="search2" src="images/search2.png" alt="">
        </form>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 colheder3 ">

        <p class="cach"> <img src="images/cach.png" alt=""> Корзина</p>
    </div>
</div>
<div id="header-menu" class="row justify-content-center header-menu">


    <div id="hamburger" class="hamburger d-md-none"><i class="fa fa-lg fa-border fa-bars" aria-hidden="true"></i></div>
    <div id="menu_0" class=" d-none" style="height: 40px; width: 1px;"></div>
    <?php
    $result = mysql_query("SELECT * FROM category",$link);
    if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        $category=$row['name'];
        do{

            echo  
            '    <div id="menu_'.$row['number'].'" class="col-lg-2 col-md-2 d-none d-md-block div_menu">
            <h6 class="top_menu" align="center">'.$row['name'].'  <i class="fa fa-angle-down" aria-hidden="true">
            </i></h6></div> '; 
            ;
        }while($row = mysql_fetch_array($result));
    }

    ?>
<div class="submenu">
    <div id="window1" class="closewindow">
        <div class="row fontmenu">
         <?php         
         $result = mysql_query("SELECT * FROM subcategory WHERE number = '1' ",$link);
         if(mysql_num_rows($result) > 0)
         {
            $row = mysql_fetch_array($result);

            do{

                echo  
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$row['name'].'</div>'; 
                ;
            }while($row = mysql_fetch_array($result));
        }

        ?>
    </div>
</div>
</div>

<div class="submenu">
    <div id="window2" class="closewindow">
        <div class="row fontmenu">
            <?php         
            $result = mysql_query("SELECT * FROM subcategory WHERE number = '2' ",$link);
            if(mysql_num_rows($result) > 0)
            {
                $row = mysql_fetch_array($result);

                do{

                    echo  
                    '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$row['name'].'</div>'; 
                    ;
                }while($row = mysql_fetch_array($result));
            }

            ?>
        </div>
    </div>
</div>


<div class="submenu">
    <div id="window3" class="closewindow">
        <div class="row fontmenu">
            <?php         
            $result = mysql_query("SELECT * FROM subcategory WHERE number = '3' ",$link);
            if(mysql_num_rows($result) > 0)
            {
                $row = mysql_fetch_array($result);

                do{

                    echo  
                    '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$row['name'].'</div>'; 
                    ;
                }while($row = mysql_fetch_array($result));
            }

            ?>
        </div>
    </div>
</div>


<div class="submenu">
    <div id="window4" class="closewindow">
        <div class="row fontmenu">
            <?php         
            $result = mysql_query("SELECT * FROM subcategory WHERE number = '4' ",$link);
            if(mysql_num_rows($result) > 0)
            {
                $row = mysql_fetch_array($result);

                do{

                    echo  
                    '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$row['name'].'</div>'; 
                    ;
                }while($row = mysql_fetch_array($result));
            }

            ?>
        </div>
    </div>
</div>


<div class="submenu">
    <div id="window5" class="closewindow">
        <div class="row fontmenu">
            <?php         
            $result = mysql_query("SELECT * FROM subcategory WHERE number = '5' ",$link);
            if(mysql_num_rows($result) > 0)
            {
                $row = mysql_fetch_array($result);

                do{

                    echo  
                    '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$row['name'].'</div>'; 
                    ;
                }while($row = mysql_fetch_array($result));
            }

            ?>
        </div>
    </div>
</div>




</div>
</div>



