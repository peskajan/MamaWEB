<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/title-icon.png">

        <title>Besedy pro rodiče | Katka Pešková | Psychoterapeut | Speciální pedadog | Slaný a okolí</title>

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

            <h2 class="page-heading">Besedy pro rodiče</h2>

            <p class="lead">
                Zajímá Vás problematika určitého vývojového období dítěte? Chcete se více dozvědět o výchově dětí? 
                Řešíte aktuálně se svými dětmi nějaké problémy v chování doma či ve škole? Chcete se dozvědět jaké jsou další možnosti jejich řešení? 
                Chcete znát názor odborníka, ale i dalších rodičů, kteří řeší podobné věci?
            </p>
            
            <h3 class="featurette-heading">Termíny a témata besed</h3>
            <div class="panel-group" id="accordion" data-bind="foreach: beseds">
                <div class="panel panel-default" id="panel2">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-bind="attr: {'data-target': '#collapse' + $index() }" data-toggle="collapse" data-parent="#accordion">
                                <span class="label" data-bind="text: date, css: $parent.getLabelStatus(date)"></span>
                                <span data-bind="text: title"></span> 
                            </a>
                        </h4>

                    </div>
                    <div class="panel-collapse collapse" data-bind="attr: {id: 'collapse' + $index()}, css: $parent.getCollapsableStatus(date)">
                        <div class="panel-body" data-bind="html: description">
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <p class="afterlead margin-top-space">
                        Všechny besedy začínají v 17:00 na adrese: Slaný, Wilsonova 597.
                    </p>
                    <table class="afterlead">
                        <tr><th>Ceník</th></tr>
                        <tr><td>za besedu</td><td>70 Kč</td></tr>
                        <tr><td colspan="2">při účasti na 2 a více besedách je cena 50 Kč za besedu</td></tr>
                    </table>
                    <a class="btn btn-contactme btn-primary" href="/kontakty/">Máte zájem? Kontaktujte mě!</a>
                </div>
                <div class="col-lg-5">
                    <img class="example-image-link parallelogram" src="/images/gallery/beseda.jpg" alt="Besedy pro rodiče, výchova dětí, chování dětí doma a ve škole"/>
                </div>
            </div>

            <p class="afterlead">                 
                Jsou určeny všem rodičům, kteří se chtějí dozvědět více o možnostech výchovného přístupu k dětem. Také těm, kteří aktuálně řeší se svými dětmi nějaké problémy a chtějí vědět jaké jsou další možnosti jejich řešení, zajímá je názor odborníka, ale i dalších rodičů, kteří řeší podobné věci.
Každé setkání je věnováno určitému tématu ze života rodiny s dětmi (domácí příprava na školu, odměny a tresty ve výchově, dítě v období prvního vzdoru, puberta, podpora mluvního projevu dětí, děti s poruchou učení, nevhodné chování dětí, usínání, jídlo ...). Rodiče si mohou sdělit své vlastní zkušenosti a seznámit se s možnými výchovnými postupy. Setkání probíhají v dohodnutých termínech 1 x za měsíc v odpoledních hodinách, délka setkání je 1-2 hod.
            </p>
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
