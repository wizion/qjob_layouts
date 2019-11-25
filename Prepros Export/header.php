<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>qjob</title>

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/skeleton.css">
        <link rel="stylesheet" href="assets/css/general.css" />
        <link rel="stylesheet" href="assets/css/all.css" />
        <link rel="stylesheet"  href="assets/css/hamburger/hamburgers.css" />
    </head>
    <?php
        $links = str_replace('/qjob_layouts/', '', $_SERVER['REQUEST_URI']);
        $links = str_replace('/', '', $links);
        $class="";
        if($links == "tasks.php"){
            $class = "tasks";
        }elseif ($links == "blog_item_another_header.php"){
            $class = "blogBlock";
        }
        var_dump($links);
    ?>
    <body>
        <header class="<?=$class?>">
            <div class="mobilemenu">
                <div class="hamburger hamburger--3dx" onclick="sidebar()">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <div class="logo-img"></div>
            </div>
            <div class="languages">
                <div class="languagepicker roundborders">
                    <a href="#hu" class="active">HU <i class="fas fa-chevron-up open"></i><i class="fas fa-chevron-down close"></i></a>
                    <a href="#en">EN</a>
                    <a href="#ru">RU</a>

                </div>
            </div>
            <nav class="jqob-hmenu">
                <a href="#">Создать задание</a>
                <a href="#">Все задания</a>
                <a href="#">Исполнители</a>
            </nav>
            <div class="enter">
                <button>Вход</button>
                <a href="#">Регистрация</a>
            </div>
        </header>
        <section id="sidebar">
            <div class="sidebar_title">
                Mind szolgáltatások
            </div>

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
