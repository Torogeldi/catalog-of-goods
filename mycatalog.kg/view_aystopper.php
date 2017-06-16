<?php
  include("include/db_connect.php");

   $go = ($_GET["go"]);
    
    switch ($go) {

      case "news":     
      $query_aystopper= " WHERE visible = '1' AND new = '1'";
        $name_aystopper = "Новинки товаров";
      break;

      case "leaders":
      $query_aystopper= " WHERE visible = '1' AND leader = '1'";
        $name_aystopper = "Лидеры продаж";
      break;

      case "sale":
      $query_aystopper= " WHERE visible = '1' AND sale = '1'";
        $name_aystopper = "Распродажа товаров";
      break;
        
        
      default:
        $query_aystopper = "";  
      break;
} 

 $sorting = $_GET["sort"];

 switch($sorting)
 {
    case 'price-asc';
    $sorting = 'price ASC';
    $sort_name = 'От дешевых к дорогим';
    break;

    case 'price-desc';
    $sorting = 'price DESC';
    $sort_name = 'От дорогих к дешевым';
    break;

    case 'popular';
    $sorting = 'count DESC';
    $sort_name = 'Популярное';
    break;

    case 'news';
    $sorting = 'datetime DESC';
    $sort_name = 'Новинки';
    break;

    case 'brand';
    $sorting = 'brand';
    $sort_name = 'От А до Я';
    break;

    default:
    $sorting = 'price DESC';
    $sort_name = 'От дорогих к дешевым';
    break; 
 }

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/jcarousellite_1.0.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/shop-script.js" type="text/javascript"></script>
    <script src="trackbar/jquery.trackbar.js" type="text/javascript"></script>
    <title>Сайт красивых и стильных люстр</title>
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

<?php
  include("include/block-parameter.php");
?>

<?php
  include("include/block-news.php");
?>
</div>

<div id="block-content">

    <div id="block-sorting">
        <p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все товары</span></p>
            <ul id="option-list">
                <li>Вид: </li>
                <li><img id="style-grid" src="/images/grid.png"/></li>
                <li><img id="style-list" src="/images/list.png"/></li>

                <!-- <li>Сортировать:</li>
                <li><a id="select-sort"><?php echo $sort_name; ?></a>

                    <ul id="sorting-list">

                        <li><a href="index.php?sort=price-asc">От дешевых к дорогим</a></li>
                        <li><a href="index.php?sort=price-desc">От дорогих к дешевым</a></li>
                        <li><a href="index.php?sort=popular">Популярное</a></li>
                        <li><a href="index.php?sort=news">Новинки</a></li>
                        <li><a href="index.php?sort=brand">От А до Я</a></li>

                    </ul>
                </li> -->
            </ul>
    </div>


<ul id="block-tovar-grid">
<?php

    $num = 100;
    $page = (int)$_GET['page'];

    $count = mysql_query("SELECT COUNT(*) FROM table_products $query_aystopper ",$link);
    $temp = mysql_fetch_array($count);

    if ($temp[0] > 0)
    {
        $tempcount = $temp[0];

        $total = (($tempcount - 1) / $num) + 1;
        $total = intval($total);

        $page = intval($page);

        if(empty($page) or $page < 0) $page = 1;
            if($page > $total) $page = $total;


            $start = $page * $num - $num;

            $qury_start_num = "LIMIT $start, $num";
    }



        $result = mysql_query("SELECT * FROM table_products $query_aystopper ORDER BY $sorting $qury_start_num",$link);

        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);

                do
                {

        if($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
        {
            $img_path = './uploads_images/'.$row["image"];
            $max_width = 200;
            $max_height = 200;
            list($width, $height) = getimagesize($img_path);
            $ratioh = $max_height/$height;
            $ratiow = $max_width/$width;
            $ratio = min($ratioh, $ratiow);
            $width = intval($ratio * $width);
            $height = intval($ratio * $height);

        } else
            {
                $img_path = "/images/no-image.png";
                $width = 110;
                $height = 200;
            }
                    echo'

                    <li>
                        <div class="block-images-grid">
                            <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
                        </div>

                        <p class="style-title-grid"><a href="view_content.php?id='.$row["product_id"].'">'.$row["title"].'</a></p>
                            <ul class="reviews-and-counts-grid">
                                <li><img src="/images/saw.png"><p>0</p></li>
                                <li><img src="/images/comment.png"><p>0</p></li>
                            </ul>
                                <a class="add-cart-style-grid"></a>
                                    <p class="style-price-grid"><strong>'.$row["price"].'</strong> сом</p>
                            <div class="mini-features">
                                '.$row["mini_features"].'
                            </div>
                    </li>

                    ';
                }
                    while ($row = mysql_fetch_array($result));
        }
?>
</ul>



<ul id="block-tovar-list">
<?php
        $result = mysql_query("SELECT * FROM table_products $query_aystopper ORDER BY $sorting $qury_start_num",$link);

        if(mysql_num_rows($result) > 0)
        {
            $row = mysql_fetch_array($result);

                do
                {

        if($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
        {
            $img_path = './uploads_images/'.$row["image"];
            $max_width = 150;
            $max_height = 150;
            list($width, $height) = getimagesize($img_path);
            $ratioh = $max_height/$height;
            $ratiow = $max_width/$width;
            $ratio = min($ratioh, $ratiow);
            $width = intval($ratio * $width);
            $height = intval($ratio * $height);

        } else
            {
                $img_path = "/images/no-image.png";
                $width = 110;
                $height = 200;
            }
                    echo'

                    <li>
                        <div class="block-images-list">
                            <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
                        </div>


                            <ul class="reviews-and-counts-list">
                                <li><img src="/images/saw.png"><p>0</p></li>
                                <li><img src="/images/comment.png"><p>0</p></li>
                            </ul>

                                    <p class="style-title-list"><a href="view_content.php?id='.$row["product_id"].'">'.$row["title"].'</a></p>

                                <a class="add-cart-style-list"></a>
                                    <p class="style-price-list"><strong>'.$row["price"].'</strong> сом</p>
                            <div class="style-text-list">
                                '.$row["mini_description"].'
                            </div>
                    </li>

                    ';
                }
                    while ($row = mysql_fetch_array($result));
        }

      if ($page != 1) {$pstr_prev = '<li><a class="pstr-prev" href="index.php?page='.($page - 1).'">&lt;</a></li>';}


?>
</ul>


</div>

<?php
  include("include/block-footer.php");
?>

</div>

</body>
</html>
