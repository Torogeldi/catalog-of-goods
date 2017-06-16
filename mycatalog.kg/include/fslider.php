<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<style type="text/css">
/* Слайдер */
.slides {
    height: 340px;
    margin:50px auto;
    overflow:hidden;
    position:relative;
    width:900px;
    margin-top: 15px;
    margin-bottom: 15px;
}
.slides ul {
    list-style:none;
    position:relative;
}

/* Кадры анимации #anim_slides */
@-webkit-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:0;
    }
    100% {
        opacity:0;
    }
}
@-moz-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:0;
    }
    100% {
        opacity:0;
    }
}

.slides ul li {
    opacity:0;
    position:absolute;
    top:0;

    /* анимация css3 */
    -webkit-animation-name: anim_slides;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_slides;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}

/* Задержки css3 */
.slides ul  li:nth-child(2), .slides ul  li:nth-child(2) div {
    -webkit-animation-delay: 6.0s;
    -moz-animation-delay: 6.0s;
}
.slides ul  li:nth-child(3), .slides ul  li:nth-child(3) div {
    -webkit-animation-delay: 12.0s;
    -moz-animation-delay: 12.0s;
}
.slides ul  li:nth-child(4), .slides ul  li:nth-child(4) div {
    -webkit-animation-delay: 18.0s;
    -moz-animation-delay: 18.0s;
}
.slides ul li img {
    display:block;
    width: 840px;
    height: 320px;
}

/* Кадры анимации #anim_titles */
@-webkit-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}
@-moz-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}

.slides ul li div {
    background-color:#000000;
    border-radius:10px 10px 10px 10px;
    box-shadow:0 0 5px #FFFFFF inset;
    color:#FFFFFF;
    font-size:26px;
    left:10%;
    margin:0 auto;
    padding:20px;
    position:absolute;
    top:50%;
    width:200px;

    /* Анимация css3 */
    -webkit-animation-name: anim_titles;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_titles;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}
</style>

<body>
	
	<div class="slides">
    <ul> <!-- Слайды -->
        <li><img src="images/slides/1.jpg" alt="image01" />
            <!-- <div>Описание #1</div> -->
        </li>
        <li><img src="images/slides/2.jpg" alt="image02" />
            <!-- <div>Описание #2</div> -->
        </li>
        <li><img src="images/slides/3.jpg" alt="image03" />
            <!-- <div>Описание #3</div> -->
        </li>
        <li><img src="images/slides/4.jpg" alt="image04" />
            <!-- <div>Описание #4</div> -->
        </li>
    </ul>
</div>


</body>
</html>
