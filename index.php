<?php include 'includes/_header_meta.php'; ?>
<?php include 'includes/_header_js_and_css.php'; ?>

    <body>

        <div id="fb-root"></div>
        <div id="logo">
            <img src="css/title.png" alt="Logo naszej firmy"/>
        </div>
        <div id="content">

            <a class="back" href=""></a>


            <div id="menuWrapper" class="menuWrapper bg1">
                <ul class="menu" id="menu">
                    <li class="bg1" style="background-position:0 0;">
                        <a id="bg1" href="#">O Firmie</a>
                        <ul class="sub1" style="background-position:0 0;">
                            <li><a href="podstrony/kim_jestesmy.php" class="fancy">Kim jesteśmy?</a></li>
                            <li><a href="podstrony/co_nas_wyroznia.php" class="fancy">Co nas wyróżnia?</a></li>
                        </ul>
                    </li>
                    <li class="bg1" style="background-position:-266px 0px;">
                        <a id="bg2" href="#">Usługi</a>
                        <ul class="sub2" style="background-position:-266px 0;">
                            <li><a href="podstrony/nasza_oferta.php" class="fancy">Nasza oferta</a></li>
                            <li><a href="podstrony/klienci.php" class="fancy">Zadowoleni klienci</a></li>
                        </ul>
                    </li>
                    <li class="last bg1" style="background-position:-532px 0px;">
                        <a id="bg3" href="#">Kontakt</a>
                        <ul class="sub3" style="background-position:-266px 0;">
                            <li><a href="podstrony/kontakt.php" class="fancy">Kontakt</a></li>
                            <li><a href="podstrony/znajdz_nas.php" class="fancy">Znajdź nas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer">Copyright © 2010-<?php echo date("Y"); ?> <a href="mailto:piotr@deluxe-soft.com">Deluxe-Soft</a>. Wszelkie prawa zastrzeżone. 
        </div>
        <center>
            <g:plusone size="small" annotation="inline" width="100px"></g:plusone>

            <div class="fb-like" data-href="http://www.facebook.com/pages/Deluxe-Soft/210545042304524" data-send="false" data-layout="box_count" data-show-faces="false" data-action="recommend"></div>

        </center>

<?php include 'includes/_footer.php'; ?>