<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/title-icon.png">

        <title>Sebezkušenostní semináře | Katka Pešková | Psychoterapeut | Speciální pedadog | Slaný a okolí</title>

        <!-- Bootstrap core CSS -->
        <link href="/js/libs/twitter-bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/js/libs/jqueryui/jquery-ui.css" rel="stylesheet"> 
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

            <h2 class="page-heading">Sebezkušenostní semináře</h2>
            <ul class="lead">
                <li>setkání v malé skupině lidí (do 10 účastníků), kteří si kladou podobné otázky jako vy</li>
                <li>hledání odpovědí prostřednictvím tvořivých činností 
                    (např. práce se sadou „Projektivních koláží“ Miroslava Huptycha, práce s keramickou hlínou apod.)
                    a sdílením vlastního pohledu a zkušeností </li>
                <li>cílem setkání je váš vlastní prožitek a společné nalézání odpovědí, nepotřebujete  výtvarné schopnosti a zkušenosti </li>
                <li>přihlásit se můžete libovolně na jednotlivá témata, nejpozději 2 dny před konáním setkání.</li>
                <li>je také možné přihlásit se na celý cyklus čtvrtečních setkání (4 x 3 hodiny, 900 Kč)</li>
            </ul>

            <h3 class="featurette-heading">Termíny a témata seminářů</h3>
            
            <div class="panel-group" id="accordion" data-bind="foreach: seminars">
                <div class="panel panel-default" id="panel2">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-bind="attr: {'data-target': '#collapse' + $index() }" data-toggle="collapse" data-parent="#accordion">
                                <span class="label" data-bind="text: date, css: $parent.getLabelStatus(date)"></span>
                                <span class="label" data-bind="text: time, css: $parent.getLabelStatus(date)"></span> 
                                <span data-bind="text: title"></span> 
                                <span class="badge-price badge" data-bind="text: prize"></span>
                            </a>
                        </h4>

                    </div>
                    <div class="panel-collapse collapse" data-bind="attr: {id: 'collapse' + $index()}, css: $parent.getCollapsableStatus(date)">
                        <div class="panel-body" data-bind="html: description">
                        </div>
                    </div>
                </div>                
            </div>
            
            </br>
            <div class="row">
                <div class="col-lg-9">
                    <p class="afterlead margin-top-space">
                        Setkání proběhnou vždy v uvedeném čase na adrese - Slaný, Wilsonova 597
                    </p>
                    <a class="btn btn-contactme btn-primary" href="/kontakty/">Máte zájem? Kontaktujte mě!</a>
                    <h3 class="featurette-heading">Proč skupina</h3>
                    <ul class="afterlead">
                        <li>lidé s podobnými potřebami si mohou poskytovat vzájemnou podporu</li>
                        <li>skupina poskytuje vhodné zázemí pro sociální učení, pomáhá při uvědomění si skrytých zdrojů a schopností</li>
                        <li>členové skupiny si mohou v bezpečném prostředí vyzkoušet nové způsoby chování a jednání</li>
                        <li>pomocí zpětné vazby od ostatních mohou lépe porozumět svému projevu a tomu, jak působí na druhé</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <img class="example-image-link parallelogram" src="/images/gallery/sebezkusenostni.jpg" alt="Sebezkušenostní semináře, skupinová terapie, pro ženy, arteterapie"/>
                </div>
            </div>
            
            
            <h3 class="featurette-heading">Pravidla členství ve skupině</h3>
            <ul class="afterlead">
                <li>pravidlo mlčenlivosti a důvěrnosti: to, o čem se mluví a co se dozvím na skupině je důvěrné, 
                    mimo skupinu o tom nemluví členové, ani vedoucí skupiny</li>
                <li>pravidlo otevřenosti a svobody: ve skupině mohu otevřeně vyjadřovat své názory a pocity, svobodně se projevuji formou, 
                    která mi vyhovuje, ale neomezuje ostatní. Nemůžu-li něco hned otevřeně sdělit, nebo na něco upřímně odpovědět, 
                    mám právo říct „stop“ a nemluvit o tom. Mám právo nevědět – nikdo neví všechno. Když řeknu, že „nevím“, 
                    otevírám tím možnost, aby mi někdo pomohl porozumět.</li>
                <li>pravidlo zodpovědnosti k sobě i druhým: součástí je moje pravidelná a včasná docházka a vzájemné naslouchání. 
                    Druhé nekritizuji, ale mluvím o tom, co se mnou jejich chování dělá, jak se cítím</li>
            </ul>
        </div>

        <?php
        include "./sluzby-dialog.php";
        ?>
        
        <script src="/js/libs/jquery/jquery.js"></script>
        <script src="/js/libs/twitter-bootstrap/js/bootstrap.js"></script>
        <script src="/js/libs/jqueryui/js/jquery-ui.js"></script>
        <script src="/js/libs/holder.js"></script>
        <script src="/js/libs/lightbox-2.6.min.js"></script>
        <script src="/js/libs/knockout-3.4.0.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/services.js"></script>
        <script src="/js/seminars.js"></script>
    </body>
</html>
