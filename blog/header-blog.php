<?php
function getCurrentClass(){
    $link = $_SERVER['REQUEST_URI'];

    $array = [
        'blog-main'  => 'main',
        'blog_item' => 'blog',
        'blog_item1' => 'blog',
    ];
    $class = "";
    foreach ($array as $item=>$value){
        if (strpos($link, $item) !== false) {
            $class = $value;
        }
    }
    return $class;
}

?>

<html>
<head>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>qjob</title>

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/skeleton.css">
    <?php
        if(getCurrentClass() === "main"){
            echo '<link rel="stylesheet" href="../assets/css/mainblog.css" />';
        }else{
            echo '<link rel="stylesheet" href="../assets/css/blog.css" />';
        }
    ?>
    <link rel="stylesheet" href="../assets/css/all.css" />
    <link rel="stylesheet"  href="../assets/css/hamburger/hamburgers.css" />
</head>
<body>
<header class="<?=getCurrentClass()?>">
    <div class="logo">
        <a href="http://blog.qjob.hu"><img src="../assets/img/<?=getCurrentClass()?>logo.png" alt=""></a>
    </div>
    <div class="mobilemenu">
        <div class="hamburger hamburger--3dx" onclick="sidebarBlog()">
            <div class="hamburger-box"><div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
</header>
<section id="sidebar-blog" class="<?=getCurrentClass()?>">
    <div class="additional_layer" id="additional_layer"></div>
    <ul class="nav">
        <li><a href="/oldal/epites/">Építkezés és felújítás</a></li>
        <li><a href="/oldal/futarszolgalat/">Futárszolgálat</a></li>
        <li><a href="/oldal/tisztitas/">Takaritás és házimunka</a></li>
        <li><a href="/oldal/teherszallitas/">Költöztetés és teherszállítás</a></li>
        <li><a href="/oldal/szepseg/">Szépség és egészség</a></li>
        <li><a href="/oldal/virtualis-asszistens/">Virtuális asszisztens</a></li>
        <li><a href="/oldal/promociok/">Események és promók szervezése</a></li>
        <li><a href="#">Foto és videó szolgáltatások</a></li>
        <li><a href="#">Berendezések felszerelése és javítása</a></li>
    </ul>
</section>
