<?php
include 'header-blog.php';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
?>
<section class="progress-bar">
    <div class="indicator"></div>
</section>
<section style="background-image: url('../assets/img/posts/1/fokep.jpg');" class="blog-image">
    <div class="main-image-elements">
        <div class="meta">
            <h1>Hogyan egészítheti ki keresetét egy egyetemi hallgató?</h1>
            <div class="description">A 19 éves Robert kivitelező, az egyetemi hallgatók számára elérhető kereset kiegészítésről, virág és marha comb  kiszállításról, futárkodásról. </div>
        </div>

    </div>
    <div class="main-image-bar">
        <div class="views">
            <i class="fas fa-eye"></i> 1999
        </div>
        <div class="arrow">
            <svg x="0px" y="0px" width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;">
                <g>
                    <path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"></path>
                </g>
            </svg>
        </div>
        <div class="shares" onclick="return shareBlock();">
            <i  id="share-button"></i>
            <div class="qjob-share-button">
                <div class="share_layout"></div>
                <div class="share-window">
                    <!--не забывать выставить ссылки на сайт-->
                    <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=<?=$actual_link?>" target="_blank" rel="noopener" aria-label="Facebook">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium">
                            Facebook
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                            </div>
                        </div>
                    </a>
                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=<?=$actual_link?>" target="_blank" rel="noopener" aria-label="Twitter">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium">
                            Twitter
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
                            </div>
                        </div>
                    </a>
                    <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$actual_link?>&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--medium">
                            LinkedIn
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z"/></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="blog-text">
    <div class="blog-text-item">
        <p>Robert utolsó éves egyetemista hallgató ként, a Qjob.hu segítségével teljesít 3-4 futár megbízást naponta, hogy fedezni tudja, kiadásait,mikor a hétvégén kikapcsolodik a barátaival, vagy meglepi barátnőjét.</p>
        <p>Egyetemista ként, hogyan osszam meg az időmet a tanulmányaim és a munkám között, mire figyeljek, ha megrendelővel tárgyalok, és mivel jobb a tömegközlekedés a biciglinél – a szövegben Robert</p>
        <h2>Folyamatos mozgás</h2>
        <p>
            19 éves vagyok, Budapesten születtem,
            Utolsó éves hallgató vagyok a Budapesti Műszaki és Gazdaságtudományi Egyetem Közlekedésmérnöki Karán. Épületgépészetet és eljárásthecknickát tanulok.
        </p>
        <p>
            Gyerekkorom óta érdekelt a gépészet, mechanika, gőzmozdonyok. Diploma megszerzése után szállodákat és vendéglátó egységeket ellátó műszaki cégben tervezek elhelyezkedni, de addig ameddig nincs oklevelem nincs rá lehetőségem, így diákmunka formájában futár szolgálatot biztosítok.
        </p>
        <p>
            Nem tudok egy helyen ülni, ezért választottam ezt a munkát. Folyamatos mozgásban vagy, látod a várost, az emberek intézik az életüket, változik az időjárás,a nappal estébe fordul, esik, havazik, élvezem a szüntelen változást.
        </p>
        <p>
            <img src="../assets/img/posts/1/1.jpg" alt="Hogyan egészítheti ki keresetét egy egyetemi hallgató?">
        </p>
        <h2>Rugalmas munkabeosztás</h2>
        <p>
            14-15 éves koromban kezdtem el dolgozni futárként egy fotós szaküzletben. Műszaki termékeket és előhívott képeket szállítottam ki a megrendelőkhöz. Később egy építész tervező iroda hivatalos dokumentációit szállítottam ki, de ez csak nyári munka volt, mivel teljesmunkaidőben alkalmaztak, és ezt nem tudtam összehangolni tanulmányaimmal.
        </p>
        <p>
            Beosztás szempontjából sokkal rugalmasabb lehetőséget kerestem, hogy összeegyeztethessem teendőimmel és tanulmányaimmal, ezért regisztráltam a Qjob.hu honlapon. Itt a szabadidőmben dolgozhatok és azokon a napokon amikor nekem jó. Szerintem ez a lehető legjobb honlap, ha valaki kiszeretné egészíteni a bevételeit, úgy, hogy az nem megy az elfoglaltságai rovására.
        </p>
        <h2>
            Zsebpénz kiegészítés
        </h2>
        <p>
            Szerettem volna önállóan bevételi forrásra szert tenni, hogy magamra költhessek. Fiatal vagyok, többet szeretnék kihozni az életemből, ugyanakkor megértem, hogy a családom lehetőségei is végesek. Szerettem volna a hétvégi kikapcsolódásokra, kirándulásokra a barátaimmal, pénzt félretenni, hogy többet engedhessek meg magamnak.
        </p>
        <p>
            Például tavaly a Karácsonyt megelöző időszakban, annyi megrendelést kaptam és teljesítettem, hogy minden héten volt lehetőségem barátnőmet elvinni étterembe.
        </p>
        <blockquote>
            <p>
                Persze most nem tudok annyi megrendelést vállalni elfoglaltságaim miatt, de mozizásra, kávéházakra, muzeúmokra így is elegendő.
            </p>
        </blockquote>
        <p>
            Álltalában az utolsó óráimon, a qjob.hu felületén olyan megrendeléseket keresek, amelyek közel vannak az egyetem épületéhez. Így indul a munkanapom.
        </p>
        <p>
            Utánna még egypár megrendelést elvállalok a város kölönböző pontjain. Igyekszek ugy kialakítani az útvonalat, hogy az utolsó megrendelést a lakhelyemhez közel tudjam befejezni.
        </p>
        <p>
            Átlagosan napi 3 megrendelést tudok, így teljesíteni. Szombaton, hogy ne unatkozzak otthon, szintén vállalok megrendeléseket, a nap első felében. Délutánra sikerül is teljesítenem a megrendeléseket, ami után szabad a hétvégém és egy kis pénzt is kerestem. Win-win
        </p>
        <img src="../assets/img/posts/1/2.jpg" alt="Előzékenység és pontosság">
        <h2>
            Előzékenység és pontosság
        </h2>
        <p>
            A legfontosabb – előzékeny kommunikáció a megrendelőkkel. Akárhogy is nézzük a megrendeléseik idejére a beosztottjuk vagyok, ezért fontos a pontosság. Maximálisan odafigyelek az álltalam szálított tárgyakra, nehogy megsérüjenek, megkarcolódjanak, meggyűrődjenek, mivel megértem azt, hogy én is hasonló odafigyelést igényelnék a kivitelezőtől, egy ilyen feladat teljesítése során.
        </p>
        <p>
            Igyekszek udvariasan kommunikálni a megrendelőkkel. Előfordul, hogy nehéz kiszámítani mikor érek oda a hozzájuk, ha a város egyik részéből a másikba kell eljutni. Törekszek az időmet megfelelően beosztani, de előfordul, hogy a közlekedés miatt ez nem sikerül. Ilyenkor nagyon fontos az előzékenység és udvariasság.
        </p>
        <img src="../assets/img/posts/1/3.jpg">
        <h2>
            Érdekes megrendelések
        </h2>
        <p>
            Álltalában a városban tömegközlekedéssel mozgok és diákbérletet használok, amelynek ára 3.450 Ft.
        </p>
        <p>
            Amikor elkezdtem futárkodni, már nem is emlékszem miért, a belvárosban voltam biciglivel és elvállaltam egy megbízást, amit Budára kellett szállítani 2. vagy 3. kerületbe. Mivel forróság volt, forgalmi dugók és az ember nyáron csupa izzadság, plusz több energiát vesz igényben a dombos kerületekben való tekerés, arra jutottam, hogy többet nem fogom használni a biciglit.
        </p>
        <p>
            Előfordul, hogy Budapesthez közeli városokban veszek fel megrendelést, hogy megnézzek valamilyen új helyet. Volt hogy Budapestről kellett Vácra szállítani egy tortát, de a vasutállomástól még busszal kellett a pontos címre menni. Teljesen rendben volt.
        </p>
        <p>
            <img src="../assets/img/posts/1/4.jpg">
        </p>
        <p>
            A Qjob.hu érdekes megrendeléssekkel lehet találkozni. Szerintem a torta szállítás egy közölük. Jó érzés valakinek a különleges napjának, ha csak egy kicsit is, de részese lenni.
        </p>
        <blockquote class="cols_right">
            <p>
                Volt olyan is, hogy virágcsokrot kellett szállítanom egy virágboltból. Annyira szimpatikus lett a kiskereskedés, hogy azóta is ott vásárolok.
            </p>
        </blockquote>
        <p>
            Egyszer az is megtörtént, hogy egyedi ajándéktárgyakat gyártó cégtől kellet elszállítani fém kitűzöket, egy kávéházba.
        </p>
        <p>
            <img src="../assets/img/posts/1/5.jpg">
        </p>

        <p>
            A hétvége után láttam egy facebook csoportban, amire felvoltam iratkozva, hogy a profilképet az álltalam szállított  kitüzőkre váltosztatták. Utánna olvasva kiderült, egy jótékonysági fesztiválon osztoggaták őket a résztvevőknek. Jó érzés volt hozzájárulni a rendezvényhez, még ugy is, hogy nem tudtam róla
        </p>
        <p>
            Volt példa „furcsa” megrendekésre is. Egyszer egy kézműves hentesárút értékesítő boltbol kellet kiszállítani egy egész marhacombot, aminek a patája is megvolt. Persze be volt csomagolva de, a jó értelemben furcsa volt a metróban szállítani egy dobozt, amiből kilógott a pata. A következő alkalommal pedig erőteljes illatú sajtott szállítottam ebből a boltból. Vicces volt a metrón az utasok arcát nézzni, ahogy keresték az illat forrását.
        </p>




    <!-- <img src="assets/img/posts/1/first.png" alt="Как студенту зарабатывать на кино и кафешки">

        <div class="citation">
            <h2>Хотелось хотя бы копеечку получать, чтобы после учёбы купить себе какую-нибудь вкусняшку, с друзьями поехать гулять</h2>
        </div>
-->
        <!--<div class="fotorama" data-width="100%" data-ratio="800/600">
            <img src="https://s.fotorama.io/1.jpg">
            <img src="https://s.fotorama.io/2.jpg">
        </div>
         <div class="citation cols_right">
            <h3>Хотелось хотя бы копеечку получать, чтобы после учёбы купить себе какую-нибудь вкусняшку, с друзьями поехать гулять</h3>
        </div>
        -->

    </div>
    <div class="customer-avatar">
        <div class="avatar">
            <img src="../assets/img/posts/1/get.jpg" alt="">
            <a href="#" class="name">Robert</a>
            <span class="paragraph">
                A Qjob.hu oldalon<br/>
                2017 óta
        </span>
        </div>

    </div>
</section>
<section class="social_links" style="display: none;">
    <img src="../assets/img/buttons/twiter.png" alt="">
    <img src="../assets/img/buttons/facebook.png" alt="">
</section>
<section class="related-posts">
    <h2>Похожие записи</h2>
    <div class="related-posts-list">
        <?php
        $array = [
            ['name'=>'10 глупых вопросов про звукоизоляцию','image'=>'../assets/img/posts/related/1.png','date'=>'12 июля', "video"=> false],
            ['name'=>'О чем молчат фрилансеры','image'=>'../assets/img/posts/related/2.png','date'=>'12 июля',"video"=> true],
            ['name'=>'Самые необычные задания. Выпуск 43','image'=>'../assets/img/posts/related/3.png','date'=>'12 июля','video'=> false],
        ];

        foreach ($array as $item){
            ?>
            <div class="item">
                <div class="image ">
                    <img src="<?=$item['image']?>" alt="">
                    <?php if($item['video']){ ?>
                        <div class="is-video"></div>
                    <?php } ?>
                </div>
                <a href="#" class="item-title">
                    <h3><?=$item['name']?></h3>
                </a>
                <p class="paragraph">
                    <?=$item['date']?>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<?php
include 'blog-footer.php';
?>

