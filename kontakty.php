<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/title-icon.png">

        <title>Kontakty | Katka Pešková | Psychoterapeut | Speciální pedadog | Slaný a okolí</title>

        <!-- Bootstrap core CSS -->
        <link href="/js/libs/twitter-bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/css/lightbox.css" rel="stylesheet"/>
        <link href="/css/main.css" rel="stylesheet">
        <script src="/js/libs/jquery/jquery.js"></script>
        <script src="/js/libs/modernizr/modernizr.min.js" rel="stylesheet"></script>
        <script src="/js/libs/twitter-bootstrap/js/bootstrap.js"></script>
        <script src="/js/libs/holder.js"></script>
        <script src="/js/libs/lightbox-2.6.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/contact.js" rel="stylesheet"></script>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <?php
        include "header.php";
        ?>

        <div id="content" class="main_content container">
            <h2 class="page-heading">Kontakty</h2>
            
            <p class="lead bold">Na sezení u mě je možné čerpat příspěvek od 
                <a href="https://dusevnizdravi.vzp.cz/informace-o-prispevku/" target="_blank">Všeobecné zdravotní pojišťovny</a>, 
                <a href="https://www.cpzp.cz/preventivni-program/64" target="_blank">České průmyslové zdravotní pojišťovny</a> a 
                <a href="https://www.zpmvcr.cz/pojistenci/bonusy-na-prevenci/program-podpory-dusevniho-zdravi" target="_blank">Zdravotní pojišťovny ministerstva vnitra</a> (pokud jste jejich pojištěnci)

                <a href="https://dusevnizdravi.vzp.cz/informace-o-prispevku/" target="_blank"><img title="VZP příspěvek" class="banner" src="/images/banner-vzp.png" alt="VZP příspěvek"/></a>
            </p>
            </br>
            <p class="lead">V případě, že máte zájem o mé služby a chtěli byste si domluvit termín nebo máte jakýkoliv dotaz, neváhejte mě kontaktovat buď přímo:</p>
            <div class="row featurette">

                <div class="col-md-6">
                    <table class="afterlead">
                        <tr><td>PhDr. Kateřina Pešková</td></tr>
                        <tr><td><a title="Psychoterapeut, Speciální pedadog - Katka Pešková" href="tel:+420 776 134 539" target="_top">
                                    <img class="contact-icon" src="/images/phone.png" alt="telefon"/>+420 776 134 539</a>
                            </td></tr>
                        <tr><td><a title="Psychoterapeut, Speciální pedadog - Katka Pešková" href="mailto:katka.peskova@post.cz">
                                    <img class="contact-icon" src="/images/mail.png" alt="email"/>katka.peskova@post.cz</a>
                            </td></tr>
                        <tr><td>Konzultace probíhají na adrese: Slaný, Wilsonova 597
                            </td></tr>
                    </table>

                    <p class="lead">nebo pomocí kontaktního formuláře:</p>
                    <div id="contact-form">
                        <?php
                        //init variables
                        $returned_data = array();
                        $isReturn = false;

                        if (isset($_SESSION['cf_returndata'])) {
                            $returned_data = $_SESSION['cf_returndata'];
                            $isReturn = true;
                        }
                        ?>
                        <ul id="errors" class="<?php echo ($isReturn && !$returned_data['form_ok']) ? 'visible' : ''; ?>">
                            <li id="info">Objevily se potíže při odesílání Vašeho dotazu:</li>
                            <?php
                            if (isset($returned_data['errors']) && count($returned_data['errors']) > 0) :
                                foreach ($returned_data['errors'] as $error) :
                                    ?>
                                    <li><?php echo $error ?></li>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </ul>
                        <p id="success" class="<?php echo ($isReturn && $returned_data['form_ok']) ? 'visible' : ''; ?>">Vaše zpráva byla odeslána, děkuji. Ozvu se Vám hned, jak to bude možné.</p>
                        <form method="post" action="/process-contact/">
                            <label for="name">Jméno: <span class="required">*</span></label>
                            <input type="text" id="name" name="name" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['name'] : '' ?>" placeholder="Vaše jméno a příjmení" required />

                            <label for="email">Email: <span class="required">*</span></label>
                            <input type="email" id="email" name="email" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['email'] : '' ?>" required />

                            <label for="telephone">Telefon: </label>
                            <input type="tel" id="telephone" name="telephone" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['telephone'] : '' ?>" />

                            <label for="subject">Předmět: <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['subject'] : '' ?>" required />

                            <label for="message">Zpráva: <span class="required">*</span></label>
                            <textarea id="message" name="message" placeholder="Zadejte Váš dotaz" required><?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['message'] : '' ?></textarea>
                            <p id="req-field-desc"><span class="required">*</span> označuje povinné položky.</p>

                            <input type="submit" value="Odeslat" id="submit-button" class="btn btn-lg btn-primary" >
                            <span id="loading"></span>

                        </form>
                        <?php unset($_SESSION['cf_returndata']); ?>
                    </div>
                </div>
                <div id="map" class="col-md-6">

                </div>
            </div>


            <script>
                function initMap() {
                    var point = {lng: 14.082603, lat: 50.230324};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: point
                    });
                    var marker = new google.maps.Marker({
                        position: point,
                        map: map
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAByOJUuFncjGp54vQkMpR9I_X0ZUC42Cw&callback=initMap">
            </script>
        </div>
    </body>
</html>
