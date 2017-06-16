<div id="block-category">
<p class="header-title"><img src="/images/lustra2.png" id="img-category"/><span>Каталог люстр</span></p>

<ul>
    <li><a href="view_cat.php?type=lustra"><strong>Все виды</strong></a></li>
    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='lustra'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
</ul>
</div>

<div id="block-category2">
        <p class="header-title2"><img src="/images/electrotov.png" id="img-category2"/><span>Электротовары</span></p>
        <ul>
            <li><a id="index1">Лампы</a>
                <ul class="category-selection"> 
                <li><a href="view_cat.php?type=lamps"><strong>Все виды</strong></a></li>         
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='lamps'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index2">Внутреннее</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=inners"><strong>Все виды</strong></a></li>             
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='inners'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index3">Наружное</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=outs"><strong>Все виды</strong></a></li>                
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='outs'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index4">Декоративное</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=decorative"><strong>Все виды</strong></a></li>             
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='decorative'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index5">Настольные Лампы</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=deskLamps"><strong>Все виды</strong></a></li>             
                   <?php
        $result = mysql_query("SELECT * FROM category WHERE type='deskLamps'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index6">Компоненты</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=komponents"><strong>Все виды</strong></a></li>             
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='komponents'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index7">Аксесуары</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=aksesuars"><strong>Все виды</strong></a></li>              
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='aksesuars'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index8">Техническое Оснащение</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=tehnicOsn"><strong>Все виды</strong></a></li>          
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='tehnicOsn'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
            
            <li><a id="index9">Другое</a>
                <ul class="category-selection">
                <li><a href="view_cat.php?type=other"><strong>Все виды</strong></a></li>           
                    <?php
        $result = mysql_query("SELECT * FROM category WHERE type='other'",$link);
        
        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);
            
                do{
                    echo '
                        <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    ';
                }
                
                    while ($row = mysql_fetch_array($result));
        }
?>
    
                </ul>
            </li>
        </ul>
</div>