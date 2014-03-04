<!DOCTYPE html>
<html>
    <head>
        <meta charset="CP1250">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/title-icon.png">

        <title>Viz�istka | Jana Budkov� | L��en� | Praha, Slan� a okol� | Praha, Slan� a okol�</title>

        <!-- Bootstrap core CSS -->
        <link href="/js/libs/twitter-bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/css/lightbox.css" rel="stylesheet"/>
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <?php
        include "header.php";
        ?>

        <div id="content" class="main_content container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Hled�te vhodn� d�rek?</h1>
                                <p>Darujte Va�im bl�zk�m pouk�zku na viz�istick� slu�by, kurz l��en�, kosmetick� p��pravky a jin�.</p>
                                <p><a class="btn btn-lg btn-primary" title="D�rky, d�rkov� bal��ky, d�rkov� pouk�zky" href="/darky/" role="button">V�ce informac�  &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>AKCE: Plesov� l��en�</h1>
                                <p>Dejte se se kamar�dkami dohromady a nechte se spole�n� nal��it nebo u�esat za v�hodn�j�� cenu!!</p>
                                <p><a class="btn btn-lg btn-primary" title="Ve�ern� l��en�, plesov� l��en�" href="/vecerni-liceni/" role="button">V�ce informac�  &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Svatebn� l��en�</h1>
                                <p>Voln� zimn� term�ny svatebn�ho l��en� a d�le tak� voln� term�ny na rok 2014!!
                                </p>
                                <p><a class="btn btn-lg btn-primary" title="Svatebn� l��en�, l��en� svateb�an�" href="/svatebni-liceni/" role="button">V�ce informac�  &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /.carousel -->

            <div class="container highlights">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <a class="no-decor" title="Kosmetick� poradenstv�, anal�za pleti, p��e o ple� - v�e zdarma" href="/kosmeticke-poradenstvi/">
                            <img class="img-circle param-header" src="/images/gallery/poradenstvi2.jpg" alt="Kosmetick� poradenstv�">
                            <h2>Kosmetick� poradenstv�</h2>
                        </a>
                        <p>M�te probl�my s plet�? Chcete n�co zm�nit a nev�te jak na to? Nechte si ode m� poradit a objednejte se na kosmetick� poradenstv� zcela ZDARMA!</p>
                        <p><a title="Kosmetick� poradenstv�, anal�za pleti, p��e o ple� - v�e zdarma" class="btn btn-default" href="/kosmeticke-poradenstvi/" role="button">V�ce informac� &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <a class="no-decor" title="Svatebn� l��en�, ve�ern� l��en�, foto make-up a dal��" href="/sluzby/">
                            <img class="img-circle param-header" src="/images/gallery/liceni.jpg" alt="Viz�istick� slu�by">
                            <h2>Viz�istick� slu�by</h2>
                        </a>
                        <p>Bu�te kr�sn� p�i ka�d� p��le�itosti! Svatebn� a slavnostn� l��en�, foto make up a dal��</p>
                        <p><a title="Svatebn� l��en�, ve�ern� l��en�, foto make-up a dal��" class="btn btn-default" href="/sluzby/" role="button">V�ce informac� &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <a class="no-decor" title="Kurzy l��en� - individu�ln� kurzy, skupinov� kurzy, kurz aplikace tu�ky na o�i" href="/kurzy-liceni/">
                            <img class="img-circle param-header" src="/images/gallery/kurz5-nahled.jpg" alt="Kurzy l��en�">
                            <h2>Kurzy l��en�</h2>
                        </a>
                        <p>Kurzy pro za��te�n�ky i pokro�il�. Zjist�te, jak spr�vn� p�ipravit ple� pro l��en�, jak vybrat vhodn� typ make-upu, jak� barvy V�s slu��, jak� pou��vat l��idla, jak pracovat se �t�tci, atd.</p>
                        <p><a title="Kurzy l��en� - individu�ln� kurzy, skupinov� kurzy, kurz aplikace tu�ky na o�i" class="btn btn-default" href="/kurzy-liceni/" role="button">V�ce informac� &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>

        <script src="/js/libs/jquery/jquery.js"></script>
        <script src="/js/libs/twitter-bootstrap/js/bootstrap.js"></script>
        <script src="/js/libs/holder.js"></script>
        <script src="/js/libs/lightbox-2.6.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
