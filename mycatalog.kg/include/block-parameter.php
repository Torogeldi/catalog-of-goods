﻿<script type="text/javascript">
    
    $(document).ready(function(){
        $('#blocktrackbar').trackbar({
            onMove : function(){
                document.getElementById("start-price").value = this.leftValue;
                document.getElementById("end-price").value = this.rightValue;
            },
            width : 160,
            leftLimit : 1000,
            leftValue : <?php
	   if((int)$_GET["start_price"] >= 1000 AND (int)$_GET["start_price"] <= 30000)
       {
            echo (int)$_GET["start_price"];
       }else
       {
            echo "1000";
       }
?>,
            rightLimit : 30000,
            rightValue : <?php
	   if((int)$_GET["end_price"] >= 1000 AND (int)$_GET["end_price"] <= 30000)
       {
            echo (int)$_GET["end_price"];
       }else
       {
            echo "15000";
       }
?>,
            roundUp : 1000
        });
    });
    
</script>

<div id="block-parameter">
    <p class="header-title3"><span>Поиск по параметрам</span></p>
          <p class="title-filter">Стоимость</p>
       
        <form method="GET" action="search_filter.php">
            <div id="block-input-price">
                <ul>
                    <li><p>От</p></li>
                    <li><input type="text" id="start-price" name="start_price" value="1000"/></li>
                    <li><p>До</p></li>
                    <li><input type="text" id="end-price" name="end_price" value="20000"/></li>
                    <li><p>сом</p></li>
                </ul>
            </div>
        <div id="blocktrackbar"></div>
            <p class="title-filter">Каталог люстр</p>
                <ul class="checkbox-brand">
                
                <?php
	
    $result = mysql_query("SELECT * FROM category WHERE type = 'lustra'",$link);
    if(mysql_num_rows($result) > 0)
    {
        $row = mysql_fetch_array($result);
        do
        {
            $checked_brand = "";
            
            if($_GET["brand"])
            {
                if(in_array($row["id"], $_GET["brand"]))
                {
                    $checked_brand = "checked";
                }
            }
            
            
            echo '
            
                <li><input '.$checked_brand.' type="checkbox" name="brand[]" value="'.$row["id"].'" id="checkbrend'.$row["id"].'"/><label for="checkbrend'.$row["id"].'">'.$row["brand"].'</label></li>
            
            ';
        }
        while ($row = mysql_fetch_array($result));
    }
        
?>
                     
                </ul>
            <center><input type="submit" name="submit" id="button-param-search" value="Найти"/></center>
        </form>
        
</div>